<?php
include 'db_connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
$start = $_POST['start'];
$end = $_POST['end'];
$max_student = $_POST['max_student'];
$professor_name = $_POST['professor_name'];
$mobile = $_POST['mobile'];





$update = "UPDATE courses SET name = '$name', price = '$price', description = '$details', begin_date ='$start', end_date = '$end', max_student = '$max_student', professor = '$professor_name', mobile = '$mobile'  WHERE id = $id";
$conn -> query($update);


print_r($_FILES);

if ($_FILES['img']['error'] == 0) {
	


	$tmp = $_FILES['img']['tmp_name'];
	$imgName = $_FILES['img']['name'];

	$des = "../images/" . $imgName;

	move_uploaded_file($tmp, $des);

	$update = "UPDATE courses SET photo_course = '$imgName' WHERE id = $id";
	$conn -> query($update);
}


header("location: ../courses.php");
?>