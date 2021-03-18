<section  id="courses"> 
        


            <div class="container">


              <?php
                  include "fun/db_connection.php";

                  $name = $_POST['search'];


                  $search = "SELECT * FROM courses WHERE name = '$name' ";
                  /*$query = mysql_query("SET NAMES 'utf8'");*/
                  $query = $conn -> query($search);
                  /*$result = mysql_query($conn, $search);*/

                  while ($row = mysqli_fetch_assoc($query) ) 
                  {
                   
                ?>
                <div style="margin-top: 20px;" class="row">
                   
                  <div class="col-sm">

                    <div class="border" style="width: 300px; height: 470px;margin-top: 20px;">
                       <img class="center" src="images/<?php echo $row['photo_course']; ?>" alt=""> <br>
                       <div class="text">
                         <h3><?php echo $row['name']; ?></h3> <br> 
                         <h6>Professor&nbsp;&nbsp;:&nbsp;&nbsp; <?php echo $row['professor']; ?></h6>
                         <h6>Duration&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['duration']; ?>&nbsp; Months</h6>
                         <h6>price&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['price']; ?></h6>
                         
                         <h6>Mobile&nbsp;&nbsp;:&nbsp;&nbsp;0<?php echo $row['mobile']; ?></h6>
                         <h6>Students&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $row['max_student']; ?></h6>
                         <a id="btn1" href="view_course.php?id=<?php echo $row['id'] ?>"class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">View More..</a>&nbsp;&nbsp;&nbsp;&nbsp;  <!-- <br> <br> -->
                         
                       </div> <!-- text  -->
                    </div> <!-- border -->
                  </div>   
                     <?php
                     }
                   ?> 
                </div> 
            </div>
          </div>   
</section>