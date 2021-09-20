<?php 
    session_start();

    $conn = new mysqli("localhost","root","","MOVIE");
    $loginemail = $_POST["loginemail"];
    $loginpassword = $_POST["loginpassword"];

    $checkDataQuery = "SELECT * FROM MOVIEORDERS WHERE EMAIL = '$loginemail'  AND PASSWORD = '$loginpassword';";
    $searchResult = $conn->query($checkDataQuery);

    // if($searchResult->num_rows>0) {

    // }
    // else {
    //     header("location:log-in.php");
    // }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <form action="confirm-page.php" method = "post">
    <table>
        <tr>
            <td colspan="2"><img src="https://m.media-amazon.com/images/M/MV5BNDhiODUyN2UtYTQzZi00YTE0LWJiMWEtYTVlODEyZDQwYzRhXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_.jpg" alt="tenet" width="200px" height = "200px"></td>
        </tr>

        <tr>
            <td>Number of Tickets</td>
            <td><input type="number" name="numberoftickets" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Book Now" name = "Tenet">
            </td>
        </tr>
    </table>
    </form>
   
</body>
</html>