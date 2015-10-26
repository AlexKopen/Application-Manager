<?php 

require ('connect.php');

$name = $_GET['name'];
$date = date('Y-m-d');
$trip = $_GET['trip'];
$json = $_GET['json'];

// Check for a trip date being manipulated in the DOM
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_GET['trip'])) {
	header("Location: index.php"); 
	die("Redirecting to: index.php"); 	
}

$sql = "INSERT INTO applications (name, date, trip, json) VALUES ('$name', '$date', '$trip', '$json')";

if ($conn->query($sql) === TRUE) {

	// Send an email notifying of the recent application
	require ('email.php');
	sendMail($trip);

    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
 