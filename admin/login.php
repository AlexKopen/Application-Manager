<?php 

// DB credentials and session start
require("connect.php");

if(!empty($_POST)) {

	$query = 'SELECT * FROM users WHERE username = ?';
	$stmt = $conn->prepare($query);
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->bind_result($Username);

	while ($stmt->fetch()){
		// // Encryption check
		// $check_password = hash('sha256', $_POST['password'] . $row['salt']);		

		// for($round = 0; $round < 65536; $round++) { 
		// 	$check_password = hash('sha256', $check_password . $row['salt']); 
		// } 
		 
		// if($check_password === $row['password']) {
		// 	$login_ok = true; 
		// }

		// // Login success
		// if($login_ok) { 
		// 	// Remove sensitive data from $row for best practice
		// 	unset($row['salt']); 
		// 	unset($row['password']); 
			 
		// 	// Session user data
		// 	$_SESSION['user'] = $row; 
			 
		// 	// Redirect the user to desired page 
		// 	header("Location: home.php"); 
		// 	die("Redirecting to: home.php"); 
		// } else {
		// 	// Invalid password
		// 	header("Location: index.php"); 
		// 	die("Redirecting to: index.php"); 
		// }   
		echo $Username;
	}

} else {
	// Form was not submitted
	header("Location: index.php"); 
	die("Redirecting to: index.php"); 	
}

?>
