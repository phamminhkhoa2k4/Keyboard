<?php
require 'config/database.php';
if (isset($_POST['submit'])) {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
       

  
        if(!$firstname || !$lastname){
            $_SESSION['edit-user'] = "Invalid from input on edit page ";
    } elseif (!$username) {
        $_SESSION['edit-user'] = " please enter your Username ";
    } elseif (!$email) {
        $_SESSION['edit-user'] = " please enter your a valid Email ";
    } else{

       
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
