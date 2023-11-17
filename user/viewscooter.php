<?php
session_start();
include("header.php");



   
   $username = $_SESSION['email_id'];
   $sql="select * from registration where email_id='$username'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);
?>

<style>

  .rate:not(:checked)>input {
    position: absolute;
    top: -9999px;
  }

  .rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 50px;
    color: #ccc;
    
  }

  .rate:not(:checked)>label:before {
    content: '★ ';
  }

  .rate>input:checked~label {
    color: #ffc700;
  }

  .rate:not(:checked)>label:hover,
  .rate:not(:checked)>label:hover~label {
    color: #deb217;
  }

  .rate>input:checked+label:hover,
  .rate>input:checked+label:hover~label,
  .rate>input:checked~label:hover,
  .rate>input:checked~label:hover~label,
  .rate>label:hover~input:checked~label {
    color: #c59b08;
  }

  /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="viewscooter.php">Home</a></li>
          <li class="breadcrumb-item">Scooters</li>
          <!--<li class="breadcrumb-item active">Cars</li>-->
        </ol>
      </nav>
    </div>

            <?php
            $sql = "select * from product where stock>0";
            $res = select_data($sql);
          
            while ($row = mysqli_fetch_assoc($res)) {
              $id = $row['product_id'];
      
        $sql3="SELECT AVG(rating) AS average_rating FROM rating WHERE scooter_id = '$id' ";
        $data3=select_data($sql3);
        $avg=mysqli_fetch_assoc($data3);
          
          
            ?>
                <div class="col-md-3" style="margin:0px;display: inline-block;">
                    <div class="card">
                        <img class="card-img-top" src="../admin/uploads/products/<?php echo $row['image']; ?>" alt="Card image cap" style="height: 300px;">
                        <!--<div class="card-header">
                        <h5 class="card-title"><</h5>
                        </div>-->
                        <div class="card-body">
                        <p style="font-size: large;margin:0 0 5px;"> <span class="badge bg-success" style="color:white"><?php echo number_format($avg['average_rating'] , 1)?><i class="bi bi-star-fill text-warning"></i></span></p>
                        <h5 class="card-title"><?php echo $row['scooter_name']; ?></h5>
                            <p class="card-text"><b>Category:</b> <?php echo $row['scooter_category']; ?></p>
                            <p class="card-text"><b>Color:</b> <?php echo $row['color']; ?></p>
                            <p class="card-text"><b>Brand:</b> <?php echo $row['scooter_brand']; ?></p>
                            <p class="card-text"><b>Stock:</b> <?php echo $row['stock']; ?></p>
                            <p class="card-text"><b>Description:</b> <?php echo $row['description']; ?></p>
                            <p class="card-text"><b>Rate:</b> <?php echo $row['amount']; ?></p>
                            <p> 
                              <?php
                              $sql2="select user_email from booking where user_email='$username' ";
                              $data=select_data($sql2);
                              $count=mysqli_num_rows($data);
                              if($count>=4)
                              {
                                echo " 20% off";
                              }
                              
                              ?>
                              </p>
                      <div class="btn-group">
                      <a href="./bookingform.php?id=<?php echo $row['product_id'] ?>" class="btn btn-success btn">Book Now</a></div><br><br>
                      
                      <!--<div class="btn-group">
                        
                      <p class="btn-group" data-bs-toggle="modal" data-bs-target="#verticalycentered"
                        onclick="passid('<?php echo $row['product_id']; ?>')"> <i class="bi bi-star me-1"></i>Add Review</p>-->

                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered" onclick="passid('<?php echo $row['product_id']; ?>')">
                         <i class="bi bi-star me-1"></i>Add Review
                        </button>
                        
                    </div>
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

    <div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">



          <h5 class="modal-title">Rate the Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="php/addrating.php" method="POST">
          <div class="modal-body">

            <input type="text" id="productid" name="productid" value="" hidden >

            <div class="row mb-3">
            
              <div class="col-sm-12 rate" style="padding-right:110px;">

                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>

              </div>
            </div>
           


            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Comment</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px" name="comment" maxlength="100" required></textarea>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Reply</button>
            </div>
        </form>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->

</main><!-- End #main -->

</main><!-- End #main -->

<script>
  function passid(valuee) {
    // alert("Hello");
    // alert(valuee);

    document.getElementById('productid').value = valuee;
  }
</script>

    </main><!-- End #main -->

    <?php
   include 'footer.html';
    ?>