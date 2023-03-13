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

  public function model($model)
  {
    // check if model file exists
    if (file_exists('../app/models/' . $model . '.php')) {
      // require model file
      require_once '../app/models/Model.php';
      require_once '../app/models/' . $model . '.php';
      // instantiate model
      return new $model;
    } else {
      // model does not exist
      die('Model does not exist');
    }
  }
}
