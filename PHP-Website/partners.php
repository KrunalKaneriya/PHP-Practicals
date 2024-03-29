<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Partners With Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Open+Sans:wght@300;400;600;700;800&family=Lato:wght@300;400;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="partners.css">

    <script type="text/javascript">
        setTimeout(function() {
            $(".loader").fadeOut();
            $("nav").addClass("sticky-top");
        }, 2000);
    </script>
</head>

<body>

    <div class="loader" style="background-color: aliceblue; position:fixed; visibility: visible; height: 768px; width: 100%; z-index: 5;">
        <img style="position: relative; left:450px; top: 80px;" src="images/loading.gif" alt="">
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
                    <div class="mx-3 ">
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


    <div id="title-container" class="container">
        <h1 class="title text-center text-light">PARTNER WITH DATAOINFRA</h1>
        <h3 class="text-center text-light sub-title">Join a growing group of direct resellers, OEM vendors, support
            providers and alliance partners to provide more value by expanding your product portfolio and earn more.
        </h3>
    </div>

    <div class="container-fluid" id="company-images-div">
        <div class="row">
            <div class="col">
                <img src="companies-logo/twitter.png" alt="" width="130px">
            </div>
            <div class="col">
                <img src="companies-logo/apple.png" alt="" width="90px" height="100px" id="apple">
            </div>
            <div class="col">
                <img src="companies-logo/carlsberg.png" alt="" width="130px" id="carlsberg">
            </div>
            <div class="col">
                <img src="companies-logo/citi.png" alt="" width="100px" id="citi">
            </div>
            <div class="col">
                <img src="companies-logo/ibm.png" alt="" width="100px" id="ibm">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <img src="companies-logo/facebook.png" alt="" width="100px">
            </div>
            <div class="col">
                <img src="companies-logo/vk.png" alt="" width="100px">
            </div>
            <div class="col">
                <img src="companies-logo/accenture.png" alt="" width="100px" id="accenture">
            </div>
            <div class="col">
                <img src="companies-logo/teradata.png" width="100px" alt="" id="teradata">
            </div>
            <div class="col">
                <img src="companies-logo/fzn.png" width="100px" alt="" id="fzn">
            </div>
        </div>

        <div class="row mt-5">

            <div class="col">
                <img src="companies-logo/intel.png" width="100px" alt="" id="intel">
            </div>
            <div class="col">
                <img src="companies-logo/google.png" width="100px" alt="">
            </div>
            <div class="col">
                <img src="companies-logo/hubo.png" alt="" width="130px" height="" id="hubo">
            </div>
            <div class="col">
                <img src="companies-logo/eldi.png" alt="" width="120px">
            </div>
            <div class="col">
                <img src="companies-logo/le.png" width="100px" alt="">
            </div>
        </div>
    </div>


    <div class="container" id="partner-section">
        <h1 class="text-center text-light" id="partner">WHY PARTNER UP</h1>
    </div>


    <div class="container">


        <div class="row my-5">
            <div class="col">
                <img class="icon" src="images/increase.png" alt="" width="80px">
                <h4 class="text-white mt-1 ms-5">Add A new Revenue System</h4>
                <p class="text-white">
                    Utilize lineage managed by MANTA to provide additional services.
                </p>
            </div>
            <div class="col">
                <img class="icon" src="images/globe.png" alt="" width="80px">
                <h4 class="text-white mt-1">Enchance Your Solution</h4>
                <p class="text-white">Include complete lineage directly in your existing management solution</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col">
                <img class="icon" src="images/computer.png" alt="" width="92px">
                <h4 class="text-white">Widen your portfolio</h4>
                <p class="text-white">Provide your customers with the best platform to stay ahead of the competition.</p>
            </div>
            <div class="col">
                <img class="icon" src="images/people.png" alt="" width="80px">
                <h4 class="text-white">Grow your Customer Base</h4>
                <p class="text-white">Expand your solution and win new customers.</p>
            </div>
        </div>

    </div>



    <footer class="container-fluid">

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
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="feedback.php">Feedback Page</a></li>
                            <li><a href="partners.php">Partners Page</a></li>
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="index.html">Log In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>





    </footer>



</body>

</html>