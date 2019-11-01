<?php 
	//kode php disini
	require 'connect.php';
	session_start();
	session_unset();
	session_destroy();
	setcookie("login", "", time()-(3600*24));
	header('Location: landing.php');

	if ( empty($_SESSION['login']) ) {
		header('Location: index.php');
		die;
	}

?>