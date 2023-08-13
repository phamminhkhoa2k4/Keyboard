<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="form_section">
        <div class="container form_section_container">
            <h2>Sign In</h2>
            <?php if (isset($_SESSION['signup-success'])) : ?>
               
            <?php elseif (isset($_SESSION['signin'])) : ?>
                <div class="alert_message error">
                    <p>
                        <?= $_SESSION['signin'];
                        unset($_SESSION['signin']) ?>
                    </p>
                </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>signin-logic.php" method='POST'>
                <input type="text" name='username_email' value="<?= $username_email ?>" placeholder="Username or Email">
                <input type="password" name='password' value="<?= $password ?>" placeholder="Password">
                <button type="submit" name='submit' class="signin-btn">Sign In</button>
                <small>Don' t have account?<a href="Signup.php">Sign Up</a></small>
            </form>
        </div>
    </section>
</body>

</html>