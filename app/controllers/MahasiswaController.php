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
}
