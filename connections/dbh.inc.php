<?php
    $servername = "localhost";
    $username = "afrolago";
    $password = "afrolagobestshoesellingcompanykogali";
    $dbname = "afrolago";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con){
        echo "connection failed";
    }
?>