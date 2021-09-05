<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pricing</title>
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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="demo-request-page.css">
        
        <link rel="stylesheet" href = "navbar.css">
        
</head>
<body>

    <nav class="navbar navbar-expand-sm sticky-top">
        <div class="container-fluid">

            <a href="home-page.php" class="navbar-brand mx-3">
                <img src="images/logo.png" alt="Logo" width="70"><span class="ms-3 text-white">DataOInfra</span>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav">
                    <div id="first-div" class="divs">
                        <li class="nav-item">
                            <a  href="pricing.php" class="nav-link active text-white">Pricing</a>
                        </li>
                    </div>

                    <div class="mx-3" id="second-div">
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link  text-white">Gallery</a>
                        </li>
                    </div>

                    <div class="mx-3" id="third-div">
                        <li class="nav-item">
                            <a href="partners.php" class="nav-link text-white">Partners</a>
                        </li>
                    </div>

                    <div class="mx-3" id="fourth-div">
                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link text-white">Feedback</a>
                        </li>
                    </div>
                    <div class="mx-3" id="fifth-div">
                        <li class="nav-item">
                            <a href="about-us.php" class="nav-link text-white">About Us</a>
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

    <div class="container-fluid" id="pricing-title">
        <h1 class="text-center text-white">PRICING</h1>

    </div>
    
    
    <div class="container-fluid" id="pricing-info">
        <div id="information"><p>Here <span class="fw-bold">are some prices of available package configurations </span>that have been put according to  
            the use of DataOInfra. In fact every package is custom-made. The price of the package is based on the selected features 
            and number of scripts in the package.</p>
        </div>
    
        <div id="information-2"><p> <span class="fw-bold">You can also get in touch with us</span> for discussing management goals and objectives and to get a better understanding of your
            enviroment. This will help us design a package according to your needs. </p>
        </div>
    </div>
   

    

    <div class="card-group" id="pricing-card">

        <div class="card">
            <div class="card-header card-pricing-header">
                <h3 class="text-center mt-3">Features</h3>
            </div>
            <div class="card-body">
                <p class="text-center">Number of Users</p>
            </div>
            <div class="card-body heading-3">
                <p class="text-center">Direct Customer Support Time</p>
            </div>
            <div class="card-body heading-4">
                <p class="text-center">User Training</p>
            </div>
            <div class="card-body heading-5">
                <p class="text-center">Excel Support</p>
            </div>
            <div class="card-body heading-6">
                <p class="text-center">Api Support</p>
            </div>
            <div class="card-body ">
                <p class="text-center">Product Training Videos</p>
            </div>
            <div class="card-body">
                <p class="text-center">  
                    Booking
                </p>
            </div>
        </div>


        <div class="card">
            <div class="card-header card-pricing-header">
                <h3 class="text-center">Basic</h3>  
                <h3 class="text-center">$50.00/Mon</h3>
            </div>
            <div class="card-body">
                <p class="text-center">10</p>
            </div>
            <div class="card-body" id="into-week">
                <p class="text-center">Into Week</p>
            </div>
            <div class="card-body" id="training-header">
                <p class="text-center">3 training modules, 10 training tickets</p>
            </div>
            <div class="card-body text-center">
                <p class="material-icons">
                    
                </p>
            </div>
            <div class="card-body text-center api-support">
                <p class="material-icons">
                    
                </p>
            </div>
            <div class="card-body text-center">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center book-now-1">
                <p>
                    <a href="" class="btn btn-success">Book Now</a>
                </p>
            </div>
        </div>


        <div class="card">
            <div class="card-header card-pricing-header">
                <h3 class="text-center">Premium</h3>
                <h3 class="text-center">$75.99/Mon</h3>
            </div>
            <div class="card-body">
                <p class="text-center">50</p>
            </div>
            <div class="card-body">
                <p class="text-center">Into 3 Days.</p>
            </div>
            <div class="card-body">
                <p class="text-center">3 training modules, 10 training tickets</p>
            </div>
            <div class="card-body text-center">
                <p class="material-icons">
                    
                </p>
            </div>
            <div class="card-body text-center api-support">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center">
                <p>
                    <a href="" class="btn btn-success">Book Now</a>
                </p>
            </div>
        </div>



        <div class="card">
            <div class="card-header card-pricing-header">
                <h3 class="text-center">Supreme</h5>
                    <h3 class="text-center">$99.90/Mon</h3>
            </div>
            <div class="card-body">
                <p class="text-center">100</p>
            </div>
            <div class="card-body">
                <p class="text-center">Into 24 Hours</p>
            </div>
            <div class="card-body">
                <p class="text-center">3 training modules, 10 training tickets</p>
            </div>
            <div class="card-body text-center">
                <span class="material-icons">
                    verified
                </span>
            </div>
            <div class="card-body text-center api-support">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center">
                <p>
                    <a href="" class="btn btn-success">Book Now</a>
                </p>
            </div>
        </div>



        <div class="card">
            <div class="card-header card-pricing-header custom-made">
                <h3 class="text-center">Custom Made</h3>
                <h3 class="text-center">$199.99/Mon</h3>
            </div>
            <div class="card-body">
                <p class="text-center">Unlimited</p>
            </div>
            <div class="card-body">
                <p class="text-center">Into A Hour</p>
            </div>
            <div class="card-body">
                <p class="text-center">3 training modules, 10 training tickets</p>
            </div>
            <div class="card-body text-center excel-support-last">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center api-support">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center">
                <p class="material-icons">
                    verified
                </p>
            </div>
            <div class="card-body text-center">
                <p>
                    <a href="" class="btn btn-success">Book Now</a>
                </p>
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