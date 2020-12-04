<?php

class Home extends Controller {

  //method defult tempat dimana kalo kita gak ngetik apapun di url nya maka yang akan dipanggil method default nya
  public function index()
  {
    $data['judul'] = 'Home';
    $data['nama'] = $this->model('User_model')->getUser();
    // var_dump($data['nama']);
     //bikin data yang isinya nama tapi minta ke model model yang mana yaitu User_model masuk ke dalam method nya getUser,jadi siapapun user yg masuk di kirimkan ke nama nanti nama dikirm ke home/index
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}