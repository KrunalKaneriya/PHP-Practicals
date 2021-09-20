<?php
    session_start();

   
    $conn = new mysqli("localhost","root","","MOVIE");

    $createDatabaseQuery = "CREATE DATABASE MOVIE";
    $createTableQuery = "CREATE TABLE MOVIEORDERS (
        USERNAME VARCHAR(40),
        PASSWORD VARCHAR(40),
        PHONENUMBER NUMERIC(10),
        EMAIL VARCHAR(40)
    );";
    
    if(isset($_POST["username"])) {
        $username = $_POST["username"];
        $password= $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
    }

  


    $insertDataQuery = "INSERT INTO MOVIEORDERS (USERNAME,PASSWORD,PHONENUMBER,EMAIL) VALUES ('$username','$password','$phonenumber','$email'); ";


    if($password == $confirmpassword) {
        $_SESSION["password"] = $password;
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["phonenumber"] = $phonenumber;
        $conn->query($insertDataQuery);
    }
    else {
        header("location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
</head>
<body>
    <center>
        <h1>Log In</h1>
        <form action="home-page.php" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="loginemail" id="loginemail"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="loginpassword" id="loginpassword"></td>
                </tr>

                <tr align="center">
                
                    <td><br><input type="submit" value="Submit"></td>
                    <td><br><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>