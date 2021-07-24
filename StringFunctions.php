<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $strVar = "Hello World And Good Morning And My Name is Krunal";
        echo "This Function Prints The Number of Characters in String:" . strlen("Hello World And Good Morning!") . "<br><br>"; //Strlen function return the number of characters in string
        echo "This Function Reverses The String: " . strrev("Hello World") . "<br><br>"; //This Function reverses the String
        echo "This Function Converts The Uppercase String to Lowercase: " . strtoupper("i love dogs") ."<br><br>";
        echo "This Function Converts The Lowercase String to Uppercase: " . strtolower("JACK AND JILL") ."<br><br>";
        echo "This Function Converts the ASCII Value to Character: " . chr(65) . "<br><br>";
        echo "This Function Converts The Character To ASCII Value: " . ord('b') . "<br><br>";
        echo "This Function Returns The Position of Word From The String: " . strpos("Hello World My Name is Krunal Kaneria","Hello") . "<br><br>";
        echo "This Functions Trims The Remaining Whitespaces from Left Side: " . ltrim("           \t\n\0 Hello World") . "<br><br>";
        echo "This Function Trims The Remaining Whitespaces from Right Side: " . rtrim(" Hello World\n\n\t\0                   ") . "<br><br>";
        echo "This Function Trims The Character From Left Side: " . ltrim($strVar,"Hello") . "<br><br>";
        echo "This Function Trims The Character From Left Side: " . rtrim($strVar,"Krunal") . "<br><br>";
        echo "This Function Trims The Character Specified Or WhiteSpaces From Both Sides from String: " . trim($strVar,"Hello,Krunal") . "<br><br>";

?>

    <?php
        echo "<h2>Substring Function</h2><br>";
        echo "This Function will Return the Part of String Specified: " . substr("Hello World",6) . "<br><br>";
        echo "This Function will Return the Part of String Specified And Also The Length Specified: " . substr("Hello World",6,3) . "<br><br>";
        echo "This Function will Return The Part of String Specified But In Negative Number: " .substr("Hello World",-1) . "<br><br>";
        echo "This Function will Return The Part of String Specified But In Negative Number And Also Length is Negative: " .substr("Hello World",-10,-4) . "<br><br>";
    ?>

    <?php
        echo "This Function Compares Two String And Returns Result: " . strcmp("hello world","Hello WOrld") . "<br><br>";
        echo "This Function Compares Two String And Returns Result And Ignore Case: " . strcasecmp("hello world","Hello WOrld") . "<br><br>";

    ?>
</body>
</html>