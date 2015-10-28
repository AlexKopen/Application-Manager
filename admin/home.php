<?php 
	require ('private.php'); 
?>

<?php 
	require ('header.php'); 
?>

<div class="container">

	<div class="pure-g">
		<div class="pure-u-1-2">
			<div class = "mini-container">
				<h1>Open Trips</h1>
				<div id = "open-trips">
					<?php
						require ('fetch_all_dates.php');
					?>
				</div>
			</div>
		</div>

		<div class="pure-u-1-2">
			<div class = "mini-container">
				<h1>Add Trip</h1>
				<form id="add-trip">
					<?php
						require ('generate_dates.php');
					?>
					<h2>Trip Leader</h2>
					<input name = "leader" />
					<input id = "add-trip-submit" type = "submit" value="Add">
				</form>
			</div>			
		</div>

	</div>

	<h1>Applications</h1>

	<?php

		require ('fetch_all_applications.php');

	?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="home.functions.js"></script>

<?php 
	require ('footer.php'); 
?>
