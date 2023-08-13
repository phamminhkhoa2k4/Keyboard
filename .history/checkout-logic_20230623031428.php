<?php
require 'config/database.php';

if (isset($_POST['submit'])) {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $total = filter_var($_POST['total'], FILTER_SANITIZE_NUMBER_INT);



    if (!$name) {
        $_SESSION['add-order'] = " please enter your name";
    } elseif (!$email) {
        $_SESSION['add-order'] = " please enter your Price No1";
    } elseif (!$phone) {
        $_SESSION['add-order'] = " please enter your Quantity No1";
    } elseif (!$$address) {
        $_SESSION['add-order'] = " please enter your username or  customer";
    } elseif (!$phone) {
        $_SESSION['add-order'] = " please enter your number phone";
    } elseif (!$total) {
        $_SESSION['add-order'] = " please enter your email ";
    }}


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