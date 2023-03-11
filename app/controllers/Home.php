<?php

use App\Core\Controller;

// namespace App\Controllers;

class Home extends Controller
{
  public function index()
  {
    // $this->view('layouts/header', [
    //   'title' => 'Home 123'
    // ]);
    $this->view('home/index', [
      'title' => 'Home 123'
    ]);
    // $this->view('layouts/footer');
  }
}
