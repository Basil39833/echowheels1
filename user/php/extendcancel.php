<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
require '../../connect.php';
/*session_start();
$email=$_SESSION['email_id'];*/
$id=$_GET['id'];
/*$message=$_POST['message'];*/
$sql="DELETE FROM `extendbooking`WHERE booking_id='$id' ";
update_data($sql);
?>
 <script>
            Swal.fire({
              icon: 'success',
              text: 'Booking Cancelled',
              didClose: () => {
                window.location.replace('../viewscooter.php');
              }
            });
          </script>
        <?php

?>