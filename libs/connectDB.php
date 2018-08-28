<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FPDdb";

//connection DB
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
}else {
		//echo "Connected DB successfully <br>";
}

//Select DB
$db_selected = mysqli_select_db($conn, $dbname);

if (!$db_selected) {
		$sql = "CREATE DATABASE ".$dbname." CHARACTER SET utf8 COLLATE utf8_unicode_ci";
		if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully <br>";
		}else {
    //echo "Error creating database <br> ";
		}
}else {
	//echo "DBname selected <br>";
}

?>
