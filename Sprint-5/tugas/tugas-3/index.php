<!DOCTYPE html>
<html>
<head>
  <title>AUTOLOAD</title>
</head>
<body>
  <h1>AUTOLOADER PSR-4 COMPOSER</h1>

<!-- bangun lingkaran -->
<h2>Lingkaran</h2>
  <form action="" method="post">
    <table>
      <tr><td>Jari - Jari<input type="number" name="jari"></td></tr>
      <tr><td><input type="submit" name=""></td></tr>
    </table>
  </form>
<?php
require_once __DIR__. "/vendor/autoload.php";

use MyApp\Lingkaran;

spl_autoload_register(function($class){
  $class = explode ("\\", $class);
  $class = end($class);
});

$Bangun_datar = new Lingkaran();
?>

<!-- bangun segitiga -->
<h2>Segitiga</h2>
  <form action="" method="post">
    <table>
      <tr><td>Alas<input type="number" name="alas"></td></tr>
      <tr><td>Tinggi<input type="number" name="tinggi"></td></tr>
      <tr><td><input type="submit" name=""></td></tr>
    </table>
  </form>
<?php
require_once __DIR__. "/vendor/autoload.php";

use MyApp\Segitiga;

spl_autoload_register(function($class){
  $class = explode ("\\", $class);
  $class = end($class);
});

$Bangun_datar = new Segitiga();
?>

<!-- bangun persegi panjang -->
<h2>Persegi Panjang</h2>
  <form action="" method="post">
    <table>
      <tr><td>Panjang<input type="number" name="panjang"></td></tr>
      <tr><td>Lebar<input type="number" name="lebar"></td></tr>
      <tr><td><input type="submit" name=""></td></tr>
    </table>
  </form>
<?php
require_once __DIR__. "/vendor/autoload.php";

use MySRC\Persegipanjang;

spl_autoload_register(function($class){
  $class = explode ("\\", $class);
  $class = end($class);
});

$Bangun_datar = new Persegipanjang();
?>

</body>
</html>