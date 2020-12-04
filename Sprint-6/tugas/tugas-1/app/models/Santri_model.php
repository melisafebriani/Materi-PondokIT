<?php

class Santri_model {
  private $table = 'santri';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function getAllSantri()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
    // return var_dump($this->db->resultSet());
  }

  public function getSantriById($id)
  {
    $query = $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $bind = $this->db->bind('id', $id);
    $fetch = $this->db->single();
    // return var_dump($this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'));
    // return var_dump($fetch);
    return $fetch;
  }

  public function tambahDataSantri($data)
  {
    $query = "INSERT INTO santri
                VALUES
              (NULL, :nama, :alamat, :telp, :email, :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telp', $data['telp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
    // return 0;
  }

  public function hapusDataSantri($id)
  {
    $query = "DELETE FROM santri WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  
  public function ubahDataSantri($data)
  {
    $query = "UPDATE santri SET
                  nama = :nama,
                  alamat = :alamat,
                  telp = :telp,
                  email = :email,
                  jurusan = :jurusan
              WHERE id = :id";


    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telp', $data['telp']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);
    // var_dump($data['id'] . $data['nama']);

    $this->db->execute();

    return $this->db->rowCount();
    // return 0;
  }


  public function cariDataSantri()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM santri WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet() ;
  }





}