<!DOCTYPE html>
<html lang="en">
<head>
    <title>Static Variables</title>
</head>
<body>
    <?php 
        echo "Function Without Static Keyword<br><br>";
        function withoutStatic() {
            $value = 1;
            echo "The Value of Without Static Function is $value<br>";
            $value++;
            
        }
        withoutStatic();
        withoutStatic();

        echo "<br>The Function with Static Keyword<br><br>";
        function withStatic() {
            static $value = 1;
            echo "The Value of With Static Function is $value<br>";
            $value++;
        }
        withStatic();
        withStatic();

    ?>
</body>
</html>