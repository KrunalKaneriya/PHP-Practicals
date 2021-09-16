<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
</head>
<body>
    <center>
    <h1>Registration Page</h1>

    <form action="index.php" method="POST">

        <label for="name">Student Name</label>
        <input type="text" id = "name" name = "studentname">

        <br><br>
        
        <label for="phone">Student Phone Number</label>
        <input type="text" id = "phone" name = "studentphonenumber">

        <br><br>
        <label for="email">Email</label>
        <input type="email" name="studentemail" id="email">

        
        <br><br>
        <label for="gender">Gender</label>
       <input type="radio" name="gender" id="male" value="male">
       <label for="male">Male</label>

       
       <input type="radio" name = "gender" id = "female" value="female">
       <label for="female">Female</label>
       <br><br>

       <label for="course">Student Course</label>
       <input type="text" name = "studentcourse" id = "course">

       <br><br>
       <input type="submit" value="Submit Data">
       <input type="reset" value="Reset Data">
    </form>
    </center>
</body>
</html>