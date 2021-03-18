<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 style="color:#2eb97a" class="no-margin-bottom">All Students List</h2>
            </div>
          </header>
          
<section id="dept">   
    <h2 style="margin-top:-10px ; margin-left: 15px;">All Students List</h2>
          <hr class="line"> <br>

          <div class="container">
            <div class="row">
              

              <div class="col">
                <div  style="float: right;"  class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tools
                  </button>
                  <div style="background-color: #ECEAEA; " class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#"> <i class="fas fa-print"></i> &nbsp;&nbsp;Print</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> &nbsp;&nbsp;Save As Pdf</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> &nbsp;&nbsp;Export To Excel</a>
                  </div>
                </div> <!-- group -->

              </div> <!-- 2 -->

            </div> <!-- row -->
          </div> <!-- container -->


          <div style="margin-top: 20px; margin-left: 20px;" class="border">

           <form method="post" action="search_student.php">   
            <span style="margin-left: 20px; font-size: larger;" >Search :</span> 
            <input style=" margin-left: 10px; margin-top: 30px;  border: 2px solid #2EB97F; border-radius: 5px; height: 40px;" ype="text" placeholder="search...." name="search">
           </form>           
                  <table style="margin-top: 30px; color: #2EB97F; " class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>img</th>
                        <th>English_Name</th>
                        <th>Arabic_Name</th>
                        <th>Department</th>
                        <th>Mobile</th>
                        <th>FullName</th>
                        <th>Birth_Date</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>  
                      <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM student";
                      $students = $conn -> query($select);

                      $index = 1;
                      foreach ($students as $student) {
                      ?>
                      <tr>
                        <td><?php echo $index++; ?></td>
                        <td><img style="width: 50px" src="images/<?php echo $student['personal_photo']; ?>"></td>
                        <td><?php echo $student['name_en']; ?></td>
                        <td><?php echo $student['name_ar']; ?></td>
                        <td><?php 
                             if($student['department'] == 1) {
                               echo "IT";
                             }elseif($student['department'] == 2){
                               echo "CS";
                             }
                             elseif($student['department'] == 3){
                               echo "IS";
                             }else{
                               echo "General";
                             }
                             ?> 
                        </td>
                        <td><?php echo $student['mobile']; ?></td>
                        <td><?php echo $student['user_name']; ?></td>
                        <td><?php echo $student['birth_date']; ?></td>
                        <td><a href="?action=edit_student.php&ssn=<?php echo $student['ssn'] ?>" ><i class='far fa-edit'></i> </a>
                        <br> <a href="fun/delete_student.php?ssn=<?php echo $student['ssn'] ?>"><i class='fas fa-trash'></i></a>
                        </td>
                      </tr>
                      <?php
                     }
                      ?>  
        
                    </tbody>
      
      
                  </table>
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
</section>