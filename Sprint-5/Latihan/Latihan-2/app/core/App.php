<?php

class App {

  protected $controller = 'home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();

    //controller
    if( file_exists('../app/controllers/' . $url[0] . '.php') )
    {
     $this->controller = $url[0];
     unset($url[0]); //,menghilangkan index nol ,yaitu controller, yang dipanggil home/index. kalo url yang dipanggil gak ada ,maka gak tampil apa apa, karna dia udah manggil controller default nya. contoh nya about/index/satu/dua, ini yg muncul apa
     //var_dump($url);
    }

    require_once '../app/controllers/' . $this->controller . '.php'; //kita panggil,ambil controller nya, krn udah baru controller nya
    $this->controller = new $this->controller; //kita instansiasi, kita timpa dengan classnya, knapa karni biar bisa manggil methodnya nanti


    //method
    if ( isset($url[1]) ) //kita cek dulu 
    {
      if( method_exists($this->controller, $url[1]) ) { //dari controller nya ada gak methodnya. kalo gak make method ,tapi controller nya ada method nya gak ada maka jalankan default nya run kosong 
        $this->method = $url[1]; //tapi kalo ada ,kita timpa this method url 1 atau index ke 1
        unset($url[1]);
        // var_dump($url);

      }

    }

    //params
    if ( !empty($url) ) 
    //kalo kosong boleh, tapi kalo ada kita kelola parameternya,, kalo udah kita ilangin masih tetap ada maka itu kemungkinan params nya
    {
      $this->params = array_values($url);
    }

    //jalankan controller dan method, serta kirimkan params jika ada

    call_user_func_array([$this->controller, $this->method], $this->params);
  
  }

//parsing url(membuat URL rapih nya)
//method yang digunakan untuk memanggil url dan memecah sesuai keinginan kita
  public function parseURL()
  {
    if( isset($_GET['url']) ) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }


}



