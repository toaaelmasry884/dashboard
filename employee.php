<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
              <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  </head>
  <body>
    <div class="page">
       <?php
      /*include "includes/navbar.php";
      include "includes/sidebar.php";*/
      ?> 


      <?php

$ssn = $_GET['ssn'];

include 'fun/db_connection.php';


$employee_s = "SELECT * FROM employee WHERE ssn = $ssn";
$employee_q = $conn -> query($employee_s);

foreach ($employee_q as $employee) {


 $id = $employee['university'];
 $select_uni = "SELECT * FROM university WHERE id = $id";
 $uni_q =$conn -> query($select_uni);
 $uni = $uni_q -> fetch_assoc();

 $id_c = $employee['collage'];
 $select_col = "SELECT * FROM collage WHERE id = $id_c";
 $col_q =$conn -> query($select_col);
 $col = $col_q -> fetch_assoc();





?>
            <section  id="fees" style="margin-left: 200px"> 
                <h2 style="margin-top:-10px ; margin-left: 15px;"> My Profile</h2>
                <hr class="line"> <br>

                <div class="container">
                    <div class="row">
                      <div class="col-4">
                        <img src="images/<?php echo $employee['personal_photo']; ?>" alt="Ahmed" style="width:100%">
                      </div>
                      <div class="col-8">
                        <h1 class="h-emp" style="margin-left: 300px;"> Name</h1> 
                            <p class="emp-item"> <?php echo $employee['name']; ?> </p>
                        <h3 class="h-emp" style="margin-left: 280px;">User Name </h3> 
                             <p class="emp-item"> <?php echo $employee['username']; ?> </p>

                             <h3 class="h-emp" style="margin-left: 290px;">Job title</h3> 
                             <p class="emp-item"><?php echo $employee['job_title']; ?></p>

                             <h3 class="h-emp" style="margin-left: 280px;">University</h3> 
                             <p class="emp-item"><?php echo $uni['name']?></p>

                             <h3 class="h-emp" style="margin-left: 290px;">College</h3> 
                             <p class="emp-item"><?php echo $col['name']?></p>

                        <button class="emp-btn" >Forget password</button>
                        <button class="emp-btn">Change password</button>
                        


                      </div>
                    </div>
                  </div>
                
                   
                 

              
         
            </section>
       <?php
       }
       ?>    

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