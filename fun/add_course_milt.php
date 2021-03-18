<?php
include 'db_connection.php';

$collage = $_POST['collage'];
$acadimic_year = $_POST['acadimic_year'];
$officer = $_POST['officer'];


if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}  

$insert = "INSERT INTO military_student (student) VALUES ('$collage')";
$insert = "INSERT INTO military_student ( student, military) VALUES ( '$acadimic_year' ,'$officer')";



if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*header("location: ../students.php");*/

?>