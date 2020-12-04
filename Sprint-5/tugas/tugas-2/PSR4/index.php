<!DOCTYPE html>
<html>
<head>
  <title>AUTOLOAD</title>
</head>
<body>
  <form action="" method="post">
  <h1>AUTOLOD</h1>

  <h2>Lingkaran</h2>
  <form action="" method="post">
  <table>
    <tr><td>Jari - Jari <input type="number" name="jari"></td></tr>
    <tr><td><input type="submit" name=""></td></tr>
  </table>
</form>
<?php
  use PSR4\Bangun1\Lingkaran ;
    spl_autoload_register(function($class){
      $class = explode ("\\", $class);
      $class = end($class);
    require_once '../PSR4/Bangun1/Lingkaran.php';
});

$Bangun_datar = new Lingkaran();
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
use PSR4\Bangun2\Segitiga;
spl_autoload_register(function($class){
  $class = explode("\\", $class);
  $class = end($class);
  require_once '../PSR4/Bangun2/Segitiga.php';
});
$Bangun_datar = new Segitiga();
?>

<h2>Kubus</h2>
 <form action="" method="post">
  <table>
    <tr><td>Sisi Kubus <input type="number" name="sisi"></td></tr>
    <tr><td><input type="submit" name=""></td></tr>
  </table>
</form>

<?php
use PSR4\Bangun3\Kubus;
spl_autoload_register(function($class){
$class = explode ("\\", $class);
$class = end($class);
require_once '../PSR4/Bangun3/Kubus.php';
});
$Bangun_datar = new Kubus();
?>



</body>
</html>