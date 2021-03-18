

<!-- Forms Section-->
    <section class="forms" > 
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
                  <form class="form-inline" action="fun/add_student.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" >
                    <div class="form-group">
                      <label for="inlineFormInput" class="sr-only">Arabic_Name</label>
                      <input id="inlineFormInput" type="text" name="name_ar" placeholder="Arabic_Name ...." class="mr-4 form-control">
                    </div>

                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">English_Name</label>
                      <input id="inlineFormInputGroup" type="text" name="name_en" placeholder="English_Name ...." class="mr-4 form-control">
                    </div>

                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">FullName</label>
                      <input id="inlineFormInputGroup" type="text" name="user_name" placeholder="FullName ...." class="mr-4 form-control">
                    </div><br><br><br>

                         

                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">Phone No</label>
                      <input id="inlineFormInputGroup" type="number" name="mobile" placeholder="Phone No" maxlength="11" class="mr-4 form-control">
                    </div> 

                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">Address</label>
                      <input id="inlineFormInputGroup" type="text" name="address" placeholder="Address"  class="mr-4 form-control">
                    </div> 

                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">Birth Date</label>
                      <input id="inlineFormInputGroup" type="date" name="date" placeholder="Birth Date......" class="mr-4 form-control">
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <br><br><br>
                    <div class="form-group">
                      <label for="inlineFormInput" class="form-control-label">Gender :&nbsp;</label>
                      <select  placeholder="Gender ......" name="gender" class="form-control">
                        <option></option>
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                      </select>
                    </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group">
                      <label for="inlineFormInput" class="form-control-label">Department.. :&nbsp;</label>


                      <?php 
                       include 'fun/db_connection.php';

                      $depart_s = "SELECT * FROM department";

                      $departs = $conn->query($depart_s);
                     ?>

            


                      <select  placeholder="Department ......" name="department" class="form-control">
                        <option></option>




                         <?php
                          foreach ($departs as $depart) {
                         ?>

                        <option value="<?php echo $depart['id']; ?>"><?php echo $depart['name']; ?></option>

                        <?php
                          }

                        ?>
                      </select>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br><br>
                    <div class="form-group">
                      <label for="inlineFormInput" class="sr-only">ssn</label>
                      <input id="inlineFormInput" type="number" name="ssn" placeholder="National ID ...." class="mr-4 form-control">
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="form-group">
                      <label for="inlineFormInput" class="form-control-label">Collage.. :&nbsp;</label>
                      <?php include 'fun/db_connection.php';

                        $coll_s = "SELECT * FROM collage";

                        $coll = $conn->query($coll_s);
                      ?>
                      <select  placeholder="Collage ......" name="collage" class="form-control">
                        <option></option>
                        <?php
                         foreach ($coll as $colla) {
                        ?>

                      <option value="<?php echo $colla['id'] ?>"><?php echo $colla['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="inlineFormInput" class="form-control-label">Guardian.. :&nbsp;</label>

                      <?php include 'fun/db_connection.php';

                        $guardian_s = "SELECT * FROM guardian";

                        $guardian = $conn->query($guardian_s);
                      ?>

                      <select  placeholder="Military ......" name="guardian" class="form-control">
                        
                       <option></option>
                        <?php
                         foreach ($guardian as $guardians) {
                        ?>

                      <option value="<?php echo $guardians['ssn'] ?>"><?php echo $guardians['name'];?></option>

                       <?php
                      }

                     ?>

                       
                      </select>
                  </div>

                  <br><br><br><br><br><br>
                      <input type="file" name="img">

                       
                      <br><br><br>



                  &nbsp;&nbsp;&nbsp;&nbsp; 

                  
                   <!--  <div class="form-group">  -->     
                      <input type="submit" name="submit" value="Add" class="btn btn-primary">
                    <!-- </div> -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

                    <div class="form-group">       
                          <input type="reset" value="cancel" class="btn btn-primary">
                    </div>                
                  </form>
              </div>
            </div>
          </div>
            
    
                
    </section>