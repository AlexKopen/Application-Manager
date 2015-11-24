<?php 

require ('private.php'); 

$id = $_GET['id'];

$sql = "UPDATE `applications` SET `trash` = '1' WHERE `id` = $id";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record altered successfully";
} else {
    echo "Error altering record: " . $conn->error;
}

$conn->close();

 ?>
