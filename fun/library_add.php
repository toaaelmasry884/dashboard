<?php
include 'db_connection.php';
$ssn = $_POST['ssn'];
$book = $_POST['book'];
$date = $_POST['date'];
$library = $_POST['library'];



if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO librarybook (student, book, dateBooked, library) VALUES ('$ssn', '$book', '$date', '$library') ";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location: ../library_student.php");


?>