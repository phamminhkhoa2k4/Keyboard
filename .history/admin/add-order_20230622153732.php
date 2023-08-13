<?php
include 'partials/header.php';

// $firstname = $_SESSION['add-user-data']['firstname'] ?? null;
// $lastname = $_SESSION['add-user-data']['lastname'] ?? null;
// $username = $_SESSION['add-user-data']['username'] ?? null;
// $email = $_SESSION['add-user-data']['email'] ?? null;
// $createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;

// unset($_SESSION['add-user-data']);
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Order</h2>
        <!-- <?php if (isset($_SESSION['add-user'])) :   ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']);
                    ?>
                </p>

            </div>
        <?php endif ?> -->
        <form action="<?= ROOT_URL ?>admin/add-order-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Product Name" />
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Price" />
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Quantity" />
            <input type="text" name="username" value="<?= $username ?>" placeholder="Total" />
            <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Password" />
            <button type="submit" name="submit" class="signup-btn">
                Add Order
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>