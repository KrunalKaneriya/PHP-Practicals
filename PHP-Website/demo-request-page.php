<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Request A Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <link rel="stylesheet" href="demo-request-page.css">
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    
</head>

<body>

<script>
                $(document).ready(function() {
                    $("#submit-button").click(function (event) {
                        if($("#agreement").is(":checked")) {
                            <?php                         

                            $serverName = "localhost";
                            $databaseName = "WebsiteData";
                            $userName = "root";
                            $password = "";

                            $connection = new mysqli($serverName,$userName,$password,$databaseName);
                            $tableQuery = "CREATE TABLE REQUESTPAGE (
                                NAME VARCHAR(40),
                                EMAIL VARCHAR(40),
                                COMPANYNAME VARCHAR(40),
                                COUNTRYNAME VARCHAR(40),
                                PHONENUMBER NUMERIC(20),
                                MESSAGE VARCHAR(100)
                            );";

                            $connection->query($tableQuery);

                            $name = $_SESSION["username"];
                            $email = $_SESSION["email"];
                            $companyname = $_POST["form-company-name"];
                            $countryname = $_POST["form-country-name"];
                            $phonenumber = $_POST["form-number"];
                            $textAreaContent =htmlspecialchars($_POST["form-message"]);
                            $textAreaContent = stripslashes($textAreaContent);

                            $insertQuery = "INSERT INTO REQUESTPAGE (NAME,EMAIL,COMPANYNAME,COUNTRYNAME,PHONENUMBER,MESSAGE) VALUES ('$name','$email','$companyname','$countryname','$phonenumber','$textAreaContent');";
                            $connection->query($insertQuery);

                            $connection->close();

                            ?>
                        }
                    });
                });
            </script>

    <nav class="navbar navbar-expand-sm sticky-top">
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


    <div class="request-page">


        <section>
            <div class="heading">
                <h1 class="text-center display-5">Request A Demo of DataInfra</h1>
            </div>

            <div class="container ">
                <div class="row gx-5 pt-5">
                    <div class="col">
                        <p class="h4 ">By Using DataOInfra, our customers:</p>
                        <ul>
                            <li>
                                <p>Regain trust in their data and make informed decisions.</p>
                            </li>
                            <li>
                                <p>reduce risk and achieve full regulatory compliance.</p>
                            </li>
                            <li>
                                <p>boost their data governance and make DG solutions worth the investment</p>
                            </li>
                            <li>
                                <p>save resources by having data journey understandable for all decision makers</p>
                            </li>
                            <li>
                                <p> significantly shorten time-to-market</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col">
                        <div class="right-page-book-demo">
                            <div class="request-form-header">
                                <h3>Request a Demo Via message</h3>
                                <p class="text-muted ignored-text">Fill out this form and we will get back to you.</p>
                            </div>

                            <div class="request-form-body">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <p class="text-muted">Name</p>
                                    <input type="text" class="form-control form-control-sm" placeholder="Enter Name"
                                        name="form-name" value="<?php  echo $_SESSION['username'];  ?>" disabled>

                                    <p class="text-muted mt-3">Business Email</p>
                                    <input type="text" disabled name="form-email" id="" class="form-control form-control-sm" placeholder="Enter Email"
                                    value="<?php echo $_SESSION["email"]; ?>" > 

                                    <p class="text-muted mt-3">Company Name</p>
                                    <input type="text" name="form-company-name" id=""
                                        class="form-control form-control-sm" placeholder="Company Name">

                                    <p class="text-muted mt-2">Country Name</p>
                                    <input type="text" name="form-country-name" id="" class="form-control form-control-sm" placeholder="Country">

                                    <p class="text-muted mt-2">Phone Number</p>
                                    <input type="number" name="form-number" id="" class="form-control form-control-sm" placeholder="Phone Number">

                                    <p class="text-muted mt-3">Message</p>
                                    <textarea name="form-message" id="" cols="10" rows="5"
                                        class="form-control" placeholder="Enter Message Here"></textarea>

                                    <div class="mt-4">
                                        <input type="checkbox" name="form-agreement" id="agreement"
                                            class="form-check-input mx-2" required>
                                        <label for="agreement" id="agreementlabel">I Agree to the Terms And Conditions And
                                            Privacy Policy</label>
                                    </div>

                                    <div>
                                        <button type="submit" id="submit-button" class="btn btn-primary form-control mt-5 submit-button">Book A Free Demo</button>
                                    </div>
                                </form>

                                <span id="snackbar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            



           


        </section>

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