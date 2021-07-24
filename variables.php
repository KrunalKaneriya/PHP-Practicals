<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variables in PHP</title>
</head>
<body>
    
    <?php 
        echo "<h1>This Is the Variables of PHP</h1>"
    ?>

    <?php 
        $number1 = 100;
        $number2 = 10;
        echo "The Number1 Value is " . $number1 ;
        print "<br><br>";
        echo "The Number2 Value is " . $number2;

        echo "<br><br>Now Performing the Addition of Two Numbers..";
        echo "<br>Number1 + Number2 = " .($number1+$number2);
        // echo $number1+$number2;
        echo "<br><br>Now Performing the Subtraction of Two Numbers..";
        echo "<br>Number1 - Number2 = " . ($number1-$number2);

        print "<br><br>Now Performing the Multiplication of Two Numbers..";
        print "<br>Number1 * Number2 = " . ($number1*$number2);

        print "<br><br>Now Performing the Division of Two Numbers..";
        print "<br>Number1 / Number2 = " . ($number1/$number2);

    ?> 
</body>
</html>