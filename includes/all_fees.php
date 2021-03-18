
        <section  id="fees"> 
             <h2 style="margin-top:-10px ; margin-left: 15px;">All Fees</h2>
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

          <form method="post" action="search_fees.php">    
           <span style="margin-left: 20px; font-size: larger;" >Search :</span> 
           <input style=" margin-left: 10px; margin-top: 30px;  border: 2px solid #2EB97F; border-radius: 5px; height: 40px;" type="" placeholder="search ...." name="search">
          </form>  
           <table style="margin-top: 30px; color: #2EB97F; " class="table table-bordered">
            <thead>
              <tr>
                <th>Roll No</th>
                <th>Student Name</th>
                <th>Fees Type</th>
                <th>Date</th>
               <!--  <th>Invoice Number</th> -->
                <th>Payment Type</th>
                <th>Amount</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>



              <?php include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM fees";
                      $fees = $conn -> query($select);

                      $index = 1;
                      foreach ($fees as $fee) {
                        $ssn_stu = $fee['student'];
                        $select_st = "SELECT * FROM student WHERE ssn = $ssn_stu";
                        $st_q = $conn -> query($select_st);
                        $student = $st_q -> fetch_assoc();
              ?>
              <tr>
                <td>00<?php echo $index++; ?></td>
                <td><?php echo $student['user_name']; ?></td>
                <td><?php echo $fee['fees_type']; ?></td>
                <td><?php echo $fee['date_payment']; ?></td>
               <!--  <td>In-565656</td> -->
                <td><?php echo $fee['payment_type']; ?></td>
                <td><?php echo $fee['fees']; ?></td>
                </td>

                <?php 
                             if($fee['status'] == 1) {
                               echo "<td style=' border: 1px solid #ffff; color: #ffff; background-color: #2EB97F; ' > PAID </td>";
                             }else{
                               echo "<td style='border: 1px solid #ffff; color: #ffff; background-color: red; ' >Un PAID</td>";
                             }
                             ?> 
                       
               
              </tr>

             <?php
           }
             ?>
            

            


            </tbody>
            

            
          </table>
      
                     
               
        
        </div> <!-- border -->

              

        </section> <!-- dept -->