<?php
include 'db_connection.php';

$student = $_POST['ssn'];
$fees = $_POST['fees'];
$yearOfFees = $_POST['yearOfFees'];
$details = $_POST['details'];

$fees_type = $_POST['fees_type'];
$payment_type = $_POST['payment_type'];
$status = $_POST['status'];





if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO fees (student, fees, yearOfFees, details, fees_type ,payment_type, status) VALUES ('$student','$fees', '$yearOfFees','$details','$fees_type' ,'$payment_type' ,'$status') ";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location: ../all_fees.php");


?>