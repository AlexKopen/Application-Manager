<?php 
    require ('connect.php'); 
?>

 <?php 

$sql = "SELECT * FROM trip_dates ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo '<table class = "dates pure-table pure-table-bordered"><thead><tr><th>Trip Date</th><th></th></tr></thead><tbody>';
    $oddRow = true;

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
        echo ('<div class = "trip"><p><a class="apply-link" href = "application.php?trip=' . $row['date'] . '">Apply</a></p></div>');
        echo '</td>';              
        echo '</tr>';

    }

    echo '</tbody></table>';

} else {
    echo '<p>There are currently no open mission trips.</p>';
}

 ?>
