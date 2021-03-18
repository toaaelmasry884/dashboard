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
                  <th>Choose the Student </th>
                </tr>
                <?php
                include 'fun/db_connection.php';
                $select = "SELECT * FROM notifications_medical WHERE accept = 0";
                $med_q = $conn -> query($select);
                $index = 1;

                foreach ($med_q as $med) {
                  $id_ho = $med['id'];


                  $ssn_st = $med['student'];
                  $select_st = "SELECT * FROM student WHERE ssn = $ssn_st";
                  $st_q = $conn -> query($select_st);
                  $student = $st_q -> fetch_assoc();


                  /*$place = $_GET['place'];*/
                  $id_medical = $med['medical'];
                  $select_med = "SELECT * FROM medical_examination WHERE id = $id_medical";
                  $med_qu = $conn -> query($select_med);
                  /*$medical = $med_qu -> fetch_assoc();*/
                
                ?>
                  <tr>
                    <td><?php echo $index++ ;?></td>
                    <td><?php echo $student['user_name']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                <form action="fun/hospital_details.php" class="edit_form form-horizontal center-block" method='POST'>

                           
                    <td><!-- Accept -->
                        <input type="checkbox" name="accept" value="1" <?php if($med['accept']=="1"){ echo "checked";}?>/></td>
                  </tr>
                  <?php
                }
                  ?>
              </table> <br> <br>

                      
      <div class="container">
        <div class="row">
      <div class="col">
        <label style="float: left;" for="fname">Place of Resevation</label><br>
        
        <select  style="width: 100%; margin-top: 10px;" name="place" >
          <option></option>
            <?php
                       
                         foreach ($med_qu as $meds) {
                         
                          

                        ?>

                      <option value="<?php echo $meds['id'] ?>"><?php echo $meds['place'];?></option>

                       <?php
                      }

                     ?>
         </select>
      </div>  
      
      <div class="col">
        <label style="float: left;" for="fname">Date of Reservation</label><br>
        <input style="width: 100%; margin-top: 10px;" type="date" id="fname" name="date_examination" value=""><br>
      </div> 
      <div class="col">
        <input type="submit" class="btn btn emp-btn" name="submit" value="Send" style="height: 40px;">
        <!-- <a style="height: 40px;" class="btn btn emp-btn" href="#" role="button">Send</a> -->
      </div>
</form>
      </div> <!-- row -->
      </div> <!-- container --> <br> <br>

     
   
     </section>