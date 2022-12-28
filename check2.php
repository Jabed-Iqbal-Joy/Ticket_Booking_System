<?php
include 'header.php'
  ?>

<div class="div check">
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
        <!-- <table class="ticket_table" border="5">
        <tr>
          <th>Passenger Details</th>
        </tr>

     <tr>
        <td > <label> First Name </label></td>
        <td > <label> Last Name </label></td>
      </tr>

      <tr class="passenger_details">
        <td> <label> First Name </label></td>
        <td> <label> Last Name </label></td>
      </tr>


      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
      </tr>
      <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
      </tr>
    </table> -->

    </div>
    <div class="red col-3 container">
        <div class="choose_seat">
            <div class="choose_seat_heading">
                <h6>Choose Your Seat(s)</h6>
            </div>
            <div class="t_seat justify-content-around">
                <!-- Hold the cursor on seats for seat numbers,  -->
                <label>click to select or deselect.</label>
                <div class="tcheck justify-content-around">

                    <?php
                  for ($x = 'A',$y=1; $x <= 'J'; $x++,$y++) {
                    ?>

                    <div class="<?php if($y%2) echo("input"); else echo("input2") ?>">
                        <input type="checkbox" id="a1" name=""><span><?php echo "$x"; ?>1</span>
                    </div>
                    <div class="<?php if($y%2) echo("input"); else echo("input2") ?>">
                        <input type="checkbox" id="a1" name=""><span><?php echo "$x"; ?>2</span>
                    </div>
                    <div style="background-color:pink;"> </div>
                    <div class="<?php if($y%2) echo("input"); else echo("input2") ?>">
                        <input type="checkbox" id="a1" name=""><span><?php echo "$x"; ?>3</span>
                    </div>
                    <div class="<?php if($y%2) echo("input"); else echo("input2") ?>">
                        <input type="checkbox" id="a1" name=""><span><?php echo "$x"; ?>4</span>
                  </div>
                  <?php } ?>

                    <!-- <input type="checkbox" id="a1" name="" ><span >A1</span>
                    <input type="checkbox" name=""><span>A2</span>
                    <div style="background-color:pink;"> </div>
                    <input type="checkbox" name=""><span>A3</span>
                    <input type="checkbox" name=""><span>A4</span>
                    <input type="checkbox" id="a1" name="" ><span >A1</span>
                    <input type="checkbox" name=""><span>A2</span>
                    <div style="background-color:pink;"> </div>
                    <input type="checkbox" name=""><span>A3</span>
                    <input type="checkbox" name=""><span>A4</span>
                    <div class="text-center" style="background-color:coral;">A</div>
                    <div style="background-color:lightblue;">B</div>
                    <div style="background-color:khaki;"> </div>
                    
                    <div style="background-color:lightgrey;">E</div>
                    <div style="background-color:lightgreen;">F</div>
                    <div class="text-center" style="background-color:coral;">A</div>
                    <div style="background-color:lightblue;">B</div>
                    <div style="background-color:khaki;"> </div>
                    
                    <div style="background-color:lightgrey;">E</div>
                    <div style="background-color:lightgreen;">F</div>
                    <div class="text-center" style="background-color:coral;">A</div>
                    <div style="background-color:lightblue;">B</div>
                    <div style="background-color:khaki;"> </div>
                  
                    <div style="background-color:lightgrey;">E</div>
                    <div style="background-color:lightgreen;">F</div> -->
                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

</script>