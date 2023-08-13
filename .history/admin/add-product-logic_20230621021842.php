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
     = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];




    if (!$firstname) {
        $_SESSION['add-user'] = " please enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['add-user'] = " please enter your Username ";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$lastname) {
        $_SESSION['add-user'] = " please enter your Last Name";
    }
}