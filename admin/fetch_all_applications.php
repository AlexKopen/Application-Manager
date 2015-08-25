<?php 
    require ('private.php'); 
?>

<?php 

$sql = "SELECT * FROM applications ORDER BY trip";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $tripIndex = 0;
    $currentTrip = '';

    // output data of each row
    while($row = $result->fetch_assoc()) {   

		$tripDate = new DateTime($row['trip']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

		$applyDate = new DateTime($row['date']);
    	$applyDateFormatted = $applyDate->format('l\, F jS\, Y');

        // First trip in loop
        if ($tripIndex == 0){
            echo '<div class = "single-trip">';
            echo '<h1>Trip of ' . $tripDateFormatted . '</h1>';
            $currentTrip = $row['trip'];
            $tripIndex++;
        }      	

    	if ($row['trip'] != $currentTrip){
            echo '</div>';
            echo '<div class = "single-trip">';
    		echo '<h1>Trip of ' . $tripDateFormatted . '</h1>';
    		$currentTrip = $row['trip'];
    	}

    	echo '<div class = "single-app">';
        echo '<p>Name: ' . $row['name'] . '</p>';
        echo '<p>Trip Date: ' . $tripDateFormatted . '</p>';
        echo '<p>Submitted On: ' . $applyDateFormatted . '</p>';
        echo '<p>' . '<a href = "display_application.php?id=' . $row['id'] . '">View Application</a>' . '</p>';
        echo '</div>';

    }

    echo '</div>';

} else {
    echo '0 results';
}

 ?>
