<section  id="fees"> 
                  <h2 style="margin-top:-10px ; margin-left: 15px;"> Scholarship</h2>
                  <hr class="line"> <br>
                  <div class="container">
                    <div class="row">
                      <div class="col">
                  <h6>All Scholarship</h6>
                  </div>

                   <a href="?action=add_scholar.php" class="btn btn-primary" style="width:150px; margin-left: 250px;">Add</a>

                 <form method="post" action="includes/search_scholar.php">  
                  <div class="col">
                  <input class="search1"  type="text" placeholder="Search.." name="search">
                  </div>
                 </form> 

                </div>
                </div>
                  <hr style=" width:20% ;float: left; " class="line"> <br> <br>
                   
                  <!-- accrodion -->

                  <br><br><br>

              <?php 
                      include 'fun/db_connection.php'; 

                      $select = "SELECT * FROM scholarship";
                      $scol_q = $conn -> query($select);

                      
                      foreach ($scol_q as $scol) {

                        $id = $scol['university'];
                        $select = "SELECT * FROM university WHERE id = $id ";
                        $uni_q = $conn -> query($select);
                        $uni = $uni_q -> fetch_assoc();
              ?>

   <button class="accordion"><?php echo $scol['title']; ?></button>
<div class="panel">
  <p><?php echo $scol['description']; ?> </p>
  <div class="icon1">
    <a href="fun/delete_scolar.php?id=<?php echo $scol['id']; ?>"><i class="far fa-trash-alt"></i> </a>  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
     <a href="?action=edit_scholar.php&id=<?php echo $scol['id']; ?>"><i class="far fa-edit"></i></a> &nbsp; &nbsp;
   </div>
</div>

<?php
} 
?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</section>