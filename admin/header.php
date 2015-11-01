<!DOCTYPE html>
<html>
<head>
	<title>Application Manager</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" type="text/css" href="./css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="./css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="./css/jquery-ui-overrides.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<div id="header">
	<div class = "container">
		<div class="pure-g">
			<div class="pure-u-1-2" id = "left-header">
				<div id = "logo-container">
					<img src="./images/logo.png">
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
