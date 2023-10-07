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
    if (isset($_POST['add'])) {
        $photo = $_FILES['photo']['name'];
        $scootername = $_POST['scootername'];
        $scootercategory = $_POST['category'];
        $scootermodelyear = $_POST['modelyear'];
        $scooterbrand = $_POST['scooterbrand'];
        $scooterplatenumber = $_POST['platenumber'];
        $color = $_POST['color'];
        $stock = $_POST['stock'];
        $description = $_POST['description'];
        $amount = $_POST['amount'];
        

        $sql = "INSERT INTO product(image,scooter_name,scooter_category,scooter_model_year,scooter_brand,scooter_plate_number,color,stock,description,amount)
         VALUES ('$photo','$scootername','$scootercategory','$scootermodelyear','$scooterbrand','$scooterplatenumber','$color','$stock','$description','$amount')";
        insert_data($sql);

        $targetDirectory = "../uploads/products/";
        $target_file = $targetDirectory . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Product Added',
            }).then((result) => {
                window.location.replace('../viewscooter.php');
            })
        </script>

    <?php
    }
    ?>
</body>

</html>