<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application-manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_GET['name'];
$date = date('Y-m-d');
$trip = $_GET['trip'];
$json = $_GET['json'];


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
 