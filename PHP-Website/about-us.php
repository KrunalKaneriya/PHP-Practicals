<?php
    session_start();
    $serverName = "localhost";
    $password = "";
    $username = "root";
    $dbname = "WebsiteData";
    
    $sql = new mysqli($serverName,$username,$password,$dbname);

    $sqlQuery = "SELECT * FROM FEEDBACK;";
    $feedbackdata = $sql->query($sqlQuery);
    $sql->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
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


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
       setTimeout(function() {
           $(".loader").fadeOut();
           $("nav").addClass("sticky-top");
        },2000);

        
    </script>
    
</head>
<body>

    <div class="loader" style="background-color: aliceblue; position:fixed; visibility: visible; height: 768px; width: 100%; z-index: 5;">
        <img style="position: relative; left:450px; top: 80px;" src="images/loading.gif" alt="">
   </div>

    <nav class="navbar navbar-expand-sm ">
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


    
        <div id="about-us-header" class="container-fluid">
            <h1 id="about-us-title" class="text-center text-white">About Us</h1>
        </div>

        <div id="about-us-info" class="container-fluid mt-5">
            <div class="row">
                <div class="col text-center" id="about-us-card-title"><h2>DataOInfra flows across data environments just like fish swims across ocean.</h2></div>
                
            </div>

            <div class="row">
                <div class="col text-left">
                    <p>MANTA is a world-class data lineage platform that automatically scans your data environment to build a powerful map of all data flows and deliver it through a native UI and other channels to both technical and non-technical users. With MANTA, everyone gets full visibility and control of their data pipeline.</p>
                </div>
            </div>

            <div class="row">
                <div class="col text-left">
                    <p>We are helping mid-size and enterprise-level companies on all habitable continents, and our 80+ employees are split between our offices in the US (NYC and Tampa) and Europe (Prague). From humble startup beginnings, we’ve already been through two investment rounds, the most recent one being a Series A with Bessemer Venture Partners, SAP.io, Senovo VC, and Credo Ventures. We are growing quickly, so you should definitely check out our Careers page, just in case we have an open spot for you.</p>
                </div>
            </div>

            <div class="row">
                <div class="col text-left">
                    <p>MANTA was recognized in the 2021 Data Management Planning Guide by Gartner, the 2020 Data & AI Landscape by First Mark, Accel 2020 Euroscape, and Top Czech Startups 2020 by Forbes, among other places</p>
                </div>
            </div>

            <div class="row">
                <div class="col text-left">
                    <p>To deliver a first-class product, we have a strict Quality Policy. And to keep everyone’s data safe, a solid Information Security Policy is in place. On top of that, we are proudly compliant with two major ISO certifications (ISO 9001, ISO 27001).</p>
                </div>
            </div>


        </div>

        

        <div id="feedbacks-customers" class="text-center container-fluid">
            <div id="feedback-customers-header">
                <h3 class="text-black">Feedbacks By Our Customers</h3>
            </div>

            <div id="feedback-customers-body">
                <table class="table table-bordered table-responsive-sm h-auto" id="myTable">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Details</th>
                    </tr>

                    <?php while($rows = $feedbackdata->fetch_assoc())
                        {

                    ?> 
                    <tr>
                        <td><?php echo $rows["NAME"];?></td>
                        <td><?php echo $rows["EMAIL"];?></td>
                        <td><?php echo $rows["DETAILS"];?></td>
                    </tr>       
                    <?php 

                        }

                    ?>

                </table>
            </div>
       

        </div>

        <footer class="container-fluid mt-5" id = "footer-about-us">

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