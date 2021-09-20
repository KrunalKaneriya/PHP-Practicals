<?php 

    session_start();
    $ticketamt = 100;
    $gstrate = 5;

    $numoftickets = $_POST["numberoftickets"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm Ticket</title>
</head>
<body>
    <center>
        <h1>Confirm Ticket</h1>
        <table>
            <tr>
                <td>Username:</td>
                <td><?php echo $_SESSION["username"]; ?></td>

            </tr>

            <tr>
                <td>Total Number of Tickets:&nbsp;&nbsp;</td>
                <td><?php echo $_POST["numberoftickets"] ?></td>
            </tr>

            <tr>
                <td>Ticket Price (Without GST)&nbsp;&nbsp;</td>
                <td><?php echo ($ticketamt*$numoftickets);   ?></td>
            </tr>

            <tr>
                <td>Ticket Price (GST Included)&nbsp;&nbsp;</td>
                <td><?php echo ($ticketamt*$numoftickets) + (($ticketamt*$numoftickets) + (0.056*$ticketamt)) ?></td>
            </tr>
        </table>
    </center>
</body>
</html>