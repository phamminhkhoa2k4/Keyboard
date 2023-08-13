<?php 
require 'config/database.php';
 if(isset($_GET['search']) && isset($_GET['submit'])){
    $search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = "SELECT * FROM Products WHERE name LIKE '%$search%' ORDER BY id DESC";
    $Product = mysqli_query($connection,$query);

 }else{
    header('location:' .')
 }