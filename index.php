<?php
session_start();
$page="index";
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
    <?php include('header.php'); ?>
    <main id="main">
        <!--================ Banner==  =================-->
        <div class="banner">
            <img src="assets/img/banner1.jpg" class="bg">
        </div>
        <!--================ Banner  =================-->



        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap" id="service" class="service">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"
                data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Our Service</h2>
                    <!-- <p>Who are in extremely love with eco friendly system.</p> -->
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <a style="text-decoration: none" href="search_vehicle.php?vehicle=bus">
                            <div class="facilities_item">
                                <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Bus</h4>
                                <p>Buy bus ticket anytime from anywhere with just a click</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a style="text-decoration: none" href="search_vehicle.php?vehicle=train">
                            <div class="facilities_item">
                                <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Train</h4>
                                <p>Buy rail tickets online in three easy steps: search, select and pay.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="search_vehicle.php?vehicle=flight">
                            <div class="facilities_item">
                                <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Air</h4>
                                <p>Book domestic air tickets online lowest fare possible.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                        quis
                        dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>
        </section>
    </main>


    <?php
include 'footer.php'
?>
</body>