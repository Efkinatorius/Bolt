<?php
  include_once "userRegister.php";
  include_once "employeeDataManager.php";

  function InsertEmployee($email, $username, $restaurant, $type, $free, $password, $userType)
  {
      SendUserRegisterRequest($username, $password, $password, $email, $userType);
      SubmitEmployeeData($email, $type, $restaurant, $free);
  }

  InsertEmployee($_GET['email'], $_GET['username'], $_GET['restaurant'], $_GET['empType'],
  $_GET['free'], $_GET['password'],$_GET['userType']);
?>
