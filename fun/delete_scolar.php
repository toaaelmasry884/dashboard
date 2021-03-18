<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: ../login.php");
	exit();
}
include 'db_connection.php';

$id = $_GET['id'];

$delete = "DELETE FROM scholarship WHERE id = $id";
$conn -> query($delete);

header("location: ../all_scholar.php");
?>