<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <form class="login-box" method="POST" action="reset_password.php">
        <h2>reset password</h2>

        <div class="input-box">
            <input type="email" name="email" required>
            <label>email</label>
        </div>

        <button type="submit">Verify</button>
        <div class="links">
            <a href="login.php">Back to login</a>
        </div>
    </form>
</div>

</body>
</html>
