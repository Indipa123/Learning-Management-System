<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NJAYANI EDUCATION</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic styling for the navigation bar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #800080;
            padding: 20px 30px;
        }

        /* Styling for the navigation links */
        .navbar a {
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            padding: 10px 15px;
        }

        /* Hover effect for navigation links */
        .navbar a:hover {
            background-color: #6a0078;
        }

        /* Container for navigation links and Previous/Next buttons */
        .nav-links {
            display: flex;
            gap: 20px;
        }

        /* Container specifically for the buttons */
        .prev-next-buttons {
            display: flex;
            gap: 10px;
        }

        /* Styling for body background */
        body {
            background-image: url('https://st4.depositphotos.com/3367263/19970/i/450/depositphotos_199707812-stock-photo-digital-composite-books-graduation-hat.jpg');
            background-size: 1500px 600px;
            background-attachment: fixed;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling for the container */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
        }

        /* Hero section */
        .hero {
            background-image: url('your-image-path.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .content h2 {
            font-size: 2rem;
            color: #004d00;
        }

        .content p {
            font-size: 20px;
            line-height: 1.8;
            color: black;
            font-family: Arial, sans-serif;
        }

        .sections {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
            text-align: left;
        }

        .sections .section {
            width: 45%;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .sections .section h3 {
            font-size: 1.8rem;
            color: #004d00;
            text-align: center;
        }

        .sections .section p {
            font-size: 20px;
            line-height: 1.8;
        }

        /* Styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 40px 0;
        }

        th, td {
            width: 248px;
            height: 200px;
            text-align: center;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.5);
        }

        td:nth-child(even), th:nth-child(even) {
            background-color: #D6EEEE;
        }

        img {
            max-width: 100%;
            height: 100%;
        }

        .description {
            color: #8c332f;
            font-size: 25px;
            text-align: center;
            font-weight: bold;
        }

        p1 {
            color: #4a235a;
            text-align: center;
            font-family: Copperplate;
            font-size: 23px;
        }

        h2 {
            color: white;
            text-align: center;
            font-family: Copperplate;
            font-size: 45px;
        }
    </style>
</head>
<body>

<div class="navbar">
        <!-- Navigation links on the left -->
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About us</a>
            <a href="details.php">Course Details</a>

            <!-- Only show Course Registration if the user is logged in -->
            <?php if (isset($_SESSION['uname'])): ?>
                <a href="registration.html">Course Registration</a>
            <?php endif; ?>
            
            <a href="#" onclick="history.back()">Back</a>
            <a href="#" onclick="history.forward()">Forward</a>
           
            
        </div>

        <div class="prev-next-buttons">
        <?php if (isset($_SESSION['uname'])): ?>
            <!-- Show Logout if the user is logged in -->
            <a href="logout.php"></a>
        <?php else: ?>
            <!-- Show Login if the user is not logged in -->
            <a href="log.html"></a>
        <?php endif; ?>
        </div>
    </div>


    <div class="container">
        <div class="content">
            <h2>Your Destination for Quality Education</h2>
            <p>At Jayani Education Center, we are committed to providing the best tuition and educational programs with expert guidance. Whether you're preparing for exams or looking to improve your knowledge, our center is the ideal place to fulfill your educational aspirations. We believe in a future where education is accessible and enriching for all.</p>
        </div>

        <div class="sections">
            <div class="section">
                <h3>Our Mission</h3>
                <p>"Inspiring Lifelong Learning and Unleashing Potential"</p>
            </div>
            <div class="section">
                <h3>Our Vision</h3>
                <p>Our vision is to become a leading educational institution recognized for its excellence in teaching and learning. We aim to continuously evolve and adapt to the changing educational landscape, ensuring that our students are always equipped with the skills and knowledge they need to thrive in their future endeavors.</p>
            </div>
        </div>

        <h2>Professional Profiles of Teaching Staff</h2>

        <table>
            <tr>
                <td><img src="https://varthana.com/school/wp-content/uploads/2022/12/B103.jpg" alt="Image 1"></td>
                <td><img src="https://oehawkseye.org/wp-content/uploads/2023/10/tecahing-styles.jpg" alt="Image 2"></td>
                <td><img src="https://img.freepik.com/premium-photo/diverse-teachers-classroom-setting_719646-45010.jpg" alt="Image 3"></td>
                <td><img src="https://img.freepik.com/premium-photo/vector-illustration-teacher-teaching-lesson-class-elementary-school_979495-69726.jpg" alt="Image 4"></td>
                <td><img src="https://img.freepik.com/premium-photo/diverse-teachers-classroom-setting_719646-44999.jpg" alt="Image 5"></td>
            </tr>
            <tr>
                <td><p class="description">Sinhala Language:</p><p1><br>Mr.Nalin Rajapaksha<br>BSc (Hons) in Sinhala Language, UOK.</br></p1></td>
                <td><p class="description">Geography science:</p><p1><br>Miss.Cula Nawarathne<br>BSc (Hons) in Geography science, UOC.</br></p1></td>
                <td><p class="description">Mathematics:</p><p1><br>Mr.Himasara Naveen<br>BSc (Hons) in Physical science, UOC.</br></p1></td>
                <td><p class="description">Science:</p><p1><br>Miss.Cula Nawarathne<br>BSc (Hons) in Chemistry, UOR.</br></p1></td>
                <td><p class="description">Commerce:</p><p1><br>Mr.Dammika Nishantha<br>BSc (Hons) in Accounting, UOR.</br></p1></td>
            </tr>
            <tr>
                <td><img src="https://www.thenews.com.pk/assets/uploads/magazine/2022-10-04/996183_011501_updates.jpg" alt="Image 6"></td>
                <td><img src="https://img.freepik.com/premium-photo/world-teachers-day-background-design_762785-32064.jpg" alt="Image 7"></td>
                <td><img src="https://img.freepik.com/free-vector/happy-teachers-day-banner_23-2148616180.jpg" alt="Image 8"></td>
                <td><img src="https://www.taschool.org/wp-content/uploads/2021/11/teacher-scaled.jpg" alt="Image 9"></td>
                <td><img src="https://www.york.cuny.edu/faculty/teaching/images/Fine_Teaching.gif" alt="Image 10"></td>
            </tr>
            <tr>
                <td><p class="description">English Language:</p><p1><br>Miss.Dilani Silva<br>BSc (Hons) in English Language, UOK.</br></p1></td>
                <td><p class="description">Science:</p><p1><br>Miss.Pabodha Upeksha<br>BSc (Hons) in Chemistry, UOR.</br></p1></td>
                <td><p class="description">Commerce:</p><p1><br>Mr.Wethmasara Naveen<br>BSc (Hons) in Accounting, UOK.</br></p1></td>
                <td><p class="description">Science:</p><p1><br>Mr.Dulan Madushanka<br>BSc (Hons) in Chemistry, UOR.</br></p1></td>
                <td><p class="description">Sinhala Language:</p><p1><br>Miss.Jayani Naveen<br>BSc (Hons) in Sinhala Language, UOC.</br></p1></td>
            </tr>
        </table>
    </div>
</body>
</html>
