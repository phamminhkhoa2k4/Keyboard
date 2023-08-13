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
            <h2>Add User</h2>
            <form action="<=? ?>add-user-logic.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="firstname" value="" placeholder="First Name" />
                <input type="text" name="lastname" value="" placeholder="Last Name" />
                <input type="text" name="username" value="" placeholder="Username" />
                <input type="email" name="email" value="" placeholder="Email" />
                <input type="password" name="createpassword" value="" placeholder="Password" />
                <select>
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <button type="submit" name="submit" class="signup-btn">
                    Add User
                </button>
            </form>
        </div>
    </section>
</body>

</html>