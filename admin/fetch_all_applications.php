<?php 
    require ('private.php'); 
?>

<?php 

$sql = "SELECT * FROM applications ORDER BY trip DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $tripIndex = 0;
    $currentTrip = '';
    $oddRow = true;

    // output data of each row
    while($row = $result->fetch_assoc()) {   

		$tripDate = new DateTime($row['trip']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

		$applyDate = new DateTime($row['date']);
    	$applyDateFormatted = $applyDate->format('l\, F jS\, Y');

        // First trip in loop
        if ($tripIndex == 0){
            echo '<h2>Trip of ' . $tripDateFormatted . '</h2>';
            echo '<table class = "applications">';
            echo '<tr class = "first-tr"><td>Name</td><td>Trip</td><td>Submitted</td><td>Access</td></tr>';
            $currentTrip = $row['trip'];
            $tripIndex++;
        }      	

    	if ($row['trip'] != $currentTrip){
            echo '</table>';
            echo '<h2>Trip of ' . $tripDateFormatted . '</h2>';
            echo '<table class = "applications">';
            $oddRow = true;
            echo '<tr class = "first-tr"><td>Name</td><td>Trip</td><td>Submitted</td><td>Access</td></tr>';
    		$currentTrip = $row['trip'];
    	}

        if ($oddRow){
        	echo '<tr class = "odd-tr">';
            $oddRow = false;

        }else {
            echo '<tr>';
            $oddRow = true;
       
        }

        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $tripDateFormatted . '</td>';
        echo '<td>' . $applyDateFormatted . '</td>';
        echo '<td>' . '<a href = "display_application.php?id=' . $row['id'] . '">View Application</a>' . '</td>';
        echo '</tr>';        

    }

    echo '</table>';

} else {
    echo '<p>No Applications Found</p>';
}

 ?>
