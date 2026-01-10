<?php
include 'db.php';

$email = $_GET['email'];
$newpass = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn, "UPDATE users SET password='$newpass' WHERE email='$email'");
header("Location: login.php?msg=Password updated");
