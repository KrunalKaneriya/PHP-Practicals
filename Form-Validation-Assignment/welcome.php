<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background-color:#F4DFD0;">
    <center>

        <?php
        session_start();
        //Getting The Username Posted
        if(($_POST["username"]!="Krunal") || ($_POST["userpassword"])!="123") {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["userpassword"] = $_POST["userpassword"];
            $hyperlink = "<br><br><h3>" . "<a href = 'index.php'>Go Back To Login Page</a>" . "</h3>";

            if ($_SESSION["username"] != $_SESSION["defaultname"]) {
                $nameError = "Name is Invalid";
                echo "<br><br><h3>" . $nameError . "</h3>";
            }

            if ($_SESSION["userpassword"] != $_SESSION["defaultpassword"]) {
                $passwordError = "Password is Invalid";
                echo "<br><br><h3>" . $passwordError . "</h3>" . "<br><br>";
            }

            if (($_SESSION["username"] != "Krunal") || ($_SESSION["userpassword"]) != "123") {
                echo $hyperlink;
            }
        }
        else {
            echo "<br><br><h4>Welcome " . $_SESSION["username"] . "</h4><br><br>";
            echo '<a href = "qualifications.php"> <button class = "btn btn-primary">Qualifications</button></a>';
        }

        
        ?>

        
</body>
</center>

</html>