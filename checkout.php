<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src='./scripts/shoppingCart.js'></script>
<script type="text/javascript" src='./scripts/checkout.js'></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
       $(".testbutton").click(function() {
           $.ajax({
             url:'http://localhost:8070/backend/submitOrderCall.php',
             type: 'POST',
             data:{'data':"kek kek kek"},
             success: function(result){
               alert(result);

             }
           });
       });
   });
   function submitOrder(paymentOption, cart)
   {
     $.ajax({
       url:'http://localhost:8070/backend/submitOrderCall.php',
       type: 'POST',
       data:{'payment':paymentOption,
              'cart':cart},
       success: function(result){
         console.log(result);
       }
     });
   }
</script>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/Reset.css">
  <link rel = "stylesheet" type="text/css" href="./styles/style1.css">
  <link rel="stylesheet" href="./styles/CheckoutStyle.css">
</head>
<body>
<header>

  <div class="header" id="pageHeader">
    <div>
      <a href="index.php" class="logo"><img class="bolt-logo" src="./pics/bolt-logo.png" alt=""></a>
    </div>
    <div>
      <input class="input" type="text" placeholder="search" id="search"></input>
    </div>
    <div class="header-right_container">
      <ul class="header-right">
        <li class="" id="log"><a href="login.php"><?php if($_SESSION['loggedUser'] == 'guest') echo 'Login';
                                                  else echo ''?></a></li>

        <li class="" id="log"><a href="login.php"><?php if($_SESSION['loggedUser'] == 'guest') echo '';
                                                  else echo $_SESSION['loggedUser']?></a></li>

        <li class="" id="reg"><a href="register.php"><?php if($_SESSION['loggedUser'] == 'guest') echo 'Register';
                                                  else echo ''?></a></li>

        <li class="" id="logout"><a href="backend\logoutCall.php"><?php if($_SESSION['loggedUser'] == 'guest') echo '';
                                                    else echo 'Logout'?></a></li>

        <li><select id="sel">
          <option>English</option>
          <option>Lithuanian</option>
          <option>Russian</option>
          <option>Polish</option>
        </select></li>

        <li><a href ="checkout.php"><img src="./pics/SHOPPING_CART.svg" id="cart"></a></li>
      </ul>
    </div>
  </div>
</header>
<div class="checkoutForm">
    <div class="Order">
        <div class="OrderHeader">
                <h1>Checkout</h1>
        </div>
        <div class="OrderCounter">
              <div class="ordered">
                <h2>Your order:</h2>
              </div>
              <ul id="list" class="CheckoutList">
                </ul>
        </div>
        <!--Problems with button inside this div-->
        <div class="paymentOptions">
              <h2>Payment options: </h2>
              <div class="payment-option-container">
                <button class="payment_option" onclick="submitOrder('cash',JSON.stringify(cart))">
                  <i class="fas fa-money-bill"></i>
                  <h3>Cash</h3>
                </button>
                <div class="line"></div>
                <button class="payment_option" onclick="submitOrder('credit',JSON.stringify(cart))">
                  <i class="far fa-credit-card"></i>
                  <h3>Credit card</h3>
                </button>
              </div>
        </div>
        <button class="confirm_button" type="submit" onclick="submitOrder()">
          CONFIRM ORDER
        </button>
    </div>
</div>

<button class="testbutton">test me!</button>

<script>
  loadCart();
  setCart(cart);
  //document.getElementById('list').value = cartJSON;

  window.onload = createList(cart, totalCost());
  window.onscroll = function() {myFunction()};
  var order = document.getElementsByClassName("Order");
  var header = document.getElementById("pageHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      order[0].classList.add("filler1");
      header.classList.add("sticky");
    } else {
      order[0].classList.remove("filler1");
      header.classList.remove("sticky");
    }
  }
</script>
</body>
</html>
