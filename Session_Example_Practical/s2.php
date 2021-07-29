<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page 2</title>
    
</head>
<body>

    <form action="s3.php" method="post">
        <?php
            $_SESSION["name"] = $_REQUEST["name"];
            $_SESSION["number"] = $_REQUEST["number"];
            echo "The Name is : " . $_SESSION["name"] . "<br>";
            echo "The Number is :" .$_SESSION["number"] . "<br>"; 
        ?>

        Email ID: <input type="email" name="email" id="">

        <input type="submit" value="Submit"> <br>
           
    </form> 
</body>
</html>