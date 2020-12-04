<?php

if( !session_id() ) session_start(); //kita panggil session nya

//teknik bootstrapping, dimana yang kita panggil hanya satu file yaitu index, lalu file index memanggil file init yang ada di folder app, di file init memanggil semua file yang kita butuhkan

require_once '../app/init.php';

$app = new App;