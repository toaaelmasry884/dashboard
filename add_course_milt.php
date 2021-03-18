<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Military Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.aadmin.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/Group 1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <body>
    <div class="page">
      <?php
      include 'includes/navbar.php';
      include 'includes/sidebar.php';
      
      ?>
        <section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Military Education</h2>
            <hr class="line"> <br>
            <h6>Add Course</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>


          <form class="form-inline" action="fun/add_course_milt.php" method="post" enctype="multipart/form-data">



<!-- text-align: center; -->

          <div style="margin-left: 250px;">
          <label style="margin-left: 30px; width: 500px; color: gray" for="fname">Choose Collage </label><br>


           <?php 
                       include 'fun/db_connection.php';

                      $milt_s = "SELECT * FROM military_student";

                      $milt_q = $conn->query($milt_s);
                     ?>
                    <select  style="width: 500px; margin-top: 10px; margin-left: 20px;" name="collage" >


            <?php
                          foreach ($milt_q as $milt) {
                            $ssn_student = $milt['student'];
                            $select = "SELECT * FROM student WHERE ssn = $ssn_student";
                            $st_q = $conn -> query($select);
                            /*$student = $st_q -> fetch_assoc();*/

                            foreach ($st_q as $student) {
                              $id_col = $student['collage'];
                              $select_col = "SELECT * FROM collage WHERE  id = $id_col";
                              $col_q = $conn -> query($select_col);
                              $col = $col_q -> fetch_assoc();
                            
                         ?>

                        <option value="<?php echo $col['id']; ?>"><?php echo $col['name']; ?></option>

                        <?php
                          }
                        }

                        ?>
            <!-- <option value="">Faculty of Computers Of Computers and Information System</option>
            <option value="">The Faculty of Commerce</option>
            <option value="">Faculty of medicine</option>
            <option value="">The Faculty of Engineering</option> -->
          </select> <br> <br> <br> <br>

          <label style="margin-left: 30px; width: 500px; color: gray" for="fname">Choose Acadmic Year </label><br>
          <select  style="width: 500px; margin-top: 10px; margin-left: 20px;" name="acadimic_year"  >

            <?php
                          foreach ($milt_q as $milt) {
                            $ssn_student = $milt['student'];
                            $select = "SELECT * FROM student WHERE ssn = $ssn_student";
                            $st_q = $conn -> query($select);
                            $student = $st_q -> fetch_assoc();

                            
                            
                         ?>

                        <option value="<?php echo $student['ssn']; ?>"><?php echo $student['acadimic_year']; ?></option>

                        <?php
                          }
                        

                        ?>
          </select> <br> <br> <br> <br>

          <label style="margin-left: 30px; width: 500px; color: gray" for="fname">Choose officer </label><br>
          <select  style="width: 500px; margin-top: 10px; margin-left: 20px;" name="officer"  >

            <?php
                          foreach ($milt_q as $milt) {
                            $id_milt = $milt['military'];
                            $select = "SELECT * FROM military_education WHERE id = $id_milt";
                            $miltit_q = $conn -> query($select);
                            $military = $miltit_q -> fetch_assoc();

                            
                            
                         ?>

                        <option value="<?php echo $military['id']; ?>"><?php echo $military['officer']; ?></option>

                        <?php
                          }
                        

                        ?>
          </select> <br> <br> <br> <br>


         <!--  <input style="width: 50%; margin-top: 10px; margin-left: 20px;" type="date" id="fname" name="date" value=""><br> <br> <br> -->

         <input type="submit" name="submit" value="Send" style="margin-left: 220px" class="emp-btn">


          <!-- <button style="margin-right: 20%;" class="emp-btn" >Send</button> -->

        </div>
      </form>
                    </section>
                </div>
                </div>
        
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper.js/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
           <script src="js/charts-home.js"></script>
        <script src="js/charts-custom.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <!-- Main File-->
        <script src="js/front.js"></script>
      </body>
      </html>