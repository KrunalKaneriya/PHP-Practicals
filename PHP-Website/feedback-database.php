<?php
    session_start();
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "websitedata";

    $MainConnection = new mysqli($serverName,$userName,$password,$databaseName);

    if($MainConnection->connect_errno) {
        // echo "Error Connecting Database..";
    }
    else {
        // echo "Database Connected..";
    }

    $createTable = "CREATE TABLE FEEDBACK (
            NAME VARCHAR(40),
            EMAIL VARCHAR(40),
            DETAILS VARCHAR(100)
        );";

    if($MainConnection->query($createTable)) {
        // echo "Table Created..";
    }
    else {
        // echo "Error Creating Table..";
    }

    $textAreaContent =htmlspecialchars($_POST["message"]);
    $textAreaContent = stripslashes($textAreaContent);
    $user = $_SESSION["username"];
    $email = $_SESSION["email"];
    
    
    $insertQuery = "INSERT INTO FEEDBACK (NAME,EMAIL,DETAILS) VALUES ('$user','$email','$textAreaContent');";
    if($MainConnection->query($insertQuery)) {
        
    }
    else {
        echo $MainConnection->error;
    }
    $MainConnection->close();
    header("location:home-page.php");

?>