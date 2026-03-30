<?php
include "db.php";

$id = $_GET['id'];

$query = "UPDATE projects SET status='approved' WHERE project_id='$id'";

if (mysqli_query($conn, $query)) {
    header("Location: ../approve_project.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>