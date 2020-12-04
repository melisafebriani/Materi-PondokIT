<?php
 //alert
class Flasher {
 //tugasnya mengelola flashmessage dan menampilkannya
  public static function setFlash($pesan, $aksi, $tipe) //agar kita dapt memanggil method nya tanpa harus instansiasi //pesan nya akan kita panggil menggunakan bootstrap berhasil atau gagal //aksi bisa untuk tambah ubah hapus, saat kita melakukan apa  
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }

  public static function flash()
  {
    if( isset($_SESSION['flash']) ) {
      echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert"> Data Mahasiswa </strong>' . $_SESSION['flash']['pesan'] . ' <strong>' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'; //didalam echo adalah script alert di bootstrap
        unset($_SESSION['flash']); //hanya berlakuk sekali, kalo udah tampil sekali session nya udah gak ada lagi
    }
  }
}