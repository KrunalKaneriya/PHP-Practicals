<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Get Set Val Methods</title>
</head>
<body>
    <p id = "test">This is some <b>Bold</b> And <i>Italic Text</i> And <u>Underlined Text.</u></p>
    <button id = "text">Get The Text</button>
    <button id = "html">Get The HTML Tags With Text</button>
    <br>
    <br>

    <p>Name: <input type="text" name="name-test" id="name-test" value = "Krunal"></p>
    <button id = "show-value">Show the Value of Button</button>
    <script>
        $(document).ready(function() {
            $("#text").click(function() {
                alert("Text is " + $("#test").text());
            });

            $("#html").click(function() {
                alert("HTML Text is " + $("#test").html());
            });

            $("#show-value").click(function() {
                alert("The Value in TextBox is " + $("#name-test").val());
            });
        });
    </script>
</body>
</html>