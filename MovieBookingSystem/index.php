<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Ticket Registration</title>
</head>
<body>
    <form action="log-in.php" method="post">
       <center>
           <h1>Movie Registration System</h1>

           <br><br><br>

           <table>
               
               <tr>
                   <td>Username</td>
                   <td><input type="text" name="username" id="username"></td>
                </tr>

                <tr>
                    <td>Phone Number</td>
                    <td><input type="number" name="phonenumber" id="phonenumber"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>

                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirmpassword" id="confirmpassword"></td>
                </tr>

               

                
                <tr align="center">
                
                    <td><br><input type="submit" value="Submit"></td>
                    <td><br><input type="reset" value="Reset"></td>
                </tr>


           </table>
       </center>
    </form>
</body>
</html>