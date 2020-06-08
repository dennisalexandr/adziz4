<?php
$host = "dbtugas5.cesx4in4qfud.us-east-1.rds.amazonaws.com";
$username = "dbtugas5";
$password = "ADSIS_DENNIS_WILDAN";
$dbname = "dbtugas5";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
