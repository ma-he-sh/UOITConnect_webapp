<!DOCTYPE html>
<html>

<head>
  <title>SignIn</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<?php
  session_start();
  require_once 'assets/php/user_login.php';
?>

  <body>
    <div class="signin-wrapper transition">
      <div class="login-content">
        <div class="login-header">
          <b>USER
            <light-txt>SIGNIN</light-txt></b>
        </div>

        <!--signin form-->
        <form action="" method="post">
          <div class="login-input-label w100">
            Student ID
          </div>
          <div class="login-input-block w100">
            <input type="text" class="input-txt" name="str_ID" required>
          </div>
          <div class="login-input-label">
            Password
          </div>
          <div class="login-input-block w100">
            <input type="password" class="input-txt" name="str_passw1" required>
          </div>

          <div class="login-input-btn-block w50">
            <button type="submit" class="input-btn" name="btn_signin_submit">Sign in</button>
          </div>
          <div class="login-input-btn-block w50">
            <a href="signup.php">
              <button type="button" class="input-btn">Sign up</button>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="notify-wrapper">
      <?php echo $return_msg; ?>
    </div>

  </body>

</html>