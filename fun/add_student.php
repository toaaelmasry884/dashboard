<?php
include 'db_connection.php';

$ssn = $_POST['ssn'];
$id = $_POST['id'];
$address = $_POST['address'];

$name_ar = $_POST['name_ar'];
$name_en = $_POST['name_en'];
$user_name = $_POST['user_name'];

$mobile = $_POST['mobile'];
$date =$_POST['date'];

$gender =$_POST['gender'];
$department =$_POST['department'];


/*$university= $_POST['university'];*/
$collage = $_POST['collage'];
$guardian = $_POST['guardian'];



print_r($_FILES);

$tmp = $_FILES['img']['tmp_name'];
$img_name = $_FILES['img']['name'];

$dest = "../images/" . $img_name;


move_uploaded_file($tmp, $dest);

if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}  


$insert = "INSERT INTO student (ssn, id, name_ar, name_en, user_name, mobile, birth_date, gender, department, collage,guardian, personal_photo ) VALUES ('$ssn' ,'$id' ,'$name_ar', '$name_en', '$user_name', '$mobile', '$date','$gender','$department','$collage','$guardian' , '$img_name')";



if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("location: ../students.php");

?>	