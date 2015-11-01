<?php require ('connect.php'); ?>

<?php

// Generate all trip variables to be used on the application page and check for any invalid ids being passed by the user

$id = (int) $_GET['id'];

// Determine if the id from the URL is a valid integer to parse
if (!is_int($id)){
    header("Location: index.php");
    die("Redirecting to: index.php");   
}

// Select all trip date information that matches the trip id and is not full
$sql = "SELECT * FROM trip_dates WHERE id = '$id' AND is_full = 0";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    while($row = $result->fetch_assoc()) {
        
        $unformattedDate = $row['date'];
        $currentDate = date('Y-m-d');

        // Check to see if the trip has already occured
        if ($unformattedDate < $currentDate){
            header("Location: index.php");
            die("Redirecting to: index.php");   
        }

        $tripDate = new DateTime($row['date']);
        $tripDateFormatted = $tripDate->format('l\, F jS\, Y');        
    }

} else {
    // The trip either does not exist or is already full
    header("Location: index.php");
    die("Redirecting to: index.php");   
}

?>
