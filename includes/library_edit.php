 <?php

$id = $_GET['id'];

include 'fun/db_connection.php';


$book_s = "SELECT * FROM books WHERE id = $id";
$book_q = $conn -> query($book_s);

$book = $book_q -> fetch_assoc();
?>


<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;">Library</h2>
            <hr class="line"> <br>
            <h6>Show a borrowed book</h6>
            <hr style=" width:20% ;float: left; " class="line"> <br> <br> <br>
            <form class="form-inline" method="post" action="fun/library_edit.php" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo $id ?>">

              <div class="container">
                <div class="row">
              <div class="col">
                <label style="float: left;color: gray;" for="fname">The Book Name</label><br>
                <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="name" value="<?php echo $book['name']; ?>"><br>
              </div>  
              
              <div class="col">
                <label style="float: left;color: gray;" for="fname">Book price</label><br>
                <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="price" value="<?php echo $book['price']; ?>"><br>
              </div>  
              </div> <!-- row -->
              </div> <!-- container --> <br> <br> <br> <br>
        
                    
              <div class="container">
                <div class="row">
                  <div class="col">
                  <!--   <label style="float: left;color: gray;" for="fname">Status</label><br>  -->  
                  </div>
                  <div class="col">
                    <!-- <form>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Paid</label><br>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Un paid</label><br>
                     </form> -->
                      
                  </div>
                  <div class="col">
                  </div>
                  <div class="col">

                  </div>
                  <div class="col">
                  
                </div>
                <div class="col">
                <input type="submit" name="submit" value="Save" class="btn btn emp-btn" style="height: 40px;">

                   <!--  <a style="height: 40px;" class="btn btn emp-btn" href="#" role="button">Save</a> -->
                </div>
                </div>
              </div>
           
        
     </form>
   
     </section>