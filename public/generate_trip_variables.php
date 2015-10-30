<?php require ('connect.php'); ?>

<?php 

$id = (int) $_GET['id'];

if (!is_int($id)){
    // Not a valid date
    header("Location: index.php");
    die("Redirecting to: index.php");   
}

$sql = "SELECT * FROM trip_dates WHERE id = '$id' AND is_full = 0";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    while($row = $result->fetch_assoc()) {
        
        $unformattedDate = $row['date'];
        $currentDate = date('Y-m-d');

        if ($unformattedDate < $currentDate){
            // Not a valid date
            header("Location: index.php");
            die("Redirecting to: index.php");   
        }

        $tripDate = new DateTime($row['date']);
        $tripDateFormatted = $tripDate->format('l\, F jS\, Y');        
    }

} else {
    // Not a valid date
    header("Location: index.php");
    die("Redirecting to: index.php");   
}

 ?>
