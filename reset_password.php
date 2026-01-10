<?php
include 'db.php';

$email = $_POST['email'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

if (mysqli_num_rows($result) == 1) {
    header("Location: save_password.php?email=$email");
} else {
    header("Location: forgot_password.php?msg=Email not found");
}
