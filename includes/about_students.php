<div class="content-inner">
          <!-- Page Header-->
    <header class="page-header">
      <div class="container-fluid">
        <h2 class="no-margin-bottom">About Student</h2>
      </div>
    </header>

<!-- start section -->
<section  id="view">
            <h2 >About Students</h1>
              <div class="topnav">
                <input style="float: right; margin-top: -30px; color: green; border: 2px solid #2eb97f; border-radius: 10px;" ype="text" placeholder="Search..">
              </div>

            <hr class="line">
            <h6 >Student profiles</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br>

        
            <div  class="container">
                <div style="margin-top: 20px;" class="row">
                   <?php include 'fun/db_connection.php'; 

                   $students_s = "SELECT * FROM student";
                   $students = $conn -> query($students_s);

                   $index = 1;
                   foreach ($students as $student) {
                   ?>
                  <div class="col-sm" >
                    <div class="view" style="width: 300px; height: 450px;">
                      <img id="src" style="width: 100px; height: 100px" src="images/<?php echo $student['personal_photo']; ?>" alt="">
                      <a style="color: white; margin-left: 15%;" href=""> 
                        <i class='fab fa-facebook' style="font-size:24px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                        <i class='fab fa-instagram' style="font-size:24px;" > </i> &nbsp;&nbsp;&nbsp;
                        <i class='fab fa-linkedin' style="font-size:24px;"></i> </a> <br><br> 
                        
     
                        <h5>Name</h5>
                        <p class="para">
                        <?php 
                            echo $student['user_name'];
                        ?>    
                         </p><hr class="line2">
                        <h5>Birth Date</h5>
                        <p class="para"><?php echo $student['birth_date']; ?></p> <hr class="line2">
                        <h5>Phone</h5>
                        <p class="para"><?php echo $student['mobile']; ?></p><hr class="line2">
            
                        <a href="view_student.php?ssn=<?php echo $student['ssn'] ?>" style="background-color: #fff; border-radius: 20px; color: green;" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">view</a>  <br> <br>
                          
                       </div> <!-- 1 -->
                  </div>
                   <?php
                     }
                   ?> 


                </div>
            </div> <br> <br>

              


              <!-- <div class="row" >
                <div style="margin-left: 8%; margin-top: 40px;" class="form-group">
                <label for="inlineFormInput" class="form-control-label">view :</label>
                <select  name="view"  class="form-control">
                  <option value="6" selected>6</option>
                  <option value="5">5</option>
                  <option value="4">4</option>
                </select>
                            
                </div>
              </div> -->


</section> <!-- end section -->