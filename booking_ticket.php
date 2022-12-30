<?php
session_start();
include 'header.php';
echo "<pre>";
print_r($_SESSION['final_Vehicle']);
echo "</pre>";
echo ($_SESSION['final_Vehicle']['free_seat_index'][2]);
?>

<script type="text/javascript" language="javascript">
function ticket_print(seat_no) {

    var selected_item = document.getElementById(seat_no);
    if (selected_item.checked) {
        if (document.getElementById("fseat_no").value == "") {
            document.getElementById("fseat_no").value = seat_no;
            document.getElementById("ffare").value = 680;
            document.getElementById("fclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(680);
            document.getElementById("total_cost_txt").value = sum;

        } else if (document.getElementById("sseat_no").value == "") {
            document.getElementById("sseat_no").value = seat_no;
            document.getElementById("sfare").value = 680;
            document.getElementById("sclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(680);
            document.getElementById("total_cost_txt").value = sum;
        } else if (document.getElementById("tseat_no").value == "") {
            document.getElementById("tseat_no").value = seat_no;
            document.getElementById("tfare").value = 680;
            document.getElementById("tclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(680);
            document.getElementById("total_cost_txt").value = sum;
        } else if (document.getElementById("frseat_no").value == "") {
            document.getElementById("frseat_no").value = seat_no;
            document.getElementById("frfare").value = 680;
            document.getElementById("frclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(680);
            document.getElementById("total_cost_txt").value = sum;
        } else {
            document.getElementById(seat_no).checked = false;
            document.getElementById("warning_seat").hidden = false;
        }
    } else {
        if (document.getElementById("fseat_no").value == seat_no) {
            document.getElementById("fseat_no").value = seat_no;
            document.getElementById("ffare").value = 680;
            document.getElementById("fclass").value = "Economy";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) + Number(680);
            document.getElementById("total_cost_txt").value = sum;

        } else if (document.getElementById("sseat_no").value == seat_no) {
            if (document.getElementById("tseat_no").value != "") {
                document.getElementById("sseat_no").value = document.getElementById("tseat_no").value;
                document.getElementById("sfare").value = 680;
                document.getElementById("sclass").value = "Economy";
                if (document.getElementById("frseat_no").value != "") {
                    document.getElementById("tseat_no").value = document.getElementById("frseat_no").value;
                    document.getElementById("tfare").value = 680;
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
            var sum = Number(total) + Number(680);
            document.getElementById("total_cost_txt").value = sum;
        } else if (document.getElementById("tseat_no").value == seat_no) {
            if (document.getElementById("frseat_no").value != "") {
                document.getElementById("tseat_no").value = document.getElementById("frseat_no").value;
                document.getElementById("tfare").value = 680;
                document.getElementById("tclass").value = "Economy";
                document.getElementById("frseat_no").value = "";
                document.getElementById("frfare").value = "";
                document.getElementById("frclass").value = "";
                var total = document.getElementById("total_cost_txt").value;
                var sum = Number(total) - Number(680);
                document.getElementById("total_cost_txt").value = sum;
            } else {
                document.getElementById("tseat_no").value = "";
                document.getElementById("tfare").value = "";
                document.getElementById("tclass").value = "";
                var total = document.getElementById("total_cost_txt").value;
                var sum = Number(total) - Number(680);
                document.getElementById("total_cost_txt").value = sum;
            }
        } else if (document.getElementById("frseat_no").value == seat_no) {
            document.getElementById("frseat_no").value = "";
            document.getElementById("frfare").value = "";
            document.getElementById("frclass").value = "";
            var total = document.getElementById("total_cost_txt").value;
            var sum = Number(total) - Number(680);
            document.getElementById("total_cost_txt").value = sum;
        } else {
            // document.getElementById(seat_no).checked = false;
            //document.getElementById("warning_seat").hidden=false;
        }
    }
}
</script>


<main id="main">
    <section>
        <div class="div book_tickt_main_div">
            <div class="ticket_form col-lg-6">
                <div class="ticket_form_heading">
                    <h5>Passenger Details</h5>
                </div>
                <div class="row p_details container">
                    <div class="p_box">
                        <label> First Name </label><br>
                        <input type="text" name="t_from_fname">
                    </div>
                    <div class="p_box">
                        <label> Last Name </label><br>
                        <input type="text" name="t_from_fname">
                    </div>
                    <div class="gender">
                        <label> Gender </label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="others" name="gender" value="others">
                        <label for="others">Others</label>

                    </div>
                    <div class="p_box">
                        <label> Mobile </label><br>
                        <input type="text" name="t_from_fname">
                    </div>
                    <div class="p_box">
                        <label> Email </label><br>
                        <input type="text" name="t_from_fname">
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
                            <input type="text" id="fseat_no" disabled>
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
                            <input type="text" id="sseat_no" disabled>
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
                            <input type="text" id="tseat_no" disabled>
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
                            <input type="text" id="frseat_no" disabled>
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
                        <input type="text" id="total_cost_txt" style="text-align:center;" disabled>
                    </div>
                </div>
            </div>



            <div class="choose_seat_main_div col-3 container">
                <div class="route_class">
                    <label class="route">Route : </label>
                    <input type="text" id="route_txt1" value="Dhaka" disabled>
                    <i class="bi bi-caret-right-fill arrow"></i>
                    <input type="text" id="route_txt2" value="Chittagong" disabled><br>
                    <label class="route">Class : </label>
                    <input type="text" id="class_txt" value="Economy">
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

                            <div class="<?php if ($_SESSION['final_Vehicle']['free_seat_index'][(4 * $y) + $z] == '0')
                                        echo ("non_booked");
                                    else
                                        echo ("booked"); ?>">
                                <label>
                                    <input type="checkbox" id="<?php echo ($x); echo ($z + 1); ?>"
                                        <?php if ( !($_SESSION['final_Vehicle']['free_seat_index'][(4 * $y) + $z] == '0')) echo ("disabled"); ?>
                                        name="seat[]"
                                        <?php if ( !($_SESSION['final_Vehicle']['free_seat_index'][(4 * $y) + $z] == '0')) echo ("checked"); ?>
                                        onclick="ticket_print('<?php echo ($x); echo ($z + 1); ?>');"><span>
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