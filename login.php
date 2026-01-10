<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BodyFitness | Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="container">
    <form class="login-box" method="POST" action="authenticate.php">
        <h2>login</h2>

        <?php if (isset($_GET['msg'])) { ?>
            <p class="error"><?php echo $_GET['msg']; ?></p>
        <?php } ?>

        <div class="input-box">
            <input type="text" name="username" required>
            <label>username / email</label>
            <i class="fa fa-user"></i>
        </div>

        <div class="input-box">
            <input type="password" name="password" required>
            <label>password</label>
            <i class="fa fa-lock"></i>
        </div>

        <div class="links">
            <a href="signup.php">create an account</a>
            <a href="forgot_password.php">Forgot password?</a>
        </div>

        <button type="submit">Login</button>
    </form>
</div>

<script src="js/script.js"></script>
</body>
</html>
