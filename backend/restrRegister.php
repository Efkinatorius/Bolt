<?php
include_once "userDataManager.php";
include_once "restrDataManager.php";

function SendRestaurantRegisterRequest($name, $address, $managerEmail)
{
    if(!filter_var($managerEmail, FILTER_VALIDATE_EMAIL))
    {
        die( "Given email format is wrong!");
    }

    $result = SubmitRestrData(0, $name, $address, $managerEmail);

    if($result == false)
    {
        die("Could not register a restaurant");
    }
    else
    {
        die("We did register your restaurant");
    }
}

SendRestaurantRegisterRequest($_GET['restaurant_name'], $_GET['restaurant_address']
,$_GET['email']);

SendUserRegisterRequest($_GET['username'], $_GET['password'], $_['repPass'],
'Restaurant Manager');

?>
