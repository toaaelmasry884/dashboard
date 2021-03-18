<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Department Desires</h2>
            <hr class="line"> <br>
            <h6>Add Desires</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>

           


      <div class="cintainer">

        <form class="form-inline" action="fun/add_desire.php" method="post" enctype="multipart/form-data" >
            <label style="margin-left: 30px; color: gray" for="fname">Choose The Department Name </label><br><br>
          
           <?php 

                include 'fun/db_connection.php';

                $depart_s = "SELECT * FROM department";

                $depart = $conn->query($depart_s);
            ?>

          <select style="width: 40%; margin-top: 90px; margin-left: -320px; " name="department" id="">

            <?php
                         foreach ($depart as $departs) {
                         
                          

                        ?>

                      <option value="<?php echo $departs['id'] ?>"><?php echo $departs['name'];?></option>

                       <?php
                      }

                     ?>
           </select> <br> <br> <br> <br><br><br><br><br><br>

           <label style="text-align: center; color: #2EB97F;" for="fname">Adding The Description for each Department available this year </label> <br> <br> <br> <br> <br>
           

           <!-- <div class="container">
            <div class="row">
          <div class="col"> -->
            <label style="margin-left: 30px;color: gray;" for="fname">Number Of Student</label><br>
            <input style="width: 100%; margin-top: 10px;" type="number" id="fname" name="student" value=""><br>
          <!-- </div>  
           
          </div> row

          </div> --> <!-- container --> <br> <br><br><br>

         
           <input style=" float: right; margin-top: -20px;margin-left: 20px;" type="submit" name="submit" value="Add" class="btn2 btn btn">

     </form>
          </div>

      
 </section>         