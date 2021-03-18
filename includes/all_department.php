<section  id="dept"> 
             <h2 style="margin-top:-10px ; margin-left: 15px;">All Department</h2>
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

          <form method="post" action="search_depart.php">    
           <span style="margin-left: 20px; font-size: larger;" >Search :</span> <input style=" margin-left: 10px; margin-top: 30px;  border: 2px solid #2EB97F; border-radius: 5px; height: 40px;" ype="text" placeholder="search ...." name="search">
          </form> 
            
          <table style="margin-top: 30px; color: #2EB97F; " class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Dept.Name</th>
                <th>Details</th>
                <th>Head of Dept</th>
                
                
                <th>Student Capacity</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM department";
                      $departs = $conn -> query($select);

                      $index = 1;
                      foreach ($departs as $depart) {
              ?>
              <tr>
                <td><?php echo $index++; ?></td>
                <td><?php echo $depart['name']; ?></td>
                <td><?php echo $depart['details']; ?></td>
                <td><?php echo $depart['header']; ?></td>
                
                <td><?php echo $depart['capacity']; ?></td>
                

                <!-- <td>300</td> -->
                <td><a href="?action=edit_department.php&id=<?php echo $depart['id'] ?>"> <i class='far fa-edit'></i> </a> <br> 
                 <a href="fun/delete_department.php?id=<?php echo $depart['id'] ?>"><i class='fas fa-trash'></i> </a> 
               </td>
              </tr>

            <?php
              }
            ?>   

            </tbody>
           

            
          </table>
      
                     
              <!--  <div class="row" >
                            <div style="margin-left: 4%; margin-top: 20px;" class="form-group">
                                   <label for="inlineFormInput" class="form-control-label"> </label>
                                  <select  name="view"  class="form-control"> 
                                      <option value="6" selected>6</option>
                                       <option value="5">5</option>
                                           <option value="4">4</option>
                                           <option value="4">3</option>
                                           <option value="4">2</option>
                                           <option value="4">1</option>
                                          </select>
                            
                  </div>
                  </div> -->
        
        </div> <!-- border -->

              

</section> <!-- dept -->