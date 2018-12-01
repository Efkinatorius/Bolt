<?php
  include_once "restrRegister.php";

  SendUserRegisterRequest($_GET['username'], $_GET['password'],
  $_GET['repPass'],$_GET['email'],'employee');

  SendRestaurantRegisterRequest($_GET['restaurant_name'],
  $_GET['restaurant_address'], $_GET['email']);
?>
