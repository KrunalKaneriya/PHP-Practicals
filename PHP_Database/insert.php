<?php 

$serverName  ="localhost";
$username  = "root";
$password = "";
$tableName  = "MASTER";

$conn  = new mysqli($serverName,$username,$password,$tableName);

    $sql = "INSERT INTO STUDENT (ID,FIRSTNAME,LASTNAME,EMAIL) VALUES (1,'KRUNAL','KANERIA','PROKILLERKK@OUTLOOK.COM') ";

    if($conn->query($sql)) {
        echo "Data Inserted Successfully.";
    } else {
        echo "Error Adding Data.";
        echo $conn->error;
    }

    $conn->close();
?>