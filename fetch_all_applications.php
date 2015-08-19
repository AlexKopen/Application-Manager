<?php 

$sql = "SELECT * FROM `applications` ORDER BY `trip`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$currentTrip = '';

    // output data of each row
    while($row = $result->fetch_assoc()) {

		$tripDate = new DateTime($row['trip']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

		$applyDate = new DateTime($row['date']);
    	$applyDateFormatted = $applyDate->format('l\, F jS\, Y');    	

    	if ($row['trip'] != $currentTrip){
    		echo '<h1>Trip of: ' . $tripDateFormatted . '</h1>';
    		$currentTrip = $row['trip'];
    	}

    	echo '<div class = "single-app">';
        echo '<p>Name: ' . $row['name'] . '</p>';
        echo '<p>Trip Date: ' . $tripDateFormatted . '</p>';
        echo '<p>Submitted On: ' . $applyDateFormatted . '</p>';
        echo '<p>' . '<a href = "display_application.php?id=' . $row['id'] . '">View Application</a>' . '</p>';
        echo '</div>';
    }
} else {
    echo '0 results';
}
$conn->close();

 ?>
