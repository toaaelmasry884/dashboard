      
<!-- start section -->
<section  id="view">

        
            <div  class="container">
                <?php
                  include "fun/db_connection.php";

                  $name = $_POST ['search'];


                  $search = "SELECT * FROM student WHERE user_name = '$name' ";
                  /*$query = mysql_query("SET NAMES 'utf8'");*/
                  $query = $conn -> query($search);
                  /*$result = mysql_query($conn, $search);*/

                  while ($row = mysqli_fetch_assoc($query) ) 
                  {
                   
                ?>
                  <div class="col-sm">
                    <div class="view" style="width: 300px; height: 450px">
                      <img id="src" style="width: 100px; height: 100px" src="images/<?php echo $row['personal_photo']; ?>" alt="">
                      <a style="color: white; margin-left: 15%;" href=""> 
                        <i class='fab fa-facebook' style="font-size:24px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                        <i class='fab fa-instagram' style="font-size:24px;" > </i> &nbsp;&nbsp;&nbsp;
                        <i class='fab fa-linkedin' style="font-size:24px;"></i> </a> <br><br> 
                        
     
                        <h5>Name</h5>
                        <p class="para">
                        <?php 
                            echo $row['user_name'];
                        ?>    
                         </p><hr class="line2">
                        <h5>Email</h5>
                        <p class="para"><?php echo $row['birth_date']; ?></p> <hr class="line2">
                        <h5>Phone</h5>
                        <p class="para"><?php echo $row['mobile']; ?></p><hr class="line2">
            
                        <a href="view_student.php?ssn=<?php echo $row['ssn'] ?>" style="background-color: #fff; border-radius: 20px; color: green;" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">view</a>  <br> <br>
                          
                       </div> <!-- 1 -->
                  </div>
                   <?php
                     }
                   ?> 


                </div>
            </div> <br> <br>


</section> <!-- end section -->

