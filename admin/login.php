<?php 

	// DB credentials and session start
	require("connect.php");

    if(!empty($_POST)) {

    	// A poor solution to injection prevention
		$username = stripslashes($_POST['username']);
		$username = str_replace('"', "", $username);
		$username = str_replace("'", "", $username);

		$login_ok = false;

		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = $conn->query($sql);		

		// See if user exists
		if ($result->num_rows == 1) {

			while ($row = $result->fetch_assoc()) {
				// Encryption check
				$check_password = hash('sha256', $_POST['password'] . $row['salt']);		

				for($round = 0; $round < 65536; $round++) { 
					$check_password = hash('sha256', $check_password . $row['salt']); 
				} 
				 
				if($check_password === $row['password']) {
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
				} else { 
					// Invalid password
					header("Location: index.php"); 
					die("Redirecting to: index.php"); 
				}
			}

		} else {
			// User does not exist
			header("Location: index.php"); 
			die("Redirecting to: index.php"); 	
		}


	} else{
		// Form was not submitted
		header("Location: index.php"); 
		die("Redirecting to: index.php"); 	
	}
?> 