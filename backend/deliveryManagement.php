<?php
  function FindCourier()
  {
    $db = mysqli_connect('localhost', 'root', 'root', 'data')
      or die("Could not connect to database");

    $query = "SELECT * FROM employee
              WHERE Type = 'courier' AND isFree = 1
              LIMIT 1";

    mysqli_query($db, $query) or die("Failed querying database");

    $queryResult = mysqli_query($db, $query);
    $row = mysqli_fetch_array($queryResult);

    $res = $row['Email'];

    $query = "UPDATE employee SET isFree = 0
              WHERE Email = '".$res."'";

    mysqli_query($db, $query) or die("Failed querying database");

    $queryResult = mysqli_query($db, $query);
    $row = mysqli_fetch_array($queryResult);

    mysqli_close($db);

    return $res;
  }
?>
