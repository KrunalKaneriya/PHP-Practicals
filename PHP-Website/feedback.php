<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&family=Open+Sans:wght@300;400;600;700;800&family=Lato:wght@300;400;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="styles.css">

    <script type="text/javascript">
        setTimeout(function() {
            $(".loader").fadeOut();
            $("nav").addClass("sticky-top");
        }, 2000);
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit-btn").click(function(event) {
                var textareacontent = $("#messagetextarea").val();
                if (textareacontent == "") {
                    alert("Enter A Message...");
                    event.preventDefault();
                } else {

                }
            });
        });
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
                            <span class="text-white nav-item">
                                <?php echo $_SESSION["username"]; ?>
                            </span>
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


    <div id="feedback-header" class="container-fluid">
        <h1 id="feedback-title" class="text-center text-white">FEEDBACK</h1>
    </div>

    <div class="container-fluid" id="main-box">
        <h2 class="text-center" id="contact-us-title">Contact US</h2>
        <div class="container-fluid" id="feedback-body">
            <h5 class="text-center">You Can Give Your Choices And Opinions And Your Experience So we can improve
                Customer Satisfaction and Give you Better Value for Money</h5>

        </div>
    </div>

    <form action="feedback-database.php" method="post" id="feedback-form">
        <div class="container-fluid" id="feedback-div">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label mt-4">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $_SESSION['username'];  ?>" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="email" class="form-label mt-4">Email:</label>
                    <input type="email" name="email" id="email-input" class="form-control" placeholder="Enter Email" value="<?php echo $_SESSION['email'];    ?>" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="message" class="form-label mt-4">Message</label>
                    <textarea name="message" id="messagetextarea" cols="55" rows="5" class="form-control"></textarea>

                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>

            </div>
        </div>
    </form>

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