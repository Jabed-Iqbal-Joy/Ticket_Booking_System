<?php
session_start();
$page="booking_ticket";
include 'config.php';
// echo (!isset($_SESSION['userid']));
// echo "<pre>";
// print_r($_SESSION['final_Vehicle']);
// echo "</pre>";
// echo ($_SESSION['final_Vehicle']['free_seat_index'][2]);

if(isset($_POST['book_btn']))
{
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $pname = $_POST['t_from_fname']." ".$_POST['t_from_lname'];
    $pname = filter_var($pname ,FILTER_SANITIZE_STRING);
    echo $pname;
    $pgender = $_POST['gender'];
    $pgender = filter_var($pgender ,FILTER_SANITIZE_STRING);
    echo $pgender;
    $pmbl = $_POST['t_mobile'];
    $pmbl = filter_var($pmbl ,FILTER_SANITIZE_STRING);
    echo $pmbl;
    $pemail = $_POST['t_email'];
    $pemail = filter_var($pemail ,FILTER_SANITIZE_STRING);
    echo $pemail;
    $pseat = $_POST['fseat_no']." ";
    if($_POST['sseat_no'])
    $pseat .= $_POST['sseat_no']." ";
    if($_POST['tseat_no'])
    $pseat .= $_POST['tseat_no']." ";
    if($_POST['frseat_no'])
    $pseat .= $_POST['frseat_no']." ";
    $pseat = filter_var($pseat ,FILTER_SANITIZE_STRING);
    echo $pseat;
    $p_t_cost = $_POST['total_cost_in'];
    $p_t_cost = filter_var($p_t_cost ,FILTER_SANITIZE_STRING);
    $text = $_SESSION['user_details']['u_name'];
    $v_type = $_SESSION['final_Vehicle']['v_type'];
    $v_number = $_SESSION['final_Vehicle']['v_number'];
    $start_point = $_SESSION['final_Vehicle']['start_point'];
    $end_point = $_SESSION['final_Vehicle']['end_point'];
    $dep_time = $_SESSION['final_Vehicle']['dep_time'];
    $arr_time = $_SESSION['final_Vehicle']['arr_time'];
    $date = $_SESSION['final_Vehicle']['date'];


    $insert_booking_details = $connect->query(
        "INSERT INTO `booking_details`(b_p_name, b_p_gender, b_p_mobile,
         b_p_email,b_p_seat, b_total_fare, b_user_name, b_v_type, b_v_number, 
         b_start_point, b_end_point, b_dep_time, b_arr_time, b_date )
         VALUES('$pname', '$pgender', '$pmbl', '$pemail', '$pseat',
         '$p_t_cost', '$text', '$v_type', '$v_number','$start_point',
         '$end_point','$dep_time','$arr_time','$date')");?>

    <script>
    window.location.href = 'booking_ticket.php';
    </script>
<?php } ?>


<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body>
    <?php include('header.php'); ?>
    <main id="main">
        <section class="booking_details">
            <div class="container warning_login" <?php if (isset($_SESSION['userid'])) echo 'hidden'; ?>>
                <label><span class="bi bi-info-square-fill"> </span> Please Login to Book Ticket</label>
            </div>
            <div class="div book_tickt_main_div">
                <div class="ticket_form col-lg-6">
                    <form action="" method="POST">
                        <div class="ticket_form_heading">
                            <h5>Passenger Details</h5>
                        </div>
                        <div class="row p_details container">
                            <div class="p_box">
                                <label> First Name </label><br>
                                <input type="text" required name="t_from_fname">
                            </div>
                            <div class="p_box">
                                <label> Last Name </label><br>
                                <input type="text" required name="t_from_lname">
                            </div>
                            <div class="gender">
                                <label> Gender </label>
                                <input required type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label><br>
                                <input type="radio" id="others" name="gender" value="others">
                                <label for="others">Others</label>

                            </div>
                            <div class="p_box">
                                <label> Mobile </label><br>
                                <input required type="text" name="t_mobile">
                            </div>
                            <div class="p_box">
                                <label> Email </label><br>
                                <input required type="text" name="t_email">
                            </div>
                        </div>
                        <div class="ticket_form_heading mt-2">
                            <h5>Ticket Details</h5>
                        </div>
                        <div class="row p_details container">
                            <div class="ticket_box_heading">
                                <label class="ticket_box_first_col"> Seat </label>
                                <label class="ticket_box_first_col"> Fare </label>
                                <label class="ticket_box_second_col"> Class </label>
                            </div>
                            <div class="row seat_box">
                                <div class="ticket_box_first_col">
                                    <input type="text" id="fseat_no" name="fseat_no" readonly>
                                </div>
                                <div class="ticket_box_first_col">
                                    <input type="text" id="ffare" disabled>
                                </div>
                                <div class="ticket_box_second_col">
                                    <input type="text" id="fclass" disabled>
                                </div>
                            </div>
                            <div class="row seat_box">
                                <div class="ticket_box_first_col">
                                    <input type="text" id="sseat_no" name="sseat_no" readonly>
                                </div>
                                <div class="ticket_box_first_col">
                                    <input type="text" id="sfare" disabled>
                                </div>
                                <div class="ticket_box_second_col">
                                    <input type="text" id="sclass" disabled>
                                </div>
                            </div>
                            <div class="row seat_box">
                                <div class="ticket_box_first_col">
                                    <input type="text" id="tseat_no" name="tseat_no" readonly>
                                </div>
                                <div class="ticket_box_first_col">
                                    <input type="text" id="tfare" disabled>
                                </div>
                                <div class="ticket_box_second_col">
                                    <input type="text" id="tclass" disabled>
                                </div>
                            </div>
                            <div class="row seat_box">
                                <div class="ticket_box_first_col">
                                    <input type="text" id="frseat_no" name="frseat_no" readonly>
                                </div>
                                <div class="ticket_box_first_col">
                                    <input type="text" id="frfare" disabled>
                                </div>
                                <div class="ticket_box_second_col">
                                    <input type="text" id="frclass" disabled>
                                </div>
                            </div>
                            <div class="d-flex total_cost">
                                <label>Total</label>
                                <input type="text" id="total_cost_txt" style="text-align:center;" name="total_cost_in"
                                    readonly>
                            </div>
                            <div class="row">
                                <button class="book_button" type="submit" name="book_btn"
                                    <?php if(!isset($_SESSION['userid'])) echo"disabled"; ?>> Book </button>
                            </div>
                        </div>
                    </form>
                </div>



                <div class="choose_seat_main_div col-3 container">
                    <div class="route_class">
                        <label class="route">Route : </label>
                        <input type="text" id="route_txt1"
                            value="<?php echo $_SESSION['final_Vehicle']['start_point']; ?>" disabled>
                        <i class="bi bi-caret-right-fill arrow"></i>
                        <input type="text" id="route_txt2" value="<?php echo $_SESSION['final_Vehicle']['end_point'];?>"
                            disabled><br>
                        <label class="route">Bus : Green line paribahan</label><br>
                        <label class="route">Class : </label>
                        <input type="text" id="class_txt" value="<?php echo $_SESSION['final_Vehicle']['v_class']; ?>"
                            disabled>
                        <label class="route">Date : </label>
                        <input type="text" id="class_txt" value="<?php echo $_SESSION['final_Vehicle']['date']; ?>"
                            disabled>
                    </div>
                    <div class="choose_seat">
                        <div class="choose_seat_heading">
                            <h6>Choose Your Seat(s)</h6>
                        </div>
                        <div class="t_seat justify-content-around">
                            <!-- Hold the cursor on seats for seat numbers,  -->
                            <label id="warning_seat" class="warning_seat" hidden><span
                                    class="bi bi-exclamation-square-fill"></span> Maximum of 4 seat(s) can be booked
                                at-a-time</label>
                            <label>click to select or deselect.</label>
                            <div class="ticket_box justify-content-around">
                                <?php for ($x = 'A', $y = 0; $y < ($_SESSION['final_Vehicle']['v_total_seat'] / 4); $x++, $y++) { ?>


                                <?php for ($z = 0; $z < 4; $z++) { ?>

                                <div id="seat_color_<?php echo ($x); echo ($z + 1); ?>" class="<?php if ($_SESSION['final_Vehicle']['free_seat_index'][(4 * $y) + $z] == '0')
                                        echo ("non_booked");
                                    else
                                        echo ("booked"); ?>">
                                    <label>
                                        <input type="checkbox" id="<?php echo ($x); echo ($z + 1); ?>"
                                            <?php if ( !($_SESSION['final_Vehicle']['free_seat_index'][(4 * $y) + $z] == '0')) echo ("disabled"); ?>
                                            name="seat[]"
                                            <?php if ( !($_SESSION['final_Vehicle']['free_seat_index'][(4 * $y) + $z] == '0')) echo ("checked"); ?>
                                            onclick="ticket_print('<?php echo ($x); echo ($z + 1); ?>');">
                                        <span>
                                            <?php echo "$x";
                                                echo $z + 1; ?>
                                        </span>
                                    </label>
                                </div>
                                <?php if ($z == 1) { ?>
                                <div style="margin:0px;"> </div>
                                <?php } ?>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<script type="text/javascript" language="javascript">
function ticket_print(seat_no) {
    var selected_item = document.getElementById(seat_no);
    var fare = Number(<?php echo($_SESSION['final_Vehicle']['v_fare_per_seat']); ?>);
    if (selected_item.checked) {
        if (document.getElementById("fseat_no").value == "") {
            document.getElementById("fseat_no").value = seat_no;
            document.getElementById("ffare").value = fare;
            document.getElementById("fclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + fare;
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("seat_color_" + seat_no).classList.replace('non_booked', 'select_book');
        } else if (document.getElementById("sseat_no").value == "") {
            document.getElementById("sseat_no").value = seat_no;
            document.getElementById("sfare").value = fare;
            document.getElementById("sclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("seat_color_" + seat_no).classList.replace('non_booked', 'select_book');
        } else if (document.getElementById("tseat_no").value == "") {
            document.getElementById("tseat_no").value = seat_no;
            document.getElementById("tfare").value = fare;
            document.getElementById("tclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("seat_color_" + seat_no).classList.replace('non_booked', 'select_book');
        } else if (document.getElementById("frseat_no").value == "") {
            document.getElementById("frseat_no").value = seat_no;
            document.getElementById("frfare").value = fare;
            document.getElementById("frclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("seat_color_" + seat_no).classList.replace('non_booked', 'select_book');
        } else {
            document.getElementById(seat_no).checked = false;
            document.getElementById("warning_seat").hidden = false;
        }
    } else {
        if (document.getElementById("fseat_no").value == seat_no) {
            if (document.getElementById("sseat_no").value != "") {
                document.getElementById("fseat_no").value = document.getElementById("sseat_no").value;
                document.getElementById("ffare").value = fare;
                document.getElementById("fclass").value = "Economy";
                if (document.getElementById("tseat_no").value != "") {
                    document.getElementById("sseat_no").value = document.getElementById("tseat_no").value;
                    document.getElementById("sfare").value = fare;
                    document.getElementById("sclass").value = "Economy";
                    if (document.getElementById("frseat_no").value != "") {
                        document.getElementById("tseat_no").value = document.getElementById("frseat_no").value;
                        document.getElementById("tfare").value = fare;
                        document.getElementById("tclass").value = "Economy";
                        document.getElementById("frseat_no").value = "";
                        document.getElementById("frfare").value = "";
                        document.getElementById("frclass").value = "";
                    } else {
                        document.getElementById("tseat_no").value = "";
                        document.getElementById("tfare").value = "";
                        document.getElementById("tclass").value = "";
                    }
                } else {
                    document.getElementById("sseat_no").value = "";
                    document.getElementById("sfare").value = "";
                    document.getElementById("sclass").value = "";
                }
            } else {
                document.getElementById("fseat_no").value = "";
                document.getElementById("ffare").value = "";
                document.getElementById("fclass").value = "";
            }
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) - Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("warning_seat").hidden = true;
            document.getElementById("seat_color_" + seat_no).classList.replace('select_book', 'non_booked');
        } else if (document.getElementById("sseat_no").value == seat_no) {
            if (document.getElementById("tseat_no").value != "") {
                document.getElementById("sseat_no").value = document.getElementById("tseat_no").value;
                document.getElementById("sfare").value = fare;
                document.getElementById("sclass").value = "Economy";
                if (document.getElementById("frseat_no").value != "") {
                    document.getElementById("tseat_no").value = document.getElementById("frseat_no").value;
                    document.getElementById("tfare").value = fare;
                    document.getElementById("tclass").value = "Economy";
                    document.getElementById("frseat_no").value = "";
                    document.getElementById("frfare").value = "";
                    document.getElementById("frclass").value = "";
                } else {
                    document.getElementById("tseat_no").value = "";
                    document.getElementById("tfare").value = "";
                    document.getElementById("tclass").value = "";
                }
            } else {
                document.getElementById("sseat_no").value = "";
                document.getElementById("sfare").value = "";
                document.getElementById("sclass").value = "";
            }
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) - Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("warning_seat").hidden = true;
            document.getElementById("seat_color_" + seat_no).classList.replace('select_book', 'non_booked');
        } else if (document.getElementById("tseat_no").value == seat_no) {
            if (document.getElementById("frseat_no").value != "") {
                document.getElementById("tseat_no").value = document.getElementById("frseat_no").value;
                document.getElementById("tfare").value = fare;
                document.getElementById("tclass").value = "Economy";
                document.getElementById("frseat_no").value = "";
                document.getElementById("frfare").value = "";
                document.getElementById("frclass").value = "";
            } else {
                document.getElementById("tseat_no").value = "";
                document.getElementById("tfare").value = "";
                document.getElementById("tclass").value = "";
            }
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) - Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("warning_seat").hidden = true;
            document.getElementById("seat_color_" + seat_no).classList.replace('select_book', 'non_booked');
        } else if (document.getElementById("frseat_no").value == seat_no) {
            document.getElementById("frseat_no").value = "";
            document.getElementById("frfare").value = "";
            document.getElementById("frclass").value = "";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) - Number(fare);
            document.getElementById("total_cost_txt").value = sum;
            document.getElementById("warning_seat").hidden = true;
            document.getElementById("seat_color_" + seat_no).classList.replace('select_book', 'non_booked');
        } else {
            // document.getElementById(seat_no).checked = false;
            //document.getElementById("warning_seat").hidden=false;
        }
    }
}
</script>