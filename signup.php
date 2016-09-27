<!DOCTYPE html>
<html>

<head>
  <title>SignUp</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<?php
  require_once 'assets/php/user_login.php';
?>

  <body>
    <div class="login-wrapper transition">
      <div class="login-content">
        <div class="login-header">
          <b>USER
            <light-txt>SIGNUP</light-txt></b>
        </div>
        <form action="" method="post">
          <div class="login-input-label w100">
            Student ID
          </div>
          <div class="login-input-block w100">
            <input type="text" class="input-txt" name="str_reg_ID" required>
          </div>
          <div class="login-input-label w100">
            Email
          </div>
          <div class="login-input-block w100">
            <input type="email" class="input-txt" name="str_reg_email" required>
          </div>
          <div class="login-input-label w100">
            Name
          </div>
          <div class="login-input-block w100">
            <input type="text" class="input-txt" name="str_reg_name" required>
          </div>
          <div class="login-input-label w100">
            Field of study
          </div>
          <div class="login-input-block w100">
            <input type="text" class="input-txt" name="str_reg_studyf" required>
          </div>
          <div class="login-input-label">
            Password
          </div>
          <div class="login-input-block w100">
            <input type="password" class="input-txt" name="str_reg_passw1" required>
          </div>
          <div class="login-input-label w100">
            Re-enter Password
          </div>
          <div class="login-input-block w100">
            <input type="password" class="input-txt" name="str_reg_passw2" required>
          </div>

          <div class="login-input-btn-block w50">
            <button type="submit" class="input-btn" name="btn_reg_submit">Sign up</button>
          </div>
          <div class="login-input-btn-block w50">
            <a href="signin.php">
              <button type="button" class="input-btn">Sign in</button>
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