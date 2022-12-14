<?php
include 'config.php';
session_start();
$page="search_vehicle&vehicle=".$_GET['vehicle'];

if(isset( $_SESSION['Vehicle_list'])){
    $max1 = count($_SESSION['Vehicle_list']);
    for ($row = 0; $row < $max1; $row++)
       unset($_SESSION['Vehicle_list'][$row]);
    
}

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
if(isset($_POST['search'])){

    $dest_from = $_POST['dest_from'];
    $dest_from = filter_var($dest_from ,FILTER_SANITIZE_STRING);
    $dest_to = $_POST['dest_to'];
    $dest_to = filter_var($dest_to ,FILTER_SANITIZE_STRING);
    $search_date1 = $_POST['search_date1'];
    $search_date1 = filter_var($search_date1 ,FILTER_SANITIZE_STRING);
    $search_date2 = $_POST['search_date2'];
    $search_date2 = filter_var($search_date2 ,FILTER_SANITIZE_STRING);
    $v_type = $_GET['vehicle'];
   $check_available_vehicle  =  $connect->query("SELECT * FROM `available_vehicle` 
                    INNER JOIN vehicle
                    ON available_vehicle.av_v_number=vehicle.v_number
                    WHERE start_point = '$dest_from' AND end_point = '$dest_to' AND date='$search_date1' AND av_v_type='$v_type' ");
   if( mysqli_num_rows($check_available_vehicle) > 0){
        while ($fetch_products = mysqli_fetch_assoc($check_available_vehicle)) {
            $_SESSION['Vehicle_list'][] = $fetch_products;
        }
        header('location:available_vehicle.php');
   }
   else{
        $message[] = "No Route Found";

   }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
    <?php include('header.php'); ?>
    <main>
        <section class="mb-5" id="search">
            <div class="search_level">
                <h1>
                    <?php $vehicle = $_GET['vehicle']; echo strtoupper($vehicle);?>
                </h1>
            </div>
            <div class="search_area">
                <form action="" method="POST">
                    <div class="search-from-grp mb-2">
                        <label class="src-from-lvl">From</label>
                        <input type="text" class="form-control " id="dest_from" required="Required" name="dest_from"
                            placeholder="Enter City" maxlength="15" value="">
                    </div>
                    <div class="search-from-grp">
                        <label class="src-from-lvl">To</label>
                        <input type="text" class="form-control " id="dest_to" required="Required" name="dest_to"
                            placeholder="Enter City" maxlength="15" value="" autocomplete="off">
                    </div>
                    <div class="row mt-2" style=" width: 94%; margin-left: 20px; ">
                        <div class="col-md-6">
                            <label class="src-from-lvl">Date of Journey</label>
                            <input type="date" class="form-control " id="search_date1" required="Required"
                                name="search_date1" placeholder="Select Journey Date" maxlength="15" value=""
                                autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label class="src-from-lvl">Date of Return(Optional)</label>
                            <input type="date" class="form-control " id="search_date2" name="search_date2"
                                placeholder="Select Return Date" maxlength="15" value="" autocomplete="off">
                        </div>

                    </div>
                    <div class="not_f" id="not_f" style="display:none;">
                        <div
                            style="font-size: 14px; color: rgb(235, 83, 90); display: flex; background: rgb(243, 248, 245); border-radius: 3px; padding-left: 0px; margin: 15px 15px;">
                            <div
                                style="width: 45.66px;height: 40px;background: #D9E9DE;border-radius: 3px 0px 0px 3px;padding-top: 10px">
                                <i class="bi bi-info-lg"
                                    style="font-size:30px;color:green;margin-bottom:120px;margin-left:7px;"></i>
                            </div>
                            <div style="margin-left: 10px;padding-top: 10px">No bus found in return route</div>
                        </div>

                    </div>
                    <div class="search-from-grp">
                        <button type="submit" class="search_btn mt-4" name="search"> Search</button>
                    </div>
                </form>
        </section>

    </main>
    <?php include 'footer.php' ?>
</body>
<script>
var todayDate = new Date().toISOString().slice(0, 10);
console.log(todayDate);
document.getElementById("search_date1").setAttribute('min', todayDate);
document.getElementById("search_date2").setAttribute('min', todayDate);

var auto_complete = new Autocomplete(document.getElementById('dest_from'), {
    data: <?php echo json_encode($data) ?>,
    maximumItems: 10,
    highlightTyped: true,
    highlightClass: 'fw-bold text-primary'
});

var auto_complete = new Autocomplete(document.getElementById('dest_to'), {
    data: <?php echo json_encode($data) ?>,
    maximumItems: 10,
    highlightTyped: true,
    highlightClass: 'fw-bold text-primary'
});
</script>