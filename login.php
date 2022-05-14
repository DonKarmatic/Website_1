<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cloud Lace Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" action="logging.php" method="post" name="login">
        <h1 class="login-title">Cloud Lace Login</h1>
        <input type="text" class="login-input" name="email" placeholder="Enter Email" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
  </form>
        <p class="link">Don't have an account? <a href="registration.html">Register Now</a></p>
        <form class="form" action="logging.php" method="post" name="login">
          <input type="hidden" value="guest" name="email"/>
          <input type="hidden" value="guestpassword" name="password"/>
          <input type="submit" value="Enter as Guest" name="submit" class="login-button"/>
        </form>
</body>
</html>
