<?php
include 'db_connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$details = $_POST['details'];
$student_capacity = $_POST['student_capacity'];
$head_depart = $_POST['head_depart'];
$collage = $_POST['collage'];




/*print_r($_FILES);

$tmp = $_FILES['img']['tmp_name'];
$img_name = $_FILES['img']['name'];

$dest = "../images/" . $img_name;


move_uploaded_file($tmp, $dest);*/

if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO department (id,name, details, capacity, header ,collage) VALUES ('$id','$name', '$details','$student_capacity','$head_depart' ,'$collage')";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*$conn -> query($insert);*/


header("location: ../all_department.php");

?>