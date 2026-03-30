<?php 
session_start(); 
 
if (!isset($_SESSION['user_id'])) {     
    header("Location: login.html"); 
    exit(); 
} 
?> 
 
<!DOCTYPE html> 
<html> 
 
<head> 
<title>Upload Project - CampusPort AI</title> 
<link rel="stylesheet" href="style.css"> 
</head> 
 
<body> 
 
<div class="container"> 
 
<img src="images/logo.png" class="logo"> 
 
<h2>Upload Your Project</h2> 
 
<form action="backend/upload_project.php" method="POST"> 
 
<label>Project Title</label> 
<input type="text" name="title" placeholder="Enter project title" required> 
 
<label>Project Description</label> 
<textarea name="description" placeholder="Describe your project" required></textarea> <button type="submit">Upload Project</button> 
 
</form> 
 
<br> 
 
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a> 
 
</div> 
 
</body> 
</html> 
 
