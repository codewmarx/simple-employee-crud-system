<?php

$servername = "localhost";
$username = "root"; // change this if ur MYSQL user is different
$password = "";    // put your own MYSQL password here
$database = "empdata"; // change this with your own MYSQL database

    //connecting to the db
    $conn = new mysqli($servername, $username, $password, $database);

    //checking for connection
    if($conn->connect_error){
        echo "Connection failed: " . $conn->connect_error;
    } 

?>