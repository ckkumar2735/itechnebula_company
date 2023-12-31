<!-- abc.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Form</title>
</head>
<body>
    <div class="container">
        <div class="form-container" id="login-form">
            <h1>Login</h1>
            <form action="efg.php" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="submit_abc">Login</button>
            </form>
            <p>Don't have an account? <a href="#" id="signup-link">Sign up</a></p>
        </div>
    </div>
</body>
</html>
