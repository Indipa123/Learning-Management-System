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
            <a href="logout.php"></a>
        <?php else: ?>
            <!-- Show Login if the user is not logged in -->
            <a href="log.html"></a>
        <?php endif; ?>
        </div>
    </div>

</body>
</html>

<!-- Table -->

<html>
<head>
<style>

body{ 
background: url('https://img.freepik.com/premium-photo/school-supplies-blue-background_943281-29438.jpg') no-repeat center center fixed; /* Add background image */
            background-size: cover; /* Make the background cover the entire page */
			}
			
			
			
			
			
			
			
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
  text-align: center;
  width: 100px;
  height: 100px;
}
th {
            background-color:#91d2f0  ;
            position: sticky;
            top: 0; /* This keeps the header row fixed */
            z-index: 1; /* Ensures the header is above table rows */
			font-size: 20px
        }


td {
            background-color:#dfeff7 ;
            position: sticky;
			color:  blue ;
			font-size: 15px
            
        }

td:first-child {
            background-color: #91d2f0  ;
			color: black;
            font-weight: bold;
			font-size: 20px;
        }
		
 h2 {
            color: #8B008B;
			text-align: center;
    font-family: gilda display;
	font-size: 50px;
	
}

h3 {
            color: #001ea5  ;
			text-align: left-side;
    font-family: gilda display;
	font-size: 40px;
}


p1 {
            color: #8B008B;
			text-align: center;
    font-family: gilda display;
	font-size: 30px;
}

p2 {
            color: black;
			text-align: center;
    font-family: gilda display;
	font-size: 25px;
}			
</style>
</head>





<body>

<h2>Class Time-Table</h2>

<table style="width:100%">
  <tr>
    <th></th>
    <th>Grade 06</th>
    <th>Grade 07</th>
    <th>Grade 08</th>
    <th>Grade 09</th>
    <th>Grade 10</th>
    <th>Grade 11</th>
   
  </tr>
  <tr>
    <td>Mathematics </td>
    <td> Monday <br>04:00pm - 06:00pm</br></td>
    <td>Thursday <br>06:30pm - 08:30pm</br> </td>
    <td>Saturday <br>08:00am - 10:00am</br> </td>
    <td>Monday <br>06:30pm - 08:30pm</br>  </td>
    <td>Saturday <br>01:30pm - 04:00pm</br> </td>
    <td> Saturday <br>04:30pm - 07:00pm</br> </td>
  </tr>
  <tr>
    <td>Science </td>
    <td>Saturday <br>08:00am - 10:00am</br> </td>
    <td>Monday <br>04:00pm - 06:00pm</br>  </td>
    <td>Sunday <br>07:30pm - 09:30pm</br> </td>
    <td>Thursday <br>06:30pm - 08:30pm</br> </td>
    <td>Saturday <br>04:30pm - 07:00pm</br>  </td>
    <td>Saturday <br>01:30pm - 04:00pm</br> </td>
  </tr>
  <tr>
    <td>Sinhala Language </td>
    <td>Wednesday<br>06:30pm - 08:30pm</br> </td>
    <td>Friday <br>04:00pm - 06:00pm</br> </td>
    <td>Thursday <br>06:30pm - 08:30pm</br> </td>
    <td>Tussday<br>04:00pm - 06:00pm</br></td>
    <td>Monday <br>06:30pm - 08:30pm</br>  </td>
    <td>Sunday <br>04:30pm - 07:00pm</br>  </td>
  </tr>
  
  <tr>
    <td>History </td>
    <td>Sunday<br>01:30pm - 04:00pm</br> </td>
    <td>Thursday <br>04:00pm - 06:00pm</br> </td>
    <td>Wednesday<br>06:30pm - 08:30pm</br>  </td>
    <td>Monday <br>04:00pm - 06:00pm</br>  </td>
    <td>Saturday <br>07:30pm - 09:30pm</br>  </td>
    <td>Wednesday<br>04:00pm - 06:00pm</br> </td>
  </tr>
  
   <tr>
    <td>English Language </td>
    <td>Tussday<br>04:00pm - 06:00pm</br> </td>
    <td>Wednesday<br>06:30pm - 08:30pm</br>  </td>
    <td>Saturday <br>10:30am - 12:30pm</br> </td>
    <td>Saturday <br>04:30pm - 07:00pm</br>  </td>
    <td>Thursday <br>04:00pm - 06:00pm</br> </td>
    <td>Sunday<br>01:30pm - 04:00pm</br> </td>
  </tr>
  
   <tr>
    <td>Commerce </td>
    <td>Monday <br>06:30pm - 08:30pm</br> </td>
    <td>Sunday <br>07:30pm - 09:30pm</br>  </td>
    <td>Tussday<br>06:30pm - 08:30pm</br> </td>
    <td>Wednesday<br>04:00pm - 06:00pm</br> </td>
    <td>Tussday<br>04:00pm - 06:00pm</br> </td>
    <td>Thursday <br>04:00pm - 06:00pm</br> </td>
  </tr>
  
   <tr>
    <td>Dancing </td>
    <td>Friday <br>06:30pm - 08:30pm</br>  </td>
    <td>Saturday <br>10:30am - 12:30pm</br> </td>
    <td>Thursday <br>04:00pm - 06:00pm</br> </td>
    <td>Friday <br>04:00pm - 06:00pm</br> </td>
    <td>Sunday <br>04:30pm - 07:00pm</br>  </td>
    <td>Tussday<br>04:00pm - 06:00pm</br> </td>
  </tr>
  
   <tr>
    <td>Music </td>
    <td>Saturday <br>10:30am - 12:30pm</br> </td>
    <td>Sunday <br>04:30pm - 07:00pm</br>  </td>
    <td>Tussday<br>06:30pm - 08:30pm</br> </td>
    <td>Sunday<br>01:30pm - 04:00pm</br> </td>
    <td>Saturday <br>08:00am - 10:00am</br>  </td>
    <td>Friday <br>04:00pm - 06:00pm</br> </td>
  </tr>
  
   <tr>
    <td>Geography science </td>
    <td>Friday <br>04:00pm - 06:00pm</br>  </td>
    <td>Saturday <br>04:30pm - 07:00pm</br> </td>
    <td>Wednesday<br>04:00pm - 06:00pm</br> </td>
    <td>Friday <br>06:30pm - 08:30pm</br>  </td>
    <td>Tussday<br>06:30pm - 08:30pm</br> </td>
    <td>Wednesday<br>06:30pm - 08:30pm</br>  </td>
  </tr>
  
   <tr>
    <td>Tamil Language </td>
    <td>Wednesday<br>04:00pm - 06:00pm</br>  </td>
    <td>Saturday <br>08:00am - 10:00am</br> </td>
    <td>Saturday <br>04:30pm - 07:00pm</br>  </td>
    <td> Sunday <br>07:30pm - 09:30pm</br>  </td>
    <td>Friday <br>06:30pm - 08:30pm</br>  </td>
    <td>Monday <br>06:30pm - 08:30pm</br> </td>
  </tr>
  
   
</table>
<h2>Class Fees</h2>

<h3>Mathematics</h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 1500.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1500.00 </p2></br>

<h3>Science </h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 1500.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1500.00 </p2></br>

<h3>Sinhala Language</h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 800.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 800.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 800.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 800.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 1000.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>

<h3>History </h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 750.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 750.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 750.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 750.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 900.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 900.00 </p2></br>

<h3>English Language</h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 1200.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1200.00 </p2></br>

<h3>Commerce</h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 1000.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>

<h3>Dancing </h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 700.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 700.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 700.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 700.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 700.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 700.00 </p2></br>

<h3>Music </h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 950.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 950.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 950.00</p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 950.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 950.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>

<h3>Geography science</h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 500.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 600.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 700.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 800.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 900.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 1000.00 </p2></br>


<h3>Tamil Language</h3>
<p1>Grade 06 - </P1>
<p2> Course Fee - Rs. 900.00 </p2></br>
<br>
<p1>Grade 07 - </P1>
<p2> Course Fee - Rs. 900.00 </p2></br>
<br>
<p1>Grade 08 - </P1>
<p2> Course Fee - Rs. 900.00 </p2><br>
<br>
<p1>Grade 09 - </P1>
<p2> Course Fee - Rs. 900.00 </p2></br>
<br>
<p1>Grade 10 - </P1>
<p2> Course Fee - Rs. 950.00</p2></br>
<br>
<p1>Grade 11 - </P1>
<p2> Course Fee - Rs. 950.00 </p2></br>

</body>
</html>

