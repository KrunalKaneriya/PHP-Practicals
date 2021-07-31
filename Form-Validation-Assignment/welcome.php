<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>

<?php
    session_start();
    //Getting The Username Posted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["userpassword"] = $_POST["userpassword"];

        if($_SESSION["username"]!=$_SESSION["defaultname"]) {
            $nameError = "Name is Invalid";
            echo $nameError . "<br>";
        }

        if($_SESSION["userpassword"] != $_SESSION["defaultpassword"]) {
            $passwordError = "Password is Invalid";
            echo $passwordError . "<br>";
        }
    }


?>
</body>
</html>