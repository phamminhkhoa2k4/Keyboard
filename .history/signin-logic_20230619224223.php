<?php 
require 'config/database.php';


if(isset($_POST['submit'])){

    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    if(!$username_email){
        $_SESSION['signin'] = "Username or Email required";
    }elseif(!$password){
        $_SESSION['signin'] = "Password Required";
    }else{

        $fetch_user_query = "SELECT * FROM users WHERE username = '$username_email'";
    }
}else{
    header('location:' . ROOT_URL . 'signin.php');
    die();
}