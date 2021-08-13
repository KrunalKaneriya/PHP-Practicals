<?php 

$serverName  ="localhost";
$username  = "root";
$password = "";
$tableName  = "MASTER";

    $conn  = new mysqli($serverName,$username,$password,$tableName);
    $sql = "INSERT INTO STUDENT (ID,FIRSTNAME,LASTNAME,EMAIL) VALUES (2,'CHIRAG','PARMAR','CHIRAG@OUTLOOK.COM'); ";
    $sql .= "INSERT INTO STUDENT (ID,FIRSTNAME,LASTNAME,EMAIL) VALUES (3,'DHANRAJ' , 'PARMAR', 'DHANRAJKK@GMAIL.COM'); ";

    if($conn->multi_query($sql)) {
        echo "Multiple Data Inserted Successfully";
    }
    else {
        echo "Error Adding Multiple Data.";
        echo $conn ->error;
    }

    $conn->close();
?>