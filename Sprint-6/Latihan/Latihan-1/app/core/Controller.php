<?php

class Controller {
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php'; 
      return new $model;//untuk model gak berhenti sama sampe sini , kalo view kan tampilan isinya html aja. kalo model karna dia class kita harus instansiasi
  }
}