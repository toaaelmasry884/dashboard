<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: ../login.php");
	exit();
}
include 'db_connection.php';

$student = $_GET['student'];
if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}
$delete = "DELETE FROM activitestudent WHERE student = $student";
if (mysqli_query($conn,$delete)) {
	echo "successfull";
}else{
	echo "error" . $delete . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location: ../stud_care.php");
?>