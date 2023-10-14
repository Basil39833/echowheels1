<?php
session_start();
include("header.php");


$id = $_GET['id'];
$sql = "select * from product where product_id='$id'";
$res = select_data($sql);
$arr = mysqli_fetch_assoc($res);
$username = $_SESSION['email_id'];
$sql1 = "select * from registration where email_id='$username'";
$res1 = select_data($sql1);
$arr1 = mysqli_fetch_assoc($res1);
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Extend Rent</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="viewscooter.php">Home</a></li>
                <li class="breadcrumb-item active">Extend Rent</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    