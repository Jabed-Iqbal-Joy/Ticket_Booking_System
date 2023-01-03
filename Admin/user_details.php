<?php
@include 'config.php';
session_start();

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_vehicles=mysqli_query($connect,"DELETE  FROM user WHERE u_id='$delete_id'");
   header('location:user_details.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <section class="user-accounts">

        <h1 class="title">user accounts</h1>

        <div class="box-container">

            <?php
         $sql= (" SELECT * FROM user ");
         $query=$connect->query($sql);
         while($fetch_users = mysqli_fetch_array($query)){   
      ?>

            <div class="box" style="<?php if($fetch_users['u_id'] == $admin_id){ echo 'display:none'; }; ?>">
                <img src="uploaded_img/<?= $fetch_users['u_img']; ?>" alt="">
                <p> User Id : <span><?= $fetch_users['u_id']; ?></span></p>
                <p> Name : <span><?= $fetch_users['u_name']; ?></span></p>
                <p> Username : <span><?= $fetch_users['u_user_name']; ?></span></p>
                <p> User Type : <span
                        style=" color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'orange'; }; ?>"><?= $fetch_users['user_type']; ?></span>
                </p>
                <a href="admin_users.php?delete=<?= $fetch_users['u_id']; ?>"
                    onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
            </div>
            <?php
      }
      ?>
        </div>

    </section>



    <script src="js/script.js"></script>

</body>

</html>