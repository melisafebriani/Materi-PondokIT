<?php

class Relawan_model {

  private $table = 'relawan';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  //method untuk ngambil data-nya
  public function getAllRelawan()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getRelawanById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $bind = $this->db->bind('id', $id);
    $fetch = $this->db->single();
    return $fetch;
  }

  public function tambahDataRelawan($data)
  {
    $query = "INSERT INTO relawan
                VALUES 
                (NULL, :nama, :email, :alamat, :kegiatan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('kegiatan', $data['kegiatan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataRelawan($id)
  {
    $query = "DELETE FROM relawan WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataRelawan($data)
  {
    $query = "UPDATE relawan SET
                  nama = :nama,
                  email = :email,
                  alamat = :alamat,
                  kegiatan = :kegiatan
              WHERE id = :id";


    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('kegiatan', $data['kegiatan']);
    $this->db->bind('id', $data['id']);
    // var_dump($data['id'] . $data['nama']);

    $this->db->execute();

    return $this->db->rowCount();
    // return 0;
  }

  public function cariDataRelawan()
  {
    $keyword =$_POST['keyword'];
    $query = "SELECT * FROM relawan WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }

}