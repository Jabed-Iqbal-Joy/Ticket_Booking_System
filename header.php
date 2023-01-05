<?php 
if(isset($message)){
    foreach($message as $message){
       echo '
       <div class="message">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
       </div>
       ';
    }
 }

?>




<script type="text/javascript" language="javascript">
function open_bar() {
    console.log("hello");
    if (document.getElementById("profile").className == "profile pf_hidden")
        document.getElementById("profile").classList.replace('pf_hidden', 'pf_active');
    else {
        document.getElementById("profile").classList.replace('pf_active', 'pf_hidden');
    }

}
</script>

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
                        <?php
                        if(isset($_SESSION['userid']))
                        {
                            echo '<li><a href="mybooking.php">My Booking</a></li>';
                        }
                        ?>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact us</a></li>
                        <?php
                        if(isset($_SESSION['userid']))
                        {
                            echo '<li><a><span id="signin" onclick="open_bar()">Profile</span> </a></li>';
                        }
                        else{
                            echo '<li ><a href="signin.php?page='.$page.'">Sign in</a></li>';
                        }
                        ?>
                    </ul>
                </nav>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
            <div class="profile pf_hidden" id="profile">
                <img src="uploaded_img/<?= $_SESSION['user_details']['u_img'];?>" alt="">
                <p><?=($_SESSION['user_details']['u_name']); ?></p>
                <a href="user_profile_update.php" class="btn">update profile</a>
                <a href="signout.php" class="delete-btn">logout</a>
            </div>
        </header><!-- End Header -->

    </div>

    <!-- End Header -->


    <style>
.messages .box-container {
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap: 1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.messages .box-container .box {
   border: var(--border);
   box-shadow: var(--box-shadow);
   background-color: var(--white);
   border-radius: .5rem;
   padding: 2rem;
}

.messages .box-container .box p {
   line-height: 1.5;
   padding: .5rem 0;
   font-size: 2rem;
   color: var(--light-color);
}

.messages .box-container .box p span {
   color: var(--green);
}


        </style>