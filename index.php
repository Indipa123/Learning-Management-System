<?php
session_start();
?>
<!DOCTYPE html>

  
   <!--Navigation Bar-->


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
            justify-content: space-between; /* Space between elements */
            align-items: center; 
            background-color: #800080; 
            padding: 20px 30px; 
			
        }

        /* Styling for the navigation links */
        .navbar a {
            color: white; 
            text-decoration: none; 
            padding: 10px 15px; 
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s;
        }

        /* Hover effect for navigation links */
        .navbar a:hover {
            background-color: #6a0078; /* Darker purple on hover */
        }

        /* Container for navigation links and Previous/Next buttons */
        .nav-links {
            display: flex;
            gap: 20px; /* Space between links */
        }

        /* Container specifically for the buttons */
        .back-foward-buttons {
            display: flex;
            gap: 10px; 
    </style>

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
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <!-- Show Login if the user is not logged in -->
            <a href="log.html">Login</a>
        <?php endif; ?>
        <a href="admin_login.html">Admin</a> <!-- Direct link to Admin Login -->
        </div>
    </div>

</body>
</html>

<body class="home-page"> 

<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Default styles for the body */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color:#bd13bf ;
            text-align: center;
        }
		p {
            color: #4a235a;
			text-align: center;
            font-family: Copperplate;
			font-size: 25px;
        }


        /* Styles for the Home page only */
        body.home-page {
            background-image: url('https://haycafe.vn/wp-content/uploads/2022/03/Background-sach-background-book.jpg');
	        background-size:  1500px 600px;  /* Width and height in pixels */
            background-repeat: no-repeat; 
            background-attachment: fixed; 
         
			
        }
    </style>


    <h1>WELCOME TO JAYANI EDUCATION</h1>
     <p>Jayani Education Center is dedicated to providing high-quality education to students from all walks of life. Our courses are designed to help you achieve your academic and professional goals. Whether you are looking to improve your skills or gain new knowledge, we have a course with best teachers that suits your needs.</p>
	 <p> "Empowering Students from Grades 6 to 11"</p>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect with Us</title>
    <style>
        /* Container styling */
        .contact-section {
            
            padding: 5px;
            color: #0e3a5b;
			class:bordered-text;
            text-align: center;
			font-size: 20px;
            border-radius: 15px;
            width: 250px;
            margin: 0 auto; /* Center the section */
        }

        /* Icon and text styling */
        .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 10px 0;
        }

        /* Icon image styling */
        .contact-info img {
            width: 20px;
            height: 20px;
        }

        /* Social media icons styling */
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 40px; /* Centers the icon vertically */
            color: #0e3a5b; /* Icon color */
            font-size: 30px;
        }
    </style>



    <div class="contact-section">
        <h3>Connect with us</h3>

        <div class="contact-info">
            <i class="fa-solid fa-envelope"></i>
            <span>JayaEdu@gmail.com</span>
        </div>

        <div class="contact-info">
            <i class="fa-solid fa-phone"></i>
            <span>+94 312 100500 <br>+94 714 792833</br></span>
        </div>

 <div class="contact-info">
            <i class="fa-solid fa-location-dot"></i>
            <span>Jayani Education Center, Sadalankawa, Sadalankawa</span>
        </div>
		
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" aria-label="instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
			<a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>

    <!-- Include Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Offered</title>
    <style>
        

        /* Styling for the course bar container */
        .course-bar {
            display: flex;
            justify-content: space-around; /* Evenly distributes space between items */
            align-items: center;           /* Centers items vertically */
            background-color:#b66406 ;     /*  background */
            padding: 20px;                 /* Padding around the items */
            border-top: 2px solid #ddd;    /* Top border */
            border-bottom: 2px solid #ddd; /* Bottom border */
        }

        /* Styling for each course item */
        .course-item {
		font-family: Arial, sans-serif;
            text-align: center;          
            color: black ;                  
        }


    </style>
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAYANI EDUCATION</title>
</head>
<body>
    <h3>Location of JAYANI EDUCATION</h3>
    <!-- Google Map Embed -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126385.72073397466!2d79.87124684375!3d7.440857600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae315b59b041793%3A0xd01133d7acba1f42!2sSadalankawa!5e0!3m2!1sen!2slk!4v1695026242875!5m2!1sen!2slk"
        width="600"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</body>
</html>

<body>

    <!-- Course bar container -->
    <div class="course-bar">
       
		
        <div class="course-item"            
            <p>Mathematics</p>
        </div>
		
        <div class="course-item"            
            <p>Science</p>
        </div>
		
		<div class="course-item"            
            <p>Sinhala Language</p>
        </div>
		
		<div class="course-item"            
            <p>History</p>
        </div>
		
		<div class="course-item"            
            <p>Tamil Language</p>
        </div>
		
		<div class="course-item"            
            <p>English Language</p>
        </div>
		
		<div class="course-item"            
            <p>Commerce </p>
        </div>
		
		<div class="course-item"            
            <p>Dancing</p>
        </div>
		
		<div class="course-item"            
            <p>Music</p>
        </div>
		
		<div class="course-item"            
            <p>Geography Science</p>
        </div>
        
    </div>

</body>
</html>

  






