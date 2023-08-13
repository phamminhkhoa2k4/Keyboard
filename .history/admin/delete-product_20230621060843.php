<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $product = mysqli_fetch_assoc($result);


    if (mysqli_num_rows($result) == 1) {
        $avatar_name1 = $product['images_no1'];
        $avatar_path1 = '../images/' . $avatar_name1;
        $avatar_name2 = $product['images_no2'];
        $avatar_path2 = '../images/' . $avatar_name2;
        $avatar_name3 = $product['images_no3'];
        $avatar_path3 = '../images/' . $avatar_name3;
        $avatar_name4 = $product['images_no4'];
        $avatar_path4 = '../images/' . $avatar_name4;
        $avatar_name5 = $product['images_no5'];
        $avatar_path5 = '../images/' . $avatar_name5;


        if ($avatar_path1 ) {
            unlink($avatar_path1);
        } else if ($avatar_path2) {
            unlink($avatar_path2);
        } else if ($avatar_path3) {
            unlink($avatar_path3);
        } else if ($avatar_path4) {
            unlink($avatar_path4);
        } else if ($avatar_path5) {
            unlink($avatar_path5);
        }
    }




    // sdfgkndjksfhgijdsfbgijbdnsfjgbndsfjhgn





    $delete_user_query = "DELETE FROM users WHERE id=$id";
    $delete_user_result = mysqli_query($connection, $delete_user_query);
    if (mysqli_errno($connection)) {
        $_SESSION['delete-user'] = "Couldn't delete {$product['name']}";
    } else {
        $_SESSION['delete-user-success'] = "{$product['name']} delete successfully ";
    }
}

header('location:' . ROOT_URL . 'admin/manage-products.php');
die();
