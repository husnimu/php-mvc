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
}

// https://youtu.be/fgk1Mv3wes4?list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx&t=1130