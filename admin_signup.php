<?php
require 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['admin_username'];
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query to insert new admin
    $query = "INSERT INTO admins (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Admin account created successfully!";
        header("Location: admin_login.html"); // Redirect to login after successful signup
        exit();
    } else {
        echo "Error: Could not create account.";
    }
}
?>
