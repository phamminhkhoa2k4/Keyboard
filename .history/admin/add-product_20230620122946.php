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
            <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
                <div class="form_control">
                    <label for="avatar">Image Product No 1</label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <input type="text" value="" placeholder="Brand" />
                <input type="text" value="" placeholder="Name" />
                <input type="number" value="" placeholder="Price">
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar " />
                </div>
                <textarea rows="5" placeholder="Name"></textarea>
                <input type="text" name="username" value="" placeholder="Username" />
                <input type="email" name="email" value="" placeholder="Email" />
                <button type="submit" name="submit" class="signup-btn">
                    Add
                </button>
            </form>
        </div>
    </section>
</body>

</html>