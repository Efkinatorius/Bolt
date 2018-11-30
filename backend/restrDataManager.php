<?php
  function GetRestrData($id)
  {
      $db = mysqli_connect('localhost', 'root', 'root', 'data')
        or die("Could not connect to database");

      $query = "SELECT * FROM restaurant
                WHERE ID = '".$id."'";

      mysqli_query($db, $query) or die("Failed querying database");

      $queryResult = mysqli_query($db, $query);
      $row = mysqli_fetch_array($queryResult);

      mysqli_close($db);

      return $row;
  }

  function SubmitRestrData($id, $name, $address, $managerEmail)
  {
      $db = mysqli_connect('localhost', 'root', 'root', 'data')
        or die("Could not connect to database");

      $query = "INSERT INTO restaurant VALUES('".$id."','".$name."','".$address."','".
        $managerEmail."')";

      $queryResult = mysqli_query($db, $query);

      mysqli_close($db);

      if($queryResult)
      {
          return true;
      }
      else
      {
          return false;
      }
  }
?>
