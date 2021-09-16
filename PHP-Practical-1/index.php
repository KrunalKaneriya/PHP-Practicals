<?php

$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "STUDENT_DETAILS";
$tableName = "DETAILS";

//Connection Log And Creating Database
$conn = new mysqli($serverName,$username,$password);
$createDatabaseQuery = "CREATE DATABASE $databaseName";
$conn->query($createDatabaseQuery);

//Create Table In Database
$createTableQuery = 'CREATE TABLE DETAIL
    NAME VARCHAR(50),
    PHONE_NUMBER NUMBER(10),
    EMAIL VARCHAR(50),
    GENDER VARCHAR(10),
    COURSE_NAME VARCHAR(50)

);';

$conn->query($createTableQuery);

//Insert Data into Database
$studentName = $_POST['studentname'];
$phoneNumber = $_POST['studentphonenumber'];
$email = $_POST["studentemail"];
$gender = $_POST['gender'];
$course = $_POST["studentcourse"];

$insertDataQuery = 'INSERT INTO DETAIL ("NAME","PHONE_NUMBER","EMAIL","GENDER","COURSE_NAME") VALUES ("$studentName","$phoneNumber","$email","$gender","$course");';
$conn->query($insertDataQuery);

$conn->close();







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in Page</title>
</head>
<body>

<center>
    <form action="home-page.php" method="post">

        <h1>College Management System Log In</h1>
        <br><br>

        <label for="name">Username</label>
        <input type = "text" name = "username" id = "name">

        <br><br>

        <label for = "password">Password</label>
        <input type="text" id = "password" name = "userpassword">

        <br><br>
        <input type="submit" value="Submit Data">

        <br>
        <br>
        <a href="registration-page.php">
            <input type="button" value="Go To Registration Page">
        </a>
       


    </form>
    </center>
   
</body>
</html>