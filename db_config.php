<?php
$servername = "localhost";
$username = "admin";
$password = "Sparky2014$";
$dbname = "cars";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
