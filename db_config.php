<?php
$servername = "173.52.97.166";
$username = "admin";
$password = "Sparky2014$";
$dbname = "cars";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
