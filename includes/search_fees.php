 <section  id="fees"> 
            


        <div style="margin-top: 20px; margin-left: 20px;" class="border">

          <form method="post" action="search_fees.php">    
           <span style="margin-left: 20px; font-size: larger;" >Search :</span> <input style=" margin-left: 10px; margin-top: 30px;  border: 2px solid #2EB97F; border-radius: 5px; height: 40px;" type="number" placeholder="search ...." name="search">
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

              

              <?php
                  include "fun/db_connection.php";

                  $name = $_POST['search'];


                  $search = "SELECT * FROM fees WHERE  student = '$name' ";
                  /*$query = mysql_query("SET NAMES 'utf8'");*/
                  $query = $conn -> query($search);
                  /*$result = mysql_query($conn, $search);*/

                  $index = 1;
                  while ($row = mysqli_fetch_assoc($query) ) 
                  {
                   
                   
                ?>

              <tr>
                <td>00<?php echo $index++; ?></td>
                <td><?php echo $row['student']; ?></td>
                <td><?php echo $row['fees_type']; ?></td>
                <td><?php echo $row['date_payment']; ?></td>
               <!--  <td>In-565656</td> -->
                <td><?php echo $row['payment_type']; ?></td>
                <td><?php echo $row['fees']; ?></td>
                </td>

                <?php 
                 if($row['status'] == 1) {
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