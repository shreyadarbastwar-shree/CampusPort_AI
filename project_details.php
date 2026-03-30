<?php
include "backend/db.php";

$id = $_GET['id'];

$query = "SELECT * FROM projects WHERE project_id='$id'";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Details - CampusPort AI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <img src="images/logo.png" class="logo">

    <h2>Project Details</h2>

    <div class="project-card">
        <h3><?php echo $row['title']; ?></h3>

        <p><strong>Description:</strong></p>
        <p><?php echo $row['description']; ?></p>

        <p><strong>Uploaded By:</strong> <?php echo $row['student_email']; ?></p>

        <p><strong>Status:</strong> <?php echo $row['status']; ?></p>
    </div>

    <br>

    <a href="projects.php">⬅ Back to Projects</a>

</div>

</body>
</html>