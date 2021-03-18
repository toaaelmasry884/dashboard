<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: ../login.php");
	exit();
}
include 'db_connection.php';

$id = $_GET['id'];


if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}  

$delete = "DELETE FROM librarybook WHERE id = $id ";

if (mysqli_query($conn,$delete)) {
	echo "successfull";
}else{
	echo "error" . $delete . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*$conn -> query($delete);*/

header("location: ../library_student.php");
?>