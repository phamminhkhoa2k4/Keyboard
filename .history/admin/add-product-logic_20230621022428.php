<?php
require 'config/database.php';


if (isset($_POST['submit'])) {
    $images_no1 = $_FILES['avatar'];
    $brand = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price = filter_var($_POST['lastname'], FILTER_SANITIZE_NUMBER_INT);
    $images_no2 = $_FILES['avatar'];
    $images_no3 = $_FILES['avatar'];
    $images_no4 = $_FILES['avatar'];
    $images_no5 = $_FILES['avatar'];
    $description_title = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
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
        $_SESSION['add-user'] = " please enter your First Name";
    } elseif (!$brand) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$name) {
        $_SESSION['add-user'] = " please enter your Username ";
    } elseif (!$price) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$images_no2) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$images_no3) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$images_no4) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$images_no5) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$description_title) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$description) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$guaranteee) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$type) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$cable) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$switch) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$size) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$connect_type) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$color) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$led_color) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$color) {
        $_SESSION['add-user'] = " please enter your Last Name";
    }
}