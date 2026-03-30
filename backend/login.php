<?php
session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "SELECT * FROM users WHERE email='$email' AND role='$role'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['email'] = $row['email'];

        if ($row['role'] == "student") {
            header("Location: ../dashboard.php");
            exit();
        } 
        else if ($row['role'] == "faculty") {
            header("Location: ../admin_dashboard.php");
            exit();
        } 
        else {
            header("Location: ../login.html?status=invalid");
            exit();
        }

    } else {
        header("Location: ../login.html?status=invalid");
        exit();
    }

} else {
    header("Location: ../login.html?status=invalid");
    exit();
}
?>