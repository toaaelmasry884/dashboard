<?php

$id = $_GET['id'];

include 'fun/db_connection.php';


$course_s = "SELECT * FROM courses WHERE id = $id";
$course_q = $conn -> query($course_s);

$course = $course_q -> fetch_assoc();
 
?>

<section  id="courses"> 
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <h2 style="margin-top:-10px ; margin-left: 15px;">About Courses</h2>
              </div> <!-- 1 -->
              <div class="col-sm"></div>
              <div class="col-sm">
         
                <input style="float: right; margin-left: 10px; color: green; border: 2px solid #2eb97f; border-radius: 5px;" ype="text" placeholder="name or id">
              </div> <!-- 2 -->
            </div> <!-- row -->
          </div>   <!-- container -->            
          <hr class="line"> <br>
          <h6 style="margin-top:-10px ; margin-left: 15px;">Course Details</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>


          <div class="container">
            <div class="row">
              <div class="col-4">
                <div class="border">
                  <img class="center" src="images/<?php echo $course['photo_course']; ?>" alt=""> <br>
                  <div class="text">
                    <h3><?php echo $course['name']; ?></h3> <br>
                  </div> <!-- text -->
                </div> <br> <br> <!-- border -->

                <div class="border">
                  <h2 style=" margin-top: 10px; margin-left: 15px;">About Courses</h2>
                  <hr class="line">
                  <p style="margin-left: 10px;" ><?php echo $course['description']; ?> </p>
                  <hr>
                  <div class="pragraph">
                    <p>Duration <span style="float: right;"><?php echo $course['duration']; ?>&nbsp;Months </span> </p> <hr> 
                    <p>Price <span style="float: right;"><?php echo $course['price']; ?> </span> </p> <hr> 
                    <p>Professor Name <span style="float: right;"><?php echo $course['professor']; ?> </span> </p> <hr>
                    <p>Date <span style="float: right;"><?php echo $course['begin_date']; ?></span> </p> <hr> 

                    <div class="row">
                      <div class="col-sm"><?php echo $course['end_date']; ?>&nbsp;&nbsp; &nbsp;End</div>
                      <div class="col-sm"><?php echo $course['max_student']; ?> students</div>
                      <div class="col-sm">21 batches</div>
                    </div> <br>  <!-- row -->
                  </div> <!-- pragraph -->

                </div> <!-- border -->
              </div> <!-- col-4 -->
              
           
              <div class="col-8">
                  <div class="border">
                
                    <div class="pragraph">
                      <br>  <p><?php echo $course['description']; ?></p>
                      <br>  <p><?php echo $course['description']; ?></p>
                      <br>  <p><?php echo $course['description']; ?></p>
                 
                     
              
                    </div> <!-- pragraph -->

                    <p style="margin-top:-10px ; margin-left: 15px; font-weight: bold;">Course Syllabus</p>
                    <hr  class="line"> <br>


             
                    <ul class="list">
                      <li>itroduction to computer and internet</li>
                      <li>microsoft application tools such Ms word </li>
                      <li>computer orgnization and operating system</li>
                      <li>itroduction to computer and internet</li>
                      <li>microsoft application tools such Ms word </li>
                      <li>computer orgnization and operating system</li>
                      <li>computer orgnization and operating system</li>
                    </ul> <br> <br>


                    <p style="margin-top:-10px ; margin-left: 15px; font-weight: bold;">After The Copletion The Course The Students will able to :</p>
                    <hr  class="line"> <br>
 
 
              
                    <ul class="list">
                      <li>itroduction to computer and internet</li>
                      <li>microsoft application tools such Ms word </li>
                      <li>computer orgnization and operating system</li>
                      <li>itroduction to computer and internet</li>
                      <li>microsoft application tools such Ms word </li>
                      <li>computer orgnization and operating system</li>
                      <li>computer orgnization and operating system</li>
                    </ul>


                  </div> <!-- border -->
              </div> <!-- col-8 -->
              <button class="btn" type="button" class="btn btn-default" style="margin-left: 250px; color: green;"><a href="courses.php">Previous</a></button>


          </div> <!-- row --> 
        </div> <!-- container -->
      </section> <!-- section -->