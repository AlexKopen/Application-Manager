<?php 
	require ('private.php');
 ?>


<?php 

$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];

$date = $year . '-' . $month . '-' . $day;

$sql = "INSERT INTO trip_dates (date) VALUES ('$date')";

if ($conn->query($sql) === TRUE) {
	header("Location: home.php"); 
	die("Redirecting to: home.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
 