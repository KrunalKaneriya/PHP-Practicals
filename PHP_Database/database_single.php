<?php

$serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "STUDENT";

    $conn = new mysqli($serverName,$userName,$password,$database);

    if($conn->connect_error) {
        echo "Error Connecting To Database.";
    }
    else {
        echo "Connection established.";
    }

    // $sql = "CREATE DATABASE STUDENT";
    // if($conn->query($sql)) {
    //     echo "Created Database";
    // }
    // else {
    //     echo "Error Creating Database.";
    //     echo $conn->error;
    // }

    // $sql = "CREATE TABLE STUDENT1 (
    //     ID NUMERIC(10) PRIMARY KEY,
    //     FIRST_NAME VARCHAR(40) NOT NULL,
    //     LAST_NAME VARCHAR(40) NOT NULL,
    //     EMAIL VARCHAR(40)
    //     );";

    // if($conn->query($sql)) {
    //     echo "Table Created.";
    // }
    // else {
    //     echo "Error Creating Table.";
    //     echo $conn->error;
    // }

    // $sql = "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (1,'KRUNAL','KANERIA','PROKILLERKK@OUTLOOK.COM');";
    // $sql .= "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (2,'VIDHI','PANCHAL','VIDHIPANCHAL@OUTLOOK.COM');";
    // $sql .= "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (3,'DHANRAJ','PARMAR','DHANRAJSINHPARMAR@GMAIL.COM');";
    // $sql .= "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (4,'VISHAL','PRAJAPATI','VISHAL2458@GMAIL.COM');";
    // $sql .= "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (5,'CHIRAG','PARMAR','CHIRAG@OUTLOOK.COM');";
    // $sql .= "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (6,'KHYATI','KANERIA','KHYATIKANERIA@GMAIL.COM');";
    // $sql .= "INSERT INTO STUDENT1 (ID,FIRST_NAME,LAST_NAME,EMAIL) VALUES (7,'KRUTIK','RAKHOLIYA','KRUTIK@GMAIL.COM');";

    // if($conn->multi_query($sql)) {
    //     echo "Data Inserted.";
    // }
    // else {
    //     echo "Error Inserting Data.";
    // }

    // $sql = "UPDATE STUDENT1 SET LAST_NAME = 'KANERIYA' WHERE ID = 2;";

    // $sql = "DROP TABLE STUDENT1;";

    //  if($conn->query($sql)) {
    //         echo "Data Deleted";
    //     }
    //     else {
    //         echo "Error Deleting Table.";
    //         echo $conn->error;
    //     }

    $selectQuery = "SELECT * FROM STUDENT1";

    $resultQuery = $conn->query($selectQuery);  
    // echo gettype($resultQuery); //This creates a new object

    if($resultQuery ->num_rows > 0) {
        while($row = $resultQuery ->fetch_assoc()) {
            echo "<br><br>" .  " ID: " . $row["ID"] . " First Name: " . $row["FIRST_NAME"] . " Last Name: " . $row["LAST_NAME"] . " Email: " . $row["EMAIL"];
            
        }
        
    }
    else {
        echo "Error In Displaying Table..";
    }

        $conn->close();


?>