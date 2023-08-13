<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];
    // echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;


    if (!$firstname) {
        $_SESSION['signup'] = " please enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['signup'] = " please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['signup'] = " please enter your Username ";
    } elseif (!$email) {
        $_SESSION['signup'] = " please enter your a valid Email ";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = " Password should be 8+ characters";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = " please add avatar";
    } else {

        if ($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match";
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
                $_SESSION['signup'] = "Username or Email already exist";
            } else {


                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;



                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.', $avatar_name);
                $extension = end($extension);
                if (in_array($extension, $allowed_files)) {
                    if ($avatar['size'] < 100000) {

                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['signup'] = 'File size too big . Should be less than 1mb ';
                    }
                } else {
                    $_SESSION['signup'] = 'File should be png , jpg or jpeg ';
                }
            }
            mysqli_stmt_close($stmt);
        }
    }
    // echo time();
    // var_dump($avatar);

    if ($_SESSION['signup']) {

        $_SESSION['signup-data'] = $_POST;
        header('location:' . ROOT_URL . 'signup.php');
        die();
    } else {

        $inset_user_query = "INSERT INTO users SET firstname='$firstname',lastname='$lastname',username='$username',email='$email',password='$hashed_password',avatar='$avatar_name',is_admin='0'";

        $inset_user_result = mysqli_query($connection, $inset_user_query);

        if (!mysqli_error($connection)) {
            $_SESSION['signup-success'] = "Rigistration successful . Please log in";
            header('location:' . ROOT_URL . 'signin.php');
            die();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'signup');
    die();
}
