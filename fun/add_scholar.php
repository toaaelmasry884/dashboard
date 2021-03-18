<?php
session_start();
include 'db_connection.php';


$id = $_POST['id'];

$title = $_POST['title'];
$description = $_POST['description'];
$link = $_POST['link'];
$university = $_POST['university'];

if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO scholarship (id, title, description, link, university) VALUES ('$id' ,'$title', '$description', '$link', '$university')";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($insert);*/
header("location: ../all_scholar.php");

?>