<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page 1</title>
</head>
<body>

    <form action="s2.php" method="POST">
        Name: <input type="text" name="name" id=""> <br>
        Phone Number: <input type="number" name="number" id=""> <br>
        <input type="radio" name="gender" value = "Male" id = "maleid">
        <label for="maleid">Male</label>
        <input type="radio" name="gender" value = "female" id="femaleid">
        <label for="femaleid">Female</label><br><br>
        <input type="submit" value="Submit"> <br>
    </form>
</body>
</html>