<?php

function sendMail($tripDate){

	$recipients = array('alexkopen@gmail.com');
	$subject = 'Haiti Mission Trip Application';

    $tripDate = new DateTime($tripDate);
    $tripDateFormatted = $tripDate->format('l\, F jS\, Y');

	$message = 'An application has just been submitted for the trip of ' . $tripDateFormatted . '.  Please access the admin portal to view the application.';

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
	$headers .= 'From: <hosting@alexkopen.com>' . "\r\n";

	for ($i = 0; $i < count($recipients); $i++) { 
		mail($recipients[$i], $subject, $message, $headers);
	}

}

?>
