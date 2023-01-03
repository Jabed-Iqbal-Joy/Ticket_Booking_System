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

<header class="header">

   <div class="flex">

      <a href="index.php" class="logo"><h1>Admin<span>Panel</span></h1></a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="add_vehicle.php">Add Vehicle</a>
         <a href="add_shedule.php">Add Shedule</a>
         <a href="booking_details.php">Booking Details</a>
         <a href="user_details.php">user</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      

   </div>

</header>