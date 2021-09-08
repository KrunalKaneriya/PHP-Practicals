<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Open+Sans:wght@300;400;600;700;800&family=Lato:wght@300;400;700;900&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="gallery.css">
    <script type="text/javascript">
        setTimeout(function() {
            $(".loader").fadeOut();
            $("nav").addClass("sticky-top");
        }, 2000);
    </script>
</head>

<body>
    <div class="loader" style="background-color: aliceblue; position:fixed; visibility: visible; height: 768px; width: 100%; z-index: 5;">
        <img style="position: relative; left:630px; top: 240px;" src="images/Preloader_1.gif" alt="">
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
                    <div class="mx-3 " >
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

     <div class="container-fluid" id="gallery-title-div">
        <h1 class="text-center heading text-white" id="gallery-title">GALLERY</h1>
     </div>

     <div class="container-fluid" style="background-color: #444444;">

     
    <div class="container-fluid" id="carousel-container">
        <div class="carousel slide carousel-fade" data-ride = "carousel" data-interval="false" id="gallery-carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselCaptions" data-slide-to="0" ></li>
                <li data-target="#carouselCaptions" data-slide-to="1" class="active"></li>
                <li data-target="#carouselCaptions" data-slide-to="2"></li>
                <li data-target="#carouselCaption" data-slide-to="3"></li>
            </ol>
    
            <div class="carousel-inner">
                <div class="carousel-item " >
                    <img src="images/meeting-2.jpeg" alt="Meeting Image" width="1180" id="meeting">
                    <div class="carousel-caption">
                        <h4>First Seminar With Owners of Company</h4>
                        <p>This is the First Seminar With The Owners of Company Discussing the Future of Company</p>
                    </div>
                </div>
    
                <div class="carousel-item ">
                    <img src="images/seminar.jpg" alt="Seminar Image" width="1400" id="seminar">
                    <div class="carousel-caption">
                        <h4>Training Session To Employees Of The Company</h4>
                        <p>Training Session By The Ex-Employee of Google giving training to Employees of Company Giving New Technologies Overview</p>
                    </div>
                </div>
    
                <div class="carousel-item " >
                    <img src="images/award.jpg" alt="Award Winning Photo" width="1100" height="630" id="award">
                    <div class="carousel-caption">
                        <h4>DataOInfra Awarded in Top Bussiness Awards</h4>
                        <p>This Photo is Biggest Achievement of DataOInfra to win the Best Business Award Throughout the whole India.</p>
                    </div>
                </div>
    
                <div class="carousel-item active" >
                    <img src="images/award-2.png" alt="Tech Startup Award" width="1100" height="630" id="award-2">
                    <div class="carousel-caption">
                        <h4>Award For Best Tech Startup</h4>
                        <p>This image is the Achievement for DataOInfra for Why this Firm was Created. It Won the Best Tech Startup Award.</p>
                    </div>
                </div>
            </div>
    
            <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
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