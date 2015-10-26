<?php 
	require ('private.php'); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Application Manager</title>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" type="text/css" href="appstyle.css">
</head>
<body>

<div id="header">
	<div class = "container">
		<div class="pure-g">
			<div class="pure-u-1-2" id = "left-header">
				<div id = "logo-container">
					<img src="logo.png">
				</div>
			</div>

			<div class="pure-u-1-2" id = "right-header">
			<?php  
				if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
					echo '<p><a href = "logout.php">Logout</a></p>';
				}
			?>	
			</div>
		</div>
	</div>
</div>

<?php 
	require ('fetch_application.php'); 
 ?>

<?php 
	require ('form_template.php');
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="app.display.js"></script>

<?php 
	require ('footer.php'); 
?>
