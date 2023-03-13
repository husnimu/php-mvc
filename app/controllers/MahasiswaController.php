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
}
