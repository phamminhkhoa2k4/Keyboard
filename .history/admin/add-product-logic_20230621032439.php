<?php
require 'config/database.php';


if (isset($_POST['submit'])) {
    $images_no1 = $_FILES['image_no1'];
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $images_no2 = $_FILES['image_no2'];
    $images_no3 = $_FILES['image_no3'];
    $images_no4 = $_FILES['image_no4'];
    $images_no5 = $_FILES['image_no5'];
    $description_title = filter_var($_POST['description_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $guarantee = filter_var($_POST['guarantee'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cable = filter_var($_POST['cable'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $switch = filter_var($_POST['switch'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $size = filter_var($_POST['size'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $connect_type = filter_var($_POST['connect_type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $color = filter_var($_POST['color'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $led_color = filter_var($_POST['led_color'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $keycap_material = filter_var($_POST['keycap_material'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);




    if (!$images_no1) {
        $_SESSION['add-product'] = " please choose your Image No 1";
    } elseif (!$brand) {
        $_SESSION['add-product'] = " please enter your Last Name";
    } elseif (!$name) {
        $_SESSION['add-product'] = " please enter your Username ";
    } elseif (!$price) {
        $_SESSION['add-product'] = " please enter your Last Name";
    } elseif (!$images_no2) {
        $_SESSION['add-product'] = " please choose your Image No 2";
    } elseif (!$images_no3) {
        $_SESSION['add-product'] = "please choose your Image No 3";
    } elseif (!$images_no4) {
        $_SESSION['add-product'] = "please choose your Image No 4";
    } elseif (!$images_no5) {
        $_SESSION['add-product'] = "please choose your Image No 5";
    } elseif (!$description_title) {
        $_SESSION['add-product'] = " please enter your Description Title";
    } elseif (!$description) {
        $_SESSION['add-product'] = " please enter your Description";
    } elseif (!$guarantee) {
        $_SESSION['add-product'] = " please enter your Guarantee";
    } elseif (!$type) {
        $_SESSION['add-product'] = " please enter your Type";
    } elseif (!$cable) {
        $_SESSION['add-product'] = " please enter your Cable";
    } elseif (!$switch) {
        $_SESSION['add-product'] = " please enter your Switch Type";
    } elseif (!$size) {
        $_SESSION['add-product'] = " please enter your Size";
    } elseif (!$connect_type) {
        $_SESSION['add-product'] = " please enter your Connection Type";
    } elseif (!$color) {
        $_SESSION['add-product'] = " please enter your Color";
    } elseif (!$led_color) {
        $_SESSION['add-product'] = " please enter your Led Color";
    } elseif (!$keycap_material) {
        $_SESSION['add-product'] = " please enter your KeyCap Material";
    }else{



       


            $time = time();
            $avatar_name = $time . $avatar['name'];
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



    if(isset($_SESSION['add-product'])){
        $_SESSION['add-product-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/add-product.php');
        die();
    }else{

        $query = "INSERT INTO products (images-no1,brand,name,price,images-no2,images-no3,images-no4,images-no5,description_title,description,guarantee,type,cable,switch,size,connection,color,led_color,keycap_material) VALUES ($images_no1,$brand,$name,$price,$images_no2,$images_no3,$images_no4,$images_no5,$description_title,$description,$guarantee,$type,$cable,$switch,$size,$connect_type,$color,%led_color,$keycap_material)";
        $result = mysqli_query($connection,$query);
        if(mysqli_errno($connection)){
            $_SESSION['add-product'] = "Couldn't add product";
            header('location:' . ROOT_URL . 'admin/add-product.php');
            die();
        }else{
            $_SESSION['add-product-success'] = "Product $name added successfully";
            header()
        }
    }
}