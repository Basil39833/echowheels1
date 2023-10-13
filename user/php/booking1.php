<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
session_start();
$id=$_GET['id'];
require("../../connect.php");
if(isset($_POST["submit"])){

    $scootername=$_POST['scootername'];
    $category=$_POST['scootercategory'];
    $color=$_POST['scootercolor'];
    $rate=$_POST['scooterrate'];
    $username=$_POST['username'];
    $email=$_POST['useremail'];
    $pickupstation=$_POST['pickupstation'];
    $dropstation=$_POST['dropstation'];
    $bdate=date("Y-m-d"); 
    $hour=$_POST['renthours'];
    $total=$rate*(int)$hour;
    echo $total;

    
    $sql="INSERT INTO booking(scooter_name,scooter_category,scooter_color,scooter_rate,user_name,scooter_id,user_email,pickup_station,drop_station,booking_date,rent_hours,total,payment,status) 
    values ('$scootername','$category','$color','$rate','$username','$id','$email','$pickupstation','$dropstation','$bdate','$hour','$total','0','0')";
    
    insert_data($sql);
    ?>
    <script>
              Swal.fire({
                icon: 'success',
                text: 'Proceeding To Payment',
                didClose: () => {
                  window.location.replace('../booking.php');
                }
              });
            </script>
             <?php
    }
    
   ?>
    </body>
    </html>