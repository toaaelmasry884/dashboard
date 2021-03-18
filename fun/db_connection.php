<?php

$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name="university";

$conn = new mysqli($host, $db_username, $db_password, $db_name);
try {
	$bdd = new PDO('mysql:host='.$host.';dbname='.$db_name,$db_username,$db_password);
	$bdd->query("SET NAMES utf8");
	$bdd->query("SET CHARACTER SET utf8");
}

catch(Exception $e){
	die('erreur |'.$e->getMessage());
}


?>