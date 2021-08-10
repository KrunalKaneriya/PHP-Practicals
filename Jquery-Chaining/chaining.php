<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Chaining Method</title>
</head>
<body>
        <p id = "item">This is The Chaining Method Working in Jquery</p>
        <button id = "button-click">Click Me To Chain Methods</button>

    <script>
        $(document).ready(function(){
            $("#button-click").click(function() {
                $("#item").fadeOut("slow").fadeIn("slow").slideUp("slow").slideDown("slow").css("color","red","font-size","3em");
            });
        });
    </script>
</body>
</html>