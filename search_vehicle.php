<main>

<?php include 'header.php' ?>

<section class="mb-5" id="search">
      <div class="search_level">
         <h1>BUS</h1>
      </div>
      <div class="search_area">
         <form>
            <div class="search-from-grp mb-2">
               <label class="src-from-lvl">From</label>
               <input type="text" class="form-control " id="dest_from" required="Required" name="dest_from"
                  placeholder="Enter City" maxlength="15" value="" autocomplete="off">
            </div>
            <div class="search-from-grp">
               <label class="src-from-lvl">To</label>
               <input type="text" class="form-control " id="dest_from" required="Required" name="dest_from"
                  placeholder="Enter City" maxlength="15" value="" autocomplete="off">
            </div>
            <div class="row mt-2" style=" width: 94%; margin-left: 20px; ">
               <div class="col-md-6">
                  <label class="src-from-lvl">Date of Journey</label>
                  <input type="date" class="form-control " id="search_date1" required="Required" name="dest_from"
                     placeholder="Enter City" maxlength="15" value="" autocomplete="off">
               </div>
               <div class="col-md-6">
                  <label class="src-from-lvl">Date of Return(Optional)</label>
                  <input type="date" class="form-control " required="Required" id="search_date2" name="dest_from"
                     placeholder="Enter City" maxlength="15" value="" autocomplete="off">
               </div>

            </div>
            <div class="search-from-grp">
               <button type="submit" class="btn mt-4"> Search</button>
            </div>
         </form>
         <script>
            var todayDate = new Date().toISOString().slice(0, 10);
            console.log(todayDate);
            document.getElementById("search_date1").setAttribute('min', todayDate);
            document.getElementById("search_date2").setAttribute('min', todayDate);
         </script>
   </section>

   <?php include 'footer.php' ?>

</main>