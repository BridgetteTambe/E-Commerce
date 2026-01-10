<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h1>Welcome to BodyFitness 💪</h1>
<a href="logout.php">Logout</a>
