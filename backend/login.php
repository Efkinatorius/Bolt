<?php
  function SendLoginRequest($email, $password)
  {
      include_once 'userDataManager.php';

      $acc = GetData($email);

      if($acc['Email'] == NULL)
      {
          die('No account with such email was found');
      }

      if(password_verify($password, $acc['Password']))
      {
          die("You have logged on!");
      }
      else
      {
          die("Wrong password!");
      }
  }

  SendLoginRequest($_GET['email'],$_GET['password']);
?>
