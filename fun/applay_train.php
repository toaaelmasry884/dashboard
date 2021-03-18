<?php

include 'db_connection.php';
$id = $_POST['id'];
$applay = $_POST['applay'];



	if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$update = "UPDATE training SET applay = $applay WHERE id = $id";

if (mysqli_query($conn,$update)) {
	echo "successfull";
}else{
	echo "error" . $update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($update);*/

header("location: ../applay_train.php");


?>