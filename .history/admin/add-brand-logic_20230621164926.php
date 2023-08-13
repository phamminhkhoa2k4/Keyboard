<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];
    // echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;


    if (!$firstname) {
        $_SESSION['add-user'] = " please enter your First Name";
    } elseif (!$lastname) {
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