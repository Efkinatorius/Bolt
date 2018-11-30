<?php
    function SendUserRegisterRequest($username, $password, $repPass, $email, $accType)
    {
        if(strlen($username) > 32 || strlen($username) < 6)
        {
            die("Given username length is wrong: username should be longer than 6 symbols,
              but shorter than 32 symbols");
        }

        if($password != $repPass)
        {
            die("Passwords doesn't match!");
        }

        if(strlen($password) < 6)
        {
            die( "Given password is too short");
        }
        else
        {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            die( "Given email format is wrong!");
        }

        include_once 'userDataManager.php';
        $row = GetUserData($email);
        if($row['Username'] != NULL)
        {
            die( "Such Email is in use");
        }
        else
        {
            $result = SubmitUserData($username, $hashed_password, $email, $accType);
            if($result == false)
            {
                die("An account could not be created");
            }
            else
            {
                die("An account has been created successfully!");
            }
        }
    }

    SendUserRegisterRequest($_GET['username'], $_GET['password'],$_GET['repPass'],$_GET['email'],'client');
?>
