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
            <h2>Add User</h2>
            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name" />
                <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name" />
                <input type="text" name="username" value="<?= $username ?>" placeholder="Username" />
                <input type="email" name="email" value="<?= $email ?>" placeholder="Email" />
                <input type="password" name="createpassword" value="" placeholder="Password" />
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password " />
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