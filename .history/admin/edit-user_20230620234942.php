<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
} else {
    header('location:' . ROOT_URL . 'admin/manage-user.php');
    die();
}
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit User</h2>
        <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $user['firstname'] ?>" placeholder="First Name" />
            <input type="text" name="lastname" value="<?= $user['lastname'] ?>" placeholder="Last Name" />
            <input type="text" name="username" value="<?= $user['username'] ?>" placeholder="Username" />
            <input type="email" name="email" value="<?= $user['email'] ?>" placeholder="Email" />
            <select name="userrole">
                <option value="1">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form_control">
                <label for="avatar"></label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <button type="submit" name="submit" class="signup-btn">
                Edit User
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>