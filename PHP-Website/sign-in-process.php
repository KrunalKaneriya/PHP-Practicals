<?php
    session_start();
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "WebsiteData";

    $websiteUserName = $_POST["username"];
    $websiteUserPassword = $_POST["password"];
    

    $connection = new mysqli($serverName,$userName,$password,$databaseName);
    $searchQuery = "SELECT * FROM INFO WHERE NAME = '$websiteUserName' AND PASSWORD = '$websiteUserPassword';";
    
    if($connection->connect_error) {
        // echo "Database is not Connected<br>";
    }
    else {
        $loginResult = $connection->query($searchQuery);
        if($loginResult->num_rows>0 && $loginResult->num_rows==1) {
            // echo "You Are Now Logged In..";

                    // Now register Use All Information
                $row = $loginResult->fetch_assoc();
            $_SESSION["username"] = $row["NAME"];
            $_SESSION["password"] = $row["PASSWORD"];
            $_SESSION["ID"] = $row["ID"];
            $_SESSION["email"] = $row["EMAIL"];

            header("location:home-page.php");
        }
        else  {
            echo '<script type = "text/JavaScript">
                alert("Error In Name or Password");
                window.location.href = "index.php";
            </script>';

            
        }

        


       

    }

    $connection->close();

?>





