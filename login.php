<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="container">
        <div class="close-arrow">
        <i class="bi bi-x-circle"></i>
        </div>
        <form action="#" method="post">
            <h1 class="">Login</h1>
            <div class="row">
                <label for="">Email Address</label>
                <input type="email" name="userEmail" class="userEmail">
            </div>
            <div class="row">
                <label for="">Password</label>
                <input type="password" name="userPassword" class="userPassword">
            </div>
            <div class="remember">
                <input type="checkbox">Remember Me
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="login-link">
                <p>Doesn't have an account yet? <a href="register.php">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>