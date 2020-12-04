<?php

class Santri extends Controller {
  public function index()
  {
    $data['judul'] = 'Daftar Santri';
    $data['santri'] = $this->model('Santri_model')->getAllSantri();
    $this->view('templates/header', $data);
    $this->view('santri/index', $data);
    $this->view('templates/footer');
  }


  public function detail($id)
    {
      $data['judul'] = 'Detail Santri';
      $data['santri'] = $this->model('Santri_model')->getSantriById($id); 
      // var_dump($data['santri']);
      $this->view('templates/header', $data);
      $this->view('santri/detail', $data);
      $this->view('templates/footer');
    }

  public function tambah()
  {
    if ( $this->model('Santri_model')->tambahDataSantri($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'warning');
      header('Location: ' . BASEURL . '/santri');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/santri');
    }
  }


  public function hapus($id)
  {
    if ( $this->model('Santri_model')->hapusDataSantri($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'primary');
      header('Location: ' . BASEURL . '/santri');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/santri');
    }
  }


  public function getubah($id)
  {
    $data['judul'] = 'Detail Santri';
    $data['santri'] = $this->model('Santri_model')->getSantriById($id); 
    $this->view('templates/header', $data);
    $this->view('santri/update', $data) ;
    $this->view('templates/footer');
  }


  public function ubah()
  {
     if ( $this->model('Santri_model')->ubahDataSantri($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'dark');
      header('Location: ' . BASEURL . '/santri');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/santri');
    }
  }


  public function cari()
  {
    $data['judul'] = 'Daftar Santri';
    $data['santri'] = $this->model('Santri_model')->cariDataSantri();
    $this->view('templates/header', $data);
    $this->view('santri/index', $data);
    $this->view('templates/footer');
  }

}