<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Hospital</h2>
            <hr class="line"> <br>
            <h6>Show Medical Examination</h6>
            <hr style=" width:30% ;float: left; " class="line"> <br> <br> <br> 

            
          <!-- <div class="container">

            <div class="container">
                <div class="row">
                 <div class="col">
                        <label style="float: left;" for="fname">Date </label><br>
                        <input style="width: 100%; margin-top: 10px;" type="date" id="fname" name="fname" value=""><br>
                 </div>
              <div class="col">
               
                       
                <label style="float: left;" for="fname">Clinic</label><br>
                <select  style="width: 100%; margin-top: 10px;"  >
                  <option></option>
                   

                       
                 </select>
              </div> 
              <div class="col">
              </div>  <br> <br> <br> <br> <br> 
              </div> -->
              <!-- </div> --> 
              
              
        
            <table class="train" style="width:100%">
                <tr>
                  <th>ID</th>
                  <th>The Student Name</th>
                  <th>Address</th> 
                  <th>Faculty</th>
                  <th>Academic year</th>
                 
                </tr>
                 <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM notifications_medical";
                      $medical = $conn -> query($select);

                      $index = 1;
                      foreach ($medical as $medicals) {

                        $ssn_st = $medicals['student'];
                        $select_st = "SELECT * FROM student WHERE ssn = $ssn_st";
                        $student_q = $conn -> query($select_st);
                        foreach ($student_q as $student) {
                          $id_collage = $student['collage'];
                          $select_col = "SELECT * FROM collage WHERE id = $id_collage";
                          $col_q = $conn -> query($select_col);
                          $collage = $col_q -> fetch_assoc();
                        


                      ?>
                  <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $student['user_name']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td><?php echo $collage['name']; ?></td>
                    <td><?php echo $student['acadimic_year']; ?></td>
                  </tr>

                  <?php
                }
              }
                  ?>
              </table> <br> <br>

            </div>
        </section>  