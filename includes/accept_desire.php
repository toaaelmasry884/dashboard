<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Department Desires</h2>
            <hr class="line"> <br>
            <div class="container">
              <div class="row">
                <div class="col">
            <h6>Acceptions</h6>
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
                  <th>First Desire</th> 
                  <th>Second Desire</th>
                  <th>Third Desire</th>
                  <th>Action</th>
                </tr>
                <?php
                $select = "SELECT * FROM department_student WHERE accepted = 0";
                      $desire_q = $conn -> query($select);
                      $index = 1;
                      foreach ($desire_q as $desire) {
                        
                          $ssn_st = $desire['student'];
                          $select_st = "SELECT * FROM student WHERE ssn = $ssn_st";
                          $student_q = $conn -> query($select_st);
                          $student = $student_q -> fetch_assoc();


                           /*$id_build = $house['building'];
                           $build_s = "SELECT * FROM building WHERE id = $id_build";
                           $build_q = $conn -> query($build_s);
                           $build = $build_q -> fetch_assoc();*/
                ?>
                <tr>
                  <td><?php echo $index++; ?></td>
                  <td><?php echo $student['user_name']; ?></td>
                  
                  <form action="fun/accept_desire.php" class="edit_form form-horizontal center-block" method='POST'>
                    <input type="hidden" name="student" value="<?php echo $ssn_st ?>">
                  <td>
                    Information Technology 
                     <br> <input type="radio" name="accepted" value="1" <?php if($desire['department']=="1" /*&& $desire['accepted'] == "1"*/){ echo "checked";}?>/>
                  </td>

                  <td>Computer Science <br> <input type="radio" name="accepted" value="2" <?php if($desire['department']=="2" /*&& $desire['accepted'] == "1"*/){ echo "checked"; }?>/></td>
                  <td>Information System  <br> <input type="radio" name="accepted" value="3" <?php if($desire['department']=="3" /*&& $desire['accepted'] == "1"*/){ echo "checked";}?>/></td>

                  

                  <td style="width: 50px; "><input type="submit" class="btn btn emp-btn" name="submit" value="Save" style="margin-left: 30px; width: 60px; margin-bottom: 40px"><br></td>
                </tr>

                <?php
              }
                ?>
                </form>
                
              
              </table>
               
        </section>