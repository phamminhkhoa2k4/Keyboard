<?php 
require 'config/database.php';


if(isset($_POST['submit'])){

    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    if(!$username_email){
        $_
    }
}else{
    header('location:' . ROOT_URL . 'signin.php');
    die();
}