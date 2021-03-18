<section  id="dept"> 
             <h2 style="margin-top:-10px ; margin-left: 15px;">All Department</h2>
             <hr class="line"> <br>

             <div class="container">
                


               <div style="margin-top: 20px; margin-left: 20px;" class="border">

             
           <form method="post" action="search_depart.php">    
           <span style="margin-left: 20px; font-size: larger;" >Search :</span> <input style=" margin-left: 10px; margin-top: 30px;  border: 2px solid #2EB97F; border-radius: 5px; height: 40px;" ype="text" placeholder="search ...." name="search">
          </form> 
            
          <table style="margin-top: 30px; color: #2EB97F; " class="table table-bordered">
            <thead>
              <tr>
                
                <th>Dept.Name</th>
                <th>Details</th>
                <th>Head of Dept</th>
                
                
                <th>Student Capacity</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                  include "fun/db_connection.php";

                  $name = $_POST['search'];


                  $search = "SELECT * FROM department WHERE name = '$name' ";
                  /*$query = mysql_query("SET NAMES 'utf8'");*/
                  $query = $conn -> query($search);
                  /*$result = mysql_query($conn, $search);*/

                  while ($row = mysqli_fetch_assoc($query) ) 
                  {
                   
                ?>
              <tr>
                
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['details']; ?></td>
                <td><?php echo $row['header']; ?></td>
                
                <td><?php echo $row['capacity']; ?></td>
                

                <!-- <td>300</td> -->
                <td><a href="?action=edit_department.php&id=<?php echo $row['id'] ?>"> <i class='far fa-edit'></i> </a> <br> 
                 <a href="fun/delete_department.php?id=<?php echo $row['id'] ?>"><i class='fas fa-trash'></i> </a> 
               </td>
              </tr>

            <?php
              }
            ?>   

            </tbody>
           

            
          </table>
      
                     
              
        
        </div> <!-- border -->

              

</section> <!-- dept -->