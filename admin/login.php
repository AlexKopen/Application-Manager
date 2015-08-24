<?php 
	// Reference: http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html

	// DB credentials and session start
	require("connect.php");

	// Entered username
	$username = $_POST['username'];
	$login_ok = false;

   /* Create a prepared statement */
	if($stmt = $conn -> prepare("SELECT password FROM users WHERE username = ?")) {

		// Statement functionality
		$stmt -> bind_param("s", $username);
		$stmt -> execute();
		$stmt -> bind_result($result);
		$stmt -> fetch();

		$encrypted_password = $result;

		$stmt -> close();

		$check_password = hash('sha256', $_POST['password'] . $row['salt']);		

		for($round = 0; $round < 65536; $round++) { 
			$check_password = hash('sha256', $check_password . $row['salt']); 
		} 
		 
		if($check_password === $encrypted_password) {
			$login_ok = true; 
		}

		// Login success
		if($login_ok) { 
			// Remove sensitive data from $row for best practice
			unset($row['salt']); 
			unset($row['password']); 
			 
			// Session user data
			$_SESSION['user'] = $row; 
			 
			// Redirect the user to desired page 
			header("Location: home.php"); 
			die("Redirecting to: home.php"); 
		} 
		else { 
			// Failed login
			header("Location: index.php"); 
			die("Redirecting to: index.php"); 
		} 

	}
	 
?> 
