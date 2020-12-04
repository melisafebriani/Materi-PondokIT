<?php

namespace MyApp;

class Segitiga {
  function __construct ()
  {
    if (isset($_POST['alas'])){
      $alas=$_POST['alas'];
      $tinggi=$_POST['tinggi'];
      $luassegitiga=($alas * $tinggi) / 2;

      echo "alas = $alas <br>";
      echo "tinggi = $tinggi <br>";
      echo "Luas = $luassegitiga" ;
    }
  }
}