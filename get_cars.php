<?php
include "db_config.php";

$sql = "SELECT * FROM Cars";
$result = $conn->query($sql);

$cars = [];
while ($row = $result->fetch_assoc()) {
    $cars[] = $row;
}

echo json_encode($cars);

$conn->close();
?>
