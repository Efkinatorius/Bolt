<?php
  session_start();

  var_dump($_GET);
  $_SESSION['restaurant_title'] = $_GET['title'];
  header('Location: ..\page2.php');
?>
