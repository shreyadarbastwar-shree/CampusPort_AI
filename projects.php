<?php
include "backend/db.php";

$query = "SELECT * FROM projects WHERE status='approved'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Projects - CampusPort AI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Projects</h2>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="project-card">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>

            <a href="project_details.php?id=<?php echo $row['project_id']; ?>">
                View Details
            </a>
        </div>
    <?php } ?>

    <br>
    <a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>