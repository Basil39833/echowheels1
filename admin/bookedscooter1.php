<?php
session_start();
include("header.php");
/*$id = $_GET['id'];*/


$username = $_SESSION['email_id'];

   $sql="select * from booking where status=1" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);

   
   
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Booked Scooters</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="activeuser.php">Home</a></li>
          <li class="breadcrumb-item">Booked Scooters</li>
          <li class="breadcrumb-item active">Booked Scooter</li>
        </ol>
      </nav>
    </div>

    <?php
            $sql="select * from booking where status='1'" ;
            $res=select_data($sql);
            while($arr=mysqli_fetch_assoc($res)){
            


            $scooterid=$arr['scooter_id'];
            $sql1 = "select * from product where product_id=$scooterid";
            $res1 = select_data($sql1);
            $total=$arr['total'];
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
                            <p class="card-text"><b>scooter Category:</b> <?php echo $arr['scooter_category']; ?></p>
                            <p class="card-text"><b>Scooter Color:</b> <?php echo $arr['scooter_color']; ?></p>
                            <p class="card-text"><b>Booked date:</b> <?php echo $arr['booking_date']; ?></p>
                            <p class="card-text"><b>User Email:</b> <?php echo $arr['user_email']; ?></p>
                            <p class="card-text"><b>Pickup station:</b> <?php echo $arr['pickup_station']; ?></p>
                            <p class="card-text"><b>Drop station:</b> <?php echo $arr['drop_station']; ?></p>
                            <p class="card-text"><b>Rent Hours:</b> <?php echo (int)$arr['rent_hours']; ?></p>
                            <p class="card-text"><b>Total Rate:</b> <?php echo $arr['total']; ?></p>
                            <p>
                            <div class="btn-group">
                      <a href="./sendcode/sendmail.php?id=<?php echo $arr['booking_id']?> & email=<?php echo $arr['user_email'] ?>" class="btn btn-success btn">send Code </a>
                            </div>
                      <div class="btn-group">
                      <a href="php/remove.php?id=<?php echo $arr['booking_id'] ?>" class="btn btn-danger btn">Remove</a>
                        
                      </div>
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