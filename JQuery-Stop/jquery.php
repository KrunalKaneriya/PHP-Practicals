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

    <br><br><br>

    <div id = "another-div" style = "background-color:orange; width:300px;height:200px;position:relative;">
        Hello World
    </div>

    <button id = "start2">Start The Animation</button>
    <button id = "stop1">Stop The Single Animation</button><br>
    <button id = "stop2">Stop All The Animation But Don't Finish</button>
    <button id = "stop3">Stop All The Animations And Finish It</button>
<script>
   $(document).ready(function() {
    $("#start").click(function() {
        $("#panel").slideToggle(5000);
    });

    $("#stop").click(function () {
        $("#panel").stop(false,true);
    });

    $("#start2").click(function() {
        $("#another-div").animate({left: '500px'}, 5000);
        $("#another-div").animate({'font-size': "3em"} ,5000);
    });

    $("#stop1").click(function() {
        $("#another-div").stop();
    });

    $("#stop2").click(function() {
        $("#another-div").stop(true);
    });

    $("#stop3").click(function() {
        $("#another-div").stop(true,true);
    });

    $("#stop").click(function() {
        $("#panel").stop();
    });

   });

</script>


</body>
</html>