<?php 

require ('private.php'); 

$date = $_GET['date'];
$name = $_GET['name'];

$sql = "UPDATE `trip_dates` SET `leader` = '$name' WHERE `date` = '$date'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record altered successfully";
} else {
    echo "Error altering record: " . $conn->error;
}

$conn->close();

 ?>
