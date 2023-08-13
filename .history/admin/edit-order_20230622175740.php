<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM order_product  WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $order = mysqli_fetch_assoc($result);
} else {
    header('location:' . ROOT_URL . 'admin/manage-order.php');
    die();
}


?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Order</h2>
        <form action="<?= ROOT_URL ?>admin/edit-order-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $order['id'] ?>" />
            <input type="text" name="product-no1" value="<?= $order['id'] ?>" placeholder="Product Name 1" />
            <input type="number" name="price1" value="<?= $order['id'] ?>" placeholder="Price" oninput="calculateTotal()" />
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

                Edit Order
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

        // Kiểm tra giá trị rỗng của price2 và quantity2
        if (!price2 || !quantity2) {
            price2 = 0;
            quantity2 = 0;
        }
        // Kiểm tra giá trị rỗng của price3 và quantity3
        if (!price3 || !quantity3) {
            price3 = 0;
            quantity3 = 0;
        }

        let total = parseFloat(price1) * parseInt(quantity1);
        total += parseFloat(price2) * parseInt(quantity2);
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