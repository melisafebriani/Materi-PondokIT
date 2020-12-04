<?php 

namespace PSR4\Bangun3;

class Kubus
{
  public function __construct()
  {
    if (isset($_POST['sisi']))
    {
      $sisi = $_POST;
      $sisi = $_POST['sisi'];
      $luas= 6 * $sisi * $sisi;

      if($sisi=="" || $sisi=="0"){
        echo "Data yang diberikan tidak valid";
      }
      else
      {
        echo "Data yang dimasukkan <br>";
        echo "Sisi Kubus =6 * $sisi *$sisi <br>";
        echo "Luas Kubus = $luas <br>";
      }
    }
  }
}

