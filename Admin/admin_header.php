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

      <a href="admin_page.php" class="logo"><h1>Admin<span>Panel</span></h1></a>

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">Add Vehicle</a>
         <a href="admin_orders.php">Add Shedule</a>
         <a href="admin_users.php">Booking Details</a>
         <a href="admin_contacts.php">user</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      

   </div>

</header>