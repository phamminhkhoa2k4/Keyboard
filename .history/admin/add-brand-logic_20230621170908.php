<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['thumbnail'];
    


    if (!$thumbnail['name']) {
        $_SESSION['add-brand'] = " please enter your Thumbnail";
    }elseif (!$brand) {
        $_SESSION['add-brand'] = " please enter your Brand";
    } elseif (!$description) {
        $_SESSION['add-brand'] = " please enter your Description";
    }  else {

        $time = time();
        $avatar_name = $time . $thu['name'];
        $avatar_tmp_name = $avatar['tmp_name'];
        $avatar_destination_path = '../images/' . $avatar_name;



        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extension = explode('.', $avatar_name);
        $extension = end($extension);
        if (in_array($extension, $allowed_files)) {
            if ($avatar['size'] < 100000) {

                move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
            } else {
                $_SESSION['add-user'] = 'File size too big . Should be less than 1mb ';
            }
        } else {
            $_SESSION['add-user'] = 'File should be png , jpg or jpeg ';
        }
    }
    
    if ($_SESSION['add-brand']) {

        $_SESSION['add-brand-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/add-brand.php');
        die();
    } else { 

    }
}
