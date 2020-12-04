<?php

class Relawan extends Controller{
  public function index()
  {
    if( !isset($_SESSION['nama']) )
    {
      header("Location:" . BASEURL . "/home/index" );
      exit;
    }

    $data['judul'] = 'Daftar Relawan Indonesia';
    $data['rewn'] = $this->model('Relawan_model')->getAllRelawan();
    $this->view('templates/header', $data);
    $this->view('relawan/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    if( !isset($_SESSION['nama']) )
    {
      header("Location:" . BASEURL . "/home/index" );
      exit;
    }

    $data['judul'] = 'Detail Relawan Indonesia';
    $data['rewn'] = $this->model('Relawan_model')->getRelawanById($id);
    $this->view('templates/header', $data);
    $this->view('relawan/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if( $this->model('Relawan_model')->tambahDataRelawan($_POST) > 0 ) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/relawan');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/relawan');
      exit;
    }
  }

  public function hapus($id)
  {
    if( $this->model('Relawan_model')->hapusDataRelawan($id) > 0 ) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/relawan');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/relawan');
      exit;
    }
  }

  public function ubahDataRelawan($data)
  {
    $query = "UPDATE relawan SET
                  nama = :nama,
                  email = :email,
                  alamat = :alamat,
                  kegiatan = :kegiatan,
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

  public function getubah($id)
  {
    if( !isset($_SESSION['nama']) )
    {
      header("Location:" . BASEURL . "/home/index" );
      exit;
    }
    
    $data['judul'] = 'Detail Relawan';
    $data['relawan'] = $this->model('Relawan_model')->getRelawanById($id);
    // var_dump($data['relawan']);
    $this->view('templates/header', $data);
    $this->view('relawan/update', $data);
    $this->view('templates/footer');
  }

  public function ubah()
  {
     if ( $this->model('Relawan_model')->ubahDataRelawan($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/relawan');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/relawan');
    }
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Relawan Indonesia';
    $data['rewn'] = $this->model('Relawan_model')->cariDataRelawan();
    $this->view('templates/header', $data);
    $this->view('relawan/index', $data);
    $this->view('templates/footer');
  }
   
}