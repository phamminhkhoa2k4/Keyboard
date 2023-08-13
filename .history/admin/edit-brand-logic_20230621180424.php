<?php
require 'config/database.php';
if (isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);



    if (!$firstname || !$lastname) {
        $_SESSION['edit-user'] = "Invalid from input on edit page ";
    } elseif (!$username) {
        $_SESSION['edit-user'] = " please enter your Username ";
    } elseif (!$email) {
        $_SESSION['edit-user'] = " please enter your a valid Email ";
    } else {

        // $time = time();
        // $avatar_name = $time . $avatar['name'];
        // $avatar_tmp_name = $avatar['tmp_name'];
        // $avatar_destination_path = 'images/' . $avatar_name;



        // $allowed_files = ['png', 'jpg', 'jpeg'];
        // $extension = explode('.', $avatar_name);
        // $extension = end($extension);
        // if (in_array($extension, $allowed_files)) {
        //     if ($avatar['size'] < 100000) {

        //         move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
        //     } else {
        //         $_SESSION['edit-user'] = 'File size too big . Should be less than 1mb ';
        //     }
        // } else {
        //     $_SESSION['edit-user'] = 'File should be png , jpg or jpeg ';
        // }





        // $query = "UPDATE users SET firstname='$firstname' , lastname = '$lastname' , username = '$username' , email = '$email', is_admin=$is_admin Where id=$id LIMIT  1";
        // $result = mysqli_query($connection,$query);
        // if(mysqli_errno($connection)){
        //     $_SESSION['edit-user'] = "Failed to update user";
        // }else {
        //     $_SESSION['edit-user-success'] = "User $firstname $lastname update successfully";
        // }
        // prepare the query statement
        $query = "UPDATE users SET firstname = ?, lastname = ?, username = ?, email = ?, is_admin = ? WHERE id = ?";
        $stmt = mysqli_prepare($connection, $query);

        // bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssii", $firstname, $lastname, $username, $email, $is_admin, $id);

        // execute the prepared statement
        mysqli_stmt_execute($stmt);

        // check for errors
        if (mysqli_stmt_errno($stmt)) {
            $_SESSION['edit-user'] = "Failed to update user";
        } else {
            $_SESSION['edit-user-success'] = "User $firstname $lastname updated successfully";
        }

        // close the statement and the connection
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
}

header('location:' . ROOT_URL . 'admin/manage-user.php');
die();
