<?php
  session_start();
  $_SESSION['loggedUser'] = 'guest';
  $_SESSION['message'] = '';
  session_write_close();
  header('Location: ..\index.php');
?>
