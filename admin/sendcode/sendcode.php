<?php

$id=$_GET['id'];


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer; 

require '../../phpmailer/src/Exception.php';
require '../../phpmailer/src/PHPMailer.php';
require '../../phpmailer/src/SMTP.php';


require '../../connect.php';
session_start();
$otp = rand(100000, 999999);
$email = $_POST['email'];
$_SESSION['otpmail']=$_POST['email'];
$expiry = date("Y-m-d H:i:s", strtotime("+15 minutes")); 
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'echowheels7@gmail.com';//sender email
    $mail->Password = 'ejbfqdrplwzqysuu';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('echowheels7@gmail.com');

    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "OTP verfication";
    $mail->Body = "Your OTP is :".$otp;

    $mail->send();
      ?>
    <script>
         alert('OTP has been sent to your email');
         window.location.href='../bookedscooter1.php';
   
     </script>

    <?php
    
    $sql = "UPDATE booking set code='$otp' where booking_id='$id'";
    update_data($sql);
 
?>