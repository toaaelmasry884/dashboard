<?php
include 'db_connection.php';


session_start();
$id = $_POST['id'];
$collage = $_POST['collage'];
$name = $_POST['name'];
$address = $_POST['address'];


if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}  

$insert = "INSERT INTO training_portal (id ,collage , name , address) VALUES ('$id' ,'$collage' , '$name','$address')";



if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location:../train.php");

?>