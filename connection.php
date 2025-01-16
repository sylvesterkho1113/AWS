<?php
// Connection to the database
$servername = "localhost";
$username = "admin";
$password = "admin123";
$dbname = "item_manager";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
