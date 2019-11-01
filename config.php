<?php
	$server="localhost";
	$username="id9391604_pt";
	$pass="Fikri12345";
	$dbname="id9391604_pt";

	//buat koneksi dan cek disini
	
	$conn = mysqli_connect($server, $username, $pass,$dbname);
	if (!$conn) {
		die("Connection Failed : ".mysql_connect_error());
	}
	
?>