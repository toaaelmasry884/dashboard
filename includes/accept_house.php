<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Housing</h2>
            <hr class="line"> <br>
            <div class="container">
              <div class="row">
                <div class="col">
            <h6>Housing Students</h6>
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
                  <th>Section</th>
                  <th>Address</th>
                   <!-- <th>Academic year</th> -->
                 
                </tr>

                 <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM housing WHERE accepted = 1";
                      $house_q = $conn -> query($select);
                      $index = 1;
                      foreach ($house_q as $house) {
                        
                          $ssn_st = $house['student'];
                          $select_st = "SELECT * FROM student WHERE ssn = $ssn_st";
                          $student_q = $conn -> query($select_st);
                          $student = $student_q -> fetch_assoc();


                           $id_build = $house['building'];
                           $build_s = "SELECT * FROM building WHERE id = $id_build";
                           $build_q = $conn -> query($build_s);
                           $build = $build_q -> fetch_assoc();
                      
                      
              ?>
                <tr>
                  <td><?php echo $index++; ?></td>
                  <td><?php echo $student['user_name']; ?></td>
                  <td><?php echo $student['acadimic_year']; ?> </td>
                  <td><?php echo $build['name']; ?></td>
                  <!-- <td>The First Year</td> -->
                 
                </tr>
                <?php
              }
            
                ?>
                


                 
              </table>
        </section>