<?php 

$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['name'] . '<br>';
        echo $row['date'] . '<br>';
        echo '<a href = "display_application.php?id=' . $row['id'] . '">View Application</a>';
    }
} else {
    echo '0 results';
}
$conn->close();

 ?>