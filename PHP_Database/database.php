<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";

    $conn = new mysqli($serverName,$userName,$password);

    if($conn -> connect_error) {
        echo "Connection is not established";
    } 
    else  {
        echo "Connection is Successfull.";
    }

    $sql = "CREATE DATABASE MASTER";
    if($conn->query($sql)) {
        echo "Database Creted SUccessfully";
    }
    else {
        echo "Error creating database or database exists";
    }

    $conn->close();




?>