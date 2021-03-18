<?php
include 'fun/db_connection.php';

$select = "SELECT * FROM training";
//select users data
$tr_q = $conn -> query($select);

//fetch data
$result = $tr_q -> fetch_assoc();

?>

<style>

input{width:250px}

input[type=submit]{width:120px; height:25px}

table{padding:5px}

</style>

<form method="post" action="fun/update.php">

<table style="background:#F8F8F8" border="0" align="center">  

  <tr>

    <td height="70">Gender</td>

    <td>

	  Refuse
	    <input type="radio" name="applay" value="0" <?php if($result['applay']=="0"){ echo "checked";}?>/>

	    <BR/>

	  Accept
	    <input type="radio" name="applay" value="1" <?php if($result['applay']=="1"){ echo "checked";}?>/>

      </td>

  </tr>
 
    <tr>

    <td colspan="2" align="center">

		<input type="submit" value="Update My Profile" name="update"/>

	</td>

  </tr>
  
</table>

</form>