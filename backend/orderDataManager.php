<?php
  function GetOrderData($id)
  {
    $db = mysqli_connect('localhost', 'root', 'root', 'data')
      or die("Could not connect to database");

    $query = "SELECT * FROM order
              WHERE ID = '".$id."'";

    mysqli_query($db, $query) or die("Failed querying database");

    $queryResult = mysqli_query($db, $query);
    $row = mysqli_fetch_array($queryResult);

    mysqli_close($db);

    return $row;
  }

  function SubmitOrderData($id, $client, $restr, $cart, $courier, $isDone)
  {
    $db = mysqli_connect('localhost', 'root', 'root', 'data')
      or die("Could not connect to database");

    $query = "INSERT INTO data.order VALUES
    ('".$id."','".$client."','".$restr."','".$cart."','".$courier."','".$isDone."')";
    echo $query;
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
