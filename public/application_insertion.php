<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application-manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "";
$date = "";
$trip = "";
$json = $_GET['json'];

echo $name . '<br>';
echo $date . '<br>';
echo $trip . '<br>';
echo $json . '<br>';

// $sql = "INSERT INTO applications (name, date, trip, json) VALUES ('$name', '$date', '$trip', '$json')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

 ?>
 