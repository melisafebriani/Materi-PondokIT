<?php

class User_model {
  private $nama = 'Melisa'; //data ini bisa didapat dari mana aja, databse,query

  //ambil data nya pake data yg tadi
  public function getUser()
  {
    return $this->nama; //ambil namanya
  }
}