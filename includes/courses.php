<section  id="courses"> 
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <h2 style="margin-top:-10px ; margin-left: 15px;">About Courses</h2>
                  </div> <!-- 1 -->
                  <div class="col-sm"></div>
                  <div class="col-sm">
                   <form method="post" action="search_course.php"> 
           
                    <input style="float: right; margin-left: 10px; color: green; border: 2px solid #2eb97f; border-radius: 5px;" ype="text" placeholder="search ....." name="search">
                   </form> 
                  </div> <!-- 2 -->
                </div> <!-- row -->
            </div>   <!-- container -->            
            <hr class="line"> <br>
            <h6 style="margin-top:-10px ; margin-left: 15px;">Course List</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br>


            <div class="container">
                <div style="margin-top: 20px;" class="row">
                   <?php

                   include 'fun/db_connection.php'; 

                   $courses_s = "SELECT * FROM courses";
                   $courses = $conn -> query($courses_s);

                   $index = 1;
                   foreach ($courses as $course) {
                   ?>
                  <div class="col-sm">

                    <div class="border" style="width: 300px; height: 470px;margin-top: 20px; margin-left: 10px;">
                       <img class="center" style="width: 270px; height: 200px " src="images/<?php echo $course['photo_course']; ?>" alt=""> <br>
                       <div class="text">
                         <h3><?php echo $course['name']; ?></h3> <br> 
                         <h6>Professor&nbsp;&nbsp;:&nbsp;&nbsp; <?php echo $course['professor']; ?></h6>
                         <h6>Duration&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $course['duration']; ?>&nbsp; Months</h6>
                         <h6>price&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $course['price']; ?></h6>
                         
                         <h6>Email&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $course['email']; ?></h6>
                         <h6>Students&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $course['max_student']; ?></h6>
                         <a id="btn1" href="view_course.php?id=<?php echo $course['id'] ?>"class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">View More..</a>&nbsp;&nbsp;&nbsp;&nbsp;  <!-- <br> <br> -->
                         <a href="?action=edit_course.php&id=<?php echo $course['id'] ?>" ><i class='far fa-edit'></i> </a>
                       </div> <!-- text  -->
                    </div> <!-- border -->
                  </div>   
                     <?php
                     }
                   ?> 
                </div> 
            </div>
</div>   

                    <!-- <div class="row" >
                      <div style="margin-left: 8%; margin-top: 40px;" class="form-group">
                        <label  for="inlineFormInput" class="form-control-label"></label>
                          <select  name="view"  class="form-control">
                            <option value="6" selected>6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                          </select>
                        
                      </div>
                    </div> -->

  
        </section>