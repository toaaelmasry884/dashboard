<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: ../login.php");
	exit();
}
include 'db_connection.php';

$ssn = $_GET['ssn'];

if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$delete = "DELETE FROM student WHERE ssn = $ssn";

if (mysqli_query($conn,$delete)) {
	echo "successfull";
}else{
	echo "error" . $delete . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*$conn -> query($delete);*/
header("location: ../students.php");
?>