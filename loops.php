<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loops</title>
</head>
<body>
    
<?php
    $x = 5;
    echo "<h1>While Loop</h1>";
    while($x>0) {
        echo "The Value Of X in While Loop is $x <br>";
        $x--;
    }
    echo "<br><br>";

    echo "<h1>Do While Loop</h1>"; 
    $x = 0;
    do {
        echo "The Value of X in Do While Loop is $x<br>";
        $x++;

    } while($x<=5);

    echo "<br><br>";
    echo "<h1>For Loop</h1>";

    for($x = 0;$x<=10;$x++) {
        echo "The Value Of X in For Loop is $x<br>";
    }
?>
</body>
</html>