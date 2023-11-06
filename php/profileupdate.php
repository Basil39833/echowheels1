<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
session_start();
require("../connect.php");
if(isset($_POST["submit"])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $email=$_SESSION['email_id'];
    $house_name=$_POST['housename'];
    $street_name=$_POST['streetname'];
    $district=$_POST['district'];
    $state=$_POST['statename'];
    $pincode=$_POST['pincode'];
    $dateofbirth=$_POST['dateofbirth'];
    

    
    $selfpic = $_POST['selfpic'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../user/uploads/products/" . $filename;
    $delfolder = "../user/uploads/products/".$selfpic;

    if($filename !=  null)
    {
        $newpic = $filename;
    }
    else 
    {
        $newpic = $selfpic;
    }


$sql="UPDATE registration SET first_name='$fname',last_name='$lname',contact='$contact',house_name='$house_name',street_name='$street_name',district_name='$district',state_name='$state',pincode='$pincode',date_of_birth='$dateofbirth',profilepicture='$newpic' WHERE email_id='$email';";
if(update_data($sql)) {
 
    if($filename !=  null)
    {
        if($selfpic != "pic.jpg"){
            unlink($delfolder);
        }
        
        move_uploaded_file($tempname, $folder);
    } 

        ?>
        <script>
            Swal.fire({
                icon:'success',
                text: 'Updated Successfully',
                didClose: () => {
                    window.location.replace('../user/profile.php');
                }
            });
        </script>
    <?php
    } else { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'unsuccessfully',
                didClose: () => {
                    window.location.replace('../user/profile.php');
                }
            });
        </script>



    <?php
    }
    }
   ?>
</body>
</html>