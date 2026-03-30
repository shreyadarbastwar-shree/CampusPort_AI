<?php 
include "db.php"; 
 
$name = $_POST['name']; 
$email = $_POST['email']; 
$password = $_POST['password']; 
$role = $_POST['role']; 
 
$hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
 
$check = "SELECT * FROM users WHERE email='$email'"; 
$result = mysqli_query($conn, $check); 
 
if (mysqli_num_rows($result) > 0) {     echo "exists";     exit(); 
} 
 
$query = "INSERT INTO users (name, email, password, role) 
          VALUES ('$name', '$email', '$hashedPassword', '$role')"; 
 
if (mysqli_query($conn, $query)) {     header("Location: ../register.html?status=success"); 
    exit(); } else {     header("Location: ../register.html?status=error"); 
    exit(); 
} 
?> 
