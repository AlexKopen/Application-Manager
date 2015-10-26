<?php

	// DB credentials and session start
	require('connect.php');

	if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
		// Redirect 
		header('Location: home.php'); 
		die('Redirecting to home.php'); 

	}

 ?>

<?php 
	require ('header.php');
 ?>

<div id = "login-container">

	<h1>Application Manager</h1>

	<form action="login.php" method="post">
		<input name="username" placeholder="username" value="reiserapp"> <br>
		<input name="password" type = "password" placeholder = "password" value = "crapidsangel9"> <br>
		<input type="submit" value="Login">
	</form>
</div>

<?php 
	require ('footer.php');
 ?>
