<?php
require 'config/constants.php';


$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="form_section">
        <div class="container form_section_container">
            <h2>Sign In</h2>
            <?php if (isset($_SESSION['signup-success'])) : ?>
                <div class="alert_message success">
                    <p>
                        <?= $_SESSION['signup-success'];
                        unset($_SESSION['signup-success']) ?>
                    </p>
                </div>
            <?php elseif (isset($_SESSION['signin'])) : ?>
                <div class="alert_message error">
                    <p>
                        <?= $_SESSION['signup-success'];
                        unset($_SESSION['signup-success']) ?>
                    </p>
                </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>signin-logic.php" method='POST'>
                <input type="text" name='username_email' value="<?= $username_email ?>" placeholder="Username or Email">
                <input type="password" name='login_password' value="<?= $password ?>" placeholder="Password">
                <button type="submit" name='submit' class="signin-btn">Sign In</button>
                <small>Don' t have account?<a href="Signup.php">Sign Up</a></small>
            </form>
        </div>
    </section>
</body>

</html>