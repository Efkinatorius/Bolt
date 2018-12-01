<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./styles/Reset.css">
  <link rel = "stylesheet" type="text/css" href="./styles/style1.css">
  <link rel = "stylesheet" type="text/css" href="./styles/formStyle.css">
  <link rel="stylesheet" href="./styles/registerStyles.css">
  <script type = "text/javascript" src="./scripts/userMan.js"></script>
</head>
<body>
<header>
  <div class="header" id="pageHeader">
    <div>
      <a href="index.php" class="logo"><img class="bolt-logo" src="./pics/bolt-logo.png" alt=""></a>
    </div>
  </div>
</header>
<div class="registerForm">
  <form class="formStuff" action="backend\userRegisterCall.php" method="get">
    <div class="formContainer">
      <h1 class="headingReg"> Register an account: </h1>
      <label for="uname"><b>Username</b></label>
      <input id="uname" type="text" placeholder="Enter Username" name="username" required>

      <label for="pass"><b>Password</b></label>
      <input id="pass" type="password" placeholder="Enter Password" name="password" required>

      <label for="repPass"><b>Repeat Password</b></label>
      <input id="repPass" type="password" placeholder="Enter Password" name="repPass" required>

      <label for="email"><b>Email</b></label>
      <input id="email" type="text" placeholder="Enter Email" name="email" required>


      <button type="submit">Register</button>

      <h1 class="headingReg"> Or login: </h1>
      <a href="login.php" class="button">Login</a>



    </div>

  </form>
</div>
</body>
<footer>
  <div class"restrReg">
    <p><a class="Montseratt" href="registerRestaurant.php">Register your restaurant here!</a></p>
  </div>
</footer>
</html>
