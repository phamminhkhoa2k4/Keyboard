<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['thumbnail'];
    

    if (!$brand) {
        $_SESSION['add-user'] = " please enter your First Name";
    } elseif (!$description) {
        $_SESSION['add-user'] = " please enter your Last Name";
    } elseif (!$thumbnail['name']) {
        $_SESSION['add-user'] = " please enter your Username ";
    } else {


    }

}