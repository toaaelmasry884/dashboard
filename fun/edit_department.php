<?php
include 'db_connection.php';


$id = $_POST['id'];
$name = $_POST['name'];
$details = $_POST['details'];

$student_capacity = $_POST['student_capacity'];
$head_depart = $_POST['head_depart'];






$update = "UPDATE department SET name = '$name', details = '$details', capacity ='$student_capacity', header = '$head_depart'  WHERE id = $id";
$conn -> query($update);


/*print_r($_FILES);

if ($_FILES['img']['error'] == 0) {
	


	$tmp = $_FILES['img']['tmp_name'];
	$imgName = $_FILES['img']['name'];

	$des = "../images/" . $imgName;

	move_uploaded_file($tmp, $des);

	$update = "UPDATE courses SET photo_course = '$imgName' WHERE id = $id";
	$conn -> query($update);
}*/


header("location: ../all_department.php");
?>