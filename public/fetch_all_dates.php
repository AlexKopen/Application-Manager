<?php require ('connect.php'); ?>

<?php

// Display all the open trips that have not yet occured

// Slect all trip date information, dispalying all valid trips in ascending date order
$sql = "SELECT * FROM trip_dates WHERE date >= CURDATE() ORDER BY date ASC";

$result = $conn->query($sql);

// Output information via a table
if ($result->num_rows > 0) {

    echo ('<table class = "dates pure-table pure-table-bordered"><thead><tr>)<th>Trip Date</th><th>Trip Leader</th><th>Status</th></tr></thead><tbody>');

    while($row = $result->fetch_assoc()) {

        $tripDate = new DateTime($row['date']);
        $tripDateFormatted = $tripDate->format('l\, F jS\, Y');        

        echo ('<tr>');
        echo ('<td>');
        echo ($tripDateFormatted);
        echo ('</td>');
        echo ('<td>');
        echo ($row['leader']);
        echo ('</td>');
        echo ('<td>');
        echo ('<div class = "trip"><p>');

        // Provide a link to apply if the trip is not full
        if ($row['is_full']){
            echo ('<span class = "full">Trip is full</span>');
        } else {
            echo ('<a class="apply-link" href = "application.php?id=' . $row['id'] . '">Apply</a>');
        }

        echo ('</p></div>');
        echo ('</td>');
        echo ('</tr>');
    }

    echo ('</tbody></table>');

} else {
    echo ('<p id = "no-trips">There are currently no open mission trips.</p>');
}

?>
