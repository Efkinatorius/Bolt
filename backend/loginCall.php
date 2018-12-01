<?php
//  session_start();
  include_once "login.php";
  SendLoginRequest($_GET['email'],$_GET['password']);
  

  header('Location: ..\login.php');
?>
