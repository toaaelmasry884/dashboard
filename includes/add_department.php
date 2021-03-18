<section  id="view"> <!-- start section -->
          <h2 style="margin-top:-10px ; margin-left: 15px;">Add New Department</h2>
          <hr class="line"> <br>
          <h6 style="margin-top:-10px ; margin-left: 15px;">Department Details</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>



    <form class="form-inline" action="fun/add_department.php" method="post" enctype="multipart/form-data" >
    
        <input type="hidden" name="id" >
      <div class="container">
        <div class="row">
          <div class="col">
            <label style="margin-left: 30px; color: gray;" for="fname">Department Name</label><br>
            <input style="width: 90%; margin-top: 10px;" type="text" name="name" placeholder="Department Name ...." ><br>
          </div>   
        </div> <!-- row -->
      </div> <!-- container --> <br> <br><br><br> <br><br><br> <br><br>


      <div class="container">
        <div class="row">
          <div class="col">
            <label style="margin-left: 30px; color: gray;" for="fname">Department Details</label><br>
            <input style="width: 90%; margin-top: 10px;" type="text" name="details" placeholder="Details ...." ><br>
          </div>   
        </div> <!-- row -->
      </div> <!-- container --> <br> <br><br><br> <br><br><br> 



      <div class="container">
        <div class="row">
          <div class="col">
            <label style="margin-left: 30px; color: gray;" >Student Capacity</label><br>
            <input style="width: 90%; margin-top: 10px;" type="number" min="1" name="student_capacity" placeholder=" ...." ><br>
          </div>   
        </div> <!-- row -->
      </div> <!-- container --> <br> <br><br><br> <br><br><br>


      <div class="container">
        <div class="row">
          <div class="col">
            <label style="margin-left: 30px; color: gray;" >Head Of Department</label><br>
            <input style="width: 90%; margin-top: 10px;" type="text"  name="head_depart" placeholder="head_depart ...." ><br>
          </div>   
        </div> <!-- row -->
      </div> <!-- container --> <br> <br><br><br> <br><br><br>


       <div class="container" >
                      <label for="inlineFormInput" class="form-control-label">Collage.. :&nbsp;</label>
                      <?php include 'fun/db_connection.php';

                        $coll_s = "SELECT * FROM collage";

                        $coll = $conn->query($coll_s);
                      ?>
                      <select style="width: 500px; margin-left: 200px" placeholder="Collage ......" name="collage" class="form-control">
                        <option></option>
                        <?php
                         foreach ($coll as $colla) {
                        ?>

                      <option value="<?php echo $colla['id'] ?>"><?php echo $colla['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>
                    </div>

      <br> <br><br><br> <br><br><br>

      

     <!--  <label style="margin-left: 30px; color: gray " for="fname"> Head Of Department </label><br>
      <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="fname"  value=""><br> <br> <br> <br> -->


     <!--  <div style=" border: 2px dashed gray ; height: 200px; width: 50%; margin-left: 22%; border-radius: 15px; " class="uplaod" >
        <a style="margin-left: 40%; margin-top: 40px;" href=""> <i style="font-size: 80px; " class="fas fa-upload"></i> </a>
        <p style="margin-top: 20px ; text-align: center;" > Upload and Drop Files Here...</p>
      </div> -->

      <div class="form-group" style="margin-left: 200px;">       
        <input type="submit" name="submit" value="Submit" class="btn2 btn btn-lg">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="form-group" style="margin-left: 270px;">       
        <input type="reset" value="cancel" class="btn2 btn btn-lg">
      </div> 

      <!-- <button class="btn2" type="button" class="btn  btn-lg" disabled>Submit</button>
      <button class="btn2" type="button" class="btn  btn-lg" disabled>cancle</button> -->

   </form>
</section>      