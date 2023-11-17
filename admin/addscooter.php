<html>
  <body>
  <?php
session_start();
include("header.php");



   
   /*$username = $_SESSION['email_id'];
   $sql="select * from registration where email_id='$username'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);*/
   ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="activeuser.php">Home</a></li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Add Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Scooters</h5>

              <!-- General Form Elements -->
              <form method="POST" action="php/product.php" role="form" enctype="multipart/form-data" onsubmit="return check()">
              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Photo</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="photo" name="photo" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="scootername" name="scootername" required>
                  </div>
                </div>
                <!--<fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Car Category</legend>
                  <div class="col-sm-10" name="type">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="premium" id="premium" value="premium" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Premium
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="vintage" id="vintage" value="vintage">
                      <label class="form-check-label" for="gridRadios2">
                        Vintage
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="other" id="other" value="other" >
                      <label class="form-check-label" for="gridRadios3">
                        Other
                      </label>
                    </div>
                  </div>
                </fieldset>-->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Category</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="category" id="category" required>
                        <option value="" select any> </option>
                        <option value="Normal">Normal</option>
                        <option value="Top">Top</option>
                        
                        <!--<option value="VolleyBall">Volleyall</option>-->
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Model Year</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="modelyear" name="modelyear" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Brand</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="scooterbrand" name="scooterbrand" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Scooter Plate Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="platenumber" name="platenumber" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Color</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="color" name="color" required>
                  </div>
                </div>
                <!--<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Capacity</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="capacity" name="capacity" required="">
                  </div>
                </div>

                <!--<div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div>-->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  id="description" name="description" required></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Stock</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="stock" name="stock" required>
                  </div>
                </div>
               
               

                <div class="input-group mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Amount</label>
                      <span class="input-group-text">RS</span>
                      <input type="text" class="form-control" id="amount" name="amount" required>
                      <!--<span class="input-group-text">.00</span>-->
                    </div>

                <!--<div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>-->

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Add Details</label>
                  <div class="col-sm-10">
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 
</body>

</html>
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