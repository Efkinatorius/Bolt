<?php
  //session_start();
  function GetUserData($email)
  {
      $db = mysqli_connect('localhost', 'root', 'root', 'data')
        or die('Could not connect to mySQL server'); // NOTE: adding die() is
                                    //bad for ux, because it crashes everything, but is ok for debug i guess
      $query = "SELECT * FROM user
                WHERE Email ='" .$email."'";
      mysqli_query($db, $query) or die('Failed querying database');

      $queryResult = mysqli_query($db, $query);
      $row = mysqli_fetch_array($queryResult);

      mysqli_close($db);

      return $row;
  }

  function SubmitUserData($username, $password, $email, $accType)
  {
      $db = mysqli_connect('localhost', 'root', 'root', 'data')
        or die('Could not connect to mySQL server');

      $query = "INSERT INTO user VALUES('".$username."','".$password."','".
        $email."','".$accType."')";

      $queryResult = mysqli_query($db, $query);

      mysqli_close($db);

      if($queryResult == false)
      {
          return false;
      }
      else
      {
          return true;
      }
  }
?>
