<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="form_section">
        <div class="container form_section_container">
            <h2>Add Brand</h2>
            <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" placeholder="Brand">
                <textarea  rows="10" placeholder=""></textarea>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <button type="submit" name="submit" class="signup-btn">
                    Add
                </button>
                <small>Already have an account?<a href="Signin.php">Sign In</a></small>
            </form>
        </div>
    </section>
</body>

</html>