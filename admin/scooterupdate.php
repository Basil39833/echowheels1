<?php
session_start();
include("header.php");


$id=$_GET['id'];
   $sql="select * from product where product_id='$id'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);
   
   ?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Scooter</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="activeuser.php">Home</a></li>
          <li class="breadcrumb-item active">Update Scooter</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
                        <img class="card-img-top" src="../admin/uploads/products/<?php echo $arr['image']; ?>" alt="Card image cap" style="height: 300px;">
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            
              
          <div class="card-body">
              <h5 class="card-title">Enter Details Here</h5>

              <!-- General Form Elements -->
              <form method="POST" action="php/updatescooter.php" role="form" enctype="multipart/form-data" onsubmit="return check()">
              <!--<div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Photo Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="photo" name="photo">
                  </div>
                </div>-->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">scooter id</label>
                  <div class="col-sm-10">
                  <input name="product_id" type="text" class="form-control" id="product_id" value=<?php echo $arr['product_id'];?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Name</label>
                  <div class="col-sm-10">
                  <input name="scooter_name" type="text" class="form-control" id="scooter_name" value=<?php echo $arr['scooter_name'];?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Category</label>
                  <div class="col-sm-10">
                  <input name="scooter_category" type="text" class="form-control" id="scooter_category" value=<?php echo $arr['scooter_category'];?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Color</label>
                  <div class="col-sm-10">
                  <input name="color" type="text" class="form-control" id="color" value=<?php echo $arr['color'];?>>
                  </div>
                </div>
                <!--<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter model year</label>
                  <div class="col-sm-10">
                  <input name="scooter_model_year" type="text" class="form-control" id="scooter_model_year" value=<?php echo $arr['scooter_model_year'];?>>
                  </div>
                </div>-->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter brand</label>
                  <div class="col-sm-10">
                  <input name="scooter_brand" type="text" class="form-control" id="scooter_brand" value=<?php echo $arr['scooter_brand'];?>>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stock</label>
                  <div class="col-sm-10">
                  <input name="stock" type="text" class="form-control" id="stock" value=<?php echo $arr['stock'];?>>
                  </div>
                </div>
                <!--<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  id="description" name="description"  value=<?php echo $arr['description'];?>></textarea>
                  </div>
                </div>-->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" id="amount" value=<?php echo $arr['amount'];?>>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Proceed</label>
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

           
        </div>

          

            </div>
          

        </div>
      </div>
    </section>
    <?php 

include 'footer.html';

?>
<script type="text/javascript">
        function check() {
            var photo = document.getElementById('photo');
            var fileExtension = photo.value.split('.').pop().toLowerCase();
            if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
                return true;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid File Format!',
                    text: 'Please select jpg, jpeg or png file',
                }).then((result) => {
                    photo.focus();
                })
                return false;
            }

        }
    </script>