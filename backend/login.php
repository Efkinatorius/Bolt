<?php
  session_start();
  include_once "userDataManager.php";
  function SendLoginRequest($email, $password)
  {
      include_once 'userDataManager.php';

      $acc = GetUserData($email);

      if($acc['Email'] == NULL)
      {
          $_SESSION['message'] = 'No account with such email was found';
      }

      if(password_verify($password, $acc['Password']))
      {
          $_SESSION['message'] = "You have logged on!";
          $_SESSION['loggedUser'] = $acc['Username'];
          $_SESSION['loggedUserEmail'] = $acc['Email'];
      }
      else
      {
          $_SESSION['message'] = "Wrong password!";
      }
  }
?>
