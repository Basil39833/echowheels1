<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>


    <?php
    include '../connect.php';
   
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
    $cpassword=$_POST['cpassword'];

    $sql1 = "SELECT *from registration where email_id='$email'";
    $result = $conn->query($sql1);
    if ($result && mysqli_num_rows($result) > 0) 
    {
        //Emailid exits in the table
        
        ?>
        <script>
            Swal.fire({
                icon: 'warning',
                text: 'Email Already Exixts',
                didClose: () => {
                    window.location.replace('../register.php');
                }
            });
        </script>
        <?php
    }
    else 
    {
        if ($password == $cpassword) 
        {
            $sql="INSERT INTO registration (first_name, last_name, contact, email_id, house_name, street_name, district_name, state_name, pincode, date_of_birth ) VALUES ('$fname','$lname','$contact','$email','$house_name','$street_name','$district','$state','$pincode','$dateofbirth')";
            if (insert_data($sql)) 
            {
                //echo $sql;
                $sql2="INSERT INTO login (email_id, password, user_type, user_status ) VALUES ('$email','$password',1,1)";
                if (insert_data($sql2)) 
                {
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            text: 'Registration Successful',
                            didClose: () => {
                                window.location.replace('../login.html');
                            }
                        });
                    </script>
                    <?php
                }
            }
        } 
        else 
        {
            ?>
            <script>
                Swal.fire({
                    icon: 'warning',
                    text: 'Password Doesnt Match',
                    didClose: () => {
                        window.location.replace('../index.html');
                    }
                });
            </script>
            <?php
        }
    }
    mysqli_close($conn);
    ?>

</body>

</html>