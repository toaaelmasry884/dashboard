<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;">Student welfare</h2>
            <hr class="line"> <br>
            <h6> Add Students & Activties</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br> <br>

    <form action="fun/add_stud_care.php" method="post" enctype="multipart/form-data">    
                    
      <div class="container">
        <div class="row">
          <div class="col">
            <label style="float: left; margin-left: 400px;" for="fname">The Student ID </label><br>
            <input style=" margin-top: 10px; width: 500px; margin-left: 200px;" type="text" id="fname" name="student" value=""><br>
          </div>  
        </div> <!-- row -->
      </div> <!-- container --> <br> <br><br>
          
      <div class="container">
        <div class="row">
          <div class="col">
            <label style="float: left; margin-left: 400px;" for="fname">The Activty</label><br><br>
            <?php include 'fun/db_connection.php';

                        $active_s = "SELECT * FROM activate";

                        $active = $conn->query($active_s);

                      ?>
                      <select style="width: 500px; margin-left: 200px;" placeholder="University ......" name="activite" class="form-control">
                        <option></option>
                        <?php
                         foreach ($active as $actives) {
                         
                        ?>

                      <option value="<?php echo $actives['id'] ?>"><?php echo $actives['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>
          </div>   
        </div> <!-- row -->
      </div> <!-- container --> <br> <br>


      <input type="submit" name="submit" value="Add" class="btn2 btn btn" class="btn btn emp-btn" style=" height: 40px;margin-left: 40%;">
    
 

      <!-- <a style="height: 40px;margin-left: 80%;" class="btn btn emp-btn" href="#" role="button">Add</a> -->
     
   </form>
     </section>