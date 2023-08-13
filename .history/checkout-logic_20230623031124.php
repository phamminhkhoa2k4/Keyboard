<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $product_no1 = filter_var($_POST['product-no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price1 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity1 = filter_var($_POST['quantity1'], FILTER_SANITIZE_NUMBER_INT);
    $product_no2 = filter_var($_POST['product-no2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price2 = filter_var($_POST['price2'], FILTER_SANITIZE_NUMBER_INT);
    $quantity2 = filter_var($_POST['quantity2'], FILTER_SANITIZE_NUMBER_INT);
    $product_no3 = filter_var($_POST['product-no3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price3 = filter_var($_POST['price3'], FILTER_SANITIZE_NUMBER_INT);
    $quantity3 = filter_var($_POST['quantity3'], FILTER_SANITIZE_NUMBER_INT);
    $username  = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone  = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // Lấy thông tin đơn hàng từ form POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $total = $_POST['total'];



    if (!$product_no1) {
        $_SESSION['add-order'] = " please enter your less a product at product  No1";
    } elseif (!$price1) {
        $_SESSION['add-order'] = " please enter your Price No1";
    } elseif (!$quantity1) {
        $_SESSION['add-order'] = " please enter your Quantity No1";
    } elseif (!$username) {
        $_SESSION['add-order'] = " please enter your username or  customer";
    } elseif (!$phone) {
        $_SESSION['add-order'] = " please enter your number phone";
    } elseif (!$email) {
        $_SESSION['add-order'] = " please enter your email ";
    } elseif (!$address) {
        $_SESSION['add-order'] = " please enter your address ";
    }
    // echo time();
    // var_dump($avatar);

    if ($_SESSION['add-order']) {
        $_SESSION['add-order-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/add-order.php');
        die();
    } else {

        $inset_order_query = "INSERT INTO order_product SET product_no1='$product_no1',price1='$price1',quantity1='$quantity1',product_no2='$product_no2',price2='$price2',quantity2='$quantity2', product_no3='$product_no3',price3='$price3',quantity3='$quantity3',total='$total', username='$username' , phone='$phone' , email='$email', address = '$address'";
        $inset_order_result = mysqli_query($connection, $inset_order_query);

        if (!mysqli_error($connection)) {
            $_SESSION['add-order-success'] = "New order of $username added successfully .";
            header('location:' . ROOT_URL . 'admin/manage-order.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/add-order.php');
    die();
}






// Chèn thông tin đơn hàng vào bảng order
$sql_order = "INSERT INTO orders (name, email, phone, address, total)
VALUES ('$name', '$email', '$phone', '$address', '$total')";

if ($conn->query($sql_order) === TRUE) {
    // Lấy lại ID của đơn hàng vừa được chèn
    $order_id = mysqli_insert_id($conn);

    // Chèn thông tin các sản phẩm vào bảng order_details
    foreach ($_SESSION['cart'] as $product) {
        $image = $product[0];
        $name = $product[1];
        $brand = $product[4];
        $price = $product[2];
        $quantity = $product[5];

        $sql_order_details = "INSERT INTO order_details (order_id, image, name, brand, price, quantity)
        VALUES ('$order_id', '$image', '$name', '$brand', '$price', '$quantity')";

        if ($conn->query($sql_order_details) !== TRUE) {
            echo "Error: " . $sql_order_details . "<br>" . $conn->error;
        }
    }

    // Xóa giỏ hàng sau khi đã đặt hàng thành công
    unset($_SESSION['cart']);

    // Chuyển hướng đến trang xác nhận đặt hàng
    header("Location: confirm.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}