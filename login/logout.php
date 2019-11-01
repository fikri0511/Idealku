<?php 
	//kode php disini


	
	session_start();
	session_unset();
	session_destroy();
	setcookie("login", "", time()-(3600000*24));
	header('Location: ../index.php');


	if ( empty($_SESSION['login']) ) {
		header('Location: ../index.php');
		
		die;
	}

?>