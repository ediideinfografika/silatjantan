<?php

namespace Drupal\oauth2_server\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Url;
use Drupal\Core\Site\Settings;
use Drupal\Component\Utility\Crypt;
use OAuth2\HttpFoundationBridge\Request as BridgeRequest;
use OAuth2\HttpFoundationBridge\Response as BridgeResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\oauth2_server\OAuth2StorageInterface;
use Drupal\oauth2_server\ScopeUtility;
use Drupal\oauth2_server\Utility;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class OAuth2 Controller.
 *
 * @package Drupal\oauth2_server\Controller
 */
class OAuth2Controller extends ControllerBase {

  /**
   * The OAuth2Storage.
   *
   * @var \Drupal\oauth2_server\OAuth2StorageInterface
   */
  protected $storage;

  /**
   * Constructs a new \Drupal\oauth2_server\Controller\OAuth2Controller object.
   *
   * @param \Drupal\oauth2_server\OAuth2StorageInterface $oauth2_storage
   *   The OAuth2 storage object.
   */
  public function __construct(OAuth2StorageInterface $oauth2_storage) {
    $this->storage = $oauth2_storage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('oauth2_server.storage')
    );
  }

  /**
   * Authorize.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return array|\OAuth2\HttpFoundationBridge\Response|\Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse
   *   A form array or a response object.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function authorize(RouteMatchInterface $route_match, Request $request) {
    $this->moduleHandler()->invokeAll('oauth2_server_pre_authorize');

    // Workaround https://www.drupal.org/project/oauth2_server/issues/3049250
    // Create a duplicate request with the parameters removed, so that the
    // object can survive being serialized.
    $duplicated_request = $request->duplicate(NULL, NULL, []);
    $bridgeRequest = BridgeRequest::createFromRequest($duplicated_request);

    if ($this->currentUser()->isAnonymous()) {
      // A user may be redirected to the authorize request a second time
      // but without parameters. For example when a user has to register
      // rather than login. In such a case we have already stored a valid
      // request and don't want to overwrite it with an invalid request.
      // In case a user visits the authorize link directly this changes nothing.
      if ($bridgeRequest->get('client_id')) {
        $_SESSION['oauth2_server_authorize'] = $bridgeRequest;
      }
      $url = new Url('user.login', [], ['query' => ['destination' => Url::fromRoute('oauth2_server.authorize')->toString()]]);
      $url->setAbsolute(TRUE);
      return new RedirectResponse($url->toString());
    }

    // A login happened: Create the request with parameters from the session.
    if (!empty($_SESSION['oauth2_server_authorize'])) {
      $bridgeRequest = $_SESSION['oauth2_server_authorize'];
    }

    $client = FALSE;
    if ($bridgeRequest->get('client_id')) {
      /** @var \Drupal\oauth2_server\ClientInterface[] $clients */
      $clients = $this->entityTypeManager()->getStorage('oauth2_server_client')
        ->loadByProperties([
          'client_id' => $bridgeRequest->get('client_id'),
        ]);
      if ($clients) {
        $client = reset($clients);
      }
    }
    if (!$client) {
      return new JsonResponse(
        ['error' => 'Client could not be found.'],
        JsonResponse::HTTP_NOT_FOUND
      );
    }

    // Initialize the server.
    $oauth2_server = Utility::startServer($client->getServer(), $this->storage);

    // Automatic authorization is enabled for this client. Finish authorization.
    // handleAuthorizeRequest() will call validateAuthorizeRequest().
    $response = new BridgeResponse();
    if ($client->automatic_authorization) {
      unset($_SESSION['oauth2_server_authorize']);
      $oauth2_server
        ->handleAuthorizeRequest($bridgeRequest, $response, TRUE, $this->currentUser()->id());
      return $response;
    }
    else {
      // Validate the request.
      if (!$oauth2_server->validateAuthorizeRequest($bridgeRequest, $response)) {
        // Clear the parameters saved in the session to avoid reusing them when
        // doing an other request while logged in.
        unset($_SESSION['oauth2_server_authorize']);
        return $response;
      }

      // Determine the scope for this request.
      $scope_util = new ScopeUtility($client->getServer());
      if (!$scope = $scope_util->getScopeFromRequest($bridgeRequest)) {
        $scope = $scope_util->getDefaultScope();
      }
      // Convert the scope string to a set of entities.
      $scope_names = explode(' ', $scope);
      $scopes = $this->entityTypeManager()->getStorage('oauth2_server_scope')
        ->loadByProperties([
          'server_id' => $client->getServer()->id(),
          'scope_id' => $scope_names,
        ]);

      // Show the authorize form.
      return $this->formBuilder()->getForm(
        'Drupal\oauth2_server\Form\AuthorizeForm',
        [
          'client' => $client,
          'scopes' => $scopes,
        ]
      );
    }
  }

  /**
   * Token.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \OAuth2\HttpFoundationBridge\Response|\Symfony\Component\HttpFoundation\JsonResponse
   *   A response object.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function token(RouteMatchInterface $route_match, Request $request) {
    $bridgeRequest = BridgeRequest::createFromRequest($request);
    $client_credentials = Utility::getClientCredentials($bridgeRequest);

    // Get the client and use it to load the server and initialize the server.
    $client = FALSE;
    if ($client_credentials) {
      /** @var \Drupal\oauth2_server\ClientInterface[] $clients */
      $clients = $this->entityTypeManager()->getStorage('oauth2_server_client')
        ->loadByProperties(['client_id' => $client_credentials['client_id']]);
      if ($clients) {
        $client = reset($clients);
      }
    }
    if (!$client) {
      return new JsonResponse(
        ['error' => 'Client could not be found.'],
        JsonResponse::HTTP_NOT_FOUND
      );
    }

    $response = new BridgeResponse();
    $oauth2_server = Utility::startServer($client->getServer(), $this->storage);
    $oauth2_server->handleTokenRequest($bridgeRequest, $response);
    return $response;
  }

  /**
   * Tokens.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \OAuth2\HttpFoundationBridge\Response|\Symfony\Component\HttpFoundation\JsonResponse
   *   The response object.
   */
  public function tokens(RouteMatchInterface $route_match, Request $request) {
    $token = $route_match->getRawParameter('oauth2_server_token');
    $token = $this->storage->getAccessToken($token);

    // No token found. Stop here.
    if (!$token || $token['expires'] <= time()) {
      return new BridgeResponse([], 404);
    }

    // Return the token, without the server and client_id keys.
    unset($token['server']);
    return new JsonResponse($token);
  }

  /**
   * User info.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \OAuth2\HttpFoundationBridge\Response
   *   The response object.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function userInfo(RouteMatchInterface $route_match, Request $request) {
    $bridgeRequest = BridgeRequest::createFromRequest($request);
    $client_credentials = Utility::getClientCredentials($bridgeRequest);

    // Get the client and use it to load the server and initialize the server.
    $client = FALSE;
    if ($client_credentials) {
      /** @var \Drupal\oauth2_server\ClientInterface[] $clients */
      $clients = $this->entityTypeManager()->getStorage('oauth2_server_client')
        ->loadByProperties(['client_id' => $client_credentials['client_id']]);
      if ($clients) {
        $client = reset($clients);
      }
    }

    $server = NULL;
    if ($client) {
      $server = $client->getServer();
    }

    $response = new BridgeResponse();
    $oauth2_server = Utility::startServer($server, $this->storage);
    $oauth2_server->handleUserInfoRequest($bridgeRequest, $response);
    return $response;
  }

  /**
   * Certificates.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The response object.
   */
  public function certificates(RouteMatchInterface $route_match, Request $request) {
    $keys = Utility::getKeys();
    $certificates = [];
    $certificates[] = $keys['public_key'];
    return new JsonResponse($certificates);
  }

  /**
   * Json Web Token (JWK).
   *
   * Output the public key as a JSON blob in JWK format, for ease of
   * consumption by clients that support it.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The response object.
   *
   * @see https://tools.ietf.org/html/rfc7517
   */
  public function jwk(RouteMatchInterface $route_match, Request $request) {
    $keys = Utility::getKeys();

    $cert = openssl_x509_read($keys['public_key']);
    $publicKey = openssl_get_publickey($cert);
    openssl_x509_free($cert);
    $keyDetails = openssl_pkey_get_details($publicKey);
    openssl_pkey_free($publicKey);
    $jwk['e'] = base64_encode($keyDetails['rsa']['e']);
    $jwk['n'] = base64_encode($keyDetails['rsa']['n']);
    $jwk['mod'] = self::base64urlEncode($keyDetails['rsa']['n']);
    $jwk['exp'] = self::base64urlEncode($keyDetails['rsa']['e']);
    $jwk['x5c'][] = self::base64urlEncode(self::pem2der($keys['public_key']));
    $jwk['kty'] = 'RSA';
    $jwk['use'] = "sig";
    $jwk['alg'] = "RS256";
    $jwk['kid'] = Crypt::hmacbase64(
      \Drupal::state()->get('oauth2_server.next_certificate_id', 0),
      Settings::getHashSalt()
    );

    $response = ["keys" => [$jwk]];
    if (openssl_error_string()) {
      $this->logger->error("Error: @message", [
        "@code" => openssl_error_string(),
      ]);
      throw new HttpException(522, "SSL subsytem failure detected.");
    }

    return new JsonResponse($response, 200);
  }

  /**
   * Generates a token based on $value, the token seed, and the private key.
   *
   * @param string $seed
   *   The per-session token seed.
   * @param string $value
   *   (optional) An additional value to base the token on.
   *
   * @return string
   *   A 43-character URL-safe token for validation, based on the token seed,
   *   the hash salt provided by Settings::getHashSalt(), and the
   *   'drupal_private_key' configuration variable.
   *
   * @see \Drupal\Core\Site\Settings::getHashSalt()
   */
  protected function computeToken($seed, $value = '') {
    return Crypt::hmacBase64($value, $seed . $this->privateKey->get() . Settings::getHashSalt());
  }

  /**
   * Convert a PEM encoded to DER encoded certificate.
   *
   * @param string $pem
   *   The PEM encoded certificate.
   *
   * @return string|bool
   *   The DER encoded certificate or false.
   *
   * @see http://php.net/manual/en/ref.openssl.php#74188
   */
  public static function pem2der($pem) {
    $begin = "CERTIFICATE-----";
    $end = "-----END";
    $pem = substr($pem, strpos($pem, $begin) + strlen($begin));
    $pem = substr($pem, 0, strpos($pem, $end));
    $der = base64_decode($pem);
    return $der;
  }

  /**
   * Base64 URL encoding.
   *
   * @param string $data
   *   The data to be encoded.
   *
   * @return string
   *   The Base64 URL encoded data.
   *
   * @see http://php.net/manual/en/function.base64-encode.php#103849
   */
  public static function base64urlEncode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
  }

}
