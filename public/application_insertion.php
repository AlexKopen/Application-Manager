<?php 

require ('connect.php');

if (!isset($_POST['name']) || !isset($_POST['trip']) || !isset($_POST['json'])){
	echo ('<h1>There was an error submitting your application.</h1>');
	die();
}

$name = $_POST['name'];
$date = date('Y-m-d');
$trip = $_POST['trip'];
$json = $_POST['json'];

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
