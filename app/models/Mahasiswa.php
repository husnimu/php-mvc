<?php


class Mahasiswa extends Model
{
  private $table = 'mahasiswa';

  public function getAll()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->get();
  }

  public function getById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->first();
  }

  public function create($data)
  {
    // check if the data is empty
    if (empty($data['nama']) || empty($data['nrp']) || empty($data['email']) || empty($data['jurusan'])) {
      return 0;
    }

    $query = "INSERT INTO $this->table
      VALUES
    (null, :nama, :nrp, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function delete($id)
  {
    $query = "DELETE FROM $this->table WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function edit($data)
  {
    $query = "UPDATE $this->table SET
      nama = :nama,
      nrp = :nrp,
      email = :email,
      jurusan = :jurusan
      WHERE id = :id
    ";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nrp', $data['nrp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function search($keyword)
  {
    $query = "SELECT * FROM $this->table WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->get();
  }
}