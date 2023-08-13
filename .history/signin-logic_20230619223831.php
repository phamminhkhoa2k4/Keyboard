<?php 
require 'config/database.php';


if(isset($_POST['submit'])){

    $usernam_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}else{
    
}