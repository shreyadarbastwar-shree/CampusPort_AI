<?php
session_start();
include "backend/db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

if ($_SESSION['role'] != "faculty") {
    header("Location: dashboard.php");
    exit();
}

$query = "SELECT * FROM projects WHERE status='pending'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Approve Projects - CampusPort AI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard-container">
    <h2>Approve Student Projects</h2>

    <table border="1" width="80%" style="margin:auto; text-align:center;">
        <tr>
            <th>Project Title</th>
            <th>Description</th>
            <th>Student Email</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['student_email']; ?></td>
            <td>
                <a href="backend/approve_project.php?id=<?php echo $row['project_id']; ?>">Approve</a>
                &nbsp;&nbsp;
                <a href="backend/reject_project.php?id=<?php echo $row['project_id']; ?>">Reject</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br><br>

    <div style="text-align:center;">
        <a href="admin_dashboard.php">⬅ Back to Dashboard</a>
    </div>
</div>

</body>
</html>