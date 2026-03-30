<?php 
session_start(); 
 
if (!isset($_SESSION['user_id'])) {     
    header("Location: login.html"); 
    exit(); 
} 
 
if ($_SESSION['role'] != "faculty") {     
    header("Location: dashboard.php"); 
    exit(); 
} 
?> 
<html> 
    <div class="dashboard-container"> 
    <img src="images/logo.png" class="logo"> 
<head> 
    <title>Admin Dashboard - CampusPort AI</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
 
<div class="dashboard-container"> 
    <h2>Welcome, Faculty </h2> 
 
    <div class="card-grid"> 
        <div class="card"> 
            <h3>Approve Projects</h3> 
            <p>Verify student submissions</p> 
            <a href="approve_project.php">Review</a>        </div> 
 
        <div class="card"> 
            <h3>All Projects</h3> 
            <p>View department projects</p> 
            <a href="projects.php">View</a> 
        </div> 
 
        <div class="card"> 
            <h3>Manage Students</h3> 
            <p>View student records</p> 
            <a href="manage_student.html">Manage</a> 
        </div> 
 
        <div class="card logout"> 
            <h3>Logout</h3> 
            <p>Exit admin panel</p> 
            <a href="logout.php">Logout</a> 
        </div> 
    </div> 
</div> 
 
</body> 
</html> 
 
