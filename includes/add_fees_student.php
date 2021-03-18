
 <div >

   <form class="form-inline" action="fun/add_fees_student.php" method="post" enctype="multipart/form-data" >

          <div class="container">
            <div class="row">
         

          <div class="col">
            <label style="float: left; margin-top: 50px;" for="fname">Student ID</label><br>
            <input style="width: 100%; margin-top: 40px;" type="text" id="fname" name="ssn" value=""><br>
          </div>  
          <div class="col">
        <label style="float: left; margin-top: 50px; " for="fname">Amount</label><br>
        <input style="width: 100%; margin-top: 40px; width: 500px; margin-left: -10px;" type="text" id="fname" name="fees" value=""><br>
      </div>
        

        </div> <!-- row -->
      </div> <!-- container -->  <br> <br>


      
      <div class="container">
        <div class="row">
      

     
     
    </div> <!-- row -->
    </div> <!-- container --> <br> <br>

          
    <label style="margin-left: 30px; margin-top: 50px" for="fname">Payment Details</label><br>
    <input style="width: 1000px; margin-top: 40px; margin-left: 15px" type="text" id="fname" name="details" value=""><br> <br> <br>

    
  
<div class="container " >
  <div   class="row">

    <div class="col">
      <div class="form-group">
        <label style="float: left; margin-top: 50px "for="exampleFormControlSelect">Fees Type</label> <br>
        <select style="color: #2EB97F; margin-top: 50px; width: 450px" name="fees_type" class="form-control border0" id="exampleFormControlSelect1">

         

              <option value="<?php echo $fees['fees_type'] = 0 ; ?>">Annual</option>
              <option value="<?php echo $fees['fees_type'] = 1; ?>">Libarary</option>
        </select>
      </div>
    </div>

    <div class="col">
      <div class="form-group">
        <label style="float: left; margin-top: 50px; "for="exampleFormControlSelect">Payment Type</label> <br>
        <select style="color: #2EB97F; margin-top: 50px; width: 450px" name="payment_type" class="form-control border0" id="exampleFormControlSelect1">
          <option value="<?php echo $fees['payment_type'] = 1; ?>">manual</option>
          <option value="<?php echo $fees['payment_type'] = 2; ?>">Cheque</option>
          <option value="<?php echo $fees['payment_type'] = 3; ?>">Credit</option>
          <option value="<?php echo $fees['payment_type'] = 4; ?>">Online transfer</option>
          <option value="<?php echo $fees['payment_type'] = 5; ?>">Others</option>
        </select>
      </div> 
    </div> 

  </div> <!-- row -->
</div> <!-- container -->  <br> <br><br><br><br>

    
<div class="container">
  <div class="row">

    <div class="col">
      <div class="form-group">
        <label style="float: left; margin-top: 50px;"for="exampleFormControlSelect">Status</label> <br>
        <select style="color: #2EB97F; margin-top: 50px; width: 450px"  class="form-control border0" id="exampleFormControlSelect1" name="status">
                    
                       <option value="<?php echo $fees['status'] = 1 ; ?>">PAID</option>
                       <option value="<?php echo $fees['status'] = 0; ?>">UNPAID</option>
        </select>
      </div>
    </div>


    <div class="col">
      <div class="form-group">
        <label style="float: left; margin-top: 50px;" for="exampleFormControlSelect1">Department</label> <br>

        <?php 
                       include 'fun/db_connection.php';

                      $fee_se = "SELECT * FROM fees";

                      $fee_qu = $conn -> query($fee_se);
                      $fees = $fee_qu -> fetch_assoc();
                     ?>

        <select style="color: #2EB97F; margin-top: 50px; width: 450px" name="yearOfFees" class="form-control border0" id="exampleFormControlSelect1">
          <option value="<?php echo $fees['yearOfFees'] = 1 ; ?>">1st</option>
          <option value="<?php echo $fees['yearOfFees'] = 2 ; ?>">2nd</option>
          <option value="<?php echo $fees['yearOfFees'] = 3 ; ?>">Others</option>
        </select>
      </div>
    </div>
   
    
    

  </div> <!-- row -->
</div> <!-- container --> <br><br><br>
<input type="submit" name="submit" value="Submit" class="btn2" class="btn  btn-lg">

<!-- <button class="btn2" type="button" class="btn  btn-lg" disabled>Submit</button> -->
<button class="btn2" type="button" class="btn  btn-lg" disabled>cancle</button>

 </div> <!-- student form -->
       


    </div> <!--  -->
    </div>
</form>
        </section> <!-- end section -->





 </div>  





