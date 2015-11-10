<?php 

require ('private.php'); 

$sql = "SELECT * FROM applications ORDER BY trip DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $currentTrip = '';
    $index = 0;

    // output data of each row
    while($row = $result->fetch_assoc()) {   

		$tripDate = new DateTime($row['trip']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

		$applyDate = new DateTime($row['date']);
    	$applyDateFormatted = $applyDate->format('l\, F jS\, Y');

        // First trip
        if ($index == 0){
            $index++;
            echo '<h3>Trip of ' . $tripDateFormatted . '</h3>';
            echo '<table class = "pure-table" id = "single-applicant"><thead>';
            echo '<tr><th>Name</th><th>Submitted</th><th>Access</th></tr></thead>';
            $currentTrip = $row['trip'];
        }

        if ($row['trip'] != $currentTrip){
            echo '</table>';
            echo '<table class = "pure-table" id = "single-applicant"><thead>';
            echo '<tr><th>Name</th><th>Submitted</th><th>Access</th></tr></thead>';
            $currentTrip = $row['trip'];
            echo '<h3>Trip of ' . $tripDateFormatted . '</h3>';
        }
        
        $currentTrip = $row['trip'];    

        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>' . '<td>' . $applyDateFormatted . '</td>';
        echo '<td>' . '<a href = "display_application.php?id=' . $row['id'] . '">View Application</a>' . '</td>';
        echo '</tr>';        

    }

    echo '</table>';

} else {
    echo '<p>No Applications Found</p>';
}

 ?>
