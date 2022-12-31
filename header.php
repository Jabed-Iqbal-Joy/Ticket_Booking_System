<?
session_start();
$_SESSION['userid']=null;
?>
<!DOCTYPE html>
<html lang="en">

<script type="text/javascript" language="javascript">
function open_bar() {
    console.log("hello");
    if(document.getElementById("profile").className=="profile pf_hidden")
    document.getElementById("profile").classList.replace('pf_hidden','pf_active');
    else {
        document.getElementById("profile").classList.replace('pf_active','pf_hidden');
    }

}
</script>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ticket Booking System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/autocomplete.js"></script>



</head>

<body>

    <!-- ======= Header ======= -->

    <!-- Start Top Bar -->
    <div class="head">
        <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:support@easyroutes.com">support@easyroute.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+018XX-XXXXXX</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>
            </div>
        </section>
        <!-- End Top Bar -->

        <!-- Header -->

        <header id="header" class="header d-flex align-items-center">

            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo d-flex align-items-center">
                    <h1>Easy ​<span>Routes</span></h1>

                </a>

                <nav id="navbar_service" class="navbar vehicle_book">
                    <ul>
                        <li><a href="search_vehicle.php?vehicle=bus"><span
                                    class="bi bi-bus-front vehicle_book_icon"></span>BUS</a></li>
                        <li><a href="search_vehicle.php?vehicle=train"><span
                                    class="bi bi-train-freight-front vehicle_book_icon"></span>Train</a></li>
                        <li><a href="search_vehicle.php?vehicle=flight"><span
                                    class="bi bi-airplane-fill vehicle_book_icon"></span>Flight</a></li>
                    </ul>
                </nav>


                <nav id="navbar" class="navbar">
                    <ul>
                        <!-- <li><a href="#index.php">Home</a></li> -->
                       
                        <li><a href="#about">About</a></li>
                        <!-- <li><a href="#service">Booking</a></li> -->
                        <!-- <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#contact">Contact us</a></li>
                        <?php
                        echo (isset($_SESSION['userid'])); 
                        if(isset($_SESSION['userid']))
                        {
                            echo ("set");
                            echo '<li><a><span id="signin" onclick="open_bar()">Profile</span> </a></li>';
                        }
                        else{
                            echo ("notset");
                            echo '<li ><a href="signin.php">Sign in</a></li>';
                        }
                        ?>
                    </ul>
                </nav>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->
        <div class="profile pf_hidden" id="profile">
            <img src="" alt="">
            <p>abcd</p>
            <a href="user_profile_update.php" class="btn">update profile</a>
            <a href="logout.php" class="delete-btn">logout</a>
            <div class="flex-btn">
                <a href="login.php" class="option-btn">login</a>
                <a href="register.php" class="option-btn">register</a>
            </div>
        </div>
    </div>

    <!-- End Header -->