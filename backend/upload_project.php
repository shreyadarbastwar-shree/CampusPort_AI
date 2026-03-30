<?php 
 
session_start(); include "db.php"; 
 
$title = $_POST['title']; 
$description = $_POST['description']; 
$email = $_SESSION['email']; 
 
$query = "INSERT INTO projects(title,description,student_email,status) 
VALUES('$title','$description','$email','pending')"; 
 
$result = mysqli_query($conn,$query); 
 
if($result){     
    header("Location: ../my_projects.php"); 
}else{ 
    echo "Upload Failed"; 
} 
 
?> 
