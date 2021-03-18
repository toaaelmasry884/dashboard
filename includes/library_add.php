<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;">Library</h2>
            <hr class="line"> <br>
            <h6>Add a borrowed book</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br> <br>

        
    <form class="form-inline" action="fun/library_add.php" method="post" enctype="multipart/form-data" > 
     <div style="width: 500px; margin-left: 250px">             
      <div class="container">
        <div class="row">
          <div class="col">
            <label style="float: left;" for="fname">The Student ID </label><br>
            <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="ssn" value=""><br>
          </div>  
        </div> <!-- row -->
      </div> <!-- container --> <br> <br>

      <div class="container">
        <div class="row">
          <div class="col">

      <!-- <label for="fname" style="font-size: 40px; color: green; margin-left: -50px" class="form-control-label">Library.. :&nbsp;</label><br><br> -->
                 <label style="float: left;" for="fname">Library ...</label><br>
                      <?php include 'fun/db_connection.php';

                        $lib_s = "SELECT * FROM library";

                        $lib = $conn->query($lib_s);
                      ?>
                      <select  placeholder="Library......" name="library" class="form-control" style="width: 470px">
                        <option></option>
                        <?php
                         foreach ($lib as $library) {
                        ?>

                      <option value="<?php echo $library['id'] ?>"><?php echo $library['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>

           </div>  
        </div> <!-- row -->
      </div> <!-- container --> <br> <br>           
          
      <div class="container">
        <div class="row">
          <div class="col">
            <label style="float: left;" for="fname">The Book Name</label><br>

            <?php include 'fun/db_connection.php';

                        $book_s = "SELECT * FROM books";

                        $book = $conn->query($book_s);
                      ?>
                      <select  placeholder="Library......" name="book" class="form-control" style="width: 470px">
                        <option></option>
                        <?php
                         foreach ($book as $books) {
                        ?>

                      <option value="<?php echo $books['id'] ?>"><?php echo $books['name'];?></option>

                       <?php
                      }

                     ?>
                      </select>

            <!-- <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="book" value=""><br> -->
          </div>  
      
        </div> <!-- row -->
      </div> <!-- container --> <br> <br>
    
 

      <div class="container">
        <div class="row">
         <div class="col">
           <label style="float: left;" for="fname">The Date</label><br>
           <input style="width: 100%; margin-top: 10px;" type="date" id="fname" name="date" value=""><br>
         </div>  
        </div> <!-- row -->
      </div> <!-- container --> <br> <br>  

      <input type="submit" name="submit" value="Add" style="height: 40px;margin-left: 170px;" class="btn btn emp-btn">
    </div>  

     <!--  <a style="height: 40px;margin-left: 80%;" class="btn btn emp-btn" href="#" role="button">Add</a> -->
     
   </form>
</section>