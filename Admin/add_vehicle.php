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

</head>

<body>

    <?php include 'admin_header.php'; ?>
    <script src="js/script.js"></script>

    <section class="add-vehicles">

        <h1 class="title">add new Vehicle</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputBox">
                    <select name="category" class="box" required>
                        <option value="" selected disabled>Select Vehicle Type</option>
                        <option value="bus">bus</option>
                        <option value="train">train</option>
                        <option value="flight">flight</option>
                    </select>
                    <input type="text" name="name" class="box" required placeholder="Enter Vehicle Number">
                    <input type="text" name="name" class="box" required placeholder="Enter Total Seat">
                </div>
                <div class="inputBox">
                    <input type="text" name="name" class="box" required placeholder="Enter Vehicle name">
                    <input type="text" name="name" class="box" required placeholder="Enter Vehicle Class">
                    <input type="text" name="name" class="box" required placeholder="Enter Fare Per Seat">
                </div>
            </div>
            <textarea name="details" class="box" required placeholder="Enter Vehicle details" cols="30"
                rows="10"></textarea>
            <input type="submit" class="btn" value="add vehicle" name="add_vehicle">
        </form>

    </section>


</body>

</html>