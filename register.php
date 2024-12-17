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

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$user_password = isset($_POST['password']) ? $_POST['password'] : '';
$confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

echo "username: $uname<br>";
echo "password: $user_password<br>";
echo "Confirm password: $confirm_password<br>";

// Check if passwords match before inserting
if ($user_password === $confirm_password) {
    // Prepare SQL statement without confirm_password, as it's usually not stored in the database
    $sql = "INSERT INTO login (uname, password) VALUES ('$uname', '$user_password')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Passwords do not match.";
}

// Close the connection
$conn->close();
?>
