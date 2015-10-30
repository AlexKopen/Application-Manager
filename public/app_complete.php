<?php 
	require ('header.php');
 ?>
<body>

<div class="container" id = "app-complete">
	<?php

		if (!isset($_GET['success']) && !isset($_GET['trip'])){
			echo ('<h1>There was an error submitting your application.</h1>');
		}

		if ($_GET['success'] == 'true'){

			$tripDate = new DateTime($_GET['trip']);
			$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

			echo ('<h1>Application submitted successfully</h1>');
			echo ('<p>Your application for the trip of ') . $tripDateFormatted . ' has been received.  A team member will be in contact with you soon.</p>';
			echo ('<div class="pure-g" id = "links"><div class="pure-u-1-2"><p><a href="http://reiserrelief.org/">Reiser Relief Homepage</a></p></div><div class="pure-u-1-2"><p><a href="http://reiserrelief.org/apply">Mission Trips</a></p></div></div>');
		} else{
			echo ('<h1>There was an error submitting your application.</h1>');
		}
	 ?>

 </div>

</body>
</html>
