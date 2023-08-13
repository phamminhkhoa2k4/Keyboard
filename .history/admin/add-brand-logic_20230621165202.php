<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['thumbnail'];
    

    if (!$brand) {
        $_SESSION['add-user'] = " please enter your First Name";
    } elseif (!$description) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['add-user'] = " please enter your Username ";
    } elseif (!$email) {
        $_SESSION['add-user'] = " please enter your a valid Email ";
    } elseif (strlen($createpassword) < 8) {
        $_SESSION['add-user'] = " Password should be 8+ characters";
    } elseif (!$avatar['name']) {
        $_SESSION['add-user'] = " please add avatar";
    } else {


    }

}