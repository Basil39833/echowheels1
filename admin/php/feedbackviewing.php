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
$id=$_POST['feedback_id'];
$message=$_POST['message'];
$v=1;
$sql="update feedback set reply='$v',message='$message' where feedback_id='$id' ";
update_data($sql);
?>
 <script>
            Swal.fire({
              icon: 'success',
              text: 'feedback Viewed',
              didClose: () => {
                window.location.replace('../viewedfeedbacks.php');
              }
            });
          </script>
        <?php

?>