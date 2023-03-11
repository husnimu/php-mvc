<?php

namespace App\Core;

use Error;

class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseUrl();

    if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
      $this->controller = ucfirst($url[0]);
      unset($url[0]);
    }

    // require controller
    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // check if method exists
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // set params to url
    $this->params = $url ? array_values($url) : [];

    // call controller method with params
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseUrl()
  {
    // get request url and remove the '/' from the right
    $url = rtrim($_SERVER['REQUEST_URI'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // check if method is get
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      // check if url is empty
      if (empty($url)) {
        // set url to home
        $url = '/';
      }

      // check if url has a query string
      if (strpos($url, '?') !== false) {
        // explode query string from url
        $url = explode('?', $url);
        // set url to first element of array
        $url = $url[0];
      }
    }

    // trim again to remove trailing slash
    $url = rtrim($url, '/');
    $url = ltrim($url, '/');
    // explode url into array
    $url = explode('/', $url);

    return $url;
  }
}
