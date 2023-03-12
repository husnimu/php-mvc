<?php

use App\Core\Controller;

// namespace App\Controllers;

class HomeController extends Controller
{
  public function index()
  {
    // $this->view('layouts/header', [
    //   'title' => 'Home 123'
    // ]);
    $user = $this->model('User');
    $this->view('home/index', [
      'title' => 'Home 123',
      'user' => $user
    ]);
    // $this->view('layouts/footer');
  }
}
