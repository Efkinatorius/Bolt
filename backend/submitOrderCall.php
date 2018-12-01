<?php
    session_start();


    echo $_SESSION['loggedUserEmail'];
    echo "\n";
    echo $_SESSION['restaurant_title'];
    echo "\n";
    echo $_POST['payment'];
    echo "\n";
    echo $_POST['cart'];

    include_once "orderDataManager.php";
    include_once "restrDataManager.php";
    include_once "deliveryManagement.php";

    $row = GetRestrDataByTitle($_SESSION['restaurant_title']);

    $courier = FindCourier();

    $res = SubmitOrderData(0,$_SESSION['loggedUserEmail'], $row['ID'], $_POST['cart'], $courier, 0);

    if($res == true)
    {
        echo "All good";
    }
    else
    {
        echo "All bad";
    }
?>
