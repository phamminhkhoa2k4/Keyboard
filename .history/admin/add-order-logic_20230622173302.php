<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $product_no1 = filter_var($_POST['product-no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price1 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity1 = filter_var($_POST['quantity1'], FILTER_SANITIZE_NUMBER_INT);
    $product_no2 = filter_var($_POST['product - no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price2 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity2 = filter_var($_POST['quantity1'], FILTER_SANITIZE_NUMBER_INT);
    $product_no3 = filter_var($_POST['product-no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price3 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity3 = filter_var($_POST['quantity1'], FILTER_SANITIZE_NUMBER_INT);
    $username  = filter_var($_POST['total'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone  = filter_var($_POST['total'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['total'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['total'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    if (!$product_no1) {
        $_SESSION['add-order'] = " please enter your less a product at product  No1";
    } elseif (!$price1) {
        $_SESSION['add-order'] = " please enter your Price No1";
    } elseif (!$quantity1) {
        $_SESSION['add-order'] = " please enter your Quantity No1";
    } 
    // echo time();
    // var_dump($avatar);

    if ($_SESSION['add-order']) {

        $_SESSION['add-order-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/add-order.php');
        die();
    } else {

        $inset_user_query = "INSERT INTO users SET product_no1='$product_no1',price1='$price',quantity1='$quantity1',product_no1='$product_no1',price1='$price',quantity1='$quantity1', product_no1='$product_no1',price1='$price',quantity1='$quantity1',total='$total', username='$username' , phone='$phone' , email='$email";

        $inset_user_result = mysqli_query($connection, $inset_user_query);

        if (!mysqli_error($connection)) {
            $_SESSION['add-order-success'] = "New User $firstname $lastname added successfully .";
            header('location:' . ROOT_URL . 'admin/manage-order.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/add-order.php');
    die();
}
