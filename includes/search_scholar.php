<section  id="fees">
              <?php 
                      include '../fun/db_connection.php'; 

                      

                      $select = "SELECT * FROM scholarship";
                      $scol_q = $conn -> query($select);

                      
                      foreach ($scol_q as $scol) {

                        $id = $scol['university'];
                        $name = $_POST ['search'];
                        $select = "SELECT * FROM university WHERE /*name = $name ,*/ id = $id";
                        $uni_q = $conn -> query($select);
                        /*$uni = $uni_q -> fetch_assoc();*/

                        while ($uni = mysqli_fetch_assoc($uni_q) ) 
                  {
              ?>

   <button class="accordion"><?php echo $uni['name']; ?></button>
<div class="panel">
  <p><?php echo $scol['description']; ?> </p>
  <div class="icon1">
    <a href="fun/delete_scolar.php?id=<?php echo $uni['id']; ?>"><i class="far fa-trash-alt"></i> </a>  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
     <a href="?action=edit_scholar.php&id=<?php echo $uni['id']; ?>"><i class="far fa-edit"></i></a> &nbsp; &nbsp;
   </div>
</div>

<?php
} 
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