<?php

namespace MyApp;

class Lingkaran {
  function __construct ()
  {
    if (isset($_POST['jari'])){
    $jari = $_POST;
    $jari = $_POST['jari'];
    $luas = 22/7 * $jari * $jari;

    echo "Nilai Jari-jari = $jari <br>";
    echo "Luas = 22/7 * $jari * $jari = $luas";
    }
  }
}