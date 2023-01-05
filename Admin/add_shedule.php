<?php
@include 'config.php';
session_start();
// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// };
$query = "SELECT destination_name FROM destination ORDER BY destination_name ASC";
$result = $connect->query($query);
$data = array();
foreach($result as $row)
{
   $data[] = array(
      'label' => $row['destination_name'],
      'value' => $row['destination_name']
   );
}
if(isset($_POST['add_shedule'])){
    
   $v_type = $_POST['v_type'];
   $v_type = filter_var($v_type, FILTER_SANITIZE_STRING);
   $v_number = $_POST['v_number'];
   $v_number = filter_var($v_number, FILTER_SANITIZE_STRING);
   $start_point = $_POST['start_point'];
   $start_point = filter_var($start_point, FILTER_SANITIZE_STRING);
   $end_point = $_POST['end_point'];
   $end_point = filter_var($end_point, FILTER_SANITIZE_STRING);
   $dep_time = $_POST['dep_time'];
   $dep_time = filter_var($dep_time, FILTER_SANITIZE_STRING);
   $arr_time = $_POST['arr_time'];
   $arr_time = filter_var($arr_time, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);
   $free_seat = $_POST['free_seat'];
   $free_seat = filter_var($free_seat, FILTER_SANITIZE_STRING);
   $free_seat_index = $_POST['free_seat_index'];
   $free_seat_index = filter_var($free_seat_index, FILTER_SANITIZE_STRING);

   $sql= (" SELECT * FROM available_vehicle WHERE av_v_number='$v_number' and date='$date' ");
   $query=$connect->query($sql);
  
   if(mysqli_num_rows($query)>0){
      $message[] = 'This Shedule already exist!';
   }else{

      $insert_shedule=mysqli_query($connect,"INSERT INTO available_vehicle (av_v_type, av_v_number,start_point,end_point,dep_time,arr_time,date,free_seat,free_seat_index) 
      VALUES('$v_type','$v_number','$start_point', '$end_point' ,'$dep_time','$arr_time','$date','$free_seat','$free_seat_index')");

      if($insert_shedule){
            $message[] = 'new Vehicle Shedule added!';
      }
   }
};
?>
<?php
$sql = " SELECT * FROM available_vehicle ORDER BY av_id ASC ";
$result = $connect->query($sql);
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
    <script src="../assets/js/autocomplete.js"></script>

</head>

<body>

    <?php include 'admin_header.php'; ?>
    <script src="js/script.js"></script>

    <div style="display: flex">
        <section class="add-shedule">
            <h1 class="title">ADD NEW SHEDULE</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="inputBox">
                    <select name="v_type" class="box" required>
                        <option value="" selected disabled>Select Vehicle Type</option>
                        <option value="bus">bus</option>
                        <option value="train">train</option>
                        <option value="flight">flight</option>
                    </select>
                    <input type="text" name="v_number" class="box" required placeholder="Enter Vehicle Number">
                    <input type="text" name="start_point" id="start_point" class="box" required
                        placeholder="Enter starting point">
                    <input type="text" name="end_point" id="end_point" class="box" required
                        placeholder="Enter end point">
                    <input type="time" name="dep_time" class="box" required placeholder="Enter departure time">
                    <input type="time" name="arr_time" class="box" required placeholder="Enter arrival time">
                    <input type="date" name="date" class="box" required placeholder="Enter date" id="date">
                    <input type="text" name="free_seat" class="box" required placeholder="Enter available seat">
                    <input type="text" name="free_seat_index" class="box" required placeholder="Enter available index">
                </div>
                <input type="submit" class="btn" value="add Shedule" name="add_shedule">
            </form>
        </section>
    </div>
    <div class="div">
        <section class="add-vehicles">
            <h1 class="title">SHEDULE LIST</h1>
            <div class="scroll">
                <table class="scroll">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Number</th>
                        <th>Start Point</th>
                        <th>End Point</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Date</th>
                        <th>Free Seat</th>
                        <th>Free Seat Index</th>
                    </tr>
                    <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
                    <tr>

                        <td><?php echo $rows['av_id'];?></td>
                        <td><?php echo $rows['av_v_type'];?></td>
                        <td><?php echo $rows['av_v_number'];?></td>
                        <td><?php echo $rows['start_point'];?></td>
                        <td><?php echo $rows['end_point'];?></td>
                        <td><?php echo $rows['dep_time'];?></td>
                        <td><?php echo $rows['arr_time'];?></td>
                        <td><?php echo $rows['date'];?></td>
                        <td><?php echo $rows['free_seat'];?></td>
                        <td><?php echo $rows['free_seat_index'];?></td>

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
<script>
var todayDate = new Date().toISOString().slice(0, 10);
document.getElementById("date").setAttribute('min', todayDate);

var auto_complete = new Autocomplete(document.getElementById('start_point'), {
    data: <?php echo json_encode($data) ?>,
    maximumItems: 10,
    highlightTyped: true,
    highlightClass: 'fw-bold text-primary'
});

var auto_complete = new Autocomplete(document.getElementById('end_point'), {
    data: <?php echo json_encode($data) ?>,
    maximumItems: 10,
    highlightTyped: true,
    highlightClass: 'fw-bold text-primary'
});
</script>