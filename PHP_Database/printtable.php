<?php 


    $serverName  ="localhost";
    $username  = "root";
    $password = "";
    $tableName  = "MASTER";


    $conn  = new mysqli($serverName,$username,$password,$tableName);
    $sql = "SELECT * FROM STUDENT";

   $conn->query($sql);

    $conn->close();




    ?>