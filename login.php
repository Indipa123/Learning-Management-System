<?php
session_start();

// Database configuration
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "Ayomal2002";
$dbName = "education_center";

// Create a connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $uname = $conn->real_escape_string($_POST['uname']);
    $password = $conn->real_escape_string($_POST['password']);

    // Fetch user from database using uname and password
    $sql = "SELECT * FROM login WHERE uname = '$uname' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['uname'] = $uname;  // Start user session
        header("Location: index.php");  // Redirect to index.html
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
if ($password == $confirm_password) {
    // Insert into database only if passwords match
    $query = "INSERT INTO login (uname, password) VALUES ('$username', '$password')";
    $conn->query($query);
} else {
    echo "Passwords do not match.";
}

// Close the connection
$conn->close();
?>
