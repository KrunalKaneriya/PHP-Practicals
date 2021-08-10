<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Get Set Val Methods</title>
</head>
<body>
    <p id = "p-text">This is the Text Paragraph</p>
    <p id = "p-html">This is the HTML Paragraph</p>
    <button id = "text">Set The Text</button>
    <button id = "html">Set The HTML Tags With Text</button>
    <br>
    <br>

    <p>Name: <input type="text" name="name-test" id="name-test" value = "Krunal"></p>
    <button id = "show-value">Set Value</button>
    <br><br><br><hr>
    Name:  <span id = "callback-text">Kaneria Krunal</span>
    <br><br>
    <button id = "callback-button">Enter</button>
    <br><br><br>
    HTML Text:  <span id = "callback-html">This is The <b>Text</b></span>
    <br><br>
    <button id = "callback-button2">Change The Html</button>
    <script>
        $(document).ready(function() {
            $("#text").click(function() {
                $("#p-text").text("Text is Changed");
            });

            $("#html").click(function() {
                $("#p-html").html("<b>The Html Text is Changed Now</b>");  
            });

            $("#show-value").click(function() {
                $("#name-test").val("Dolly Dynch");
            });

            $("#callback-button").click(function() {
                $("#callback-text").text(function(i,oldString) {
                    return "The Old String was " + oldString + " and The New String is Hello World. " + 
                    " And the index is " + i;
                });
            });

            $("#callback-button2").click(function() {
                $("#callback-html").html(function(i,oldhtml) {
                    return "The Old Text Was " + oldhtml + " New Text : <b>Henlo World!</b>" + 
                    " and the index is " + i;  
                });
            }); 
        });
    </script>
</body>
</html>