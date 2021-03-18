<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Housing </h2>
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
                  <th>Section</th>
                  <th>Address</th> 
                  <th>Distance</th> 
                  <th>Academic year</th>
                  <th>Action </th>
                  
                </tr>



                <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM housing WHERE accepted = 0";
                      $house_q = $conn -> query($select);

                      $index = 1;
                      foreach ($house_q as $house) {


                         $id_tr = $house['id'];

                       $select = "SELECT * FROM housing WHERE id = $id_tr";
                      //select users data
                       $tr_q = $conn -> query($select);

                        //fetch data
                        $result = $tr_q -> fetch_assoc();


                        $id_b = $house['building'];
                        $select_build = "SELECT * FROM building";
                        $build_q = $conn -> query($select_build);
                        $build = $build_q ->fetch_assoc();
                        



                        $ssn =$house['student'];

                        $select_st ="SELECT * FROM student WHERE ssn = $ssn";
                        $st_q = $conn -> query($select_st);
                        $st = $st_q -> fetch_assoc();

                        foreach ($st_q as $st) {
                          $id =$st['department'];
                          $select_depart ="SELECT * FROM department WHERE id = $id";
                        $depart_q = $conn -> query($select_depart);
                        $depart = $depart_q -> fetch_assoc();



                       

                        /*$ssn =$train['student'];

                        $select_st ="SELECT * FROM student WHERE ssn = $ssn";
                        $st_q = $conn -> query($select_st);
                        $st = $st_q -> fetch_assoc();*/
                      ?>
                <tr>
                  <td><?php echo $index++; ?></td>
                  <td><?php echo $st['user_name']; ?></td>
                  <td><?php echo $depart['name']; ?> </td>
                  <td><?php echo $build['name']; ?></td>
                  <td><?php echo $house['distance']; ?> &nbsp; Km </td>
                  <td><?php echo $st['acadimic_year']; ?></td>
                  <td>
                    <form action="fun/details_house.php" class="edit_form form-horizontal center-block" method='POST'>

                      <input type="hidden" name="id" value="<?php echo $id_tr ?>">


                        Accept
                        <input type="radio" name="accepted" value="1" <?php if($result['accepted']=="1"){ echo "checked";}?>/><br>
                        Refuse
                        <input type="radio" name="accepted" value="0" <?php if($result['accepted']=="0"){ echo "checked";}?>/><br>
                        
                      
                      <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-left: 30px">

                      </form>  
                </td>
                   

                </tr>

                <?php
              }
            }
                ?>
              
              </table>

            
        </section>