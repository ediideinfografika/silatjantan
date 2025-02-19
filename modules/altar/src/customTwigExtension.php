<?php

namespace Drupal\altar;


/**
 * extend Drupal's Twig_Extension class
 */
class customTwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   * Let Drupal know the name of your extension
   * must be unique name, string
   */
  public function getName() {
    return 'altar.customtwigextension';
  }


  /**
   * {@inheritdoc}
   * Return your custom twig function to Drupal
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('gettutup', [$this, 'gettutup']),
      new \Twig_SimpleFunction('getlapor', [$this, 'getlapor']),
    ];
  }


  /**
   * {@inheritdoc}
   * Return your custom twig filter to Drupal
   */
  public function getFilters() {
    return [
      new \Twig_SimpleFilter('replace_tokens', [$this, 'replace_tokens']),
    ];
  }


  /**
   * Returns $_GET query parameter
   *
   * @param string $name
   *   name of the query parameter
   *
   * @return string
   *   value of the query parameter name
   */
  public function get_url_param($name) {
    return \Drupal::request()->query->get($name);
  }


  /**
   * Replaces available values to entered tokens
   * Also accept HTML text
   *
   * @param string $text
   *   replaceable tokens with/without entered HTML text
   *
   * @return string
   *   replaced token values with/without entered HTML text
   */
  public function replace_tokens($text) {
    return \Drupal::token()->replace($text);
  }
  
	

  
    public function gettutup($id) {
	  
   	$url = "https://silatjantan.dpupr.madiunkab.go.id/rest-tutup/".$id;
            $client = \Drupal::httpClient();    
            $responsex = $client->request('GET', $url);
    $respony = $responsex->getBody();//(array) json_decode($responsex->getBody());		
			
			return $respony;			
			
			
			
  }
  

  public function getlapor() {
	  
    $url = "https://silatjantan.dpupr.madiunkab.go.id/res-dash-lapor";
           $client = \Drupal::httpClient();    
           $responsex = $client->request('GET', $url);
   $respony = $responsex->getBody();//(array) json_decode($responsex->getBody());		
     
     return $respony;			
     
     
     
 }
 
  
  
  

}