<?php

require ('private.php');

list($month, $date, $year) = explode('/', $_POST['date']);
$date = $year . '-' . $month . '-' . $date;

$leader = $_POST['leader'];

$sql = "INSERT INTO trip_dates (date, leader) VALUES ('$date', '$leader')";

if ($conn->query($sql) === TRUE) {
	echo "added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
 