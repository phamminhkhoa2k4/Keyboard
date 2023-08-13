<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = "SELECT * FROM order_product WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $order = mysqli_fetch_assoc($result);






    // sdfgkndjksfhgijdsfbgijbdnsfjgbndsfjhgn





    $delete_order_query = "DELETE order, order_details 
FROM order 
JOIN order_details ON order.id = order_details.order_id 
WHERE order.id = $;
";
    $delete_order_result = mysqli_query($connection, $delete_order_query);
    if (mysqli_errno($connection)) {
        $_SESSION['delete-order'] = "Couldn't delete bill $username";
    } else {
        $_SESSION['delete-order-success'] = "Bill of $username delete successfully ";
    }
}
header('location:' . ROOT_URL . 'admin/manage-order.php');
die();
