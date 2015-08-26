<?php 
    require ('private.php'); 
?>

<?php

$date = $_GET['date'];

$sql = "DELETE FROM `trip_dates` WHERE `date` = '$date'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

 ?>
