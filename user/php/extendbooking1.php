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
    $rate=$_POST['scooterrate'];
    $username=$_POST['username'];
    $email=$_POST['useremail'];
    $bdate = date('Y-m-d H:i:s'); 
    $hour=$_POST['extendedrenthours'];
    $total=$rate*(int)$hour;
    echo $total;

    $sql="UPDATE `booking` SET `extended_rent_hours`='$hour',`extend_total`='$total' WHERE scooter_id='$id'";
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