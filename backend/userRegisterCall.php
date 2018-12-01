<?php
  session_start();
  include_once "userRegister.php";

  SendUserRegisterRequest($_GET['username'], $_GET['password'],$_GET['repPass'],$_GET['email'],'client');
  header('Location: ..\register.php');
?>
