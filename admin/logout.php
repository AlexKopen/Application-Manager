<?php 

	// DB credentials and session start
	require("connect.php");
	 
	// Unset user from session
	unset($_SESSION['user']); 
	 
	// Redirect
	header("Location: login.php"); 
	die("Redirecting to: login.php");
?>
