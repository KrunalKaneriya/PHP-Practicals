<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="feedback-body">
    <form method="POST" action="feedback-database.php">
    <div class="container-fluid" id="main-box">
        <div class="row row-1">
            <div class="col ">
                <h3 class="text-white display-6">Contact Us</h3>
            </div>
        </div>
        <div class="row row-2">
            <div class="col text-center">
                <p class="text-white">You can Give us your Valuable Feedback To Us To Help Improve Ourselves
                </p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="name" class="form-label text-light">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" value="<?php  echo $_SESSION['username'];  ?>" disabled>
            </div>
            <div class="col">
                <label for="email" class="form-label text-light">Email:</label>
                <input type="email" name="email" id="email-input" class="form-control" placeholder="Enter Email" value="<?php echo $_SESSION['email'];    ?>" disabled>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="message" class="form-label text-light">Message</label>
                <textarea name="message" id="message" cols="55" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" id = "submit-btn" class="btn btn-primary">Submit</button>
            </div>
            <div class="col">
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </div>
</form>

</body>

</html>