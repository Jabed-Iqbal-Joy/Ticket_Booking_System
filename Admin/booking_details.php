<?php
@include 'config.php';
session_start();
?>

<?php
$sql = " SELECT * FROM booking_details ORDER BY b_id ASC ";
$result = $connect->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking_details</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>

    <?php include 'admin_header.php'; ?>
    <script src="js/script.js"></script>

    <div>
        <section class="booking-tb">
            <h1 class="title">BOOKING DETAILS</h1>
            <div class="scroll">
                <table class="scroll">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Seat</th>
                        <th>Total Fare</th>
                        <th>User name</th>
                        <th>Vehicle Type</th>
                        <th>Vehicle Number</th>
                        <th>Start Point</th>
                        <th>End Point</th>
                        <th>Dep. Time</th>
                        <th>Arr. Time</th>
                        <th>Booking Date</th>
                    </tr>
                    <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
                    <tr>
                        <td><?php echo $rows['b_id'];?></td>
                        <td><?php echo $rows['b_p_name'];?></td>
                        <td><?php echo $rows['b_p_gender'];?></td>
                        <td><?php echo $rows['b_p_mobile'];?></td>
                        <td><?php echo $rows['b_p_email'];?></td>
                        <td><?php echo $rows['b_p_seat'];?></td>
                        <td><?php echo $rows['b_total_fare'];?></td>
                        <td><?php echo $rows['b_user_name'];?></td>
                        <td><?php echo $rows['b_v_type'];?></td>
                        <td><?php echo $rows['b_v_number'];?></td>
                        <td><?php echo $rows['b_start_point'];?></td>
                        <td><?php echo $rows['b_end_point'];?></td>
                        <td><?php echo $rows['b_dep_time'];?></td>
                        <td><?php echo $rows['b_arr_time'];?></td>
                        <td><?php echo $rows['b_date'];?></td>

                    </tr>
                    <?php
                }
            ?>
                </table>
            </div>
        </section>
    </div>

</body>

</html>