<?php 
    require ('private.php'); 
?>

<?php 

$sql = "SELECT * FROM trip_dates ORDER BY date ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo '<table class = "dates">';
    echo '<tr class = "first-tr"><td>Trip</td><td>Manage</td></tr>';
    $oddRow = true;

    // output data of each row
    while($row = $result->fetch_assoc()) {   

		$tripDate = new DateTime($row['date']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');
        
        if ($oddRow){
            echo '<tr class = "odd-tr">';
            $oddRow = false;

        } else {
            echo '<tr>';
            $oddRow = true;
       
        }

        echo '<td>';
        echo $tripDateFormatted;
        echo '</td>';
        echo '<td>';
        echo '<div class = "admin-button delete-button" id = "' . $row['date'] . '">Delete</div>';

        if ($row['is_full']){
            echo '<div class = "admin-button open-button" id = "' . $row['date'] . '">Mark as Open</div>';
        } else {
            echo '<div class = "admin-button full-button" id = "' . $row['date'] . '">Mark as Full</div>';
        }        
        
        echo '</td>';              
        echo '</tr>';

    }

    echo '</table>';

} else {
    echo '<p>No Dates Found</p>';
}

 ?>
