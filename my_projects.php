
<?php 
session_start(); 
 
if (!isset($_SESSION['user_id'])) {     
    header("Location: login.html"); 
    exit(); 
} 
?> 
<?php 

include "backend/db.php"; 
 
$email = $_SESSION['email']; 
 
$query = "SELECT * FROM projects WHERE student_email='$email'"; 
$result = mysqli_query($conn,$query); 
?> 
 
<!DOCTYPE html> 
<html> 
 
<head> 
<title>My Projects - CampusPort AI</title> 
<link rel="stylesheet" href="style.css"> 
</head> 
 
<body> 
 
<div class="dashboard-container"> 
 
<h2>My Uploaded Projects</h2> 
 
<table border="1" width="80%" style="margin:auto; text-align:center;"> 
 
<tr> 
<th>Project Title</th> 
<th>Description</th> 
<th>Status</th> 
</tr> 
 
<?php while($row = mysqli_fetch_assoc($result)) { 
?> 
 
<tr> 
 
<td><?php echo $row['title']; ?></td> 
 
<td><?php echo $row['description']; ?></td> 
 
<td> <?php if($row['status']=="pending"){ echo "Pending"; } elseif($row['status']=="approved"){ echo "Approved"; 
} else{ echo "Rejected"; 
} 
?> 
</td> 
 
</tr> 
 
<?php 
} 
?> 
 
</table> 
 
<br><br> 
 
<div style="text-align:center;"> 
<a href="dashboard.php">⬅ Back to Dashboard</a> 
</div> 
 
</div> 
 
</body> 
</html> 
 
