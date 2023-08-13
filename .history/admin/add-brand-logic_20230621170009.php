<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['thumbnail'];
    


    if (!$thumbnail['name']) {
        $_SESSION['add-brand'] = " please enter your Thumbnail ";
    }elseif (!$brand) {
        $_SESSION['add-brand'] = " please enter your Brand";
    } elseif (!$description) {
        $_SESSION['add-brand'] = " please enter your Description";
    }  else {

        echo 'successfully';
    }

}else{}