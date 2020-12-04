<?php

namespace MySRC;

class Persegipanjang {
  function __construct ()
  {
    if (isset($_POST['panjang'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $luaspersegipanjang = ($panjang*$lebar);

    echo "panjang = $panjang <br>";
    echo "lebar = $lebar <br>";
    echo "Luas = ".$luaspersegipanjang;
    }
  }
}