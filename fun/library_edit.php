<?php
include 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$update = "UPDATE books SET  name = '$name' , price ='$price' WHERE id = $id ";

$conn -> query($update);

header("location: ../library_student.php");
?>