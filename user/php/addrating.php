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
$email=$_SESSION['email_id'];
$scooterid=$_POST['productid'];
$rating=$_POST['rate'];
$review=$_POST['comment'];

  
  $sql1="INSERT INTO rating(scooter_id,email_id,rating,review)VALUES('$scooterid','$email','$rating','$review')";
  insert_data($sql1);

  ?>
  
  <script>
        Swal.fire({
          icon: 'success',
          text: 'Rating Recorded !!!',
          didClose: () => {
            window.location.replace('../viewscooter.php');
          }
        });
      </script>
  
</body>
</html>


