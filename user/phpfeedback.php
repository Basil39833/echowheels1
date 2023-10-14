<html>
<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
require '../connect.php';
session_start();
$email=$_SESSION['email_id'];
$description=$_POST['description'];
$date = date("Y-m-d"); 
$sql="INSERT INTO feedback(description,date,email_id,reply)values('$description','$date','$email','0')";
insert_data($sql);
?>
<script>
          Swal.fire({
            icon: 'success',
            text: 'Feedback Submitted !!!',
            didClose: () => {
              window.location.replace('./viewscooter.php');
            }
          });
        </script>
</body>
</html>