<?php
namespace Drupal\twilio_otp_login\Services;
use Drupal\Core\Database\Connection;
use Drupal\Core\Password\PasswordInterface;
use Drupal\Core\TempStore\PrivateTempStoreFactory;
use \Drupal\Core\Session\SessionManagerInterface;
use \Drupal\Core\Session\AccountInterface;
use Twilio\Rest\Client;
use Twilio\Exceptions\RestException;
use Drupal\twilio_otp_login\Services\LocalStorage;
/**
 * Otp service class.
 */
class Otp {
  /**
   * The database object.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $database;
  
  
  /**
   * The username.
   *
   * @var string
   */
  private $username;
  /**
   * The tempoStorage object.
   *
   * @var \Drupal\Core\TempStore\PrivateTempStoreFactory
   */
  //private $tempStorageFactory;

 /**
   * @var \Drupal\Core\Session\SessionManagerInterface
   */
  //private $sessionManager;
  
/**
   * @var \Drupal\Core\Session\AccountInterface
   */
 // protected $current_user;

  /**
   * @var \Drupal\user\PrivateTempStore
   */

 // protected $store;

  /**
   * Constructor of the class.
   */
  //public function __construct(Connection $connection, PasswordInterface $hasher, PrivateTempStoreFactory $tempStoreFactory,SessionManagerInterface $session_manager, AccountInterface $current_user) {
    public function __construct(Connection $connection, PasswordInterface $hasher) {  
    $this->database           = $connection;
    $this->hasher             = $hasher;
  

  }
  
  /**
   * Generates a new OTP.
   */
  public function generate($username) {
    $this->username = $username;
    $uid = $this->getUserField('uid');


    $callService = \Drupal::service('twilio_otp_login.localStorage');
    $callService->sessionCheck();
    $callService->store->set("uid",$uid);

    
    
    if ($this->exists($uid)) {
      return $this->update($uid);
    }
    return $this->new($uid);
  }

  /**
   * Sends the OTP to user via mobile.
   */
  public function send($otp, $to) {
						  
$url = "https://wapi.ediide.com/send-message";

// Data yang akan dikirim dalam permintaan POST
$data = array(
    'number' => $to,
    'message' => $otp
);

// Konfigurasi opsi cURL
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
    )
);

// Inisialisasi cURL session
$ch = curl_init();
curl_setopt_array($ch, $options);

// Eksekusi cURL dan dapatkan respons
$response = curl_exec($ch);

// Tangani kesalahan jika ada
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Tutup sesi cURL
curl_close($ch);


return true;
      
  }

  /**
   * Checks if the given OTP is valid.
   */
  public function check($uid, $otp) {
    if ($this->exists($uid)) {
      $select = $this->database->select('twilio_otp_login', 'u')
        ->fields('u', ['otp', 'expiration'])
        ->condition('uid', $uid, '=')
        ->execute()
        ->fetchAssoc();
      if ($select['expiration'] >= time() && $this->hasher->check($otp, $select['otp'])) {
        return TRUE;
      }
      return FALSE;
    }
    return FALSE;
  }

  /**
   * Checks if the OTP of a user has expired.
   */
  public function expire($uid) {
    $delete = $this->database->delete('twilio_otp_login')
      ->condition('uid', $uid)
      ->execute();
    return $delete;
  }

 
  /**
   * Returns the remaining expiration time.
   */
  public function getExpirationTime($uid) {
    $unixTime = $this->database->select('twilio_otp_login', 'o')
      ->fields('o', ['expiration'])
      ->condition('uid', $uid, '=')
      ->condition('otp', '', '!=')
      ->execute()
      ->fetchAssoc();
    if ($unixTime) {
      return $unixTime['expiration'];
    }
    return FALSE;
  }

  /**
   * Fetches a user value by given field name.
   */
  private function getUserField($field) {
    $query = $this->database->select('users_field_data', 'u')
      ->fields('u', [$field])
      ->condition('name', $this->username, '=')
      ->execute()
      ->fetchAssoc();
    return $query[$field];
  }

  

  /**
   * Checks if the OTP already exists for a user.
   */
  private function exists($uid) {
    $exists = $this->database->select('twilio_otp_login', 'u')
      ->fields('u')
      ->condition('uid', $uid, '=')
      ->execute()
      ->fetchAssoc();
    return $exists ?? TRUE;
  }

  /**
   * Generates a new OTP.
   */
  private function new($uid) {
    $human_readable_otp = rand(100000, 999999);
    $this->database->insert('twilio_otp_login')->fields([
      'uid' => $uid,
      'otp' => $this->hasher->hash($human_readable_otp),
      'expiration' => strtotime("+5 minutes", time()),
    ])->execute();
    return $human_readable_otp;
  }

  /**
   * Updates the existing OTP.
   */
  private function update($uid) {
    $human_readable_otp = rand(100000, 999999);
    $this->database->update('twilio_otp_login')
      ->fields([
        'otp' => $this->hasher->hash($human_readable_otp),
        'expiration' => strtotime("+5 minutes", time()),
      ])
      ->condition('uid', $uid, '=')
      ->execute();
    return $human_readable_otp;
  }

}
