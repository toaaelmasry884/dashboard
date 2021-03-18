<section  id="fees"> 
                <h2 style="margin-top:-10px ; margin-left: 15px;">Disclaimer List Show</h2>
                <hr class="line"> <br>
                      <div class="col">
                <!-- <div  style="float: right;"  class="btn-group" role="group"> -->
                  <!-- <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tools
                  </button>
                  <div style="background-color: #ECEAEA; " class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#"> <i class="fas fa-print"></i> &nbsp;&nbsp;Print</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> &nbsp;&nbsp;Save As Pdf</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> &nbsp;&nbsp;Export To Excel</a>
                  </div>
                </div> --> <!-- group -->

               <!--  </div> -->

                <div class="container">
                    <div class="row">

                      <div  class="container">
                <?php
                  include "fun/db_connection.php";

                  $name = $_POST ['search'];




                  $search = "SELECT * FROM disclaimer WHERE student = '$name' ";
                  /*$query = mysql_query("SET NAMES 'utf8'");*/
                  $query = $conn -> query($search);
                  /*$result = mysql_query($conn, $search);*/


                  /*house*/

                   $select_hous = "SELECT * FROM housing WHERE student ='$name' ";

                  $query_hous = $conn -> query($select_hous);

                  $house = $query_hous -> fetch_assoc();


                  /*training*/


                   $select_train = "SELECT * FROM training WHERE student ='$name' ";

                  $query_train = $conn -> query($select_train);
                  $portal = $query_train -> fetch_assoc();


                  /*activites*/


                 $select_active = "SELECT * FROM activitestudent WHERE student ='$name' ";

                              $query_active = $conn -> query($select_active);
                              $active = $query_active -> fetch_assoc();

                  

                 

                  foreach ($query as $search_st) {
                    $ssn_st = $search_st['student'];

                    $select_st = "SELECT * FROM student WHERE ssn = '$ssn_st' ";



                    $stu_q = $conn -> query($select_st);
                    $student = $stu_q -> fetch_assoc();

                  /*}

                  while ($row = mysqli_fetch_assoc($query) ) 
                  {

*/                   



                ?>
                      <div class="col-4">
                        <img src="images/<?php echo $student['personal_photo']; ?>" alt="" id="exe" style="width:100%">
                      </div>
                      <div class="col-8" style="margin-left: 350px; margin-top: -170px">
                        <h3 class="h-emp">Student Name:
                            <span class="emp-item"><?php echo $student['user_name']; ?></span></h3> <br>


                       

                    <?php
                    }
                      ?>
                
                       <!--  <h3 class="h-emp">Library:
                             <span  style="border: 1px solid #ffff; color: #ffff; background-color: #2EB97F; width:200px; " class="emp-item">Yes</span></h3> <br> -->

                            

                        <h3 class="h-emp">Housing:

                          <?php 
                             if($house['accepted'] == 0) {
                               echo "<span style='border: 1px solid #ffff; color: #ffff; background-color: red;  width:190px;'' class='emp-item'> Refuse </span>";
                             }else{
                               echo "<span style='border: 1px solid #ffff; color: #ffff; background-color: #2EB97F;   width:190px;'' class='emp-item'> Accepted </span>";
                             }
                             ?>
                           </h3>
                             <!-- <span style="border: 1px solid #ffff; color: #ffff; background-color: red;  width:190px;" class="emp-item">No , Unpaid</span></h3> <br> -->

                             <br>

                             

                        <h3 class="h-emp">Training:
                          <?php 
                             if($portal['applay'] == 0) {
                               echo "<span style='border: 1px solid #ffff; color: #ffff; background-color: red;  width:190px;'' class='emp-item'> Refuse </span>";
                             }else{
                               echo "<span style='border: 1px solid #ffff; color: #ffff; background-color: #2EB97F;   width:190px;'' class='emp-item'> Accepted </span>";
                             }
                             ?>
                          <!--  <span  style="border: 1px solid #ffff; color: #ffff; background-color: #2EB97F; width:190px; " class="emp-item">Yes</span> -->
                         </h3> <br>
                         

                        <h3 class="h-emp">Military Education:
                           <span style="border: 1px solid #ffff; color: #ffff; background-color: red; width:100px; " class="emp-item">No</span>
                         </h3> <br>


                         


                        <h3 class="h-emp">Student Welfare:
                          <?php 
                             if($active['activite'] == 0) {
                               echo "<span style='border: 1px solid #ffff; color: #ffff; background-color: red;  width:190px;'' class='emp-item'> NO </span>";
                             }else{
                               echo "<span style='border: 1px solid #ffff; color: #ffff; background-color: #2EB97F;   width:190px;'' class='emp-item'> Yes </span>";
                             }
                             ?>
                        </h3> 
                        
                  

                      </div>
      

                      
                    </div>
                  </div>
                
                   
                 

              
         
            </section>