<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "ORDER";

    $conn = new mysqli($serverName,$userName,$password);

    $databaseQuery = "CREATE DATABASE ORDER";
    $conn->query($databaseQuery);


    $conn->close();



    $newConnection = new mysqli($serverName,$userName,$password,$databaseName);

    $createTableQuery = "CREATE TABLE ORDERS"












?>