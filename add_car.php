<?php
include "db_config.php";

$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$color = $_POST['color'];
$plateNumber = $_POST['plateNumber'];
$availability = isset($_POST['availability']) ? 1 : 0;

$sql = "INSERT INTO Cars (Make, Model, Year, Color, PlateNumber, Availability) VALUES ('$make', '$model', $year, '$color', '$plateNumber', $availability)";

if ($conn->query($sql) === TRUE) {
    echo "New car added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
