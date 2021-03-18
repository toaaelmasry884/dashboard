<?php
include "fun/db_connection.php";

$select = "SELECT * FROM employee";
$employee_q = $conn -> query($select);
$employee = $employee_q -> fetch_assoc();
?>

<div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
      <nav class="side-navbar">
               <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
              <a href="employee.php?ssn=<?php echo $employee['ssn']=$_SESSION['login']['ssn'] ?>"><img style="width: 100%; height: 100%" src="images/<?php echo $_SESSION['login']['personal_photo']; ?>" alt="..." class="img-fluid rounded-circle">
              </a>
              </div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['login']['username']; ?></h1>
              <p>Admin</p>
            </div>
          </div>

          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                  <li ><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                      <i class="fas fa-user-friends"></i>Students </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a class="active" href="Students.php">All Student</a></li>
                        <li><a href="add_student.php"> Add Student</a></li>
                        <!-- <li><a href="edit_student.php">Edit Student</a></li> -->
                        <li><a href="about_student.php">About Student</a></li>
                      </ul>
                  </li>


                  <li><a href="#exampledropdownDropdowne" aria-expanded="false" data-toggle="collapse">
                   <i class="fas fa-graduation-cap"></i>Courses </a>
                      <ul id="exampledropdownDropdowne" class="collapse list-unstyled ">
                        <li><a href="courses.php">All courses</a></li>
                        <li><a href="add_course.php"> Add course</a></li>
                        
                      </ul>
                  </li> 

                    
                  <li><a href="#exampledropdownDropdownee" aria-expanded="false" data-toggle="collapse"> 
                    <i class="fas fa-briefcase"></i>Departments </a>
                        <ul id="exampledropdownDropdownee" class="collapse list-unstyled ">
                          <li ><a href="all_department.php">All Department</a></li>
                          <li><a href="add_department.php"> Add Department</a></li>
                        </ul>
                  </li> 



                  <li><a href="#exampledropdownDropdowneee" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-donate"></i>Fees </a>
                      <ul id="exampledropdownDropdowneee" class="collapse list-unstyled ">
                        <li><a href="all_fees.php">All Fees</a></li>
                        <li   class="active"><a href="add_fees.php">Add Fee</a></li>
                        <!-- <li><a href="#">Fee Recipt</a></li> -->
                      
                      </ul>
                    </li> 

                  <li><a href="#exampledropdownDropdowneeee" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-hands-helping"></i> Scholarship </a>
                      <ul id="exampledropdownDropdowneeee" class="collapse list-unstyled ">
                        <li class="active"  ><a href="all_scholar.php">All Scholarship</a></li>
                        <!-- <li><a href="add_scholar.php"> Add Scholarship</a></li> -->
                        
                      
                      
                      </ul>
                    </li>  


                    <li><a href="#exampledropdownDropdowna" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-users"></i>Training</a>
                        <ul id="exampledropdownDropdowna" class="collapse list-unstyled ">
                         <li class="active"><a href="train.php">Training Places</a></li>
                          <li ><a href="admision_train.php">Admissions</a></li>
                        </ul>
                      </li>  


                      <li>
                        <a href="#exampledropdownDropdowneeeee" aria-expanded="false" data-toggle="collapse">  <i class="fab fa-wpforms"></i>Housing</a>
                        <ul id="exampledropdownDropdowneeeee" class="collapse list-unstyled ">
                            <li class="active" ><a href="admision_house.php"> Admissions </a></li>
                          <li ><a href="details_house.php">Housing Student</a></li>  
                        </ul>
                    </li>


                   <!--  <li>
                        <a href="#exampledropdownDropdowneeeeee" aria-expanded="false" data-toggle="collapse">  <i class="fas fa-male"></i>Military Education</a>
                        <ul id="exampledropdownDropdowneeeeee" class="collapse list-unstyled ">
                            <li class="active" ><a href="add_course_milt.php"> Add Courses </a></li>
                          <li ><a href="result-milt.html">Add Results</a></li>  
                          <li ><a href="view-milt.html">View Results</a></li>  
                        </ul>
                    </li> -->
                    <li>
                    <a href="#exampledropdownDropdowneeeeeee" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-hospital-user"></i>Hospital</a>
                    <ul id="exampledropdownDropdowneeeeeee" class="collapse list-unstyled ">
                        <li class="active" ><a href="hospital.php"> Medical Date </a></li>
                      <li ><a href="hospital_applay.php">Medical Result </a></li> 
                      <li><a href="add_hospital.php">Add Medical Examination </a></li> 
                      <li ><a href="hospital_student.php">Show Reseverd Students</a></li>  
                    </ul>
                </li>




                    <li>
                <a href="#exampledropdownDropdowneeeeeeee" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-book-reader"></i>Library</a>
                <ul id="exampledropdownDropdowneeeeeeee" class="collapse list-unstyled ">
                    <li class="active" ><a href="library_add.php">  Add a borrowed book </a></li>
                    <li><a href="library_student.php"> Show a borrowed book </a></li>    
                  
                </ul>
            </li>
                 

            
            <li>
                <a href="#exampledropdownDropdownl" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-warehouse"></i>Student welfare</a>
                <ul id="exampledropdownDropdownl" class="collapse list-unstyled ">
                    <li ><a href="add_stud_care.php">  Add Students & Activties </a></li>
                    <li ><a href="stud_care.php"> Show Students </a></li>    
                </ul>
            </li>

            <li><a href="#exampledropdownDropdownw" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-edit"></i>Department Desires</a>
                        <ul id="exampledropdownDropdownw" class="collapse list-unstyled ">
                         <li><a href="desire.php"> Add Desires</a></li>
                          <li ><a href="accept_desire.php">Acceptions</a></li>
                        </ul>
                      </li> 
              
                      <li>
                <a href="#exampledropdownDropdownd" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-id-badge"></i>File Manager</a>
                <ul id="exampledropdownDropdownd" class="collapse list-unstyled ">
                    <li><a href="disclaimer_search.php">Search Disclaimer</a></li>
                    <!-- <li class="active"><a href="disclaimer-show.html">Show Student Disclaimer</a></li> -->
                  
                </ul>
            </li>
                                      
                    
                    <!-- <li><a href="#"> <i class="fas fa-file-alt"></i>File Manager</a></li> -->
          </ul>          



      </nav>