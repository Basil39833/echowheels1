<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
require '../../connect.php';
session_start();

/*$id=$_GET['id'];
/*$message=$_POST['message'];*/
$email=$_SESSION['email_id'];
$sql="DELETE FROM `registration`WHERE email_id='$email' ";
update_data($sql);
$sql2="DELETE FROM `login`WHERE email_id='$email' ";
update_data($sql2);
?>
 <script>
            Swal.fire({
              icon: 'success',
              text: 'Account Deleted!!',
              didClose: () => {
                window.location.replace('../../login.html');
              }
            });
          </script>
        <?php

?>