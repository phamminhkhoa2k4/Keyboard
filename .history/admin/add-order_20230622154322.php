<?php
include 'partials/header.php';

$product_no1 = $_SESSION['add-user-data']['firstname'] ?? null;
$price1 = $_SESSION['add-user-data']['lastname'] ?? null;
$quantity = $_SESSION['add-user-data']['username'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;

unset($_SESSION['add-user-data']);
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
            <input type="text" name="product-no1" value="<?= $firstname ?>" placeholder="Product Name 1" />
            <input type="text" name="price1" value="<?= $firstname ?>" placeholder="Price" />
            <input type="text" name="quantity1" value="<?= $firstname ?>" placeholder="Quantity" />
            <input type="text" name="product-no2" value="<?= $firstname ?>" placeholder="Product Name 2" />
            <input type="text" name="price2" value="<?= $firstname ?>" placeholder="Price" />
            <input type="text" name="quantity2" value="<?= $firstname ?>" placeholder="Quantity" />
            <input type="text" name="product-no3" value="<?= $firstname ?>" placeholder="Product Name 3" />
            <input type="text" name="price3" value="<?= $firstname ?>" placeholder="Price" />
            <input type="text" name="price3" value="<?= $firstname ?>" placeholder="Quantity" />
            <input type="text" name="total" value="<?= $username ?>" placeholder="Total" />
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