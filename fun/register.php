<?php

session_start();

include 'db_connection.php';

$ssn = $_POST['registerNationalID'];
$username = $_POST['registerUsername'];
$email = $_POST['registerEmail'];
$password = md5($_POST['registerPassword']);

$insert = "INSERT INTO employee (ssn,username,email,password) VALUES ('$ssn','$username','$email','$password')";

$admins = $conn -> query($insert);



header("location: ../login.php");

?>
