<?php
session_start();
include_once "restrDataManager.php";
include_once "userRegister.php";
include_once "employeeDataManager.php";

function SendRestaurantRegisterRequest($name, $address, $managerEmail)
{
    if(!filter_var($managerEmail, FILTER_VALIDATE_EMAIL))
    {
        die( "Given email format is wrong!");
    }

    $result = SubmitRestrData(0, $name, $address, $managerEmail);

    $row = GetRestrDataByTitle($name);
    $res = SubmitEmployeeData($managerEmail, "restaurant manager",$row['ID'], 0);

    if($result == false)
    {
        die("Could not register a restaurant");
    }
    else
    {
        die("We did register your restaurant");
    }
}


?>
