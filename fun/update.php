<?php

include 'db_connection.php';

extract($_POST);

if(isset($update))

{

	if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$update = "UPDATE training SET applay = $applay";

if (mysqli_query($conn,$update)) {
	echo "successfull";
}else{
	echo "error" . $update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($update);*/


}

?>