<?php
session_start();
include("header.php");



   
   $username = $_SESSION['email_id'];
   $sql="select * from registration where email_id='$username'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Scooter</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="viewscooter.php">Home</a></li>
          <!--<li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Cars</li>-->
        </ol>
      </nav>
    </div>

            <?php
            $sql = "select * from product where stock>0";
            $res = select_data($sql);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="col-md-3" style="margin:0px;display: inline-block;">
                    <div class="card">
                        <img class="card-img-top" src="../admin/uploads/products/<?php echo $row['image']; ?>" alt="Card image cap" style="height: 300px;">
                        <!--<div class="card-header">
                        <h5 class="card-title"><</h5>
                        </div>-->
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['scooter_name']; ?></h5>
                            <p class="card-text"><b>Category:</b> <?php echo $row['scooter_category']; ?></p>
                            <p class="card-text"><b>Color:</b> <?php echo $row['color']; ?></p>
                            <p class="card-text"><b>Brand:</b> <?php echo $row['scooter_brand']; ?></p>
                            <p class="card-text"><b>Stock:</b> <?php echo $row['stock']; ?></p>
                            <p class="card-text"><b>Description:</b> <?php echo $row['description']; ?></p>
                            <p class="card-text"><b>Rate:</b> <?php echo $row['amount']; ?></p>
                            <p> 
                      <div class="btn-group">
                      <a href="./bookingform.php?id=<?php echo $row['product_id'] ?>" class="btn btn-success btn">Book Now</a>
                        
                      </div></p>

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