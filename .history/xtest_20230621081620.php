<?php

require './config/database.php';

// Script PHP để thêm sản phẩm vào giỏ hàng
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_qty = $_POST['product_qty'];

    // Lấy thông tin sản phẩm từ database
    $product_query = "SELECT * FROM products WHERE id=$product_id";
    $product_result = mysqli_query($connection, $product_query);
    $product = mysqli_fetch_assoc($product_result);

    // Lưu thông tin sản phẩm vào Session
    $_SESSION['cart'][] = array(
        'id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'image' => $product['images-no1'],
        'qty' => $product_qty
    );

    // Chuyển hướng đến trang giỏ hàng
    header("Location:" . ROOT_URL . "cart.php");
    die();
}
