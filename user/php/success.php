<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>                 
    <?php
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer; 
    
    require '../../phpmailer/src/Exception.php';
    require '../../phpmailer/src/PHPMailer.php';
    require '../../phpmailer/src/SMTP.php';
    session_start();
    require('../../connect.php');
    if (isset($_GET['amt'])) {
        $email = $_SESSION['email_id'];
        $amt = $_GET['amt'];
        $bid = $_GET['id'];
        $date = date('Y-m-d H:i:s');


        $sql = "insert into payment (booking_id,amount,paid_date) values ('$bid','$amt','$date')";
        insert_data($sql);

        $pay_id = mysqli_insert_id($conn);

        $sql = "select * from booking where booking_id='$bid'";
        $res = select_data($sql);

        while ($row = mysqli_fetch_assoc($res)) {
            $product_id = $row['booking_id'];
            $scooter_id= $row['scooter_id'];
            /*$quantity = $row['quantity'];*/
            /*$sql2 = "insert into pro_order (email_id,product_id,order_date,quantity,payment_id) values ('$email','$product_id','$date','$quantity','$pay_id')";
            insert($sql2);*/

            $sql3 = "UPDATE booking SET status=1 WHERE booking_id='$product_id'";
            update_data($sql3);
            $sql4 = "UPDATE product SET stock=stock-1 WHERE product_id='$scooter_id'";
            update_data($sql4);
        }

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'echowheels7@gmail.com';
        $mail->Password = 'ejbfqdrplwzqysuu';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($email);
    
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Booking Successfull";
        $mail->Body = "
        <html>
        <body>
        Hi,<br>
        Your booking from EchoWheels has been placed successfully. Please find the order ids below.
        <br><br>
        <br><br>
        Thank You<br>
        Team EchoWheels
        
        </body>
        </html>
        ";
    
        $mail->send();

    ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Booking Successfully!',
    }).then((result) => {
        window.location.replace('../bookedscooter.php');
    })
    </script>
    <?php
    } else {
    ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Error!',
    }).then((result) => {
        window.location.replace('../index.php');
    })
    </script>
    <?php

    }

    ?>
</body>

</html>