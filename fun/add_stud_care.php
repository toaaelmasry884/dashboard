<?php
session_start();
include 'db_connection.php';


$student = $_POST['student'];
$activite = $_POST['activite'];


if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO activitestudent (student , activite) VALUES ('$student' , '$activite')";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($insert);*/
header("location: ../stud_care.php");

?>