<?php
use Mpdf\Mpdf;
session_start();
include 'config.php';
$user_name = $_SESSION['user_details']['u_name'];
    $sql= ("SELECT MAX(b_id) AS b_id FROM booking_details WHERE b_user_name='$user_name'");
    $query=$connect->query($sql);
    $row1=mysqli_fetch_assoc($query);
    $id = $row1['b_id'];
    $sql1= ("SELECT *
    FROM booking_details 
    INNER JOIN vehicle
    ON booking_details.b_v_number=vehicle.v_number
    where booking_details.b_id='$id'");
    $query1=$connect->query($sql1);
    $row=mysqli_fetch_assoc($query1);

?>
<!DOCTYPE html>
<html lang="en">

<body>
    <main id="main">
        <div class="box">
            <h3>Ticket Information</h3>
            <div class="first_box">
                <div class="info">
                    <div class="infobox">
                        <label>Name : </label>
                        <labe class="input"><?= $row['b_p_name'];?></label>
                    </div>
                    <div class="infobox">
                        <label>Gender : </label>
                        <label class="input"><?= $row['b_p_gender']; ?></label>
                    </div>
                    <div class="infobox">
                        <label>Mobile : </label>
                        <labe class="input"><?= $row['b_p_mobile'];?></label>
                    </div>
                    <div class="infobox">
                        <label>Email : </label>
                        <label class="input"><?=$row['b_p_mobile'];?></label>
                    </div>
                </div>
                <div class="bus_details">
                    <div class="bus">
                        <label>Bus Name : </label>
                        <label class="input"><?= $row['v_name'];?></label>
                    </div>
                    <div class="bus">
                        <label>Date : </label>
                        <label class="input"><?= $row['b_date'];?></label>
                    </div>
                    <div class="bus">
                        <label>Status : </label>
                        <label class="input">Reserved</label>
                    </div>
                    <div class="bus">
                        <label>Route : </label>
                        <label class="input"><?=$row['b_start_point'] . " - " . $row['b_end_point'];?></label>
                    </div>
                </div>
            </div>
            <div class="ticket">
                <table style="width:43rem;border-collapse: collapse;text-align:center;padding:0px;">
                    <tr>
                        <th style="width:240px;border: 2px solid black;border-collapse: collapse;"> Seat </th>
                        <th style="width:80px;border: 2px solid black;border-collapse: collapse;"> Fare </th>
                        <th style="width:80px;border: 2px solid black;border-collapse: collapse;"> Class </th>
                    </tr><?php
                    $total_seat=strlen($row['b_p_seat'])/3;
                    for($x=0;$x<$total_seat;$x++)
                    { 
                        ?>
                       <tr>
                        <td style="width:240px;border: 2px solid black;border-collapse: collapse;"><?=$row['b_p_seat'][$x * 3] . $row['b_p_seat'][$x * 3 + 1];?></td>
                        <td style="width:80px;border: 2px solid black;border-collapse: collapse;"> <?=$row['v_fare_per_seat'];?></td>
                        <td style="width:80px;border: 2px solid black;border-collapse: collapse;"> <?=$row['v_class'];?></td>
                    </tr><?php
                    }
                    ?>
                    <tr>
                        <td style="width:240px;border: 2px solid black;border-collapse: collapse;"> Total Tk/- </td>
                        <td colspan="2" style="width:80px;border: 2px solid black;border-collapse: collapse;"><?= $row['v_fare_per_seat'] * $total_seat;?></td>
                    </tr>
                </table>
                <div class="footer" style="margin-bottom:20px;">
                    <label>Note: Terms and conditions might time to time update or change without any
                        notice.</label><br>
                    <label>Powered by :</label>
                    <label> Easy Routes </label><br>
                    <label>Contact us : support@easyroute.com</label>
                </div>
            </div>
        </div>
    </main>
</body>
<style>
.box {
    border: 2px solid black;
    min-height: 30rem;
    width: 50rem;
    margin-left: auto;
    margin-right: auto;
    margin-top: 60px;
    text-align: center;
}

.first_box {
    display: flex;
}

.info {
    /* background-color: paleturquoise; */
    height: 140px;
    width: 300px;
    padding: 10px;
    margin: 20px;
}

.bus_details {
    /* background-color: peachpuff; */
    height: 140px;
    width: 300px;
    padding: 10px;
    margin: 20px;
    justify-content: center;
}

.infobox {
    width: 250px;
    border: 2px solid black;
    font-weight: 50px;
    margin-bottom: 5px;
    padding: 5px;
}

.bus {
    width: 250px;
    border: 2px solid black;
    font-weight: 50px;
    margin-bottom: 5px;
    padding: 5px;
    margin-left: 40px;
}

.ticket {
    margin-top: 40px;
    width: 40rem;
    margin-left: 50px;
}
</style>