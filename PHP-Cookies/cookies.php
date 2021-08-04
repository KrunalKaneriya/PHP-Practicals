<?php
$cookie_name = "user";
$cookie_name2 = "user2";
setcookie($cookie_name, "Vidhi", time() + 86400);
setcookie($cookie_name2,"Abhi");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cookie</title>
</head>

<body>
    <?php
    //we will see that the cookie is set or not 
    if ((!isset($_COOKIE[$cookie_name])) && (!isset($_COOKIE[$cookie_name2]))) {
        echo "Cookie Named " . $cookie_name . " is not set.";
        echo "<br>Cookie Named ". $cookie_name2 . " is not set.";
    } else {
        echo "Cookie Named " . $cookie_name . " is set.";
        echo "<br>Cookie named "  . $cookie_name2 . " is set.";
        echo "<br>Cookie Value is " . $_COOKIE[$cookie_name];
        echo "<br>Cookie value is  " .$_COOKIE[$cookie_name2];
    }
    ?>

        
</body>

</html>