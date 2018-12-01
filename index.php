<?php
  session_start();
  if($_SESSION['loggedUser'] == '')
  {
    $_SESSION['loggedUser'] = "guest";
  }
?>
<meta charset="utf-8">
<html>
<head>
  <title>Bolt</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel = "stylesheet" type="text/css" href="./styles/Reset.css">
  <link rel = "stylesheet" type="text/css" href="./styles/style.css">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="./scripts/userMan.js"></script>
<script>
loadUser();
var geocoder = new google.maps.Geocoder();
var userLocation;
 if (navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
}
//Get the latitude and the longitude;
function successFunction(position) {
   var lat = position.coords.latitude;
   var lng = position.coords.longitude;
   codeLatLng(lat, lng)
}

function errorFunction(){
   alert("Geocoder failed");
}

function codeLatLng(lat, lng) {
   var latlng = new google.maps.LatLng(lat, lng);
   geocoder.geocode({'latLng': latlng}, function(results, status) {
     if (status == google.maps.GeocoderStatus.OK) {
     console.log(results)
       if (results[1]) {
        //formatted address
        //alert(results[0].formatted_address);
        userLocation = results[0].formatted_address;
        //alert(userLocation);
       //find country name
           for (var i=0; i<results[0].address_components.length; i++) {
           for (var b=0;b<results[0].address_components[i].types.length;b++) {

           //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
               if (results[0].address_components[i].types[b] == "locality") {
                   //this is the object you are looking for
                   city= results[0].address_components[i];
                   break;
               }
               //alert(results[0].address_components[i].types[b]);
           }
       }
       //city data
      // alert(city.short_name + " " + city.long_name);

       } else {
         alert("No results found");
       }
     } else {
       alert("Geocoder failed due to: " + status);
     }
   });
 }
 function showCity(){
   //alert(city.short_name);
   var x = document.getElementById("cityInput");
   x.value = userLocation;
 }
</script>
<script>
function hideShowDiv(){
  var x = document.getElementById("cityDiv");
  if(x.style.display === "none"){
    x.style.display = "flex";
  }else{
    x.style.display = "none";
  }
}
</script>
</head>
<body>
  <header>
    <div class="row">
      <img class="bolt-img" src="./pics/bolt-logo.png" alt="">
      <ul class="main-nav">

        <li class="" id="log"><a href="login.php"><?php if($_SESSION['loggedUser'] == 'guest') echo 'Login';
                                                  else echo ''?></a></li>

        <li class="" id="log"><a href="login.php"><?php if($_SESSION['loggedUser'] == 'guest') echo '';
                                                  else echo $_SESSION['loggedUser']?></a></li>

        <li class="" id="reg"><a href="register.php"><?php if($_SESSION['loggedUser'] == 'guest') echo 'Register';
                                                  else echo ''?></a></li>

        <li class="" id="logout"><a href="backend\logoutCall.php"><?php if($_SESSION['loggedUser'] == 'guest') echo '';
                                                    else echo 'Logout'?></a></li>
      </ul>
    </div>
<div class="city__container">
    <div class="city">
      <div class="Herotext">
        <h1 class="Montseratt">
          <span>Hungry?</span>
        </h1>
        <h1 class="Montseratt">
            <span>Order some good food!</span>
        </h1>
      </div>
      <div class="input__container">
        <input class="input" type="text" placeholder="Enter your city" onfocus="hideShowDiv()" id="cityInput"></input>
      </div>
      <div class="input__container" id="cityDiv" style="display:none">
        <input class="input" type="button" onclick="showCity()" value="Or find your location"></input>
      </div>
      <div class"restauLink">
        <p><a class="Montseratt" href="page1.php">Search for local restaurants.</a></p>
      </div>
    </div>
  </div>
  </header>
</body>
<footer>
</footer>
</html>
