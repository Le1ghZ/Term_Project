<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phpecom";

    //Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    //Check database connection
    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>