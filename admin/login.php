<?php 
	// Reference: http://forums.devshed.com/php-faqs-stickies-167/program-basic-secure-login-system-using-php-mysql-891201.html

	// DB credentials and session start
	require("connect.php");

	// Entered username
	$username = $_POST['username'];
	
	// Check for entered data
	if(!empty($_POST)) { 

		// Grab row
		$query = "SELECT * FROM users WHERE username = $username";

		// Prevent injection
		$stmt = $conn->prepare($query);
		$stmt->bind_param('s', $name);

		$stmt->execute();

		$result = $stmt->get_result();

		// See if user exists
		if ($result->num_rows > 0) {

			// Validate password with sha256 using salt
			while ($row = $result->fetch_assoc()) {
		    	$login_ok = false;			

				$check_password = hash('sha256', $_POST['password'] . $row['salt']);

				for($round = 0; $round < 65536; $round++) { 
					$check_password = hash('sha256', $check_password . $row['salt']); 
				} 
				 
				if($check_password === $row['password']) {
					$login_ok = true; 
				}
			}

		} else {
			header("Location: index.php");
			die("Redirecting to: index.php");
		}

		// Login success
		if($login_ok) { 
			// Remove sensitive data from $row for best practice
			unset($row['salt']); 
			unset($row['password']); 
			 
			// Session user data
			$_SESSION['user'] = $row; 
			 
			// Redirect the user to desired page 
			header("Location: private.php"); 
			die("Redirecting to: private.php"); 
		} 
		else { 
			// Failed login
			header("Location: index.php"); 
			die("Redirecting to: index.php"); 
		} 
	} else{
		// No username entered
		header("Location: index.php"); 
		die("Redirecting to: index.php"); 
	}
	 
?> 
