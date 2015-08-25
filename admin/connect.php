<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "application-manager";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

 ?>
 