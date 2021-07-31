<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page 3</title>
</head>
<body>
    <?php
        echo "The Name is : " . $_SESSION["name"] . "<br>";
        echo  "The Number is : " .$_SESSION["number"] . "<br>";
        $_SESSION["email"] = $_REQUEST["email"] . "<br>";
        echo "The Email is : " .$_SESSION["email"] . "<br>";
        $_SESSION[""]
        ?>

    <?php
        session_destroy();
    ?>
</body>
</html>