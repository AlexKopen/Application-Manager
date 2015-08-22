<?php 
	require ('private.php'); 
?>

<?php 
	require ('header.php'); 
?>


<div class="single-app">
	<?php

	require ('fetch_application.php');

	?>

	<div id="form-display">
		<?php require('form_template.php'); ?>
	</div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="app.display.js"></script>

</body>
</html>
