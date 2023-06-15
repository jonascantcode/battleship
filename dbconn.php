<?php
// Establish connection to database
    #Define connection parameters
    $host = "localhost";
    $usernm = "user";
    $userpass = "gg5n0r3";
    $database = "battleship";

    #Establish connection with database
    $connect = mysqli_connect($host, $usernm, $userpass, $database);

    #Test connection
    if ($connect->connect_errno) {
        echo("Failed to conntect" . $mysqli -> connect_error);
    }
?>