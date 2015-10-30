<?php 

require ('connect.php');

$name = $_GET['name'];
$date = date('Y-m-d');
$trip = $_GET['trip'];
$json = $_GET['json'];

if (!isset($name) && !isset($date) && !isset($trip) && !isset($json)){
	echo ('<h1>There was an error submitting your application.</h1>');
}

$sql = "INSERT INTO applications (name, date, trip, json) VALUES ('$name', '$date', '$trip', '$json')";

if ($conn->query($sql) === TRUE) {

	// Send an email notifying of the recent application
	require ('email.php');
	sendMail($trip);

    echo "success";
} else {
    echo ('<h1>There was an error submitting your application.</h1>');
}

$conn->close();

 ?>
