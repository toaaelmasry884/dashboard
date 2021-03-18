<?php

$ssn = $_GET['ssn'];

include 'fun/db_connection.php';


$student_s = "SELECT * FROM student WHERE ssn = $ssn";
$student_q = $conn -> query($student_s);

/*$student = $student_q -> fetch_assoc();*/

foreach ($student_q as $student) {
                   $ssn = $student['guardian'];
                   $select_gu = "SELECT * FROM guardian WHERE ssn = $ssn";
                   $gue_q = $conn -> query($select_gu);
                   $gue = $gue_q -> fetch_assoc();




 
?>


<section  id="view">
           <!-- start section -->

          <h2 style="margin-top:-10px ; margin-left: 15px;">About Students</h1>
          <hr class="line"> <br>
          <h6 style="margin-top:-10px ; margin-left: 15px;">Student profile</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>

                 
          <div class="view"> 
           <div  class="container">
            <div style="margin-top: 20px;" class="row">
                  <div style="text-align: left;"  class="col-sm">
                     <img style="float: left;" id="src" src="images/<?php echo $student['personal_photo']; ?>" alt="">
                    <p style="padding-top: 20px;" >&nbsp;<?php echo $student['user_name']; ?></p>
                    <p>&nbsp;<?php echo $student['mobile']; ?></p> <br>
        
              <p style="font-weight: 600;">Account Information</p>
              <p>User Name :&nbsp; <?php echo $student['user_name']; ?></p>
              <p>password :&nbsp; <?php echo $student['password']; ?> </p>
              <br>
              <hr class="line1"> 
              <p style="font-weight: 600;">Student Files</p>  <br> 
              <a href="st_file.php?ssn=<?php echo $student['ssn'] ?>" class="btn btn-lg active viewbtn" role="button" aria-pressed="true"><span >View files</span> </a>
                     
              </div>  <!-- 1 -->
                 

                   <div class="vl"></div> <!-- line -->

                  <div style="text-align: left; margin-top: 30px;" class="col-sm">
                 
                    <h4 style="text-align: center;" >Guardian Data</h4> <br>
                    
                    <p>Name :&nbsp; <?php echo $gue['name']; ?></p>
                    <p> Nationality :&nbsp;<?php echo $gue['national']; ?> </p> 
                    <p>City :&nbsp;<?php echo $gue['work_place']; ?> </p>
                    <p>Job title :&nbsp;<?php echo $gue['job_title']; ?> </p>
                    <p>work place :&nbsp;<?php echo $gue['work_place']; ?></p>
                    <p>Relation :&nbsp;<?php echo $gue['relation']; ?></p>
                    <p>home Tel :&nbsp;<?php echo $gue['home_tel']; ?></p>
                    <p>Mobile :&nbsp;<?php echo $gue['mobile']; ?></p>
                    <p>Email :&nbsp;<?php echo $gue['email']; ?></p>
                    <p>fax :&nbsp;<?php echo $gue['fax']; ?></p>
                    <hr class="line1"> 
                    <h4 style="text-align: center;" >Previous qualification</h4> <b></b>
                    <p>Previous Qualification :&nbsp;<?php echo $student['previous_qualification']; ?></p> 
                    <p> Institute :&nbsp;<?php echo $student['Institute']; ?></p>
                    <p> Graduation year :&nbsp;<?php echo $student['graduation_year']; ?></p>  
                    <p> Total :&nbsp;<?php echo $student['total']; ?></p>
                    <p> Percentage :&nbsp;<?php echo $student['Percentage']; ?></p>  
                     <?php
                     }
                     ?> 
                  </div>  <!-- 2 -->

                      <div class="vl"></div> <!-- line -->
                  <div style="text-align: left;margin-top: 30px;" class="col-sm">
                    <h4 style="text-align: center; " >Personal Information</h4> <br>
                    <p>Name : <?php echo $student['name_ar']; ?></p>
                    <p>Name(EN) :&nbsp;<?php echo $student['name_en']; ?></p>
                    <p>Code :&nbsp;</p>
                    <p>Religin &nbsp;<?php echo $student['religion']; ?></p>
                    <p>Gender :&nbsp;<?php if($student['gender'] = 1){
                      echo "Female";
                    }else{
                      echo "Male";
                    }

                     ?></p>
                    <p>Nationality :&nbsp;<?php echo $student['nationality']; ?></p>
                    <p>Birth Date :&nbsp;<?php echo $student['birth_date']; ?> </p>
                    <p>Birth Place :&nbsp;</p>
                    <p>Relationship :&nbsp;<?php echo $student['relationship']; ?></p>
                    <p>ID Type :&nbsp;<?php echo $student['id_type']; ?></p>
                    <p>National ID :&nbsp;</p>
                    <p>Medical Examination :&nbsp;</p>
      
                  </div> <!-- 3 -->
              
              </div> <!-- end row  -->
              </div> <!-- end container -->
             
              <hr class="line1"> 
              <div  class="container">
                <div  class="row">
                      <div style="text-align: left;"  class="col-sm">
                        <h4 style="text-align: center;margin-top: 20px;" >Contact Information</h4> <br>
                       <p>City :&nbsp;<?php echo $student['address']; ?></p>
                       <p>Mobile :&nbsp;<?php echo $student['mobile']; ?></p>
                       <p>Building Num :&nbsp;</p>
                       <p>Mail Code :&nbsp;<?php echo $student['mail_box']; ?></p>


                      </div> <!-- 1 -->
                      <div style="text-align: left;margin-top: 70px;"  class="col-sm">
                          <p>Email :&nbsp;<?php echo $student['mail_box']; ?></p>
                          <p>Fax :&nbsp;<?php echo $student['fax']; ?></p>
                          <p>Apartment Num :&nbsp;</p>
                      </div> <!-- 2 -->
                      <div style="text-align: left;margin-top: 70px;"  class="col-sm">
                        <p> Address :&nbsp;<?php echo $student['address']; ?></p>
                        <p>Home Tel :&nbsp;<?php echo $student['home_tel']; ?></p>
                        <p>Mail Box :&nbsp;<?php echo $student['mail_box']; ?></p>
                      </div> <!-- 3 -->

                    </div> <!-- end row  -->
                  </div> <!-- end container -->
                 
  
            </div> <!-- view -->

        </section> <!-- end section -->