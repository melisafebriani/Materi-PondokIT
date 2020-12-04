<?php


class Home extends Controller {
  public function index()
  {
    if( isset($_SESSION['nama']) )
    {
      header("Location:" . BASEURL . "/relawan/index" );
      exit;
    }


    $data['judul'] = 'Login';
    $data['nama'] = $this->model('User_model')->getUser($_POST);
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }

  public function logout()
  {
    $this->view('logout/logout');
    header("Location:" . BASEURL );
  }
}