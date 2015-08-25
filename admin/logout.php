<?php 

	// DB credentials and session start
	require("connect.php");

	// Remove all session variables
	session_unset();

	// Destroy the session 
	session_destroy();
	 
	// Redirect
	header("Location: index.php"); 
	die("Redirecting to: index.php");

?>
