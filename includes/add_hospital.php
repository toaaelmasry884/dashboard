<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Hospital</h2>
            <hr class="line"> <br>
            <h6>Add Medical Examination</h6>
            <hr style=" width:30% ;float: left; " class="line"> <br> <br> <br> <br>

<form action="fun/add_hospital.php" method="post" enctype="multipart/form-data">  

   <input type="hidden" name="ssn" >

            <label style="margin-left: 30px;" for="fname">Choose The Clinic</label><br> <br>

            <?php include 'fun/db_connection.php';

                        $clinic_s = "SELECT * FROM clinic";

                        $clinic = $conn->query($clinic_s);
                      ?>  

            <select  style="width: 50%;  margin-top: 10px;" name="clinic" >
                <option></option>
                        <?php
                         foreach ($clinic as $clinics) {
                        ?>

                      <option value="<?php echo $clinics['id'] ?>"><?php echo $clinics['name'];?></option>

                       <?php
                      }

                     ?> 
             </select>   <br> <br>   <br> <br>   <br> 
             
             
      <div class="container">
        <div class="row">
      <div class="col">
        <label style="margin-left: 30px; "for="fname">Date of Reservation</label><br>
        <input style="width: 100%; margin-top: 10px;" type="date" id="fname" name="date_of_book" value=""><br> <br>
        <!-- <p>20/10/2020</p>
        <p>21/10/2020</p>
        <p>22/10/2020</p> -->
      
      </div>  
      
      <div class="col">
        <label style="float: left;" for="fname">Number of Students</label><br>
        <input style="width: 100%; margin-top: 10px;" type="" id="fname" name="ssn" min="1" value=""><br> <br>
        <!-- <p>20</p>
        <p>22</p>
        <p>25</p> -->

      
      </div> 
      <div class="col">
        <input type="submit" name="submit" value="Send" class="btn2 btn btn" style=" height: 40px;">
        <!-- <a style="height: 40px;" class="btn btn emp-btn" href="#" role="button">Send</a> -->
      </div>

      </div> <!-- row -->
      </div> <!-- container --> <br>  

      <!-- <div class="container">
        <div class="row">
      <div class="col">
   
      </div>  
      
      <div class="col">
    
      </div> 
      <div class="col">
        <a style="height: 40px;" class="btn btn emp-btn" href="#" role="button">Send</a>
      </div> -->

      </div> <!-- row -->
      </div> <!-- container --> <br>  <br>
    
 </form>    
   
     </section>