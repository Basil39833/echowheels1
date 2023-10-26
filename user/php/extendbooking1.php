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
$bid=$_GET['bid'];

require("../../connect.php");
if(isset($_POST["submit"])){
    
    $scootername=$_POST['scootername'];
    $rate=$_POST['scooterrate'];
    $username=$_POST['username'];
    $email=$_POST['useremail'];
    $pickupstation=$_POST['pickupstation'];
    $dropstation=$_POST['dropstation'];
    $bdate = date('Y-m-d H:i:s'); 
    $hour=$_POST['extendedrenthours'];
    $total=$rate*(int)$hour;
    echo $total;

    
    $sql="INSERT INTO extendbooking(booking_id,scooter_name,scooter_id,scooter_rate,user_name,user_email,pickup_station,drop_station,booking_date,extend_rent_hour,extend_total,extend_payment,status) 
    values ('$bid','$scootername','$id','$rate','$username','$email','$pickupstation','$dropstation','$bdate','$hour','$total','0','0')";
    
    insert_data($sql);
    ?>
    <script>
              Swal.fire({
                icon: 'success',
                text: 'Proceeding To Payment',
                didClose: () => {
                  window.location.replace('../extendbooking.php');
                }
              });
            </script>
             <?php
    }
    
   ?>
    </body>
    </html>