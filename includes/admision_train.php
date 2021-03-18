<?php
include 'fun/db_connection.php';
$select = "SELECT count(id) AS total FROM training WHERE applay = 0";
$count_q = $conn -> query($select);
$count = $count_q -> fetch_assoc();
$num_row = $count['total'];

$select_a = "SELECT count(id) AS total FROM training_portal WHERE accepted = 1";
$count_qu = $conn -> query($select_a);
$count_a = $count_qu -> fetch_assoc();
$numb_row = $count_a['total'];

?>

 <section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Training</h2>
            <hr class="line"> <br>
            <h6>Admissions</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>
     
     <section id="city">
        <div class="container">
         <h2 style="text-align: center;">The Students That are applied to the Training</h2> <br> <br>

        <div class="row" >
          <div class="col-md-3 col-sm-6 " style="margin-left: 400px;">
              <img   class="train-pic" src="images/default-16x9.jpg" alt="">
                <h6>The Applay Students</h6>
            <div>
              <p>The Number of applicants <span class="num"><?php echo $num_row; ?></span> &nbsp; &nbsp; &nbsp; &nbsp;   <a class="details" href="applay_train.php"> Details <i class="fas fa-angle-double-right"></i> </a>  </p>  
            </div><!-- feat --> <br> <br> <br> 
        </div><!-- 4--> 

                       
        <div class="container">
          <h2 style="text-align: center;">The Students That are Accepted to the Trainig</h2> <br> <br>
          <div class="row">
            <div class="col-md-3 col-sm-6" style="margin-left: 400px;">
              <img  class="train-pic" src="images/default-16x9.jpg" alt="">
              <h6>The Accepted Students</h6>
            <div>
              <p>The Number of Accepted <span class="num"><?php echo $numb_row; ?></span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   <a class="details" href="accepted_train.php"> Details <i class="fas fa-angle-double-right"></i> </a>  </p>
            </div><!-- feat -->
          </div>
                                
        </div>  

</section>