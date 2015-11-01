<?php 
	require ('private.php'); 
?>

<?php 
	require ('header.php'); 
?>

<div class="container">

	<div class="pure-g">
		<div class="pure-u-3-4">
			<div class = "mini-container">
				<h1>Open Trips</h1>
				<div id = "open-trips">
					<?php
						require ('fetch_all_dates.php');
					?>
				</div>
			</div>
		</div>

		<div class="pure-u-1-4">
			<div class = "mini-container">
				<h1>Add Trip</h1>
				<form id="add-trip" class="pure-form pure-form-stacked">
					<label>Trip Date</label>
					<input name="date" type="text" class="datepicker"/>
					<label>Trip Leader</label>
					<input name="leader"/>
					<button id="add-trip-submit" type="submit" class="pure-button">Add</button>
				</form>
			</div>
		</div>

	</div>

	<div class="pure-g">
		<div class="pure-u-1-1">
			<div class="mini-container">
				<h1>Applications</h1>
				<?php require ('fetch_all_applications.php'); ?>
			</div>
		</div>
	</div>
	

</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui.min.js"></script>
<script type="text/javascript" src="./js/home.functions.js"></script>

<?php 
	require ('footer.php'); 
?>
