<?php
include 'db_connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$code = $_POST['code'];
$description = $_POST['description'];

$begin_date = $_POST['begin_date'];
$end_date =$_POST['end_date'];
$price=$_POST['price'];
$max_student =$_POST['max_student'];
$professor=$_POST['professor'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$university = $_POST['university'];


print_r($_FILES);

$tmp = $_FILES['img']['tmp_name'];
$img_name = $_FILES['img']['name'];

$dest = "../images/" . $img_name;


move_uploaded_file($tmp, $dest);

if (!$conn) {
	die("connection failed :" . mysqli_connection_error());

}

$insert = "INSERT INTO courses (id, name, code, description, begin_date, end_date, price, max_student, professor, mobile, email, university, photo_course) VALUES ('$id', '$name', '$code', '$description', '$begin_date', '$end_date','$price','$max_student','$professor','$mobile','$email', '$university','$img_name') ";


if (mysqli_query($conn,$insert)) {
	echo "successfull";
}else{
	echo "error" . $insert . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



/*$conn -> query($insert);*/



header("location: ../courses.php");

?>	


