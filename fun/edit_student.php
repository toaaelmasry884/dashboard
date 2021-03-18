<?php
include 'db_connection.php';
$ssn = $_POST['ssn'];

$name_ar = $_POST['name_ar'];
$name_en = $_POST['name_en'];
$user_name = $_POST['user_name'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$department = $_POST['department'];


if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}


$update = "UPDATE student SET ssn ='$ssn' , name_ar = '$name_ar', name_en = '$name_en', user_name = '$user_name', mobile ='$mobile', birth_date = '$date', gender = '$gender', department = '$department'  WHERE ssn = $ssn";

if (mysqli_query($conn,$update)) {
	echo "successfull";
}else{
	echo "error" . $update . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*
print_r($_FILES);

if ($_FILES['img']['error'] == 0) {

	$tmp = $_FILES['img']['tmp_name'];
	$imgName = $_FILES['img']['name'];

	$des = "../images/" . $imgName;

	move_uploaded_file($tmp, $des);

	$update = "UPDATE student SET ssn = $ssn , personal_photo = '$imgName' WHERE ssn = $ssn";
	$conn -> query($update);
}
*/
header("location: ../students.php");

?>