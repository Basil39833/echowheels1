<?php
session_start();
include("header.php");

$username = $_SESSION['email_id'];

   $sql="select * from extendbooking where user_email='$username'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);

   $total=$arr['extend_total'];
   
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Scooter</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="viewscooter.php">Home</a></li>
          <li class="breadcrumb-item"><a href="">Bookedscooters</a></li>
          <li class="breadcrumb-item"><a href="">Extendbooked</a></li>
          <!--<li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Cars</li>-->
        </ol>
      </nav>
    </div>

    <?php
            $sql="select * from extendbooking where user_email='$username' && status=1" ;
            $res=select_data($sql);
            while($arr=mysqli_fetch_assoc($res)){
            


            $scooterid=$arr['scooter_id'];
            $sql1 = "select * from product where product_id=$scooterid";
            $res1 = select_data($sql1);
            $total=$arr['extend_total'];
            $bid=$arr['booking_id'];
            $row1 = mysqli_fetch_assoc($res1)
            
            ?>
             
             <div class="col-md-4" style="margin:0px;display: inline-block;">
                    <div class="card">
                        <img class="card-img-top" src="../admin/uploads/products/<?php echo $row1['image']; ?>" alt="Card image cap" style="height: 300px;">
                        <!--<div class="card-header">
                        <h5 class="card-title"><</h5>
                        </div>-->
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $arr['scooter_name']; ?></h5>
                        <p class="card-text"><b>Booked Date:</b> <?php echo $arr['booking_date']; ?></p>
                        <p class="card-text"><b>User Email:</b> <?php echo $arr['user_email']; ?></p>
                        <p class="card-text"><b>Pickup station:</b> <?php echo $arr['pickup_station']; ?></p>
                            <p class="card-text"><b>Drop station:</b> <?php echo $arr['drop_station']; ?></p>
                            <p class="card-text"><b>Extended Hour:</b> <?php echo (int)$arr['extend_rent_hour']; ?></p>
                            <p class="card-text"><b>Total Rate:</b> <?php echo $arr['extend_total']; ?></p>
                            <div class="btn-group">
                      <a href="./extendreceipt.php?id=<?php echo $arr['extend_id'] ?>" class="btn btn-danger btn">View Receipt</a>
                        
                      </div>
                            </p>
                          
                            </div>
                        <!--<div class="card-footer text-muted">

                        </div>-->
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        </div>
        
    </section>
    </main><!-- End #main -->

    <?php
   include 'footer.html';

?>