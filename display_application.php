<!DOCTYPE html>
<html>
<head>
	<title>Application Manager</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<h1>Single Application</h1>


<div class="single-app">
	<?php

	require 'connect.php';
	require 'fetch_application.php';

	?>

	<div id="form-display">
		<?php require('form_template.php'); ?>
	</div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="app.display.js"></script>

</body>
</html>