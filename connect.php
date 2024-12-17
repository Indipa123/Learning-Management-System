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

// Get form data with a fallback to avoid undefined index warnings
$studentname = isset($_POST['studentname']) ? $_POST['studentname'] : '';
$studentaddress = isset($_POST['studentaddress']) ? $_POST['studentaddress'] : '';
$studentage = isset($_POST['studentage']) ? $_POST['studentage'] : 0;
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$dob = isset($_POST['dob']) ? $_POST['dob'] : '';
$guardianname = isset($_POST['guardianname']) ? $_POST['guardianname'] : '';
$guardiantel = isset($_POST['guardiantel']) ? $_POST['guardiantel'] : '';
$emergencytel = isset($_POST['emergencytel']) ? $_POST['emergencytel'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$grade = isset($_POST['grade']) ? $_POST['grade'] : '';
$course = isset($_POST['course']) ? $_POST['course'] : '';
$paymentMethod = isset($_POST['paymentMethod']) ? $_POST['paymentMethod'] : '';



// Debugging output
echo "Student Name: $studentname<br>";
echo "Student Age: $studentage<br>";
echo "Gender: $gender<br>";
echo "Date of Birth: $dob<br>";
echo "Student Address: $studentaddress<br>";
echo "Guardian's Name: $guardianname<br>";
echo "Guardian's Contact Number: $guardiantel<br>";
echo "Emergency Contact Number: $emergencytel<br>";
echo "Email: $email<br>";
echo "Grade: $grade<br>";
echo "Course: $course<br>";
echo "Payment Method: $paymentMethod<br>";

// SQL query to insert data
$sql = "INSERT INTO registrations (studentname, studentage, gender, dob, studentaddress, guardianname, guardiantel, emergencytel, email, grade, course, paymentMethod) 
        VALUES ('$studentname', '$studentage', '$gender', '$dob', '$studentaddress', '$guardianname', '$guardiantel', '$emergencytel', '$email', '$grade', '$course', '$paymentMethod')";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
