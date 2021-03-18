<?php
session_start();
include 'db_connection.php';


$ssn = $_POST['ssn'];

$clinic = $_POST['clinic'];
$date_of_book = $_POST['date_of_book'];


if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO patient_books (student, clinic, date_of_book) VALUES ('$ssn' ,'$clinic', '$date_of_book')";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($insert);*/
header("location: ../hospital_student.php");

?>