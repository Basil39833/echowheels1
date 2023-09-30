<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
require("../connect.php");
if(isset($_POST["submit"]))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $house_name=$_POST['housename'];
    $street_name=$_POST['streetname'];
    $district=$_POST['district'];
    $state=$_POST['statename'];
    $pincode=$_POST['pincode'];
    $dateofbirth=$_POST['dateofbirth'];
    $password=$_POST['password'];
    $sql="INSERT INTO registration (first_name, last_name, contact, email_id, house_name, street_name, district_name, state_name, pincode, date_of_birth ) VALUES ('$fname','$lname','$contact','$email','$house_name','$street_name','$district','$state','$pincode','$dateofbirth')";
    $sql2="INSERT INTO login (email_id, password, user_type, user_status ) VALUES ('$email','$password',1,1)";
    if (insert_data($sql) && insert_data($sql2)) { 
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Added Successfully',
                didClose: () => {
                    window.location.replace('../login.html');
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
                    window.location.replace('../index.html');
                }
            });
        </script>



    <?php
    }
}
   ?>
</body>
</html>