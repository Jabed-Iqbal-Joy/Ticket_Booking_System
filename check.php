<?php
use Mpdf\WriteHtmlClass;
require('vendor/autoload.php');
session_start();
include 'config.php';
$user_name = $_SESSION['user_details']['u_name'];
    // $sql= ("SELECT MAX(b_id) AS b_id FROM booking_details WHERE b_user_name='$user_name'");
    // $query=$connect->query($sql);
    // $row1=mysqli_fetch_assoc($query);
    // $id = $row1['b_id'];
$id = $_GET['id'];
    $sql1= ("SELECT *
    FROM booking_details 
    INNER JOIN vehicle
    ON booking_details.b_v_number=vehicle.v_number
    where booking_details.b_id='$id'");
    $query1=$connect->query($sql1);
    $row=mysqli_fetch_assoc($query1);
$html = '<!DOCTYPE html>
<html lang="en">

<body>
    <main id="main">
        <div class="box">
            <h3>Ticket Information</h3>
            <div class="first_box">
                <table style="margin-left:50px;">
                    <tr>
                        <td style="width:200px;">
                            <div class="info">
                                <div class="infobox">
                                    <label>Name : </label>
                                    <labe class="input">';$html.=$row['b_p_name'];$html.='</label>
                                </div>
                                <div class="infobox">
                                    <label>Gender : </label>
                                    <label class="input">';$html.= $row['b_p_gender'];$html.='</label>
                                </div>
                                <div class="infobox">
                                    <label>Mobile : </label>
                                    <labe class="input">';$html.= $row['b_p_mobile'];$html.='</label>
                                </div>
                                <div class="infobox">
                                    <label>Email:</label>
                                    <label class="input">';$html.=$row['b_p_email'];$html.='</label>
                                </div>
                            </div>
                        </td>
                        <td></td><td></td><td></td> <td></td> <td></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td> <td></td> <td></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td> <td></td> <td></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td>
                        <td>
                            <div class="bus_details">
                                <div class="bus">
                                    <label>Bus Name : </label>
                                    <label class="input">';$html.= $row['v_name'];$html.='</label>
                                </div>
                                <div class="bus">
                                    <label>Date : </label>
                                    <label class="input">';$html.= $row['b_date'];$html.='</label>
                                </div>
                                <div class="bus">
                                    <label>Status : </label>
                                    <label class="input">Reserved</label>
                                </div>
                                <div class="bus">
                                    <label>Route : </label>
                                    <label
                                        class="input">';$html.=$row['b_start_point'] . " - " . $row['b_end_point'];
                                        $html.='</label>
                                </div>
                            </div>
                        </td>
                    <tr>
                </table>

            </div>
            <div class="ticket">
                <table style="width:43rem;border-collapse: collapse;text-align:center;padding:0px;">
                    <tr>
                        <th style="width:240px;border: 2px solid black;border-collapse: collapse;"> Seat </th>
                        <th style="width:80px;border: 2px solid black;border-collapse: collapse;"> Fare </th>
                        <th style="width:80px;border: 2px solid black;border-collapse: collapse;"> Class </th>
                    </tr>';
                    $total_seat=strlen($row['b_p_seat'])/3;
                    for($x=0;$x<$total_seat;$x++)
                    { 
                    $html.='<tr>
                        <td style="width:240px;border: 2px solid black;border-collapse: collapse;">
                        ';$html.=$row['b_p_seat'][$x * 3] . $row['b_p_seat'][$x * 3 + 1];$html.='</td>
                        <td style="width:80px;border: 2px solid black;border-collapse: collapse;">
                        ';$html.=$row['v_fare_per_seat'];$html.='</td>
                        <td style="width:80px;border: 2px solid black;border-collapse: collapse;"> ';$html.=$row['v_class'];$html.='
                        </td>
                    </tr>';
                    }
                    $html.='
                    <tr>
                        <td style="width:240px;border: 2px solid black;border-collapse: collapse;"> Total Tk/- </td>
                        <td colspan="2" style="width:80px;border: 2px solid black;border-collapse: collapse;">
                        ';
$html .= $row['v_fare_per_seat'] * $total_seat;
$html .= '</td>
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
    margin-top: 200px;
    text-align: center;
}
.info {
    height: 140px;
    width: 300px;
    padding: 10px;
    margin: 20px;
    justify-content: center;
    margin-top: 20px;
}

.bus_details {
    height: 140px;
    width: 300px;
    padding: 10px;
    margin: 20px;
    justify-content: center;
}

.infobox {
    width: fit-content;
   // border: 2px solid black;
    font-weight: 50px;
    margin-bottom: 5px;
    padding: 5px;
}

.bus {
    width: 250px;
    //border: 2px solid black;
    font-weight: 50px;
    margin-bottom: 5px;
    padding: 5px;
}

.ticket {
    margin-top: 40px;
    width: 40rem;
    margin-left: 50px;
}
</style>';


$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8' , 'format' => 'A4']);
$mpdf->WriteHTML($html);
$file = time() . '.pdf';
$mpdf->Output($file, 'I');

?>
