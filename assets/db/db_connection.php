<?php

$servername = ""; // SERVER NAME
$username = ""; // SERVER USERNAME
$password = ""; // SERVER PASSWORD
$dbname = ""; // DATABASE NAME

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$smtpHost = ''; // SMTP HOST
$smtpAuth = true;
$smtpUsername = ''; // SMTP USERNAME
$smtpPassword = ''; // SMTP PASSWORD
$smtpSecure = 'tls';
$smtpPort = 25; // SMTP PORT
?>
