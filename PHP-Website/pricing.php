<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pricing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="demo-request-page.css">


    <script type="text/javascript">
        var btn_click;
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

    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid">

            <a href="home-page.php" class="navbar-brand mx-3">
                <img src="images/logo.png" alt="Logo" width="70"><span class="ms-3 text-white">DataOInfra</span>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav">
                    <div id="first-div" class="divs">
                        <li class="nav-item">
                            <a href="pricing.php" class="nav-link active text-white">Pricing</a>
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
        <div id="information">
            <p>Here <span class="fw-bold">are some prices of available package configurations </span>that have been put according to
                the use of DataOInfra. In fact every package is custom-made. The price of the package is based on the selected features
                and number of scripts in the package.</p>
        </div>

        <div id="information-2">
            <p> <span class="fw-bold">You can also get in touch with us</span> for discussing management goals and objectives and to get a better understanding of your
                enviroment. This will help us design a package according to your needs. </p>
        </div>
    </div>




    
    <div class="card-group" id="pricing-card" tabindex="1">

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
                    <!-- <a href="" class="btn btn-success">Book Now</a> -->
                    <button class="btn btn-success text-light book-btn-1">Book Now</button>
                    <script>
                        $(".book-btn-1").click(function() {
                            $(".card-group").fadeOut(1000);
                            $("#confirm-box").removeClass("hidden");
                            btn_click = 1;
                           
                        });
                    </script>
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
                    <!-- <a href="" class="btn btn-success">Book Now</a> -->
                    <button class="btn btn-success text-light book-btn-2">Book Now</button>
                    <script>
                        $(".book-btn-2").click(function() {
                            $(".card-group").fadeOut(1000);
                            $("#confirm-box").removeClass("hidden");
                            btn_click = 2;
                            
                        });
                    </script>
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
                    <!-- <a href="" class="btn btn-success">Book Now</a> -->
                    <button class="btn btn-success text-light book-btn-3" onclick = "saveData_3()">Book Now</button>
                    <script>
                        $(".book-btn-3").click(function() {
                            $(".card-group").fadeOut(1000);
                            $("#confirm-box").removeClass("hidden");
                            btn_click = 3;
                            
                        });

                        function saveData_3() {
                            <?php button_3(); ?>
                        }
                    </script>
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
                    <!-- <a href="" class="btn btn-success">Book Now</a> -->
                    <button class="btn btn-success text-light book-btn-4" onclick="saveData()">Book Now</button>
                    <script>
                        $(".book-btn-4").click(function() {
                            $(".card-group").fadeOut(1000);
                            $("#confirm-box").removeClass("hidden");
                            btn_click = 4;
                            
                            
                        });

                        function saveData() {
                            <?php button_4();?>
                        }
                    </script>


                </p>
            </div>
        </div>



    </div>

    <div class="confirm-box hidden" id="confirm-box">
        <h4>Do You Want to Confirm Booking?</h4>
        <button id="btn-yes" class="btn btn-success">Yes</button>
        <script>
            $("#btn-yes").click(function() {
                $("#confirm-box").addClass("hidden");
                $(".payment-box").removeClass("hidden");

                /*Conditions For Payment Box Types*/
                if(btn_click==1)
                {
                    $("#package-type").text("Package Type:Basic");
                    $("#package-price").text("Package Price:50$/Mon");

                    
                }
                else if(btn_click==2) {
                    $("#package-type").text("Package Type:Premium");
                    $("#package-price").text("Package Price:75.99$/Mon");
                   
                }
                else if(btn_click==3) {
                    $("#package-type").text("Package Type:Supreme");
                    $("#package-price").text("Package Price:99.90$/Mon");
                   
                }
                else if(btn_click==4) {
                    $("#package-type").text("Package Type:Custom Made");
                    $("#package-price").text("Package Price:199.99$/Mon");
                    
                }
            });
        </script>

        <button id="btn-no" class="btn btn-danger">No!</button>
        <script>
            $("#btn-no").click(function() {
                $(".card-group").fadeIn(1000);
                $("#confirm-box").addClass("hidden");
            });
        </script>
    </div>

    <div class="payment-box text-center hidden">
        


        <p class="display-6 ">Booking Confirmed</p>
        <p class="display-6 lead" id="package-type"></p>
        <p class="display-6" id="package-price"></p>
        <button id="confirmed-btn" class="btn btn-success">Got It...</button>

        <script>
            $("#confirmed-btn").click(function() {
                $(".card-group").fadeIn(1000);
                $("#confirm-box").addClass("hidden");
                $(".payment-box").addClass("hidden");
                $(".pricing-card").focus();

                <?php 

                     $serverName = "localhost";
                     $userName = "root";
                     $password = "";
                     $databaseName = "WebsiteData";
                 
                 
                     $newConn  = new mysqli($serverName,$userName,$password,$databaseName);

                     if($newConn->connect_error) {
                        echo $newConn->error;
                    }

                    $createTable = "CREATE TABLE BOOKED_ORDERS (
                        ID INT(4) AUTO_INCREMENT PRIMARY KEY,
                        PACKAGE_TYPE VARCHAR(20) NOT NULL,
                        PACKAGE_PRICE VARCHAR(10) NOT NULL,
                        NAME VARCHAR(40) NOT NULL,
                        EMAIL VARCHAR(40) NOT NULL
                    );
                    ";

                    $newConn->query($createTable);

                    $package_type = $_SESSION["package_type"];
                    $package_price = $_SESSION["package_price"];
                    $name = $_SESSION["username"];
                    $email = $_SESSION["email"];

                    $insertQuery = "INSERT INTO BOOKED_ORDERS(PACKAGE_TYPE,PACKAGE_PRICE,NAME,EMAIL) VALUES ('$package_type','$package_price','$userName','$email');";

                    if($newConn->query($insertQuery)) {

                    }
                    else {
                        echo $newConn->error;
                    }

                    $newConn->close();
                    







                ?>
            });
        </script>
       
    </div>

    </form>

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

    <?php 
        function button_1() {
            $_SESSION["package_type"] = 'Basic';
            $_SESSION["package_price"] = '50$';
        }

        function button_2() {
            $_SESSION["package_type"] = 'Premium';
            $_SESSION["package_price"] = '75.99$';
        }

        function button_3() {
            $_SESSION["package_type"] = 'Supreme';
            $_SESSION["package_price"] = '99.90$';
        }

        function button_4() {
            $_SESSION["package_type"] = 'Custom Made';
            $_SESSION["package_price"] = '199.99$';
        }

    ?>

</body>

</html>