<?php 

$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<script>';
        //Look into quotations
        echo "var jsonData = '" . $row['json'] . "';";
        echo '</script>';
    }
} else {
    echo '0 results';
}
$conn->close();

 ?>