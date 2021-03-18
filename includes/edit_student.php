<?php

$ssn = $_GET['ssn'];



include 'fun/db_connection.php';


$student_s = "SELECT * FROM student WHERE ssn = $ssn";
$student_q = $conn -> query($student_s);

$student = $student_q -> fetch_assoc();
?>


<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Student</h2>
            </div>
          </header>

<!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Basic Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-inline" method="post" action="fun/edit_student.php" >
                        <input type="hidden" name="ssn" value="<?php echo $ssn ?>">
                        


                        <div class="form-group">
                          <label for="inlineFormInput" class="sr-only">Arabic_Name</label>
                          <input id="inlineFormInput" type="text" name="name_ar" value="<?php echo $student['name_ar']; ?>" class="mr-4 form-control">
                        </div>
                        <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">English_Name</label>
                          <input id="inlineFormInputGroup" name="name_en" type="text" value="<?php echo $student['name_en'] ?>" class="mr-4 form-control">
                        </div>
                        <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">User_Name</label>
                          <input id="inlineFormInputGroup" name="user_name" type="text" value="<?php echo $student['user_name'] ?>" class="mr-3 form-control">
                        </div>

                        <br><br><br>
                        <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">Phone No</label>
                          <input id="inlineFormInputGroup" name="mobile" type="number" value="<?php echo $student['mobile'] ?>" maxlength="11" class="mr-4 form-control">
                        </div> 
                        <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">Birth Date</label>
                          <input id="inlineFormInputGroup" name="date" type="date" value="<?php echo $student['birth_date'] ?>" class="mr-4 form-control">
                        </div>
                        <div class="form-group">
                          <label for="inlineFormInput" class="form-control-label">Gender :&nbsp;</label>
                            <select  name="gender" placeholder="Gender ......" class="form-control">
                             <option  <?php if($student['gender'] == '0'){echo "selected";} ?> value="0" >Male</option>
                             <option  <?php if($student['gender'] == '1'){echo "selected";} ?> value="1"  >Female</option>
                            </select>
                        </div> 
                        <br><br><br>
                       
                        <div class="form-group">
                          <label for="inlineFormInput" class="form-control-label">Department.. :&nbsp;</label>
                          <?php 

                           $depart_s = "SELECT * FROM department";

                           $departs = $conn->query($depart_s);
                          ?>
                            <select  name="department" placeholder="Department ......" class="form-control">
                              <option></option>
                             <?php
                             foreach ($departs as $depart) {
                             ?>
                             <option <?php

                              if ($depart['name'] == $depart['id']){ echo "selected"; }  ?>  value="<?php echo $depart['id']; ?>"><?php echo $depart['name']; ?></option>
                              <?php
                                }
                              ?>
                             
                             
                            </select>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="form-group row">
                          <label for="fileInput" class="col-sm-6 form-control-label"><strong>Drop Your Files Here</strong></label>
                          <div class="col-sm-6">
                            <input type="file" name="img">
                          </div>
                        </div>  
                          <br><br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;

                  <br><br><br> 
                        <div class="form-group">       
                          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <div class="form-group">       
                          <input type="reset" value="cancel" class="btn btn-primary">
                        </div>     
                      </form>
                    </div>
                  </div>
                </div>
    
                <!-- Inline Form-->
                <!-- <div class="col-lg-12">                           
                  <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Account Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-inline">
                        <div class="form-group">
                          <label for="inlineFormInput" class="sr-only">Enter Your Email</label>
                          <input id="inlineFormInput" type="email"value="ahmedmohamed@gmail.com" class="mr-6 form-control">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">Phone No</label>
                          <input id="inlineFormInputGroup" type="number" value="01223453554" maxlength="11" class="mr-6 form-control">
                        </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
                                <div class="form-group">
                          <label for="inlineFormInput" class="sr-only">password</label>
                          <input id="inlineFormInput" type="password" value="1234567" class="mr-6 form-control">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="form-group">
                          <label for="inlineFormInputGroup" class="sr-only">password</label>
                          <input id="inlineFormInputGroup" type="password" value="1234567" class="mr-6 form-control">
                        </div><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   <div class="form-group">       
                          <input type="submit" value="Submit" class="btn btn-primary">
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <div class="form-group">       
                          <input type="reset" value="cancel" class="btn btn-primary">
                        </div> 
                      </form>
                    </div>
                  </div>
                </div> -->
          </section>