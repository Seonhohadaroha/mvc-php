<?php
/* 
  Map URL 
  1 - Controller
  2 - Method
  3 - Parameter
  ejm: product/update/4
*/

class Core 
{
  protected $controller = 'Index';
  protected $method = 'index';
  protected $parameters = [];

  public function __construct() 
  {
    // print_r($this->url());
    $url = $this->url();

    // See if controller exists
    if ( isset($url[0]) ) { 
      if ( file_exists('../app/controllers/' . ucwords($url[0]) . '.php' ) ) {
        $this->controller = ucwords($url[0]) ;

        unset($url[0]);
      }
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    if ( isset($url[1]) ) {
      if ( method_exists( $this->controller, $url[1] ) ) {
        $this->method = $url[1];

        unset($url[1]);
      }
    }

    // echo $this->method;
    $this->parameters[] = $url ? array_values($url) : [];

    call_user_func_array([$this->controller, $this->method], $this->parameters);
  }

  public function url()
  {
    // echo $_GET['url'] . 'method URL';

    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);

      return $url;
    }
  }
}
