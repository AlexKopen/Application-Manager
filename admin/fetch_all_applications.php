<?php 
    require ('private.php'); 
?>

<?php 

$sql = "SELECT * FROM applications ORDER BY trip DESC";
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

        if ($row['trip'] != $currentTrip){
            echo '</table>';
        }

        echo '<h3>Trip of ' . $tripDateFormatted . '</h3>';
        echo '<table class = "pure-table"><thead>';
        echo '<tr><th>Name</th><th>Trip</th><th>Submitted</th><th>Access</th></tr></thead>';
        $currentTrip = $row['trip'];
        $tripIndex++;

        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>' . '<td>' . $tripDateFormatted . '</td>' . '<td>' . $applyDateFormatted . '</td>';
        echo '<td>' . '<a href = "display_application.php?id=' . $row['id'] . '">View Application</a>' . '</td>';
        echo '</tr>';        

    }

    echo '</table>';

} else {
    echo '<p>No Applications Found</p>';
}

 ?>
