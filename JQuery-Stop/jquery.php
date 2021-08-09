<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Jquery Stop Animation</title>
    
</head>
<body>

    <div id = "main" style="background-color: grey;width:100%;height:200px;font-size:5em;text-align:center">Click To Toggle The Panel</div>
    <div id = "panel" style = "background-color:grey;display:none;width:100%;height:200px;font-size:5em;text-align:center;" ></div>

    <button id = "start">Start The Animation</button>
    <button id = "stop">Stop The Animation</button>
<script>
   $(document).ready(function() {
    $("#start").click(function() {
        $("#panel").slideToggle(5000);
    });

    $("#stop").click(function () {
        $("#panel").stop(false,true);
    });

   });

</script>


</body>
</html>