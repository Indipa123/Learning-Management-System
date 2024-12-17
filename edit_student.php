<?php
require 'db.php';

if (!isset($_GET['id'])) { header("Location: admin_dashboard.php"); exit(); }
$id = $_GET['id'];
$query = "SELECT * FROM registrations WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

if (!$student) { echo "Student not found!"; exit(); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = "UPDATE registrations SET studentname=?, studentage=?, gender=?, dob=?, studentaddress=?, guardianname=?, guardiantel=?, emergencytel=?, email=?, grade=?, course=?, paymentMethod=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sissssssssssi", $_POST['studentname'], $_POST['studentage'], $_POST['gender'], $_POST['dob'], $_POST['studentaddress'], $_POST['guardianname'], $_POST['guardiantel'], $_POST['emergencytel'], $_POST['email'], $_POST['grade'], $_POST['course'], $_POST['paymentMethod'], $id);
    $stmt->execute() ? header("Location: admin_dashboard.php") : print("Error updating record.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; background-color: #f0f2f5; }
        .container { width: 100%; max-width: 350px; padding: 15px; background: #fff; border-radius: 6px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); }
        h2 { text-align: center; font-size: 18px; margin-bottom: 10px; color: #333; }
        label { font-size: 12px; color: #555; display: block; margin-top: 8px; }
        input { width: 100%; padding: 6px; margin-top: 4px; border: 1px solid #ddd; border-radius: 4px; font-size: 12px; }
        button { width: 100%; padding: 8px; background: #28a745; color: white; border: none; border-radius: 4px; font-size: 14px; margin-top: 10px; cursor: pointer; }
        a { text-align: center; display: block; margin-top: 8px; font-size: 12px; color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Student</h2>
        <form method="POST">
            <label>Student Name</label> <input type="text" name="studentname" value="<?php echo htmlspecialchars($student['studentname']); ?>" required>
            <label>Age</label> <input type="number" name="studentage" value="<?php echo htmlspecialchars($student['studentage']); ?>" required>
            <label>Gender</label> <input type="text" name="gender" value="<?php echo htmlspecialchars($student['gender']); ?>" required>
            <label>Date of Birth</label> <input type="date" name="dob" value="<?php echo htmlspecialchars($student['dob']); ?>" required>
            <label>Address</label> <input type="text" name="studentaddress" value="<?php echo htmlspecialchars($student['studentaddress']); ?>" required>
            <label>Guardian Name</label> <input type="text" name="guardianname" value="<?php echo htmlspecialchars($student['guardianname']); ?>" required>
            <label>Guardian Tel</label> <input type="text" name="guardiantel" value="<?php echo htmlspecialchars($student['guardiantel']); ?>" required>
            <label>Emergency Tel</label> <input type="text" name="emergencytel" value="<?php echo htmlspecialchars($student['emergencytel']); ?>" required>
            <label>Email</label> <input type="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required>
            <label>Grade</label> <input type="text" name="grade" value="<?php echo htmlspecialchars($student['grade']); ?>" required>
            <label>Course</label> <input type="text" name="course" value="<?php echo htmlspecialchars($student['course']); ?>" required>
            <label>Payment Method</label> <input type="text" name="paymentMethod" value="<?php echo htmlspecialchars($student['paymentMethod']); ?>" required>
            <button type="submit">Update</button>
        </form>
        <a href="admin_dashboard.php">Back to Dashboard</a>
    </div>
</body>
</html>
