<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Hospital</h2>
            <hr class="line"> <br>
            <div class="container">
              <div class="row">
                <div class="col">
            <h6>Medical Examination</h6>
            </div>
            <div class="col">
            <input class="search1"  type="text" placeholder="Search..">
            </div>
          </div>
          </div>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br>
          

          <div class="container">
        
            <table class="train" style="width:100%">
                <tr>
                  <th>#</th>
                  <th>The Student Name</th>
                  <th>Address</th> 
                  <th>Date </th>
                  <th>Place</th>
                  <th>Medical Examination (Yes / No)</th>
                  
                </tr>



                <?php 

                 include 'fun/db_connection.php';

                      $select = "SELECT * FROM notifications_medical WHERE accept = 0";
                      $medical_q = $conn -> query($select);
                      $index = 1;
                      foreach ($medical_q as $medical) {
                       
                       $id_ho = $medical['id'];

                        $ssn_st = $medical['student']; 
                        $select_st = "SELECT * FROM student WHERE ssn = $ssn_st";
                        $st_q = $conn -> query($select_st);
                        $student = $st_q -> fetch_assoc();


                        $id_medical = $medical['medical'];
                        $select_med = "SELECT * FROM medical_examination WHERE id = $id_medical";
                        $med_qu = $conn -> query($select_med);
                        $med = $med_qu -> fetch_assoc();        
                      
              ?>
                
                  <tr>
                    <td><?php echo $index++; ?></td>
                    <td> <?php echo $student['user_name']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td><?php echo $med['date_examination']; ?></td>
                    <td><?php echo $med['place']; ?></td>
                    <td>
                      <form action="fun/hospital_applay.php" class="edit_form form-horizontal center-block" method='POST'>

                      <input type="hidden" name="id" value="<?php echo $id_ho ?>">


                        Yes
                        <input type="radio" name="accept" value="1" <?php if($medical['accept']=="1"){ echo "checked";}?>/><br>
                        No
                        <input type="radio" name="accept" value="0" <?php if($medical['accept']=="0"){ echo "checked";}?>/><br>
                        
                      
                      <input type="submit" class="btn btn emp-btn" name="submit" value="Save" style="margin-left: 30px; width: 120px; margin-bottom: 40px"><br>
                    </td>
                    
                  </tr>


                  <?php
                }
                  ?>

              </table> <br> <br>

                      
      <!-- <div class="container">
        <div class="row">
      <div class="col">
      </div>  
      
      <div class="col"> 
      </div> 
      <div class="col">
        <a style="height: 40px;float: right;" class="btn btn emp-btn" href="#" role="button">Save</a>
      </div> -->

      </div> <!-- row -->
      </div> <!-- container --> <br> <br>

     
   
     </section>