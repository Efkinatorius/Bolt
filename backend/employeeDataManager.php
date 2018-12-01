<?php
function GetEmployeeData($email)
{
    $db = mysqli_connect('localhost', 'root', 'root', 'data')
      or die('Could not connect to mySQL server'); // NOTE: adding die() is
                                  //bad for ux, because it crashes everything, but is ok for debug i guess
    $query = "SELECT * FROM employee
              WHERE Email ='" .$email."'";
    mysqli_query($db, $query) or die('Failed querying database');

    $queryResult = mysqli_query($db, $query);
    $row = mysqli_fetch_array($queryResult);

    mysqli_close($db);

    return $row;
}

function SubmitEmployeeData($email, $type, $restr, $isFree)
{
    $db = mysqli_connect('localhost', 'root', 'root', 'data')
      or die('Could not connect to mySQL server');

    $query = "INSERT INTO employee VALUES('".$email."','".$type."','".
      $restr."',
      '".$isFree."')";

    $queryResult = mysqli_query($db, $query);

    mysqli_close($db);

    if($queryResult == false)
    {
        return false;
    }
    else
    {
        return true;
    }
}
?>
