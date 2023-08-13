<?php
require 'config/database.php';

if (isset($_POST['submit'])) {

    $username = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $total = filter_var($_POST['total'], FILTER_SANITIZE_NUMBER_INT);

    if (!$username) {
        $_SESSION['add-checkout'] = "Please enter your name";
    } elseif (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['add-checkout'] = "Please enter a valid email address";
    } elseif (!$phone) {
        $_SESSION['add-checkout'] = "Please enter your phone number";
    } elseif (!$address) {
        $_SESSION['add-checkout'] = "Please enter your address";
    } elseif (empty($_SESSION['cart'])) {
        $_SESSION['add-checkout'] = "Your cart is empty";
    } else {
        // Insert data into orders table
        $insert_order_query = "INSERT INTO orders (username, email, phone, address, total)
        VALUES ('$username', '$email', '$phone', '$address', $total)";
        mysqli_query($connection, $insert_order_query);

        // Get the newly inserted order ID
        $order_id = mysqli_insert_id($connection);

        // Insert each product in the cart into order_details table
        foreach ($_SESSION['cart'] as $product) {
            $product_name = mysqli_real_escape_string($connection, $product[1]);
            $product_name = mysqli_real_escape_string($connection, $product[0]);
            $product_brand = mysqli_real_escape_string($connection, $product[4]);
            $price = floatval($product[2]);
            $quantity = intval($product[5]);

            $insert_details_query = "INSERT INTO order_details (order_id, name,brand, price, quantity)
            VALUES ($order_id, '$product_name', '$product_brand', $price, $quantity)";
            mysqli_query($connection, $insert_details_query);
        }

        if (!mysqli_error($connection)) {
            $_SESSION['add-checkout-success'] = "New order of $username added successfully.";
            unset($_SESSION['cart']);
            header('Location: ' . ROOT_URL . 'checkout-success.php');
            die();
        } else {
            $_SESSION['add-checkout'] = "Error: " . mysqli_error($connection);
        }
    }
} else {
    header('location: ' . ROOT_URL . 'checkout.php');
    die();
}




// if (isset($_POST['submit'])) {
//     $username = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//     $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $address = filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $total = filter_var($_POST['total'], FILTER_SANITIZE_NUMBER_INT);

//     if (!$username) {
//         $_SESSION['add-order'] = "Please enter your name";
//     } elseif (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $_SESSION['add-order'] = "Please enter a valid email address";
//     } elseif (!$phone) {
//         $_SESSION['add-order'] = "Please enter your phone number";
//     } elseif (!$address) {
//         $_SESSION['add-order'] = "Please enter your address";
//     } elseif (empty($_SESSION['cart'])) {
//         $_SESSION['add-order'] = "Your cart is empty";
//     } else {
//         // Insert data into orders table
//         $insert_order_query = "INSERT INTO orders (username, email, phone, address, total)
//         VALUES ('$username', '$email', '$phone', '$address', $total)";
//         mysqli_query($connection, $insert_order_query);

//         // Get the newly inserted order ID
//         $order_id = mysqli_insert_id($connection);

//         // Insert each product in the cart into order_details table
//         foreach ($_SESSION['cart'] as $product) {
//             $product_name = mysqli_real_escape_string($connection, $product[1]);
//             $product_brand = mysqli_real_escape_string($connection, $product[4]);
//             $price = floatval($product[2]);
//             $quantity = intval($product[5]);

//             $insert_details_query = "INSERT INTO order_details (order_id, product_name, product_brand, price, quantity)
//             VALUES ($order_id, '$product_name', '$product_brand', $price, $quantity)";
//             mysqli_query($connection, $insert_details_query);
//         }

//         if (!mysqli_error($connection)) {
//             $_SESSION['add-order-success'] = "New order of $username added successfully.";
//             unset($_SESSION['cart']);
//             header('Location: ' . ROOT_URL . 'admin/manage-order.php');
//             die();
//         } else {
//             $_SESSION['add-order'] = "Error: " . mysqli_error($connection);
//         }
//     }
// }



// // Chèn thông tin đơn hàng vào bảng order
// $sql_order = "INSERT INTO orders (name, email, phone, address, total)
// VALUES ('$name', '$email', '$phone', '$address', '$total')";

// if ($conn->query($sql_order) === TRUE) {
//     // Lấy lại ID của đơn hàng vừa được chèn
//     $order_id = mysqli_insert_id($conn);

//     // Chèn thông tin các sản phẩm vào bảng order_details
//     foreach ($_SESSION['cart'] as $product) {
//         $image = $product[0];
//         $name = $product[1];
//         $brand = $product[4];
//         $price = $product[2];
//         $quantity = $product[5];

//         $sql_order_details = "INSERT INTO order_details (order_id, image, name, brand, price, quantity)
//         VALUES ('$order_id', '$image', '$name', '$brand', '$price', '$quantity')";

//         if ($conn->query($sql_order_details) !== TRUE) {
//             echo "Error: " . $sql_order_details . "<br>" . $conn->error;
//         }
//     }

//     // Xóa giỏ hàng sau khi đã đặt hàng thành công
//     unset($_SESSION['cart']);

//     // Chuyển hướng đến trang xác nhận đặt hàng
//     header("Location: confirm.php");
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }