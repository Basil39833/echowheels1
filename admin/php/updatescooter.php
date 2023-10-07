<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
session_start();
require '../../connect.php';
if (isset($_POST['submit'])) {
  $id = $_POST['product_id'];
  /*$photo = $_FILES['photo']['name'];*/
  $scootername = $_POST['scooter_name'];
  $scootercategory = $_POST['scooter_category'];
  $color = $_POST['color'];
  /*$scootermodelyear = $_POST['scooter_model_year'];*/
  $scooterbrand = $_POST['scooter_brand'];
  $stock = $_POST['stock'];
  /*$description = $_POST['description'];*/
  $amount = $_POST['amount'];


  $sql ="UPDATE product SET scooter_name='$scootername',scooter_category='$scootercategory',color='$color',scooter_brand='$scooterbrand',stock='$stock',amount='$amount' WHERE product_id='$id';";
  update_data($sql);

  /*$targetDirectory = "../uploads/products/";
  $target_file = $targetDirectory . basename($_FILES["photo"]["name"]);
  move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);*/
?>
 <script>
            Swal.fire({
              icon: 'success',
              text: 'scooter Updated',
              didClose: () => {
                window.location.replace('../viewscooter.php');
              }
            });
          </script>
        <?php
}
?>