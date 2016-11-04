<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "wayfarer";

$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if($mysqli->connect_error){
	die("Connection failed: " . $mysqli->connect_error);
}

?>