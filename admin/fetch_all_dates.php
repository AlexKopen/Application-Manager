<?php 

require ('private.php'); 

$sql = "SELECT * FROM trip_dates ORDER BY date ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo '<table class="pure-table"><thead>';
    echo '<tr><th>Trip</th><th>Leader</th><th>Status</th><th>Manage</th></tr></thead><tbody>';
    $oddRow = true;

    // output data of each row
    while($row = $result->fetch_assoc()) {   

		$tripDate = new DateTime($row['date']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');
        echo '<tr><td>' . $tripDateFormatted . '</td>';
        echo '<td>' . $row['leader'] . '</td>';

        echo '<td>';
        if ($row['is_full']){
            echo ('<p>Full</p>');
        } else {
            echo ('<p>Open</p>');
        }
        echo '</td>'; 

        echo '<td class="dialog-container"><button class="pure-button" for="dialog' . $row['date'] . '">Manage</button>';
        echo '<div title="Choose an action" class="dialog" id = "dialog' . $row['date'] . '">';
        echo '<p class = "admin-button delete-button" id = "' . $row['date'] . '">Delete</p>';

        if ($row['is_full']){
            echo '<p class = "admin-button open-button" id = "' . $row['date'] . '">Mark as Open</p>';
        } else {
            echo '<p class = "admin-button full-button" id = "' . $row['date'] . '">Mark as Full</p>';
        }

        echo '<p class = "admin-button trip-leader-button" id = "' . $row['date'] . '">Change Trip Leader</p>';       
        
        echo '</div></td>';              
        echo '</tr>';

    }

    echo '</tbody></table>';

} else {
    echo '<p>No Dates Found</p>';
}

 ?>
