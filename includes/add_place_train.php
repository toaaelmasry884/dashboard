  
<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Training</h2>
            <hr class="line"> <br>
            <h6>Add Places</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>

 <form class="form-inline" action="fun/add_place_train.php" method="post" enctype="multipart/form-data">
          <div class="cintainer">

            <input type="hidden" name="id">
            
            <label style="margin-left: -500px; color: gray" for="fname">Choose The Place for this Training</label><br>


            <?php 

                include 'fun/db_connection.php';

                        $train_s = "SELECT * FROM collage";

                        $train = $conn->query($train_s);
                      ?>

           <select style="width: 50%; margin-top: 10px; margin-left: 60px; " name="collage" id="">

            <?php
                         foreach ($train as $trains) {
                         
                          

                        ?>

                      <option value="<?php echo $trains['id'] ?>"><?php echo $trains['name'];?></option>

                       <?php
                      }

                     ?>
           </select> <br> <br> <br> <br>
           

           
           

           <div class="container">
            <label style=" margin-left: 90px; color: #2EB97F;" for="fname">Adding Training places available for Student this year </label> <br> <br> <br> <br> <br>
            <div class="row">


          <div class="col">
            <label style="float: left;color: gray;" for="fname">Name Place</label><br>
            <input style="width: 450px; margin-top: 10px;" type="text" id="fname" name="name" value=""><br>
          </div>  
          
          <div class="col">
            <label style="float: left;color: gray;" for="fname">Address </label><br>
            <input style="width: 450px; margin-top: 10px;" type="text" id="fname" name="address" value=""><br>
          </div>  
          </div> <!-- row -->

          </div> <!-- container --> <br> <br>
          <input style=" float: right; margin-top: -20px;margin-left: 20px;" type="submit" name="submit" value="Add" class="btn2 btn btn">

     <!-- <a style=" float: right; margin-top: -20px;margin-left: 20px;"  class="btn2 btn btn"  role="button">Add </a> -->
          </div>
       </form>   


 </section>             