<?php 

	// DB credentials and session start
	require('connect.php');
	 
	// Check if user not logged in
	if(empty($_SESSION['user'])) { 
		// Redirect 
		header('Location: index.php'); 
		die('Redirecting to index.php'); 
	} 
?> 
