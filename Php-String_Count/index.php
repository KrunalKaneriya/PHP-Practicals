
<!DOCTYPE html>
<html lang="en">
<head>
    <title>String Count</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

    Enter String: 
    <input type="text" name = "stringvalue">

    <br><br><br>
    Enter User Specified Date:
    <input type="date" name="date1" id="">

    <input type="submit" value="submit">



</form>


<?php

    if(isset($_POST["stringvalue"])) {
        $value = $_POST["stringvalue"];
    }

    echo "<br>The Number of Characters in String is: " . strlen($value);

    $value = trim($value);
    echo "<br><br>The String is: " . $value;

    $count = substr_count($value," ") +1;
    echo "<br><br>The Number of Words is " . $count;

    echo "<br><br>";

    echo "The Date of Today is " .date("Y-m-d");

    $date = $_POST['date1'];
    $nowdate = date_create(date("Y/m/d"));
    $userselectedDate = date_create($date);
    echo $nowdate;
    echo "<br><br>The User Selected Date is: ";
    echo date_format($userselectedDate,"Y/m/d");

    $diff = date_diff($userselectedDate,$nowdate);

    print_r($diff);
    // echo "<br><br>The User Selected Date is: " . $date;

   
        

    
    

    

?>


</body>

</html>

