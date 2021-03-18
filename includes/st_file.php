 <?php

$ssn = $_GET['ssn'];

include 'fun/db_connection.php';


$student_s = "SELECT * FROM student WHERE ssn = $ssn";
$student_q = $conn -> query($student_s);

$student = $student_q -> fetch_assoc();
 
?>




 <section  id="view">
           <!-- start section -->

          <h2 style="margin-top:-10px ; margin-left: 15px;">About Students</h2>
          <hr class="line"> <br>
          <h6 style="margin-top:-10px ; margin-left: 15px;">Student profile / Student files</h6>
          <hr style=" width:30% ;float: left; " class="line"> <br> <br>

          <div  class="container">
            <div style="margin-top: 20px;" class="row">

              
                  <div  class="col-sm" >
                   <p style="text-align: center; color: black;">Student Nomination card</p>
                   <div id="img-bor" style="width: 300px;height: 200px">
                    <img class="img-edit" style="width: 250px;height: 160px" src="images/<?php echo $student['nomination_card_scan']; ?>" alt="">
                   </div> <!-- imge border -->
                   <a href="images/<?php echo $student['nomination_card_scan']; ?>" id="butn-view" class="btn btn-lg active" role="button" aria-pressed="true"><span >View </span> </a>
                   <a download="/graduation/dashboard/images" href="images/<?php echo $student['nomination_card_scan']; ?>" id="butn-view" class="btn btn-lg active " role="button" aria-pressed="true"><span >Print</span> </a>
                  </div> <!-- 1 -->  
                  

                 

                  <div class="col-sm">
                    <p  style="text-align: center; color: black;">High School Certificate</p>
                    <div id="img-bor"  style="width: 300px;height: 200px">
                        <img class="img-edit" style="width: 250px;height: 160px" src="images/<?php echo $student['certificate_scan']; ?>" alt="">
                    </div> <!-- imge border -->
                       <a href="images/<?php echo $student['certificate_scan']; ?>" id="butn-view" class="btn btn-lg active" role="button" aria-pressed="true"><span >View </span> </a>
                       <a download="/graduation/dashboard/images" href="images/<?php echo $student['certificate_scan']; ?>" id="butn-view" class="btn btn-lg active " role="button" aria-pressed="true"><span >Print</span> </a>
                  </div> <!-- 2 -->


                  <div  class="col-sm">
                    <p  style="text-align: center; color: black;">Birth certificate</p>
                    <div id="img-bor"  style="width: 300px;height: 200px">
                        <img class="img-edit" style="width: 250px;height: 160px"  src="images/<?php echo $student['birth_day_scan']; ?>" alt="">
                    </div> <!-- imge border -->
                       <a href="images/<?php echo $student['birth_day_scan']; ?>" id="butn-view" class="btn btn-lg active" role="button" aria-pressed="true"><span >View </span> </a>
                       <a download="/graduation/dashboard/images" href="images/<?php echo $student['birth_day_scan']; ?>" id="butn-view"  class="btn btn-lg active " role="button" aria-pressed="true"><span >Print</span> </a>
                  </div> <!-- 3 -->
            </div> <!-- row -->
          </div> <!-- container --> <br> <br> <br>


          <div  class="container">
            <div style="margin-top: 20px;" class="row">
                  <div  class="col-sm">
                    <p style="text-align: center; color: black;">The Student's ID</p>
                    <div id="img-bor"  style="width: 300px;height: 200px">
                     <img class="img-edit" style="width: 250px;height: 160px"  src="images/<?php echo $student['id_scan']; ?>" alt="">
                    </div> <!-- imge border -->
                    <a href="images/<?php echo $student['id_scan']; ?>" id="butn-view" class="btn btn-lg active" role="button" aria-pressed="true"><span >View </span> </a>
                    <a download="/graduation/dashboard/images" href="images/<?php echo $student['id_scan']; ?>" id="butn-view" class="btn btn-lg active " role="button" aria-pressed="true"><span >Print</span> </a>
                </div> <!-- 1 -->

                <div  class="col-sm">
                    <p style="text-align: center; color: black;">Model 2 Enlisted</p>
                    <div id="img-bor"  style="width: 300px;height: 200px">
                     <img class="img-edit" style="width: 250px;height: 160px"  src="images/<?php echo $student['army_card_scan']; ?>" alt="">
                    </div> <!-- imge border -->
                    <a href="images/<?php echo $student['army_card_scan']; ?>" id="butn-view" class="btn btn-lg active" role="button" aria-pressed="true"><span >View </span> </a>
                    <a download="/graduation/dashboard/images" href="images/<?php echo $student['army_card_scan']; ?>" id="butn-view" class="btn btn-lg active " role="button" aria-pressed="true"><span >Print</span> </a>
                </div> <!-- 2 -->

                <div  class="col-sm">
                </div> <!-- 3 -->

        </div> <!-- row -->
        </div> <!-- container -->


          </section> <!-- end section  -->