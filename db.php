<?php
$servername = "localhost";
$username = "cheky";
$password = "cheky";
$dbname = "sophie_red_hotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
