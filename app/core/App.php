<?php

namespace App\Core;

class App
{

  public function __construct()
  {
    // var_dump($_SERVER['REQUEST_URI']);
    $url = $this->parseUrl();
    var_dump($url);
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
        $url = 'home';
      }

      // check if url has a query string
      if (strpos($url, '?') !== false) {
        // explode query string from url
        $url = explode('?', $url);
        // set url to first element of array
        $url = $url[0];
      }
    }

    return $url;
  }
}
