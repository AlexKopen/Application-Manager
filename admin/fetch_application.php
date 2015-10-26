<?php 
    require ('private.php'); 
?>

<?php 

$id = htmlspecialchars($_GET['id']);
$tripDateFormatted;
$applyDateFormatted;
$name;

$sql = "SELECT * FROM applications WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	//JSON as a JS variable
        echo '<script>';
        echo 'var jsonData = \'' . $row['json'] . '\';';
        echo '</script>';

        //Applicant information
		$tripDate = new DateTime($row['trip']);
    	$tripDateFormatted = $tripDate->format('l\, F jS\, Y');

		$applyDate = new DateTime($row['date']);
    	$applyDateFormatted = $applyDate->format('l\, F jS\, Y');

        $name = $row['name'];

        echo '<div id = "trip-info">';
        echo '<p>Name: ' . $name . '</p>';
        echo '<p>Trip Date: ' . $tripDateFormatted . '</p>';
        echo '<p>Submitted On: ' . $applyDateFormatted . '</p>';
        echo '</div>';
    }
} else {
    echo '0 results';
}

 ?>
 