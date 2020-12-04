<?php
// class bintang
require_once __DIR__. "/vendor/autoload.php";

use Models\Bintang;

spl_autoload_register(function($class){
  $class = explode("\\", $class);
  $class = end($class);
});
$Makhluk = new Bintang();


//class langit
require_once __DIR__. "/vendor/autoload.php";

use Models\Langit;

spl_autoload_register(function($class){
  $class = explode("\\", $class);
  $class = end($class);
  require_once '../SRC/App1/Langit.php';
});
$Makhluk = new Langit();


 //class bumi
require_once __DIR__. "/vendor/autoload.php";

use View\Bumi;

spl_autoload_register(function($class){
  $class = explode("\\", $class);
  $class = end($class);
  require_once '../SRC/App2/Bumi.php';
});
$Makhluk = new Bumi();


