 <section  id="fees"> 
                    <h2 style="margin-top:-10px ; margin-left: 15px;"> Scholarship</h2>
                    <hr class="line"> <br>
                    <h6>Add Scholarship</h6>
                    <hr style=" width:20% ;float: left; " class="line"> <br> <br>

        <form action="fun/add_scholar.php" method="post" enctype="multipart/form-data">                 
            <div class="container">
       


      <input type="hidden" name="id" > 
                
      <label style="margin-left: 30px; color: gray" for="fname">Title</label><br>
      <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="title" value=""><br> <br> <br> <br>


      
      <label style="margin-left: 30px; color: gray" for="fname">Description</label><br>
      <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="description" value=""> <br> <br><br> <br>
      <!-- <textarea style="margin-left: 30px; border: none;   border-bottom: 2px solid gray;  color:#2EB97F;"  for="inlineFormInputGroup" rows="5" cols="120" placeholder="">
       </textarea>  -->
       <label style="margin-left: 30px; color: gray" for="fname">link</label><br>
       <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="link" value=""><br> <br> <br>

       <div class="form-group" style="width: 400px; margin-left: 20px;">
                      <label for="inlineFormInput" class="form-control-label">University.. :&nbsp;</label>
                      <?php include 'fun/db_connection.php';

                        $univer_s = "SELECT * FROM university";

                        $univer = $conn->query($univer_s);
                      ?>
                      <select  placeholder="University ......" name="university" class="form-control">
                        <option></option>
                        <?php
                         foreach ($univer as $university) {
                        ?>

                      <option value="<?php echo $university['id'] ?>"><?php echo $university['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>
        </div>
        <br><br><br>

       <input type="submit" name="submit" value="Add" class="btn2 btn btn" style=" float: right; margin-top: -20px;margin-left: 20px;">
    
            
           </div>  
     </form>
</section>