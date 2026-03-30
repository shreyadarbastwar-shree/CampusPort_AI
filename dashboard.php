<?php 
session_start(); 
 
if (!isset($_SESSION['user_id'])) {     header("Location: login.html"); 
    exit(); 
} 
 
if ($_SESSION['role'] != "student") {     header("Location: admin_dashboard.php"); 
    exit(); 
} 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Student Dashboard - CampusPort AI</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
 
<body> 
 
<div class="dashboard-container"> 
 
<img src="images/logo.png" class="logo"> 
 
<h2>Welcome, Student</h2> 
<p class="subtitle">CampusPort AI Dashboard</p> 
 
<div class="stats"> 
 
<div class="stat-card"> 
<h3>120</h3> 
<p>Total Students</p> 
</div> 
 
<div class="stat-card"> 
<h3>25</h3> 
<p>Total Faculty</p> 
</div> 
 
<div class="stat-card"> 
<h3>8</h3> 
<p>Active Projects</p> 
</div> 
 
</div> 
 
<div class="card-grid"> 
 
<div class="card"> 
<h3>Upload Project</h3> 
<p>Add your academic project</p> 
<a href="upload_project.php">Go</a> 
</div> 
 
<div class="card"> 
<h3>View Projects</h3> 
<p>Explore other projects</p> 
<a href="projects.php">Go</a> 
</div> 
 
<div class="card"> 
<h3>My Projects</h3> 
<p>See your uploaded work</p> 
<a href="my_projects.php">Go</a> 
</div> 
 
<div class="card logout"> 
<h3>Logout</h3> 
<p>Exit from dashboard</p> 
<a href="logout.php">Logout</a> 
</div> 
 
</div> 
 
</div> 
 
</body> 
</html> 
