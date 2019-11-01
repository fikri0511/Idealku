<?php
	require "../connect.php";
	session_start();
	

	
	//Fetch categories from database
	$result = mysqli_query($conn, "SELECT * FROM laporan WHERE username='fikri'");
	
	//Initialize array variable
	$dbdata = array();

	//Fetch into associative array
	while ($row = mysqli_fetch_assoc($result))  {
		$dbdata[]=$row;
	}

	//Print array in JSON format
	echo json_encode($dbdata);
?>