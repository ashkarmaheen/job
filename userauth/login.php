<?php
session_start();
if (isset($_SESSION['logined'])) {
  header("location:/job");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Glassmorphism Login form</title>
  <link rel="stylesheet" href="../main.css/login.css">

</head>

<body>

  <section class="section">
    <div class="form-box">
      <div class="form-value">
        <form action="loginauth.php" method="post">
          <h2>Login</h2>
          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" required />
            <label class="" for="">Email</label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="password" required />
            <label for="">Password</label>
          </div>
          <div class="forget">
            <label>
              <input type="checkbox"> Remember me
            </label>
            <label>
              <a href="#">Forgot password?</a>
            </label>
          </div>
          <button type="submit" name="loginbtn">Log in</button>
          <div class="register">
            <p>Don't have a account ? <a href="#">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>

</html>