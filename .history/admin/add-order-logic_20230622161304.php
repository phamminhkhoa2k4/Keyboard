<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $product_no1 = filter_var($_POST['product-no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price1 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity1 = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $product_no2 = filter_var($_POST['product - no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price2 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity2 = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $product_no3 = filter_var($_POST['product-no1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price3 = filter_var($_POST['price1'], FILTER_SANITIZE_NUMBER_INT);
    $quantity3 = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $total = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);



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


        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
        // echo $createpassword;
        // echo $hashed_password;

        // $user_check_query = "SELECT * FROM users WHERE username ='$username' OR email='$email'";
        // $user_check_result = mysqli_query($connection,$user_check_query);
        // if(mysqli_num_rows($user_check_result) > 0){
        //     $_SESSION['signup'] = "Username or Email already exist";
        // }else{


        //     $time = time();
        // }
        // assuming $connection is your database connection object
        $user_check_query = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($connection, $user_check_query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            $_SESSION['add-user'] = "Username or Email already exist";
        } else {


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
        mysqli_stmt_close($stmt);
    }
    // echo time();
    // var_dump($avatar);

    if ($_SESSION['add-user']) {

        $_SESSION['add-user-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/add-user.php');
        die();
    } else {

        $inset_user_query = "INSERT INTO users SET firstname='$firstname',lastname='$lastname',username='$username',email='$email',password='$hashed_password',avatar='$avatar_name',is_admin=$is_admin";

        $inset_user_result = mysqli_query($connection, $inset_user_query);

        if (!mysqli_error($connection)) {
            $_SESSION['add-user-success'] = "New User $firstname $lastname added successfully .";
            header('location:' . ROOT_URL . 'admin/manage-user.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/add-user.php');
    die();
}
