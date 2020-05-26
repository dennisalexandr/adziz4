<?php
$host = "adziz4.cesx4in4qfud.us-east-1.rds.amazonaws.com";
$username = "adziz4";
$password = "adziz4321";
$dbname = "adziz4";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
