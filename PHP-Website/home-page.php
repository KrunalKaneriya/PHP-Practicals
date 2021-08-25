<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>DataOInfra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="home-page-body">

    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img id="logo-image" src="images/logo.png" alt="">&nbsp;&nbsp;&nbsp;DataOInfra
            </a>

            <ul class="navbar-nav mr-auto">




                <li class="nav-item mx-2 mt-2">
                    <b> Welcome <?php echo $_SESSION["username"]; ?></b>
                </li>
                <li class="nav-item mx-2">
                    <a href="feedback.php" class="btn btn-warning">Feedback</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="index.html" class="btn btn-danger">Log Out</a>
                </li>
                

            </ul>
        </div>

    </nav>

    <div id="body-circle">

    </div>
    <div id="sql-image-div">
        <img src="images/sql.png" alt="Computer Image" id="sqlimage">
    </div>

    <div class="text-box">
        <h1 class="display-4 text-black-90">Need Database Solutions.</h1>
        <h1 class="display-6 text-black-70">We Are Here To Help You..</h1>
        <h2 class="display-6 text-black-50">DataOInfra Provides Best Infrastructure To Maintain the Database For Large Companies.</h1>
    </div>




</body>

</html>

<!-- <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav> -->