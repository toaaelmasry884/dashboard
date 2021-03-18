 <section  id="fees"> 
                  <h2 style="margin-top:-10px ; margin-left: 15px;">Student welfare</h2>
                  <hr class="line"> <br>
                  <h6> Show Students </h6>
                  <hr style=" width:20% ;float: left; " class="line"> <br> <br> <br>  
        
                  <table class="train" style="width:100%">
                     <tr>
                        <th>ID</th>
                        <th>The Student Name</th>
                        <th>The Activity</th> 
                        <th>Action</th>
                     </tr>

                     <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM activitestudent";
                      $active_q = $conn -> query($select);
                      $index = 1;
                      foreach ($active_q as $active) {

                        $ssn_student = $active['student'];
                        $select_student = "SELECT * FROM student WHERE ssn = $ssn_student";
                        $student_q = $conn -> query($select_student);
                        $student = $student_q -> fetch_assoc();

                          $id_active = $active['activite'];
                          $select_active = "SELECT * FROM activate WHERE id = $id_active";
                          $active_q = $conn -> query($select_active);
                          $activate_l = $active_q -> fetch_assoc();

                          
                      
                      
              ?>
                     <tr>
                        <td><?php echo $index++; ?></td>
                        <td><?php echo $student['user_name']; ?></td>
                        <td><?php echo $activate_l['name']; ?></td>
                        <td><a href="fun/delete_stucare.php?student=<?php echo $active['student']; ?>"> <i class="fas fa-user-slash"></i> </a> <br>  </td>
                     </tr>

                <?php
              }
                ?>
              </table> <br> <br>            
 
     
            </section>