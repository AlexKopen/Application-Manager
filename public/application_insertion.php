<?php 

require ('connect.php');

// Ensure all values have been passed via AJAX
if (!isset($_POST['name']) || !isset($_POST['trip']) || !isset($_POST['json'])){
	echo ('<h1>There was an error submitting your application.</h1>');
	die();
}

// Assign all post request values and the date
// TODO: Make sure these variables are valid
$name = $_POST['name'];
$date = date('Y-m-d');
$trip = $_POST['trip'];
$json = $_POST['json'];

$sql = "INSERT INTO applications (name, date, trip, json) VALUES ('$name', '$date', '$trip', '$json')";

if ($conn->query($sql) === TRUE) {

	// Send an email to notify of the application submission
	require ('email.php');
	sendMail($trip);

    echo ('success');
} else {
    echo ('<h1>There was an error submitting your application.</h1>');
}

// Unset the post variables
unset($name);
unset($trip);
unset($json);

$conn->close();

?>
