<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/login.css">
</head>
<body>
  <!-- Logo and Navbar -->
<div class="logoDiv">
    <a href="index.php"><img src="image/AU-logo-txt-black.png" alt="" class="logo"></a>
</div>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="booking.php">Booking</a></li>
        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="index.php">Schedule</a></li>
        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="index.php">About</a></li>
        <li class="nav-item"><a class="nav-link active login" id="loginBtn" aria-current="page" href="#">Login</a></li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Login Popup -->
<div class="popup">
    <div class="container-login">
        <div class="close-arrow">
            <i class="bi bi-x-circle"></i>
        </div>
        <form action="#" method="post">
            <h1>Login</h1>
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
                <p>Doesn't have an account yet? <a href="register.php" id="registerBtn"><u>Register</u></a></p>
            </div>
        </form>
    </div>
</div>

  
</body>
</html>