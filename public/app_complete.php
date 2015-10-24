<?php 
	require ('header.php');
 ?>
<body>

<div class="container">
	<?php
		if ($_GET['success'] == 'true'){

			$tripDate = new DateTime($_GET['trip']);
			$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

			echo ('<h1>Application submitted successfully</h1>');
			echo ('<p>Your application for the trip of ') . $tripDateFormatted . ' has been received.  A team member will be in contact with you soon.</p>';
		} else{
			echo ('<h1>Application submitted UNsuccessfully</h1>');
		}		
	 ?>

 </div>

</body>
</html>