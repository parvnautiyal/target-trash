<?php 
session_start();
if(isset(  $_SESSION['name']  ) )
    header("Location: dashclient.php");
    ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TargetTrash|Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="home.php"><img src="img/logtrash.png" style="float:left; height:68px; width:100px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <nav class="main-menu mobile-menu">
                            <ul>
                                <li><a class="active" href="home.php">Home</a></li>
                               
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="price.html">Price List</a></li>
                                <li><a href="signup.php">Sign Up</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="waste.html">Waste Around Us</a></li>
                                
                               
                                <li class="search-btn search-trigger"><i class="fa fa-trash" href="home.html"></i></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <div class="hero-slider">
            <div class="hero-items owl-carousel">
                <div class="single-hero-item set-bg" data-setbg="img/back.jpg" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hero-text">
                                    <h1 style="color:black;">Want no waste?</h1>
                                    <p style="font-size:20px; color:black;">Introducing a brand new platform to get rid of unwanted waste materials. </p>
                                    <a href="#about" class="primary-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
        <!-- Hero Section End -->
        <!-- Class Booking Section Begin -->
       
        <!-- Class Booking Section End -->
        <!-- Services Section Begin -->
        
        <section id="about" class="lifestyle-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="lifestyle-text">
                            <div class="section-title">
                                <h2>About Us</h2>
                                <p>Target Trash takes the initiative to use technology for a better and effective waste management.
                                    <br>
                                    It is a network consisting of junk dealers who operate within their areas to collect waste materials from customers who wish to sell.
                                <br>
                            Customers can sell all the materials that they do not find useful at a pre-determined price to the junk dealers. This way disposing of these wastes happens in a environment friendly manner as the dealers can recycle the products and sell them further on.
                            </p>
                            <hr>
                            <p>Target Trash also inspires locals to keep a check on their surroundings and report any kind of mismanagement in waste related issues, i.e. bins not treated properly, collection of garbage, etc. If they see any kind of problem they can file a report and our team would look into the matter and propose a solution right away.
                            </p>
    
                                <a href="signup_page_client.php" class="primary-btn">Join Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lifestyle-img">
                            <img src="img/about.png" style="margin-top:25%;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       
        <!-- Services Section End -->
        <!-- Client Says Section Begin -->
        <section class="client-says set-bg" data-setbg="img/say.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="client-text">
                            <h2>“Pollution is nothing but the resources we are not harvesting. We allow them to be dispersed because we’ve been ignorant of their value.” </h2>
                            <h4>R. Buckminster Fuller<h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Says Section End -->
        <!-- Lifestyles Section Begin -->
        <section class="services-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 m-auto text-center">
                        <div class="section-title">
                            <h2>Join Our Services Today</h2>
                            <p>Join today to be the change. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services">
                            <i class="fa fa-trash"></i>
                            <a href="price.html"><h4>Prices For Products</h4></a>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services">
                            <i class="fa fa-trash"></i>
                            <a href="login_page_client.php"><h4>Sell Junk</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services">
                                <i class="fa fa-trash"></i>
                            <a href="login_page_company.php"> <h4>Buy Junk</h4></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <div class="single-services">
                                <i class="fa fa-trash"></i>
                                <a href="waste.html"><h4>Waste Around Us</h4></a>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!-- Lifestyles Section End -->
        <!-- Boxes Section Begin -->
        <div class="boxes-section">
            <div class="container-fluid">
                <div class="boxes-img">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="boxes-item">
                                <div class="boxes-pic">
                                    <img src="img/reduce.jpg" style="height:100%; width:100%;" alt="">
                                    <div class="boxes-text">
                                        <h1>Reduce</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="boxes-item">
                                <div class="boxes-pic">
                                    <img src="img/reuse.jpg" style="height:100%; width:100%;" alt="">
                                    <div class="boxes-text">
                                        <h1>Reuse</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="boxes-item">
                                <div class="boxes-pic">
                                    <img src="img/recycle.jpg"  style="height:100%; width:100%;" alt="">
                                    <div class="boxes-text">
                                        <h1>Recycle</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <!-- Boxes Section End -->
        <!-- Call To Section Begin -->
        <section class="callto-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="callto-text">
                            <h2>Looking to buy recyclable materials?</h2>
                            <p>Come and join our network.</p>
                            <a href="signup_page_company.php" class="primary-btn callto-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Section End -->
        <!-- Map Section Begin -->
    
        <!-- Map Section End -->
        <!-- Footer Section Begin -->
        <footer class="footer-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-text">
                            <div class="reserved"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="home.html">TargetTrash </a><i class="fa fa-heart-o" aria-hidden="true"></i> 
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
    <div class="social-links">
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
        <!-- Search model -->
       
        <!-- Search model end -->
        
        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/circle-progress.min.js"></script>
        <script src="js/main.js"></script>
    </body>
    
    </html>