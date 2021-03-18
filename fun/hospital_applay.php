<?php

include 'db_connection.php';
$id = $_POST['id'];
$accept = $_POST['accept'];



	if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$update = "UPDATE notifications_medical SET accept = $accept WHERE id = $id";

if (mysqli_query($conn,$update)) {
	echo "successfull";
}else{
	echo "error" . $update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($update);*/

header("location: ../hospital_applay.php");


?>