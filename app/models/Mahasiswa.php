<?php

class Mahasiswa
{

  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=mvc_php';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  private $data = [
    [
      'nama' => 'Rizky 1',
      'nrp' => '123456',
      'email' => 'test@mail.com',
      'jurusan' => 'Teknik Informatika'
    ],
    [
      'nama' => 'Rizky 2',
      'nrp' => '123456',
      'email' => 'test@mail.com',
      'jurusan' => 'Teknik Informatika'
    ],
    [
      'nama' => 'Rizky 3',
      'nrp' => '123456',
      'email' => 'test@mail.com',
      'jurusan' => 'Teknik Informatika'
    ],
  ];

  public function getAll()
  {
    // return $this->data;
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

https://youtu.be/fgk1Mv3wes4?list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx&t=1130