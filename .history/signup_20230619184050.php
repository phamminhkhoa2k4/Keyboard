<?php
session_start();
require 'config/constants.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Document</title>
</head>

<body>
  <section class="form_section">
    <div class="container form_section_container">
      <h2>Sign Up</h2>
      <?php if(isset($_SESSION['signup'])) :   ?>
      <div class="alert_message error">
        <p>
          <?= $_SESSION['signup'];
          unset($_SESSION['signup']);
          ?>
        </p>
        
      </div>
      <?php endif ?>
      

      <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
        <input type="text" name="firstname" value="" placeholder="First Name" />
        <input type="text" name="lastname" value="" placeholder="Last Name" />
        <input type="text" name="username" placeholder="Username" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="createpassword" value="" placeholder="Password" />
        <input type="password" name="confirmpassword" value="" placeholder="Confirm Password " />
        <div class="form_control">
          <label for="avatar"></label>
          <input type="file" name="avatar" id="avatar " />
        </div>
        <button type="submit" name="submit" class="signup-btn">
          Sign Up
        </button>
        <small>Already have an account?<a href="Signin.php">Sign In</a></small>
      </form>
    </div>
  </section>
</body>

</html>