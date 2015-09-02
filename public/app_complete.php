<!DOCTYPE html>
<html>
<head>
	<title>Reiser Relief Application</title>
</head>
<body>

<?php 

	if ($_GET['success'] == 'true'){
		echo ('<h1>Application submitted successfully</h1>');
		echo ($_GET['trip']);
	} else{
		echo ('<h1>Application submitted UNsuccessfully</h1>');
	}
	
 ?>

</body>
</html>