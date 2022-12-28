<!-- <script type="text/javascript" language="javascript">
        
        function createArr(id){
            var arr = new Array();
            console.log(id);
            var chkBoxId =  document.getElementById("arr_"+id);

            if(chkBoxId.checked){
                arr.push(chkBoxId.value);
            } else{
                for(var i = arr.length - 1; i >= 0; i--) {
                    if(arr[i] === chkBoxId.value) {
                       arr.splice(i, 1);
                    }
                }
            }
            alert(arr); // here you will get your array with multiple checkbox Id and you can use it
        }
    </script>
    <form name="CreateArray" id="CreateArray" method="post">
    <?php
        for($i=1;$i<=10;$i++){
    ?>
    <?php echo $i."arrrr.";?>&nbsp;<input type="checkbox" name="arr[]" value="<?php echo $i?>" id="arr_<?php echo $i?>" onclick="createArr(<?php echo $i?>);"/>
    <?php
        }
    ?>
    </form> -->


    <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PHP - Get Multiple Checkbox Value DEMO</title>
</head>

<body>

<script>

    function print(v)
    {
        console.log("Hello");
        var vh=document.getElementById(v);
        vh.checked=false;
        console.log(vh.checked);
    }

    </script>

  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      
        
        <label>
        <input type="checkbox" name="checkArr[]" id="1" value="Apple" onclick="print(1)">
        <span>Apple</span>
        </label>
     
      <label>
        Banana
        <input type="checkbox" name="checkArr[]" value="Banana">
        <span></span>
      </label>
      <label>
        Coconut
        <input type="checkbox" name="checkArr[]" value="Coconut">
        <span></span>
      </label>
      <label>
        Blueberry
        <input type="checkbox" name="checkArr[]" value="Blueberry">
        <span></span>
      </label>
      <input type="submit" name="submit" value="Choose options" />
    </form>

    <?php
      if(isset($_POST['submit'])){
          if(!empty($_POST['checkArr'])){
            foreach($_POST['checkArr'] as $checked){
              echo $checked . '<br>';
            }
          } else {
            echo '<div class="error">Checkbox is not selected!</div>';
          }
      }
    ?>
  </div>

</body>
</html>