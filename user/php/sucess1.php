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


        $sql = "insert into extendpayment (extendbooking_id,extend_amount,paid_date) values ('$bid','$amt','$date')";
        insert_data($sql);

        $pay_id = mysqli_insert_id($conn);

        $sql = "select * from extendbooking where extend_id='$bid'";
        $res = select_data($sql);

        while ($row = mysqli_fetch_assoc($res)) {
            $product_id = $row['booking_id'];
            $scooter_id= $row['scooter_id'];
            /*$quantity = $row['quantity'];*/
            /*$sql2 = "insert into pro_order (email_id,product_id,order_date,quantity,payment_id) values ('$email','$product_id','$date','$quantity','$pay_id')";
            insert($sql2);*/
            $sql3 = "UPDATE extendbooking SET status=1 WHERE booking_id='$product_id'";
            update_data($sql3);
            $sql4 = "UPDATE extendbooking SET extend_payment=1 WHERE booking_id='$product_id'";
            update_data($sql4);
            
        }
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'echowheels7@gmail.com';
        $mail->Password = 'fqjthfdthafbqxte';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($email);

        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Booking Successfull";
        $message = file_get_contents('../../mail-templates/payment1.html'); // Load your HTML content

#
     // Replace placeholders with actual dynamic data
   
    #$currentDate = date('Y-m-d');
    $message = str_replace('{{amt}}', $amt, $message);
    $message = str_replace('{{id}}', $bid, $message);
   

    $mail->Body = $message;
// #die();
//     $mail->Body = $message;
    $mail->AltBody = 'If you cannot view this email, please contact support.';

    // Send the email
    $mail->send();


       /* $sql = "delete from cart where user='$email'";
        delete($sql);*/



    ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Booking Successfull!',
    }).then((result) => {
        window.location.replace('../extendedbooked.php');
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