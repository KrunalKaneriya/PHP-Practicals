<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In Page</title>
    <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error{
            color:red;
        }
    </style>
</head>
 

<?php 
    session_start();
    $nameError = "";
    $passwordError = "";
    $_SESSION["defaultname"] = "Krunal";
    $_SESSION["defaultpassword"] = "123";
    $_SESSION["username"] = " ";
    $_SESSION["userpassword"] = "";
?>




<body style = "background-color:#F4DFD0;">
    <form method = "POST" action = "welcome.php">
        <center>
            <br>
        <h2>Log In Page</h2>
        <br><br>
        <label for="name">Enter User Name:</label>
        <input type="text" name="username" id="name">
        <span class="error">* <?php echo $nameError;?></span>
        <br><br><br>
        <label for="password">Enter Password: </label><span>
        <input type="password" name="userpassword" id="password">
        <span class = "error"><?php echo $passwordError ?></span>
        <br><br>
        <input class = "btn btn-primary" type="submit" value="Submit">
        </center>
    </form>
</body>
</html>