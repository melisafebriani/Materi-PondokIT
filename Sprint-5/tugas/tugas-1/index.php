<!DOCTYPE html>
<html>
<head>
  <title>AUTOLOAD</title>
</head>
<body>
  <h1>AUTOLOAD</h1>

<h2>Lingkaran</h2>
<form action="" method="post">
  <table>
    <tr><td>Jari - Jari <input type="number" name="jari"></td></tr>
    <tr><td><input type="submit" name=""></td></tr>
  </table>
</form>
<?php
function autoloadBangun1 ($Lingkaran)
{
  $file = "Bangun_datar/{$Lingkaran}.php";
  if (is_readable($file)) {
    require $file;
  }
}

spl_autoload_register("autoloadBangun1");

$lingkaran = new Lingkaran ();
$lingkaran->Bangun1 ();

?>

<h2>Persegi Panjang</h2>
<form action="" method="post">
  <table>
    <tr><td>Panjang <input type="number" name="panjang"></td></tr>
    <tr><td>Lebar <input type="number" name="lebar"></td></tr>
    <tr><td><input type="submit" name="proses"></td></tr>
  </table>
</form>  

<?php

function autoloadBangun2 ($Persegipanjang)
{
  $file = "Bangun_datar/{$Persegipanjang}.php";
  if (is_readable($file)) {
    require $file;
  }
}

spl_autoload_register("autoloadBangun2");

$persegipanjang = new Persegipanjang();
$persegipanjang->Bangun2();

?>


<h2>Segitiga</h2>
<form action="" method="post">
  <table>
    <tr><td>Alas <input type="number" name="alas"></td></tr>
      <tr><td>Tinggi <input type="number" name="tinggi"></td></tr>
      <tr><td><input type="submit" name="proses"></td></tr>
  </table>
</form>

<?php
function autoloadBangun3 ($Segitiga)
{

  $file = "Bangun_datar/{$Segitiga}.php";
  if (is_readable($file)) {
    require $file;
  }
}

spl_autoload_register("autoloadBangun3");

$segitiga = new Segitiga;
$segitiga->Bangun3();

?>


</body>
</html>