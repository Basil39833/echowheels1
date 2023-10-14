<?php
session_start();
include("header.php");



   
   $username = $_SESSION['email_id'];
?>
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Viewed Complaints</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="activeuser.php">Home</a></li>
          <li class="breadcrumb-item active">Complaints & Feebacks</li>
          <li class="breadcrumb-item active">Viewed Feedbacks</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card"> 
          <div class="card-body"> 
            <h5 class="card-title"> 
            
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
                    
                    <th scope="col">Description</th>
                    
                    <th scope="col">Date</th>
                    <th scope="col">Email</th>
                    <th scope="col">reply</th>
                
                
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "SELECT * FROM feedback where  reply='1' ";


                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                  <td><?php echo  $row['feedback_id'] ?></td>
                 
                 <td> <?php echo $row['description'] ?></td>
                 
                 <td><?php echo $row['date']?></td>
                 <td> <?php echo $row['email_id']  ?></td>
                 <td> <?php echo $row['message']  ?></td>
                 
                 
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