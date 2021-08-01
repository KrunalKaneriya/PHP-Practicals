<!DOCTYPE html>
<html lang="en">
<head>
    <title>Qualifications</title>

</head>
<body style = "background-color:#F4DFD0;">
    <center>

<?php
    session_start();
    echo "<br><br><h1>Hello " . $_SESSION["username"] . "</h1>";

?>
    <br><br>

    <table border = "2px black solid" cellpadding = "10px" align="center">
        <thead>
            <tr>
          <th>Sr. No</th>
          <th>Examination</th>
          <th>Name of University</th>
          <th>Year Of Passing</th>
          <th>Percentage</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td>SSC</td>
                <td>Gujarat Board</td>
                <td>2016</td>
                <td>56.31%</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>HSC</td>
                <td>Gujarat Board</td>
                <td>2018</td>
                <td>60.31%</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>BCA SEM - 1</td>
                <td>VNSGU University</td>
                <td>2019</td>
                <td>80.1%</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>BCA SEM - 2</td>
                <td>VNSGU University</td>
                <td>2019</td>
                <td>70.57%</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>BCA SEM - 3</td>
                <td>VNSGU University</td>
                <td>2020</td>
                <td>79.07%</td>
            </tr>
        </tbody>
    </table>

    </center>

    <?php session_destroy(); ?>
</body>
</html>