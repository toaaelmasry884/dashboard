<?php
include 'db_connection.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$link = $_POST['link'];


$update = "UPDATE scholarship SET title = '$title', description = '$description', link ='$link'  WHERE id = $id";
$conn -> query($update);


header("location: ../all_scholar.php");
?>