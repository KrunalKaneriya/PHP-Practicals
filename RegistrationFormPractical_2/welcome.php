<html>
<head>
    <title>Print The Information</title>
</head>
<body>
    <h1>The Entered Information:    </h1>
    <?php 
        echo "The Name is: " .$_POST["name"];
        echo "<br><br>";
        echo "The Entered Email is: " .$_POST["email"];
    ?>
</body>
</html>