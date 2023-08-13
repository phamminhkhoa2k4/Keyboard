<?php
if (isset($_POST['submit'])) {
         $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $avatar = $_FILES['avatar'];


        if(!$firstname || !$lastname){
            $_SESSION['edit-user'] = "Invalid from input on edit page ";
        }else{
            $query = "UPDATE users SET ";
        }
}