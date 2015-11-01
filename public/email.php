<?php

// Sends an email notifying adminstrators of an application submission for a specific date
function sendMail($tripDate){

	$recipients = array('alexkopen@gmail.com');
	$subject = 'Haiti Mission Trip Application';

    $tripDate = new DateTime($tripDate);
    $tripDateFormatted = $tripDate->format('l\, F jS\, Y');

	$message = 'An application was submitted for the trip of ' . $tripDateFormatted . '.  <a href = "reiserrelief.org/apply/admin">Please access the administrator portal to view the application.</a>  Also, Alex Kopen spent a lot of time programming this, so please consider buying the poor college student a drink next time you see him.';

	// Headers to prevent the email being flagged as spam, to allow for HTML in messages, and specifying the return email address
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
	$headers .= 'From: <alexkopen@reiserrelief.org>' . "\r\n";

	// Send an email to each recipient
	for ($i = 0; $i < count($recipients); $i++) { 
		mail($recipients[$i], $subject, $message, $headers);
	}

}

?>
