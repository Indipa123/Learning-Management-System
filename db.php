<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "Ayomal2002";
$dbname = "education_center";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
