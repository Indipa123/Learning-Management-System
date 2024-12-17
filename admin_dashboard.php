<?php
session_start();
require 'db.php';

// Ensure only logged-in admins can access
if (!isset($_SESSION['admin_username'])) {
    header("Location: admin_login.php");
    exit();
}

// Handle delete action if triggered
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $delete_query = "DELETE FROM registrations WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    // Refresh the page after deletion
    header("Location: admin_dashboard.php");
    exit();
}

// Fetch all students from the database
$query = "SELECT * FROM registrations";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Student Management</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        form { display: inline; }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h1>
    <h2>Admin Dashboard - Manage registrations</h2>
    
    <!-- Student Management Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Guardian Name</th>
                <th>Guardian Tel</th>
                <th>Emergency Tel</th>
                <th>Email</th>
                <th>Grade</th>
                <th>Course</th>
                <th>Payment Method</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($student = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo htmlspecialchars($student['studentname']); ?></td>
                    <td><?php echo htmlspecialchars($student['studentage']); ?></td>
                    <td><?php echo htmlspecialchars($student['gender']); ?></td>
                    <td><?php echo htmlspecialchars($student['dob']); ?></td>
                    <td><?php echo htmlspecialchars($student['studentaddress']); ?></td>
                    <td><?php echo htmlspecialchars($student['guardianname']); ?></td>
                    <td><?php echo htmlspecialchars($student['guardiantel']); ?></td>
                    <td><?php echo htmlspecialchars($student['emergencytel']); ?></td>
                    <td><?php echo htmlspecialchars($student['email']); ?></td>
                    <td><?php echo htmlspecialchars($student['grade']); ?></td>
                    <td><?php echo htmlspecialchars($student['course']); ?></td>
                    <td><?php echo htmlspecialchars($student['paymentMethod']); ?></td>
                    <td>
                        <a href="edit_student.php?id=<?php echo $student['id']; ?>"><button type="submit">Edit</button></a>
                        <!-- Inline Delete Form -->
                        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            <input type="hidden" name="delete_id" value="<?php echo $student['id']; ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Link to add a new student -->
    <a href="registration.html">Add New Student</a> | <a href="logout.php">Logout</a>
</body>
</html>
