<?php
//  class lingkaran
function autoloadBangun1 ($lingkaran)
{
  $file = "soal1/{$lingkaran}.php";
  if (is_readable($file)){
    require $file;
  }
}

spl_autoload_register("autoloadBangun2");

$lingkaran = new Lingkaran();
$lingkaran->Bangundatar ();

// class persegipanjang
function autoloadBangun2 ($lingkaran)
{
  $file = "soal1/{$lingkaran}.php";
  if (is_readable($file)){
    require $file;
  }
}

spl_autoload_register("autoloadBangun2");

$lingkaran = new Persegipanjang();
$lingkaran->Bangundatar2 ();

//class segitiga
function autoloadBangun3 ($lingkaran)
{
  $file = "soal1/{$lingkaran}.php";
  if (is_readable($file)){
    require $file;
  }
}

spl_autoload_register("autoloadBangun3");

$lingkaran = new Segitiga();
$lingkaran->Bangundatar3 ();