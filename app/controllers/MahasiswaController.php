<?php

use App\Core\Controller;

class MahasiswaController extends Controller
{
  public function index()
  {
    $mahasiswa = $this->model('Mahasiswa');
    $this->view('mahasiswa/index', [
      'title' => 'Mahasiswa',
      'mahasiswa' => $mahasiswa->getAll(),
      'keyword' => null
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

  public function delete($id)
  {
    if ($this->model('Mahasiswa')->delete($id) > 0) {
      Session::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    } else {
      Session::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    }
  }

  public function get()
  {
    echo json_encode($this->model('Mahasiswa')->getById($_POST['id']));
  }

  public function edit()
  {
    if ($this->model('Mahasiswa')->edit($_POST) > 0) {
      Session::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    } else {
      Session::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . 'mahasiswa');
      exit;
    }
  }

  public function search()
  {
    $mahasiswa = $this->model('Mahasiswa');
    $this->view('mahasiswa/index', [
      'title' => 'Mahasiswa',
      'mahasiswa' => $mahasiswa->search($_POST['keyword']),
      'keyword' => $_POST['keyword']
    ]);
  }
}