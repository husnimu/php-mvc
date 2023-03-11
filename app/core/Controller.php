<?php

namespace App\Core;

class Controller
{

  public function view($view, $data = [])
  {
    // check if view file exists
    if (file_exists('../app/views/' . $view . '.php')) {
      // require view file
      require_once '../app/views/layouts/header.php';
      require_once '../app/views/' . $view . '.php';
      require_once '../app/views/layouts/footer.php';
    } else {
      // view does not exist
      die('View does not exist');
    }
  }
}
