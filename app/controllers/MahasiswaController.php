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
      Session::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    } else {
      Session::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    }
  }
}
