<?php

class User_model {

  private $table = 'admin';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function getUser($data)
  {

      $email = $data['email'];
      $password = $data['password'];

      $query = "SELECT * FROM email where email=:email AND password=:password"; 
      $stmt = $this->db->query($query);
      $bind = $this->db->bind('email', $email);
      $bind = $this->db->bind('password', $password); 

       if( isset($_POST['submit'])) {
          $fetch = $this->db->single();
          if(empty($email) || empty($password)) {
            echo "<button class='btn btn-danger'> ISI DENGAN BENAR!!! <?button>";
          } else {
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['nama'] = $fetch['username'];

            header("Location:" . BASEURL . "/relawan");
          }
          return $fetch;
        }

        
      
      }
}