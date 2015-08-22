<?php 

	// DB credentials and session start
	require("connect.php");
	 
	// Unset user from session
	unset($_SESSION['user']); 
	 
	// Redirect
	header("Location: index.php"); 
	die("Redirecting to: index.php");

	$conn->close();
?>
