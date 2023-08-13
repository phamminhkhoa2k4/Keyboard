<?php
include 'partials/header.php';

$product_no1 = $_SESSION['add-order-data']['product-no1'] ?? null;
$price1 = $_SESSION['add-order-data']['price1'] ?? null;
$quantity1 = $_SESSION['add-order-data']['quantity1'] ?? null;
$product_no2 = $_SESSION['add-order-data']['product-no2'] ?? null;
$price2 = $_SESSION['add-order-data']['price2'] ?? null;
$quantity2 = $_SESSION['add-order-data']['quantity2'] ?? null;
$product_no3 = $_SESSION['add-order-data']['product-no3'] ?? null;
$price1 = $_SESSION['add-order-data']['price3'] ?? null;
$quantity3 = $_SESSION['add-order-data']['quantity3'] ?? null;
$total = $_SESSION['add-order-data']['total'] ?? null;


unset($_SESSION['add-order-data']);
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Order</h2>
        <!-- <?php if (isset($_SESSION['add-order'])) :   ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['add-order'];
                    unset($_SESSION['add-order']);
                    ?>
                </p>

            </div>
        <?php endif ?> -->
        <form action="<?= ROOT_URL ?>admin/add-order-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="product-no1" value="<?= $product_no1 ?>" placeholder="Product Name 1" />
            <input type="number" name="price1" value="<?= $price1 ?>" placeholder="Price" />
            <input type="number" name="quantity1" value="<?= $quantity3 ?>" placeholder="Quantity" />
            <input type="text" name="product-no2" value="<?= $product_no2 ?>" placeholder="Product Name 2" />
            <input type="number" name="price2" value="<?= $price1 ?>" placeholder="Price" />
            <input type="number" name="quantity2" value="<?= $quantity3 ?>" placeholder="Quantity" />
            <input type="text" name="product-no3" value="<?= $product_no3 ?>" placeholder="Product Name 3" />
            <input type="number" name="price3" value="<?= $price1 ?>" placeholder="Price" />
            <input type="number" name="quantity3" value="<?= $quantity3 ?>" placeholder="Quantity" />
            <input type="text" name="total" value="<?= $total ?>" placeholder="Total" />
            <input type="text" name="total" value="<?= $total ?>" placeholder="Total" />
            <input type="text" name="total" value="<?= $total ?>" placeholder="Total" />
            <input type="text" name="total" value="<?= $total ?>" placeholder="Total" />

            <button type="submit" name="submit" class="signup-btn">
                Add Order
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>