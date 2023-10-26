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
          <li class="breadcrumb-item">Notification</li>
          <li class="breadcrumb-item active">Code</li>
      </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card"> 
          <div class="card-body"> 
            <h5 class="card-title"> 
            Your Personal Code
            </h5>

    <section class="section dashboard">
      <div class="row">

      <section class="section">
      <div class="row">
        <div class="col-lg-12">

         
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <!--<th scope="col">Slno.</th>-->
                    <th scope="col">Personal Code</th>
                    <!--<th scope="col">Description</th>-->
                    <!--<th scope="col">Type</th>-->
                    <th scope="col">Date</th>
                    <!--<th scope="col">Email</th>-->
                   <!-- <th scope="col">Reply</th>-->
                
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "SELECT * FROM booking where booking_id='$username' ";


                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                 
                 <td><?php echo  $row['code'] ?></td>
                 <td><?php echo $row['booking_date']?></td>
                 
                 
                  <?php
                  }
                  ?>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


    


      </div>
    </section>

  </main><!-- End #main -->

<?php 


require 'footer.html';
?>