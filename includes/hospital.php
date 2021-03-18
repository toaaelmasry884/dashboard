<?php
include 'fun/db_connection.php';
$select = "SELECT count(id) AS total FROM notifications_medical WHERE accept = 0";
$count_q = $conn -> query($select);
$count = $count_q -> fetch_assoc();
$num_row = $count['total'];


?>

<section  id="fees"> 
  <h2 style="margin-top:-10px ; margin-left: 15px;"> Hospital</h2>
  <hr class="line"> <br>
  <h6>Medical Examination</h6>
  <hr style=" width:20% ;float: left; " class="line"> <br> <br>
  <div class="container">
    <h2 style="text-align: center;">The Students That are Applied to Medical Examination</h2> <br> <br>

    <div class="row">

      <div class="col-md-3 col-sm-6 " style="margin-left: 400px">
           <img  class="train-pic" src="images/csifac-01.jpg" alt="">
           <h6>The Faculty of Computers and Information Systems</h6>
        <div>
           <p>The Number of applicants <span class="num"><?php echo $num_row; ?></span> &nbsp; &nbsp; &nbsp; &nbsp;   <a class="details" href="hospital_details.php"> Details <i class="fas fa-angle-double-right"></i> </a>  </p> 
        </div><!-- feat -->
      </div><!-- 1-->
   
      

           

    </div>
            
 </section>