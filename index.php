<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard </title>
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
      include "includes/navbar.php";
      include "includes/sidebar.php";
      ?>
      
        <div class="content-inner">
          <!-- Page Header-->
          
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                      <div class="title"><span>Students</span>
                        <div class="progress">
                          <div class="progress-bar bg-green progress-bar-striped" role="progressbar"
                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                          </div>
                        </div>
                          <div class="icon bg-green"><i class="fas fa-user-friends"></i></div>
                        </div> 
                          <div class="number"><strong>2049</strong></div>
                  
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                      <div class="title"><span>Professors</span>
                        <div class="progress">
                            <div role="progressbar" style="width: 100%; height: 4px; margin-bottom:20px ;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                          </div>
                    <div class="icon bg-green"><i class='far fa-user'></i></div>                
                    </div> <br>
                    <div class="number"><strong>45</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="title"><span>Attendance</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                      <div class="icon bg-green"><i class='fas fa-tag'></i></div>
                    </div>
                    <div class="number"><strong>1200</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="title"><span>Courses</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                      <div class="icon bg-green"><i class="fas fa-graduation-cap"></i></div>
                    </div>
                    <div class="number"><strong>43</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <!-- <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fas fa-flag"></i></div>
                    <div class="text">Expense<br>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div> <br>
                      <strong>10002</strong></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fas fa-landmark"></i></div>
                    <div class="text">Income<br>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div><br><strong>$9520</strong></div>
                  </div>
                </div> -->
                <!-- Line Chart            -->
                <div class="chart col-lg-9 col-12">
                <strong style="margin-left: 400px; font-size: 25px">  Faculty Survey</strong>
                  <div style="width: 1030px" class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </section><br><br><br>
         
          <!-- Client Section-->
          <section class="client no-padding-top">
            <div class="container-fluid">
              <div class="row">
                <!-- Work Amount  -->
                <div class="col-lg-6">
                  <div class="work-amount card">
                    <div class="card-close">
                    </div>
                    <div class="card-body">
                      <h3>Total Renveue</h3><strong style="text-align: center">$20315</strong>
                      <div class="chart text-center">
                        <div class="text"><strong>80</strong><br><span>Total Income</span></div>
                        <canvas id="pieChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                         <!-- Doughnut Chart -->
                         <div class="col-lg-6" >
                            <div class="pie-chart-example card" style="height: 405px">
                              <div class="card-close">
                              </div>
                              <div class="card-header d-flex align-items-center">
                                <h3 class="h4">USER STATISTICS</h3>
                              </div>
                              <div class="card-body">
                                <canvas id="doughnutChartExample"></canvas>
                              </div>
                            </div>
                          </div>
              </div>
            </div>
          </section>
          <!-- Feeds Section-->
          <section class="feeds no-padding-top">
            <div class="container-fluid">
              <div class="row">
                
                
                
            </div>
          </section>
         

          <!-- Page Footer-->
          <footer style="background-color: #5ed47f;;" class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Dashboard Employee &copy; 2019-2020</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="#" class="external">Student Affairs</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
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