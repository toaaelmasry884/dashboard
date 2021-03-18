 <section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Training</h2>
            <hr class="line"> <br>
            <div class="container">
              <div class="row">
                <div class="col">
            <h6>Admissions</h6>
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
                  <th>Name Place</th> 
                  <th>Address</th>
                  <th>Section</th>
                  <th>status</th>
                </tr>
                 <?php 

                 include 'fun/db_connection.php';

                      $select = "SELECT * FROM training WHERE applay = 0";
                      $train_q = $conn -> query($select);
                      $index = 1;
                      foreach ($train_q as $train) {

                        $id_tr = $train['id'];

                       $select = "SELECT * FROM training WHERE id = $id_tr";
                      //select users data
                       $tr_q = $conn -> query($select);

                        //fetch data
                        $result = $tr_q -> fetch_assoc();

                        $id_portal = $train['training_portal'];

                        $select_portal = "SELECT * FROM training_portal WHERE id = $id_portal";
                        $portal_q = $conn -> query($select_portal);
                        $portal = $portal_q -> fetch_assoc();

                        $ssn_student = $train['student'];
                        $select_student = "SELECT * FROM student WHERE ssn = $ssn_student";
                        $student_q = $conn -> query($select_student);


                        foreach ($student_q as $student) {
                          $id_depart = $student['department'];
                          $select_depart = "SELECT * FROM department WHERE id = $id_depart";
                          $depart_q = $conn -> query($select_depart);
                          $depart = $depart_q -> fetch_assoc();
                      
                      
              ?>
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $student['user_name']; ?></td>
                    <td><?php echo $portal['name']; ?></td>
                    <td><?php echo $portal['address']; ?></td>
                    
                    <td><?php echo $depart['name']; ?></td>
                    <td> 
                      
                      

                      <form action="fun/applay_train.php" class="edit_form form-horizontal center-block" method='POST'>

                      <input type="hidden" name="id" value="<?php echo $id_tr ?>">


                        Accept
                        <input type="radio" name="applay" value="1" <?php if($result['applay']=="1"){ echo "checked";}?>/><br>
                        Refuse
                        <input type="radio" name="applay" value="0" <?php if($result['applay']=="0"){ echo "checked";}?>/><br>
                        
                      
                      <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-left: 30px">
                            
                    </td>
                   
                </tr>
                <?php
              }
            }
                ?>
              </table>
        </section>