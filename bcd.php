<!-- bcd.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCD Form</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card_title">
                <h1>Create Account</h1>
                <span>Already have an account? <a href="login">Sign In</a></span>
            </div>
            <div class="form">
                <form action="efg.php" method="post">
                    <input type="text" name="username" id="username" placeholder="UserName" />
                    <input type="email" name="email" placeholder="Email" id="email" />
                    <input type="password" name="password" placeholder="Password" id="password" />
                    <button type="submit">Sign Up</button>
                </form>
            </div>
            <div class="card_terms">
                <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
            </div>
        </div>
    </div>
</body>
</html>
