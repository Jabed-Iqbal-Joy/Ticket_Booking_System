<?php
session_start();
include 'config.php';
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
   $check_available_vehicle  = 
   $connect->query("SELECT * FROM `available_vehicle` 
                    INNER JOIN vehicle
                    ON available_vehicle.av_v_number=vehicle.v_number
                    WHERE start_point = '$dest_from' AND end_point = '$dest_to' AND date='$search_date1'");
   if( mysqli_num_rows($check_available_vehicle) > 0){
        while ($fetch_products = mysqli_fetch_assoc($check_available_vehicle)) {
            $_SESSION['Vehicle_list'][] = $fetch_products;
        }
   }
    header('location:available_vehicle.php');
}
?>

<main>

    <?php include 'header.php' ?>

    <section class="mb-5" id="search">
        <div class="search_level">
            <h1>
                <?php $vehicle = $_GET['vehicle'];
         echo strtoupper($vehicle);
          ?>
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
                <div class="search-from-grp">
                    <button type="submit" class="btn mt-4" name="search"> Search</button>
                </div>
            </form>
    </section>

</main>
<?php include 'footer.php' ?>

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