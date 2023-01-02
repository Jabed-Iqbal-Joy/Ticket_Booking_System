<?php
@include 'config.php';
session_start();
// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login.php');
// };
if(isset($_POST['add_vehicle'])){
    
   $v_type = $_POST['v_type'];
   $v_type = filter_var($v_type, FILTER_SANITIZE_STRING);
   $v_name = $_POST['v_name'];
   $v_name = filter_var($v_name, FILTER_SANITIZE_STRING);
   $v_number = $_POST['v_number'];
   $v_number = filter_var($v_number, FILTER_SANITIZE_STRING);
   $v_class = $_POST['v_class'];
   $v_class = filter_var($v_class, FILTER_SANITIZE_STRING);
   $v_seat = $_POST['v_seat'];
   $v_seat = filter_var($v_seat, FILTER_SANITIZE_STRING);
   $v_fare = $_POST['v_fare'];
   $v_fare = filter_var($v_fare, FILTER_SANITIZE_STRING);

   $sql= (" SELECT * FROM vehicle WHERE v_number='$v_number' ");
   $query=$connect->query($sql);
  
   if(mysqli_num_rows($query)>0){
      $message[] = 'This vehicle already exist!';
   }else{

      $insert_vehicles=mysqli_query($connect,"INSERT INTO vehicle(v_type, v_name, v_number,v_class,v_total_seat,v_fare_per_seat) 
      VALUES('$v_type','$v_name','$v_number', '$v_class' ,'$v_seat','$v_fare')");

      if($insert_vehicles){
            $message[] = 'new Vehicle added!';
      }
   }
};
?>
<?php
$sql = " SELECT * FROM vehicle ORDER BY v_id ASC ";
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

</head>

<body>

    <?php include 'admin_header.php'; ?>
    <script src="js/script.js"></script>

    <div style="display: flex">
    <section class="add-vehicles">
        <h1 class="title">add new Vehicle</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="inputBox">
                <select name="v_type" class="box" required>
                    <option value="" selected disabled>Select Vehicle Type</option>
                    <option value="bus">bus</option>
                    <option value="train">train</option>
                    <option value="flight">flight</option>
                </select>
                <input type="text" name="v_name" class="box" required placeholder="Enter Vehicle name">
                <input type="text" name="v_number" class="box" required placeholder="Enter Vehicle Number">
                <input type="text" name="v_class" class="box" required placeholder="Enter Vehicle Class">
                <input type="text" name="v_seat" class="box" required placeholder="Enter Total Seat">
                <input type="text" name="v_fare" class="box" required placeholder="Enter Fare Per Seat">
            </div>
            <input type="submit" class="btn" value="add vehicle" name="add_vehicle">
        </form>
    </section>
    <section class="add-vehicles">
        <h1 class="title">VEHICLE LIST</h1>
        <div class="scroll">
        <table class="scroll">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Number</th>
                <th>Class</th>
                <th>Seat</th>
                <th>Fare</th>
            </tr>
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['v_id'];?></td>
                <td><?php echo $rows['v_type'];?></td>
                <td><?php echo $rows['v_name'];?></td>
                <td><?php echo $rows['v_number'];?></td>
                <td><?php echo $rows['v_class'];?></td>
                <td><?php echo $rows['v_total_seat'];?></td>
                <td><?php echo $rows['v_fare_per_seat'];?></td>
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