<?php

$id = $_GET['id'];

include 'fun/db_connection.php';


$course_s = "SELECT * FROM courses WHERE id = $id";
$course_q = $conn -> query($course_s);

$course = $course_q -> fetch_assoc();
?>


<section  id="view"> <!-- start section -->
        <h2 style="margin-top:-10px ; margin-left: 15px;">Edit Course</h2>  
          <div class="topnav">
              <input style="float: right; margin-top: -30px; color: green; border: 2px solid #2eb97f; border-radius: 10px;" ype="text" placeholder="Search..">
            </div>
     
            <hr class="line"> <br>
            <h6 style="margin-top:-10px ; margin-left: 15px;">Basic Details</h6>

            <hr style=" width:20% ;float: left; " class="line"> <br> <br>
  
            <div  class="container">
                     <!-- Basic Form-->
                  
              <div  class="row">
                <div class="col-sm-12">
                  <form class="form-inline"  method="post" action="fun/edit_course.php" enctype="multipart/form-data">
                  
                  	<input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Course Name</label> 
                        <input id="inlineFormInput" name="name" type="text" placeholder="Course Name ...."  value="<?php echo $course['name'] ?>" class=" form-control"> 
                      </div>  
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Course Code</label>
                        <input id="inlineFormInputGroup" name="price" type="text" placeholder="Course Code ...."value="<?php echo $course['price'] ?>" class=" form-control">
                      </div>
                    </div> <br><br><br>
                    <div class="col-sm-12">                
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Description</label>
                        <textarea for="inlineFormInputGroup" name="details" rows="4" cols="90" placeholder="Course Details..."><?php echo $course['description'] ?></textarea>
                      </div>
                    </div><br><br><br>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Course Start from</label> 
                        <input id="inlineFormInput" name="start" type="text" placeholder="Course Start from ...." value="<?php echo $course['begin_date'] ?>" class=" form-control"> 
                      </div>  
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Course End</label>
                        <input id="inlineFormInputGroup" name="end" type="text" placeholder="Course End ...." value="<?php echo $course['end_date'] ?>" class=" form-control">
                      </div>
                    </div> <br><br><br>
                    
                    
                    <div class="col-sm-6">            
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Maximum Students</label>
                        <input id="inlineFormInputGroup" name="max_student" type="number" placeholder="Maximum Students" maxlength="4" value="<?php echo $course['max_student'] ?>"  class=" form-control">
                      </div> 
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Professor Name</label> 
                        <input id="inlineFormInput" name="professor_name" type="text" placeholder="Professor Name ...." value="<?php echo $course['professor'] ?>" class=" form-control"> 
                      </div>  
                    </div> <br><br><br>
                    <div class="col-sm-6">            
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Contact Number</label>
                        <input id="inlineFormInputGroup" name="mobile" type="number" placeholder="Contact Number" maxlength="4" value="<?php echo $course['mobile'] ?>" class=" form-control">
                      </div> 
                    </div> 
                    
                    <br><br><br>

                    <div class="form-group row">
                      <label for="fileInput" class="col-sm-6 form-control-label"><strong>Drop Your Files Here</strong></label>
                        <div class="col-sm-6">
                          <input type="file" name="img">
                        </div>
                    </div>  
                          <br><br><br>

                    <div style="height: 20px;width: 100%"></div>


                        
                    <div class="form-group" style="margin-left: 500px">       
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group">       
                      <input type="reset" value="cancel" class="btn btn-primary">
                    </div> 

                  </form>
                </div>  
              </div>          
            </div> <!-- end container -->
        
          </div>
</section> <!-- end section -->