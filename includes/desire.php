
<?php
include 'fun/db_connection.php';
$select = "SELECT count(student) AS total FROM department_student WHERE accepted = 0 AND department = 1";
$count_q = $conn -> query($select);
$count = $count_q -> fetch_assoc();
$num_row = $count['total'];

$select_a = "SELECT count(student) AS total FROM department_student WHERE accepted = 0 AND department = 2";
$count_qu = $conn -> query($select_a);
$count_a = $count_qu -> fetch_assoc();
$numb_row = $count_a['total'];

$select_b = "SELECT count(student) AS total FROM department_student WHERE accepted = 0 AND department = 3";
$count_que = $conn -> query($select_b);
$count_b = $count_que -> fetch_assoc();
$numbe_row = $count_b['total'];

$select_c = "SELECT count(student) AS total FROM department_student WHERE accepted = 0 AND department = 8";
$count_quer = $conn -> query($select_c);
$count_c = $count_quer -> fetch_assoc();
$number_row = $count_c['total'];

?>
<section  id="fees"> 
            <h2 style="margin-top:-10px ; margin-left: 15px;"> Department Desires</h2>
            <hr class="line"> <br>
            <h6>Available Desires</h6>
          <hr style=" width:20% ;float: left; " class="line"> <br> <br>

          <div class="container">
        
            <table class="train" style="width:100%">
                <tr>
                  <th>#</th>
                  <th>Department Name</th> 
                  <th>Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Inforamation Technology</td>
                    <td>Number Of Applicants is : &nbsp; &nbsp; <?php echo $num_row; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Information System</td>
                    <td>Number Of Applicants is :&nbsp; &nbsp;<?php echo $numb_row; ?></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Computer Science</td>
                    <td>Number Of Applicants is :&nbsp; &nbsp; <?php echo $numbe_row; ?></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Biology</td>
                    <td>Number Of Applicants is :&nbsp; &nbsp;<?php echo $number_row; ?></td>
                </tr>
                
              </table>
              <a style=" float: right;" href="add_desire.php"  class="btn2 btn btn" href="#" role="button">Add Desire</a>
            </div>

          
      

          </section>