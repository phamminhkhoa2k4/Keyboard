<?php 
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection,$query);
    $user = mysqli_fetch_assoc($result);


    if(mysqli_num_rows($result) == 1){
        $avatar_name = $user['avatar'];
        $avatar_path = '../images' . $avatar_name;


        if($avatar_path){
            unlink($avatar_path);
        }
    }




    // sdfgkndjksfhgijdsfbgijbdnsfjgbndsfjhgn





    $delete_user_query = "DELETE FROM users WHERE id=$id";
    $delete_user_result =mysqli_query($connection,$delete_user_query);
    if(mysqli_errno($connection)){
        $_SESSION['delete-user'] = "Couldn't '{$user['firstname']} ''";
    }
}