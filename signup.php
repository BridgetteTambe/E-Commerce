<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <form class="login-box" method="POST" action="register.php">
        <h2>sign up</h2>

        <div class="input-box">
            <input type="text" name="username" required>
            <label>username</label>
        </div>

        <div class="input-box">
            <input type="email" name="email" required>
            <label>email</label>
        </div>

        <div class="input-box">
            <input type="password" name="password" required>
            <label>password</label>
        </div>

        <button type="submit">Register</button>
        <div class="links">
            <a href="login.php">Back to login</a>
        </div>
    </form>
</div>

</body>
</html>
