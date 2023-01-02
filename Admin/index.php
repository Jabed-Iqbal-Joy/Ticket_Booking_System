<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> -->

    <!-- Vendor JS Files -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script> -->


</head>
<body>
<?php include 'admin_header.php'; ?>
<script src="js/script.js"></script>

<section class="dashboard">

   <h1 class="title">Welcome To Dashboard..</h1>


   <!-- <div class="box-container"> -->

      <!-- <div class="box">
      
      <h3>0/-</h3>
      <p>total pendings</p>
      <a href="admin_orders.php" class="btn">see orders</a>
      </div> -->

      <!-- <div class="box">
      <h3>0/-</h3>
      <p>completed orders</p>
      <a href="admin_orders.php" class="btn">Add Vehicle</a>
      </div>

      <div class="box">
      <h3>0</h3>
      <p>orders placed</p>
      <a href="admin_orders.php" class="btn">see orders</a>
      </div>

      <div class="box">
      <h3>0</h3>
      <p>products added</p>
      <a href="admin_products.php" class="btn">see products</a>
      </div>

      <div class="box">
      <h3>0</h3>
      <p>total users</p>
      <a href="admin_users.php" class="btn">see accounts</a>
      </div>

      <div class="box">
      <h3>0</h3>
      <p>total admins</p>
      <a href="admin_users.php" class="btn">see accounts</a>
      </div>

      <div class="box">
      <h3>0</h3>
      <p>total accounts</p>
      <a href="admin_users.php" class="btn">see accounts</a>
      </div> -->

      <!-- <div class="box">
      <h3>0</h3>
      <p>total messages</p>
      <a href="admin_contacts.php" class="btn">see messages</a>
      </div> -->
   <!-- </div> -->
</section>



</body>
</html>