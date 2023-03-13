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
}

// https://youtu.be/fgk1Mv3wes4?list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx&t=1130