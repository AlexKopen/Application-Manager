<?php 

	// DB credentials and session start
	require("connect.php");

    if(!empty($_POST)) { 

		$username = $_POST['username'];
		$login_ok = false;

		if($stmt = $conn -> prepare("SELECT * FROM users WHERE username = ?")) {

			// Statement functionality
			$stmt -> bind_param("s", $username);
			$stmt -> execute();
			$result = $stmt->get_result();
			$stmt -> close();

			// See if user exists
			if ($result->num_rows > 0) {

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
						// Remove sensitive data from $result for best practice
						unset($row['salt']); 
						unset($row['password']); 
						 
						// Session user data
						$_SESSION['user'] = $result; 
						 
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
			// Invalid query
			header("Location: index.php"); 
			die("Redirecting to: index.php"); 		    
		}
		
	} else{
		// Form was not submitted
		header("Location: index.php"); 
		die("Redirecting to: index.php"); 	
	}
?> 
