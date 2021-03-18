<?php

$id = $_GET['id'];

include 'fun/db_connection.php';


$depart_s = "SELECT * FROM department WHERE id = $id";
$depart_q = $conn -> query($depart_s);

$depart = $depart_q -> fetch_assoc();
?>



 <section  id="view"> <!-- start section -->
          <h2 style="margin-top:-10px ; margin-left: 15px;">Edit Department</h2> 
            <div class="topnav">
              <input style="float: right; margin-top: -30px; color: green; border: 2px solid #2eb97f; border-radius: 10px;" ype="text" placeholder="Search..">
            </div>
     
          <hr class="line"> <br>
          <h6 style="margin-top:-10px ; margin-left: 15px;">Department Details</h6>

          <hr style=" width:20% ;float: left; " class="line"> <br> <br>


          <form class="form-inline" method="post" action="fun/edit_department.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="container">
              <div class="row">
                <div class="col">
                  <label style="margin-left: 30px; color: gray" for="fname">Department Name</label><br>
                  <input style="margin-left: 30px; width: 90%; margin-top: 10px; color:#2EB97F; " type="text" id="fname" name="name" value="<?php echo $depart['name']; ?>"><br>
                </div>  
      
               
                  <!-- <label style="float: left; color: gray" for="fname">Department Code</label><br>
                  <input style="width: 100%; margin-top: 10px; color:#2EB97F;" type="text" id="fname" name="fname" value=""><br> -->
                  
              </div> <!-- row -->
            </div> <!-- container --> <br> <br><br><br><br><br><br><br>

            <div class="container">
              <div class="row">
                <div class="col">

                  <label style="margin-left: 30px;color: gray" for="fname">Department Details</label><br>
                  <input style="margin-left: 30px; border: none; width: 90%;  border-bottom: 2px solid gray;  color:#2EB97F; " type="text"  name="details" rows="4" cols="100" value="<?php echo $depart['details']; ?>">
                </div>  
                
              </div>
            </div>    
            <br><br><br><br><br><br><br><br>



            <div class="container">
              <div class="row">
                <div class="col">

                  <label style="margin-left: 30px; color: gray" for="fname">Student Capacity</label><br>
                  <input style="margin-left: 30px; border: none; width: 90%;  border-bottom: 2px solid gray;  color:#2EB97F; " type="number" maxlength="4" name="student_capacity" min="1" value="<?php echo $depart['capacity']; ?>">
                </div>  
                
              </div>
            </div>    
            <br><br><br><br><br><br><br><br>

        
            
          
           

            <div class="container">
              <div class="row">
                <div class="col">

                  <label style="margin-left: 30px; color: gray;" for="fname"> Head Of Department </label><br>
                  <input style="margin-left: 30px; border: none; width: 90%;  border-bottom: 2px solid gray;  color:#2EB97F; " type="text"  name="head_depart"  value="<?php echo $depart['header']; ?>">
                </div>  
                
              </div>
            </div>    
            <br><br><br><br><br><br><br><br>

            
           

   
            <div style=" border: 2px dashed gray ; height: 200px; width: 50%; margin-left: 22%; border-radius: 15px; " class="uplaod" >
               <a style="margin-left: 40%; margin-top: 40px;" href=""> <i style="font-size: 80px; " class="fas fa-upload"></i> </a>
               <p style="margin-top: 20px ; text-align: center;" > Upload and Drop Files Here...</p>
            </div>

            <div class="form-group" style="margin-left: 200px">       
              <input type="submit" name="submit" value="Submit" class="btn2 btn  btn-lg">
            </div>
            <div class="form-group" style="margin-left: 270px">       
              <input type="reset" value="cancel" class="btn2 btn  btn-lg" >
            </div> 
 
            

          </form>  


</section> <!-- end section -->