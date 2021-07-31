<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page 2</title>
    
</head>
<body>

    <form action="s3.php" method="post">
        <?php
        if($_SESSION["name"] == "abc") {
            echo "Invalid Name" . "<br>";
        }
        else {
            $_SESSION["name"] = $_REQUEST["name"];
            echo "The Name is : " . $_SESSION["name"] . "<br>";
        }
            
            $_SESSION["number"] = $_REQUEST["number"];
            $_SESSION["gender"] = $_REQUEST["gender"];
            
            echo "The Number is :" .$_SESSION["number"] . "<br>"; 
            echo "The Gender Selected is: " . $_SESSION["gender"] . "<br>";
        ?>

        Email ID: <input type="email" name="email" id="">

        <input type="submit" value="Submit"> <br>
           
    </form> 
</body>
</html>