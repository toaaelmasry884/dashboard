<?php
include 'db_connection.php';
$student = $_POST['student'];
$department = $_POST['department'];
/*$code = $_POST['code'];*/



if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO department_student (student, department) VALUES ('$student', '$department') ";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



/*$conn -> query($insert);*/



header("location: ../desire.php");

?>