<section  id="view"> <!-- start section -->
            <h2 style="margin-top:-10px ; margin-left: 15px;">Add New Course</h2>
            <hr class="line"> <br>
            <h6 style="margin-top:-10px ; margin-left: 15px;">Course Details</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br>


           
            <div  class="container">
            <!-- Basic Form-->
              <div  class="row">
                <div class="col-sm-12">
                  <form class="form-inline" action="fun/add_course.php" method="post" enctype="multipart/form-data" >

                    <input type="hidden" name="id" >
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Course Name</label> 
                        <input id="inlineFormInput" name="name" type="text" placeholder="Course Name ...." class=" form-control"> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Course Code</label>
                        <input id="inlineFormInputGroup" name="code" type="text" placeholder="Course Code ...." class=" form-control">
                      </div> 
                    </div> 
                    <br><br><br>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Last Name</label>
                        <input id="inlineFormInputGroup" style="width: 730px; height: 100px" name="description" type="text" placeholder="Course Details ...." class=" form-control">
                        <!-- <textarea for="inlineFormInputGroup" name="description" rows="4" cols="90" placeholder="Course Details...">
                        </textarea> -->
                      </div>
                    </div>
                    <br><br><br>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Course Start from</label> 
                        <input id="inlineFormInput" name="  begin_date" type="text" placeholder="Course Start from ...." class=" form-control"> 
                      </div> 
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Course End</label>
                        <input id="inlineFormInputGroup" name="end_date" type="text" placeholder="Course End ...." class=" form-control">
                      </div>
                    </div> 
                    <br><br><br>
                    
                    <div class="col-sm-6">            
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Course Price</label>
                        <input id="inlineFormInputGroup" name="price" type="number" placeholder="Course Price" maxlength="4" class=" form-control">
                     </div> 
                    </div> <br><br><br>
                    <div class="col-sm-6">            
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Maximum Students</label>
                        <input id="inlineFormInputGroup" name="max_student" type="number" placeholder="Maximum Students" maxlength="4" class=" form-control">
                      </div> 
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Professor Name</label> 
                        <input id="inlineFormInput" name="professor" type="text" placeholder="Professor Name ...." class=" form-control"> 
                      </div>
                    </div> <br><br><br>
                    <div class="col-sm-6">            
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Contact Number</label>
                        <input id="inlineFormInputGroup" name="mobile" type="number" placeholder="Contact Number" maxlength="4" class=" form-control">
                      </div> 
                    </div> 
                    <!-- <div class="col-sm-6">            
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Year</label>
                        <input id="inlineFormInputGroup" type="number" placeholder="Year" maxlength="4" class=" form-control">
                      </div> 
                    </div> <br><br><br> -->
                    <div class="col-sm-12"> 
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Website</label>
                        <input id="inlineFormInput" name="email" type="email" placeholder="Website" class="form-control">
                      </div>
                    </div> <br><br><br>


                    <div class="form-group">
                      <label for="inlineFormInput" class="form-control-label">University.. :&nbsp;</label>
                      <?php include 'fun/db_connection.php';

                        $uni_s = "SELECT * FROM university";

                        $uni = $conn->query($uni_s);
                      ?>
                      <select  placeholder="University......" name="university" class="form-control">
                        <option></option>
                        <?php
                         foreach ($uni as $univer) {
                        ?>

                      <option value="<?php echo $univer['id'] ?>"><?php echo $univer['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>
                    </div> 

                    <div class="col-sm-12">
                      <div class="form-group row">
                        <label for="fileInput" class="col-sm-6 form-control-label"><strong>Drop Your Files Here</strong> &nbsp;<i class="far fa-file-archive" style="font-size:25px; text-align: center;"></i> </label>
                        <div class="col-sm-6">
                          <input id="fileInput"  name="img" type="file" class="form-control-file">
                        </div></div></div><br><br><br>
                        <div class="form-group">       
                          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="form-group">       
                          <input type="reset" value="cancel" class="btn btn-primary">
                        </div>                      
                  </form>
                </div>        
              </div> 
        
            </div><!-- end container -->

          </section> <!-- end section -->