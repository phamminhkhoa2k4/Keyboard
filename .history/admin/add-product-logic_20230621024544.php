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
    $description = filter_var($_POST['desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $guarantee = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $type = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cable = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $switch = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $size = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $connect_type = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $color = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $led_color = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $keycap_material = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);




    if (!$images_no1) {
        $_SESSION['add-user'] = " please choose your Image No 1";
    } elseif (!$brand) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$name) {
        $_SESSION['add-user'] = " please enter your Username ";
    } elseif (!$price) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$images_no2) {
        $_SESSION['add-user'] = " please choose your Image No 2";
    } elseif (!$images_no3) {
        $_SESSION['add-user'] = "please choose your Image No 3";
    } elseif (!$images_no4) {
        $_SESSION['add-user'] = "please choose your Image No 4";
    } elseif (!$images_no5) {
        $_SESSION['add-user'] = "please choose your Image No 5";
    } elseif (!$description_title) {
        $_SESSION['add-user'] = " please enter your Description Title";
    } elseif (!$description) {
        $_SESSION['add-user'] = " please enter your Description";
    } elseif (!$guaranteee) {
        $_SESSION['add-user'] = " please enter your Guarantee";
    } elseif (!$type) {
        $_SESSION['add-user'] = " please enter your Type";
    } elseif (!$cable) {
        $_SESSION['add-user'] = " please enter your Cable";
    } elseif (!$switch) {
        $_SESSION['add-user'] = " please enter your Switch Type";
    } elseif (!$size) {
        $_SESSION['add-user'] = " please enter your Size";
    } elseif (!$connect_type) {
        $_SESSION['add-user'] = " please enter your Connection Type";
    } elseif (!$color) {
        $_SESSION['add-user'] = " please enter your Color";
    } elseif (!$led_color) {
        $_SESSION['add-user'] = " please enter your Led Color";
    } elseif (!$keycap_material) {
        $_SESSION['add-user'] = " please enter your KeyCap Material";
    }
}