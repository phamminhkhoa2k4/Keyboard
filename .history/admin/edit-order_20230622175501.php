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
        <h2>Edit Order</h2>
        <form action="<?= ROOT_URL ?>admin/edit-order-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>" />
            <input type="text" name="product-no1" value="<?= $product_no1 ?>" placeholder="Product Name 1" />
            <input type="number" name="price1" value="<?= $price1 ?>" placeholder="Price" oninput="calculateTotal()" />
            <input type="number" name="quantity1" value="<?= $quantity3 ?>" placeholder="Quantity" oninput="calculateTotal()" />
            <input type="text" name="product-no2" value="<?= $product_no2 ?>" placeholder="Product Name 2" onchange="toggleProduct2()" />
            <input type="number" name="price2" value="<?= $price2 ?>" placeholder="Price" oninput="calculateTotal()" id="price2" />
            <input type="number" name="quantity2" value="<?= $quantity2 ?>" placeholder="Quantity" oninput="calculateTotal()" id="quantity2" />
            <input type="text" name="product-no3" value="<?= $product_no3 ?>" placeholder="Product Name 3" />
            <input type="number" name="price3" value="<?= $price1 ?>" placeholder="Price" oninput="calculateTotal()" />
            <input type="number" name="quantity3" value="<?= $quantity3 ?>" placeholder="Quantity" oninput="calculateTotal()" />
            <input type="number" name="total" value="<?= $total ?>" placeholder="Total" id="total" readonly />
            <input type="text" name="username" value="<?= $username ?>" placeholder="Username" />
            <input type="text" name="phone" value="<?= $phone ?>" placeholder="Phone" />
            <input type="text" name="email" value="<?= $email ?>" placeholder="Total" />
            <textarea name="address" rows="5" placeholder="Address"></textarea>

            <button type="submit" name="submit" class="signup-btn">
                e Order
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>