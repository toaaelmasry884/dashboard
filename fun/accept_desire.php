<?php

include 'db_connection.php';
$student = $_POST['student'];
$accepted = $_POST['accepted'];



	if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$update = "UPDATE department_student SET accepted = $accepted , department = $accepted WHERE student = $student";

if (mysqli_query($conn,$update)) {
	echo "successfull";
}else{
	echo "error" . $update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($update);*/

header("location: ../accept_desire.php");


?>