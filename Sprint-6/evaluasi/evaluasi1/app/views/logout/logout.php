<?php


session_destroy();

if(session_unset() )
  {
    header("Location:" . BASEURL . "/home/index");
  }

