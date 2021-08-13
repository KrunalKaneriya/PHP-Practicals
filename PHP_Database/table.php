<?php 


    $serverName  ="localhost";
    $username  = "root";
    $password = "";
    $tableName  = "MASTER";


    $conn  = new mysqli($serverName,$username,$password,$tableName);
    $sql = "CREATE TABLE STUDENT (
        ID NUMERIC(6) PRIMARY KEY,
        FIRSTNAME VARCHAR(30),
        LASTNAME VARCHAR(30), 
        EMAIL VARCHAR(30)
        )";
    
    if($conn->query($sql)) {
        echo "Table Created Successfully";
    } 
    else {
        echo "Error Creating Table.";
        echo $conn->error;
    }

    $conn->close();

?>