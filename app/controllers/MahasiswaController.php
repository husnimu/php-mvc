<?php

use App\Core\Controller;

class MahasiswaController extends Controller
{
  public function index()
  {
    $mahasiswa = $this->model('Mahasiswa');
    $this->view('mahasiswa/index', [
      'title' => 'Mahasiswa',
      'mahasiswa' => $mahasiswa->getAll()
    ]);
  }

  public function show($id)
  {
    $mahasiswa = $this->model('Mahasiswa');
    $this->view('mahasiswa/show', [
      'title' => 'Mahasiswa',
      'mahasiswa' => $mahasiswa->getById($id)
    ]);
  }

  public function create()
  {
    if ($this->model('Mahasiswa')->create($_POST) > 0) {
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    } else {
      var_dump('123');
      die;
    }
  }
}
