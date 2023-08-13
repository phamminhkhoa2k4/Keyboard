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
$username = $_SESSION['add-order-data']['username'] ?? null;
$phone = $_SESSION['add-order-data']['phone'] ?? null;
$email = $_SESSION['add-order-data']['email'] ?? null;
$address = $_SESSION['add-order-data']['address'] ?? null;


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
            <input type="number" name="price1" value="<?= $price1 ?>" placeholder="Price" oninput="calculateTotal()" />
            <input type="number" name="quantity1" value="<?= $quantity3 ?>" placeholder="Quantity" oninput="calculateTotal()" />
            <input type="text" name="product-no2" value="<?= $product_no2 ?>" placeholder="Product Name 2" onchange="toggleProduct2()" />
            <input type="number" name="price2" value="<?= $price2 ?>" placeholder="Price" oninput="calculateTotal()" id="price2" />
            <input type="number" name="quantity2" value="<?= $quantity2 ?>" placeholder="Quantity" onchange="calculateTotal()" id="quantity2" />
            <input type="text" name="product-no3" value="<?= $product_no3 ?>" placeholder="Product Name 3" />
            <input type="number" name="price3" value="<?= $price1 ?>" placeholder="Price" onchange="calculateTotal()" />
            <input type="number" name="quantity3" value="<?= $quantity3 ?>" placeholder="Quantity" onchange="calculateTotal()" />
            <input type="number" name="total" value="<?= $total ?>" placeholder="Total" id="total" readonly />
            <input type="text" name="username" value="<?= $username ?>" placeholder="Username" />
            <input type="text" name="phone" value="<?= $phone ?>" placeholder="Phone" />
            <input type="text" name="email" value="<?= $email ?>" placeholder="Total" />
            <textarea name="address" rows="5" placeholder="Address"></textarea>

            <button type="submit" name="submit" class="signup-btn">
                Add Order
            </button>
        </form>
    </div>
</section>

<script>
    function calculateTotal() {
        let price1 = document.getElementsByName("price1")[0].value;
        let quantity1 = document.getElementsByName("quantity1")[0].value;
        let price2 = document.getElementsByName("price2")[0].value;
        let quantity2 = document.getElementsByName("quantity2")[0].value;
        let price3 = document.getElementsByName("price3")[0].value;
        let quantity3 = document.getElementsByName("quantity3")[0].value;

        let total = parseFloat(price1) * parseInt(quantity1);
        if (price2 && quantity2) {
            total += parseFloat(price2) * parseInt(quantity2);
        }
        total += parseFloat(price3) * parseInt(quantity3);

        document.getElementById("total").value = total;
    }

    function toggleProduct2() {
        let productName2 = document.getElementsByName("product-no2")[0].value;
        let fields = ["price2", "quantity2"];

        if (!productName2) {
            fields.forEach(function(field) {
                document.getElementsByName(field)[0].value = "";
                document.getElementsByName(field)[0].setAttribute("disabled", "disabled");
            });
        } else {
            fields.forEach(function(field) {
                document.getElementsByName(field)[0].removeAttribute("disabled");
            });
        }
        calculateTotal();
    }
</script>
<?php
include '../partials/footer.php';
?>