<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>DataOInfra</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Open+Sans:wght@300;400;600;700;800&family=Lato:wght@300;400;700;900&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <script type="text/javascript">
        setTimeout(function() {
            $(".loader").fadeOut();
            $("nav").addClass("sticky-top");
        }, 2000);
    </script>
</head>


<body id="home-page-body">

    <div class="loader" style="background-color: aliceblue; position:fixed; visibility: visible; height: 768px; width: 100%; z-index: 5;">
        <img style="position: fixed; left:630px; top: 240px;" src="images/Preloader_1.gif" alt="">
    </div>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">

            <a href="home-page.php" class="navbar-brand mx-3">
                <img src="images/logo.png" alt="Logo" width="70"><span class="text-light ms-3">DataOInfra</span>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav">
                    <div id="first-div" class="divs">
                        <li class="nav-item">
                            <a href="pricing.php" class="nav-link active text-light">Pricing</a>
                        </li>
                    </div>

                    <div class="mx-3" id="second-div">
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link text-light">Gallery</a>
                        </li>
                    </div>

                    <div class="mx-3" id="third-div">
                        <li class="nav-item">
                            <a href="partners.php" class="nav-link text-light">Partners</a>
                        </li>
                    </div>

                    <div class="mx-3" id="fourth-div">
                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link text-light">Feedback</a>
                        </li>
                    </div>
                    <div class="mx-3" id="fifth-div">
                        <li class="nav-item">
                            <a href="about-us.php" class="nav-link text-light">About Us</a>
                        </li>
                    </div>
                    <div class="" id="log-in">
                        <li class="nav-item">
                           <span class="text-white nav-item"><?php echo $_SESSION["username"]; ?> </span>
                        </li>
                    </div>
                    <div class="mx-3 " id="">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link text-light btn btn-danger">Log Out</a>
                        </li>
                    </div>

                    <div class="mx-1 " id="demo-button">
                        <li class="nav-item">
                            <a href="demo-request-page.php" class="nav-link btn text-light">Book Demo</a>
                        </li>
                    </div>













                </ul>

            </div>
        </div>
    </nav>

    <!-- <div id="body-circle">

    </div> -->
    <div id="sql-image-div">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ko8ud57v.json" background="transparent"
            speed="1" style="width: 520px; height: 400px;" loop autoplay></lottie-player>
    </div>

    <div class="text-box">
        <h1 class="display-4 text-light">Need Database Solutions.</h1>
        <h1 class="display-6 text-60 text-light">We Are Here To Help You..</h1>
        <h2 class="display-6 text-30 text-light">DataOInfra Provides Best Infrastructure To Maintain the Database For
            Large
            Companies.</h1>
    </div>


    <div id="another-page">

        <div class="container logo">

            <div class="row">
                <div class="col mb-5">
                    <h1>Supported Languages</h1>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img src="images/mariadb-logo.jpg" alt="Maria Db ">
                </div>

                <div class="col">
                    <img src="images/mysql-logo.png" alt="mysql Logo">
                </div>

                <div class="col">
                    <img src="images/mongodb-logo.gif" alt="Mongo DB">
                </div>

                <div class="col">
                    <img src="images/microsoft-sql-server-logo.png" alt="Microsoft Server Logo">
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col">
                    <img id="oracle-logo" src="images/oracle-logo.png" alt="Oracle Logo">
                </div>

                <div class="col">
                    <img src="images/postgresql-logo.png" alt="postgre logo">
                </div>

                <div class="col">
                    <img src="images/idb-logo.png" alt="idb logo">
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col col-lg-auto">
                    <img src="images/sap-hana-logo.jpg" alt="Sap logo">
                </div>
            </div>

        </div>


    </div>

    <div id="cards-div">


        <div id="cards-page" class="card-group">

            <div class="card mx-4">
                <img src="images/card-1.jpg" alt="Man Staring At Computer" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Data Lineage For Data Governance</h5>
                    <p class="card-text">Boost your data Governance efforts, achieve full regulatory compliance, and
                        build trust in data.</p>
                </div>
            </div>

            <div class="card mx-4">
                <img src="images/card-2.jpg" alt="Two People Staring At Computer" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Data Lineage For DataOps</h5>
                    <p class="card-text">Keep Your data pipeline Strong to make the most out of your data analytics,
                        act proactively, and eliminate the risk of failure even before implementing Changes.
                    </p>
                </div>
            </div>

            <div class="card mx-4">
                <img src="images/card-3.jpg" alt="Man Doing Work" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Data Lineage For Cloud Migrations</h5>
                    <p class="card-text">Avoid exceeding budgets, getting behind schedule, and bad data quality before,
                        during, and after migration.</p>
                </div>
            </div>
        </div>

    </div>


    <footer class="container-fluid mt-5">

        <div class="row">
            <div class="col">
                <div id="company-info-footer">
                    <h5>About Our Company</h5>
                    <p>DataOInfra is World Class Lineage Platform that automatically scans your data
                        environment
                        to build powerful map of all data flows and deliver it through a native UI and other sources
                        like
                        presentation to both technical and non-technical users. With DataOInfra, every one gets full
                        visibility
                        and control of their data.
                    </p>
                </div>
            </div>

            <div class="col">
                <div id="footer-links">
                    <h5 class="text-center">Follow Us On</h5>
                    <div class="buttons">
                        <button type="button" class="btn btn-light btn-lg">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-light btn-lg">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button type="button" class="btn btn-light btn-lg">
                            <i class="fab fa-instagram"></i>
                        </button>
                        <button type="button" class="btn btn-light btn-lg">
                            <i class="fas fa-envelope"></i>
                        </button>
                    </div>

                    <p class="text-center lead">@CopyRight 2021 DataOInfra</p>

                </div>
            </div>



            <div class="col">

                <div id="company-links">
                    <h5 class="text-center">Our Links</h5>
                    <div id="company-links-list">
                        <ul>
                        <li><a href="home-page.php">Home Page</a></li>
                                <li><a href = "gallery.php">Gallery</a></li>
                                <li><a href = "feedback.php">Feedback Page</a></li>
                                <li><a href = "partners.php">Partners Page</a></li>
                                <li><a href ="pricing.php">Pricing</a></li>
                                <li><a href = "index.html">Log In</a></li>
                                <li><a href = "sign-up.html">Sign Up</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>





    </footer>










</body>

</html>