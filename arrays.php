<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arrays In PHP</title>
</head>
<body>
    <?php
        $car_Array = array("Maruti","Vego","VolksWagen","Renault","Bugatti","Lamborghini","Fiat","Ford");
        echo "<h2>Initialization of Arrays And Traversing Arrays Via For Loop</h2>";
        
        for($i = 0;$i< count($car_Array);$i++) { //To find the array length use the count function and pass Array
            echo "The Content of Car Arrays is: " .$car_Array[$i] . "<br>";
        }

        echo "<h3>Traversing Over Arrays Using For Each Loop</h3>";

        
        foreach($car_Array as $element) { //In for each loop first param will be the array and the second will be the iterator variable not like Java
            echo "Printing The Element Via For Each Loop: $element<br>";
        }
    
    ?>

    <?php
        echo "<h1>Associative Arrays</h1>";
        $age = array("Krunal" => 20,"Khyati"=>28,"Vipa"=>30,"Daksh"=>13);
        foreach ($age as $name => $age_count) {
            echo "The Name is $name and The Age is $age_count<br>";
            // if($name == "Krunal") {
            //     exit;
            // }
        }
        
    
    ?>

</body>
</html>