<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "ozama_kappa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to UTF-8
mysqli_set_charset($conn, "utf8");

?>
