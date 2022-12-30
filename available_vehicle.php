<?php
session_start();
include 'header.php';
$max = count($_SESSION['Vehicle_list']);
for($x=0;$x<$max;$x++)
{
    if(isset($_POST['book_button'.strval($x)])){
        echo 'Hello';
        $_SESSION['final_Vehicle'] = $_SESSION['Vehicle_list'][$x];
        $max1 = count($_SESSION['Vehicle_list']);
    for ($row = 0; $row < $max1; $row++)
       unset($_SESSION['Vehicle_list'][$row]);
       ?>
       <script>
        window.location.href='booking_ticket.php';
        </script>
    <?php
    }
}

?>
<main>
    <div class="container avdiv">
        <form action="" method="POST">
            <table class="av_table">
                <tr class="a_table">
                    <th class="col-sm-4">Operator (Bus Type)</th>
                    <th class="col-sm-2">Dep.Time</th>
                    <th class="col-sm-2">Arr.Time</th>
                    <th class="col-sm-2">Seats Available</th>
                    <th class="col-sm-2">Fare</th>
                </tr>
                <?php
            for ($row = 0; $row < $max; $row++){
            ?>
                <tr>
                    <td>
                        <li class="vehicle_name">
                            <b><?php $index=12; echo($_SESSION['Vehicle_list'][$row]["v_name"]); ?></b>
                        </li>
                        <li class="vehicle_type"><b style="color:#757A7E;">Route:</b>
                            <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["start_point"]); ?>
                            - <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["end_point"]); ?></li>
                        <li><b style="color:#757A7E;">Starting Point:</b>
                            <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["start_point"]); ?></li>
                        <li><b style="color:#757A7E;">Ending Point:</b>
                            <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["end_point"]); ?></li>
                    </td>
                    <td> <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["arr_time"]); ?> </td>
                    <td> <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["dep_time"]); ?> </td>
                    <td> <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["free_seat"]); ?> </td>
                    <td>
                        <li> ৳ <?php $index=12; echo($_SESSION['Vehicle_list'][$row]["v_fare_per_seat"]); ?> </li>
                        <li> <button class="s_button s_button1" id="book_button<?php echo($row); ?>"
                                name="book_button<?php echo($row);?>">Book </button> </li>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </form>
    </div>
</main>

<?php

//print_r($_SESSION['Vehicle_list']);
// $max = count($_SESSION['Vehicle_list']);
//    for ($row = 0; $row < $max; $row++)
//        unset($_SESSION['Vehicle_list'][$row]);

include 'footer.php'; ?>