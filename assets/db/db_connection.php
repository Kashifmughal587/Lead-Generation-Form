<?php
// Replace with your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lead_generation_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
