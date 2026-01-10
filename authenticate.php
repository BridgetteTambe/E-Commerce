<?php
session_start();
include 'db.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' OR email='$user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($pass, $row['password'])) {
        $_SESSION['user'] = $row['username'];
        header("Location: home.php");
    } else {
        header("Location: login.php?msg=Incorrect password");
    }
} else {
    header("Location: login.php?msg=Account not found. Please sign up.");
}
