<?php
require 'config/database.php';
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
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
    }else{


        $query = "UPDATE order_product SET product_no1= ? ,price1= ? ,quantity1= ? ,product_no2= ? ,price2= ?,quantity2= ?, product_no3= ?,price3= ?,quantity3= ? ,total=?, username= ? , phone= ? , email= ?, address =  ?  WHERE id = ?";
        $stmt = mysqli_prepare($connection, $query);

        // bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "siisiisiiissss", $product_no1, $price1, $quantity1, $product_no2, $is_admin, $id);

        // execute the prepared statement
        mysqli_stmt_execute($stmt);

        // check for errors
        if (mysqli_stmt_errno($stmt)) {
            $_SESSION['edit-user'] = "Failed to update user";
        } else {
            $_SESSION['edit-user-success'] = "User $firstname $lastname updated successfully";
        }

        // close the statement and the connection
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
}

header('location:' . ROOT_URL . 'admin/manage-user.php');
die();
