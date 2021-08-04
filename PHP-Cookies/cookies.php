<?php
    $cookie_name = "user";
    setcookie($cookie_name,"Krunal",time() + 86400);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie</title>
</head>
<body>
    <?php
        //we will see that the cookie is set or not 
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie Named " . $cookie_name . "is not set.";
        } else {
            echo "Cookie Named " . $cookie_name . " is set.";
            echo "Cookie Value is " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>