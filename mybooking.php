<?php
session_start();
$page="index";
include 'config.php';
$user = $_SESSION['user_details']['u_name'];
$sql = " SELECT * FROM booking_details where b_user_name='$user' ORDER BY b_id ASC";
$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
    <?php include('header.php'); ?>
    <main>
        <div class="container booking">
            <div class="heading">
                <h5>My Booking</h5>
            </div>
            <div class="tableee container">
                <div class="row">
                    <table class="col-xs-7 table-bordered table-striped table-condensed table-fixed">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Seat</th>
                            <th>Total Fare</th>
                            <!-- <th>User name</th>  <td><?//php echo $rows['b_user_name'];?></td> -->
                            <th>Vehicle Type</th>
                            <th>Vehicle Number</th>
                            <th>Start Point</th>
                            <th>End Point</th>
                            <th>Dep. Time</th>
                            <th>Arr. Time</th>
                            <th>Journey Date</th>
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
            </div>

        </div>
        </div>
        </div>
    </main>
    <?php
include 'footer.php'
?>
</body>

<style>
.tableee {
    margin: 10px;
    max-height: fit-content;
    max-width: fit-content;
    margin-bottom: 50px;
}

.booking {
    padding: 10px;
    min-height: 40vh;
}

.heading {
    position: rerelative;
    margin-left: 560px;
    width: 200px;
    padding: 10px;
    background-color: #008374;
}

.table-fixed tbody {
    display: block;
    height: 400px;
    overflow-y: auto;
}

table {
    text-align: center;
}

table th {
    position: sticky;
    top: 0px;
    background-color: #eee;
    border: 1px solid black;
}

td {
    background-color: #E4F5D4;
    border: 1px solid black;
}
</style>