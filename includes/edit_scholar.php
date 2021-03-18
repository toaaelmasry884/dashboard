 <?php

$id = $_GET['id'];

include 'fun/db_connection.php';


$scol_s = "SELECT * FROM scholarship WHERE id = $id";
$scol_q = $conn -> query($scol_s);

$scol = $scol_q -> fetch_assoc();
?>



 <section  id="fees"> 
    <h2 style="margin-top:-10px ; margin-left: 15px;"> Scholarship</h2>
    <hr class="line"> <br>
    <h6>Edit Scholarship</h6>
    <hr style=" width:20% ;float: left; " class="line"> <br> <br>

      <div class="container">


       <form class="form-inline" method="post" action="fun/edit_scholar.php" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo $id ?>">



        <label style="margin-left: 30px; color: gray" for="fname">Title</label><br>
        <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="title" value="<?php echo $scol['title']; ?>"><br> <br> <br> <br>


      
        <label style="margin-left: 30px; color: gray" for="fname">Description</label><br>
        <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="description" value="<?php echo $scol['description']; ?>">
      <!-- <textarea style="margin-left: 30px; border: none;   border-bottom: 2px solid gray; "  for="inlineFormInputGroup" rows="5" cols="120" placeholder="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis eos reprehenderit ipsum sed ducimus dignissimos beatae dolor adipisci possimus sunt, labore neque itaque quam provident qui. Quibusdam accusamus saepe nihil, odit est deserunt, ex suscipit vitae expedita, placeat rem neque.
       </textarea> <br> <br><br> <br>  -->
        <label style="margin-left: 30px; color: gray" for="fname">link</label><br>
        <input style="width: 100%; margin-top: 10px;" type="text" id="fname" name="link" value="<?php echo $scol['link']; ?>"><br> <br> <br>

        <div class="form-group" style="margin-left: 200px">       
          <input type="submit" name="submit" value="Submit" class="btn2 btn  btn-lg">
        </div> 
       </form>      
      </div> 
      
    
 </section>