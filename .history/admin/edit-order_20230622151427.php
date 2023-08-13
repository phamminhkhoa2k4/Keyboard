<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM order WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $order = mysqli_fetch_assoc($result);
} else {
    header('location:' . ROOT_URL . 'admin/manage-user.php');
    die();
}


?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Order</h2>
        <form action="<?= ROOT_URL ?>admin/edit-order-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>" />
            <input type="text" name="firstname" value="<?= $user['firstname'] ?>" placeholder="First Name" />
            <input type="text" name="lastname" value="<?= $user['lastname'] ?>" placeholder="Last Name" />
            <input type="text" name="username" value="<?= $user['username'] ?>" placeholder="Username" />
            <input type="email" name="email" value="<?= $user['email'] ?>" placeholder="Email" />
            <button type="submit" name="submit" class="signup-btn">
                Edit Order
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>