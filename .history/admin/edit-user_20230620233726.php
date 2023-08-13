<?php
include 'partials/header.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
}else{
    header('location:' . ROOT_URL . 'admin/manage-user.php')
}
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit User</h2>
        <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" enctype="multipart/form-data" method="POST">
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
                Edit User
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>