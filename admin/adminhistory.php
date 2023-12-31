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
          <li class="breadcrumb-item active">Booking History</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card"> 
          <div class="card-body"> 
            <h5 class="card-title"> 
            Normal Booking History
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
                    <th scope="col">Email</th>
                    <th scope="col">Scooter Name</th>
                    <th scope="col">Booked Date</th>
                    <th scope="col">pickup Station</th>
                    <th scope="col">drop Station</th>
                    <th scope="col">Total Hours</th>
                    
                    <th scope="col">Amount Payed</th>
                 
                   
                
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "select * from booking where status ='2'";
               

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                  <th scope='row'><?php echo $n++; ?></th>
                  <td><?php echo  $row['user_email'] ?></td>
                 <td><?php echo  $row['scooter_name'] ?></td>
                 <td> <?php echo $row['booking_date'] ?></td>
                 <td><?php echo $row['pickup_station'] ?></td>
                 <td><?php echo $row['drop_station']?></td>
                 <td> <?php echo (int)$row['rent_hours']  ?></td>
                 <td> <?php echo $row['total']  ?></td>
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
            Extended Booking History
            </h5>

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Slno.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Scooter Name</th>
                    <th scope="col">Booked Date</th>
                    <th scope="col">pickup Station</th>
                    <th scope="col">drop Station</th>
                    
                    <th scope="col">Extended Total Hours</th>
                  
                    <th scope="col">Extend Amount Payed</th>
                   
                
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "select * from extendbooking where status ='2'";
               

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                  <th scope='row'><?php echo $n++; ?></th>
                  <td><?php echo  $row['user_email'] ?></td>
                 <td><?php echo  $row['scooter_name'] ?></td>
                 <td> <?php echo $row['booking_date'] ?></td>
                 <td><?php echo $row['pickup_station'] ?></td>
                 <td><?php echo $row['drop_station']?></td>
                 <td> <?php echo (int)$row['extend_rent_hour']  ?></td>
                 <td> <?php echo $row['extend_total']  ?></td>
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