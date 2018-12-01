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
<!--
  Perrasytos korteles,
  pakoreguokite kaip jums atrodo turėtų būti.
  manau delivery time nereik kolkas :)
-->
<section class="restaurant_list">
  <ul class="restaurants_container">
     <li>
        <div class="restaurant">
            <a href="backend\getToRestaurantCall?title=Foxes%20Grill%26Lobster">

            <ul class="restaurant_sub_container">
              <li class=image_container>
                <div class="image_bg image2">

                </div>
              </li>
              <li class="text_container">
                <h3>Foxes Grill & Lobster</h3>
              </li>
              <li class="subtext_container">
                <h4>Lithuania's first lobster restaurant</h4>
                <h4> Price:   €€€</h4>
              </li>
            </ul>
            </a>
          </div>
    </li>
    <li>
        <div class="restaurant">
            <a href="backend\getToRestaurantCall?title=Zeuso%20Kebabai">

            <ul class="restaurant_sub_container">
              <li class=image_container>
                <div class="image_bg image1">

                </div>
              </li>
              <li class="text_container">
                <h3>Zeuso Kebabai</h3>
              </li>
              <li class="subtext_container">
                <h4>Gourmet kebab restaurant</h4>
                <h4> Price:   €</h4>
              </li>
            </ul>
            </a>
          </div>
    </li>
    <li>
        <div class="restaurant">
            <a href="">

            <ul class="restaurant_sub_container">
              <li class=image_container>
                <div class="image_bg image3">

                </div>
              </li>
              <li class="text_container">
                <h3>Pizzaland</h3>
              </li>
              <li class="subtext_container">
                <h4>Pizza for the whole family</h4>
                <h4> Price:   €€</h4>
              </li>
            </ul>
            </a>
          </div>
    </li>
    <li>
      <div class="restaurant">
          <a href="">

          <ul class="restaurant_sub_container">
            <li class=image_container>
              <div class="image_bg image3">

              </div>
            </li>
            <li class="text_container">
              <h3>Pizzaland</h3>
            </li>
            <li class="subtext_container">
              <h4>Pizza for the whole family</h4>
              <h4> Price:   €€</h4>
            </li>
          </ul>
          </a>
        </div>
  </li>
  <li>
    <div class="restaurant">
        <a href="">

        <ul class="restaurant_sub_container">
          <li class=image_container>
            <div class="image_bg image3">

            </div>
          </li>
          <li class="text_container">
            <h3>Pizzaland</h3>
          </li>
          <li class="subtext_container">
            <h4>Pizza for the whole family</h4>
            <h4> Price:   €€</h4>
          </li>
        </ul>
        </a>
      </div>
</li>
<li>
  <div class="restaurant">
      <a href="">

      <ul class="restaurant_sub_container">
        <li class=image_container>
          <div class="image_bg image3">

          </div>
        </li>
        <li class="text_container">
          <h3>Pizzaland</h3>
        </li>
        <li class="subtext_container">
          <h4>Pizza for the whole family</h4>
          <h4> Price:   €€</h4>
        </li>
      </ul>
      </a>
    </div>
</li>
    </ul>
</section>
<!--


-->

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("pageHeader");
var restaurant_list = document.getElementsByClassName("restaurant_list");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    restaurant_list[0].classList.add("filler");
  } else {
    header.classList.remove("sticky");
    restaurant_list[0].classList.remove("filler");
  }
}
</script>

</body>
</html>
