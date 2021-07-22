<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .error {
            color: #FF0000;
        }

        h1 {
            text-align: center;
            color: #FF32ff;
        }
    </style>
    <title>Form</title>
</head>

<body>
    <?php
    //Firstly Define All the variables to use
    $filePath = htmlspecialchars($_SERVER["PHP_SELF"]);
    $name = $nameErr = $comment = $commentErr = "";
        if(empty($_POST["name"])) {
            $nameErr = "Name is Required..";
        }
        else {
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h1>PHP Form Validation</h1>
    <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        Name:<input type="text" name="name" value="<?php echo $name; ?>">
        <span class = "error">* <?php echo $nameErr; ?></span>
        <br><br>
      
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        <input type="submit" name = "submit" value = "Submit">


        <br><br><br><br><br><br>
    </form>

    <?php
        
        if(!empty($name)) {
        echo "The Inserted Name: " . $name . "<br>";
        } 
        if(!empty($comment)) {
            echo "The Comment inserted is: " . $comment;
        } 
        echo"<br>" . "The File Name is " . htmlspecialchars($filePath);
    ?>
</body>

</html>