<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables And Functions</title>
</head>
<body>
    <?php 
    $value1 = 10;
    $value2  = 20;
    $value3 = 55;
    printName();

    function printName() {
        global $value1;
        global $value2;
        global $value3;
        echo "The Value of 1 is $value1<br>";
        echo "The Value of 2 is $value2<br>";
        echo "The Global Value of 3  is $value3";
    }

    ?>
</body>
</html>