<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "WebsiteData";


    $newConn  = new mysqli($serverName,$userName,$password,$databaseName);

    

    if($newConn->connect_error) {
        // echo "Error Connecting To Database.";
        // echo "<br>" . $newConn->error;
        $newConn->close();
    }
    else {
        // echo "Database Connected..<br>";
    }

    $conn = new mysqli($serverName,$userName,$password);

    if($conn->connect_error) {
        // echo "Error Connecting To Database.";
        // echo "<br>" . $conn->error;
    }
    else {
        $newDatabase = "CREATE DATABASE WebsiteData";
        $conn->query($newDatabase);
        // echo "<br>New Database Created..";
        $conn->close();
    }

    $MainConnection = new mysqli($serverName,$userName,$password,$databaseName);



    $createTable = "CREATE TABLE INFO (
            ID INT(4) AUTO_INCREMENT PRIMARY KEY,
            NAME VARCHAR(40) NOT NULL,
            PASSWORD VARCHAR(40) NOT NULL,
            GENDER VARCHAR(10) NOT NULL,
            PHONENUMBER NUMERIC(10),
            EMAIL VARCHAR(40) NOT NULL
        );
        
        ";

        $MainConnection->query($createTable);

        $nameValue = $_POST["name"];
        $passwordValue = $_POST["password"];
        $genderValue = $_POST["gender"];
        $phoneNumberValue = $_POST["number"];
        $emailValue = $_POST["email"];


        $insert = "INSERT INTO INFO (NAME,PASSWORD,GENDER,PHONENUMBER,EMAIL) VALUES ('$nameValue','$passwordValue','$genderValue','$phoneNumberValue','$emailValue');";

        if($MainConnection->query($insert)) {
            // echo "Data Inserted...<br>";
        }
        else {
            // echo "error Adding Data..<br>";
            $MainConnection->error;
        }

        $MainConnection->close();



?>

<?php 
    header("location:sign-in.html");

?>