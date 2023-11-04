<?php
session_start();
include("header.php");



   
   $username = $_SESSION['email_id'];
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>History</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="activeuser.php">Home</a></li>
          <li class="breadcrumb-item">History</a></li>
          <li class="breadcrumb-item active">Payment History</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card"> 
          <div class="card-body"> 
            <h5 class="card-title"> 
            Normal Payment History
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
                    <th scope="col">Slno.</th>
                    
                    <th scope="col">Booking ID</th>
                    <th scope="col">Amount Payed</th>
                    <th scope="col">Paid Date</th>
                    
                    
                 
                   
                
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "select * from payment where payment_id ='$booking_id'";
               

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                  <th scope='row'><?php echo $n++; ?></th>
                  <td><?php echo  $row['booking_id'] ?></td>
                  <td> <?php echo $row['amount']  ?></td>
                 <td><?php echo  $row['paid_date'] ?></td>
                 
                 <!--<td>
                      <div class="btn-group">
                        <a href="replay.php?id=<?php echo $row['complaint_id'] ?>" class="btn btn-success btn-sm">Reply</a>
                        
                      </div>
                    </td>-->
                 
                  <?php
                  }
                  ?>
                 
                </tbody>
              </table>

              
    <div class="card"> 
          <div class="card-body"> 
            <h5 class="card-title"> 
            Extended Payment History
            </h5>

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Slno.</th>
                    
                    <th scope="col">Booking ID</th>
                    <th scope="col">Amount Paid</th>
                    <th scope="col">Paid Date</th>
                    
                
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "select * from extendpayment where extendbooking_id ='$id'";
               

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                  <th scope='row'><?php echo $n++; ?></th>
                  <td><?php echo  $row['extendbooking_id'] ?></td>
                 <td><?php echo  $row['extend_amount'] ?></td>
                 <td> <?php echo $row['paid_date'] ?></td>
                
                 <!--<td>
                      <div class="btn-group">
                        <a href="replay.php?id=<?php echo $row['complaint_id'] ?>" class="btn btn-success btn-sm">Reply</a>
                        
                      </div>
                    </td>-->
                 
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




include 'footer.html';

?>