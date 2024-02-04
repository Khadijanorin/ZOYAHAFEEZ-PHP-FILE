<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name or IP address
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "medical_store"; // Change this to your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to utf8 (optional)
$conn->set_charset("utf8");

// Note: Replace "your_database_name" with the actual name of your database.

?>
