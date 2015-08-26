<?php 
	require ('private.php'); 
?>

<?php 
	require ('header.php'); 
?>

<div class="container">

	<div class="pure-g">
		<div class="pure-u-1-2">
			<h1>Open Trips</h1>

			<?php

				require ('fetch_all_dates.php');

			?>
		</div>

		<div class="pure-u-1-2">
			<div class = "mini-container">
				<h1>Add Trip</h1>
				<div class="pure-g">
				<?php

					require ('generate_dates.php');

				?>
				</div>
			</div>			
		</div>

	</div>

	<h1>Applications</h1>

	<?php

		require ('fetch_all_applications.php');

	?>

</div>

<?php 
	require ('footer.php'); 
?>
