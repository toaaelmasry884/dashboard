<?php

session_start();

include 'db_connection.php';

$username = $_POST['loginUsername'];
$password = $_POST['loginPassword'];

$select = "SELECT * FROM employee WHERE username = '$username' AND password = '$password'";

$admins = $conn -> query($select);

if ($admins -> num_rows > 0) {

	$admin = $admins -> fetch_assoc();
	$_SESSION['login'] = $admin;
	
	header("location: ../index.php");
	exit();
}else{
	header("location: ../login.php");
}

?>



<!-- $_SESSION['university'] = $admin; -->