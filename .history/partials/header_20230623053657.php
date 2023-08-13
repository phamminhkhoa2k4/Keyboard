<?php
require './config/database.php';


if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT  avatar FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Web Keyboards</title>
</head>

<body>
    <div class="fix-container">
        <header>
            <div class=" container header_container">
                <div class="logo">
                    <a href="<?= ROOT_URL ?>index.php">Mscience</a>
                </div>
                <form action="" class="search_container">
                    <div class="search_box">
                        <input type="search" placeholder="Search" name="" class="search_input">
                        <button class="search_btn"><i class='bx bx-search-alt-2'></i></button>
                    </div>
                </form>
                <div class="header-actions">
                    <ul class="header-actions-items">
                        <li>
                            <a href="">
                                <i class='bx bxs-discount'></i>
                                <span>discount</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= ROOT_URL ?>admin/cart.php">
                                <i class='bx bx-cart'></i>
                                <span>cart</span>
                            </a>
                        </li>
                        <?php if (isset($_SESSION['user-id'])) : ?>
                            <li class="profile">
                                <div class="avatar">
                                    <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>" alt="">
                                </div>
                                <ul>
                                    <?php if (isset($_SESSION['user_is_admin'])) : ?> 
                                    <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                                    <?php endif ?> 
                                    <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="<?= ROOT_URL ?>signin.php">
                                    <i class='bx bx-user-circle'></i>
                                    <span>sign in</span>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <!-- end header site  -->
        </header>
        <nav>
            <div class="nav_container">
                <ul>
                    <li><a href="<?= ROOT_URL ?>index.php">Home</a></li>
                    <li><a href="<?= ROOT_URL ?>product.php">Products</a></li>
                    <li><a href="<?= ROOT_URL ?>brand.php">Brand</a></li>
                    <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end nav  -->