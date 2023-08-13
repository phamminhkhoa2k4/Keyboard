<?php
include './partials/header.php';

$query = "SELECT * FROM brand";
$brands = mysqli_query($connection, $query);

?>






<section class="brand">
    <div class="container brand_container">
        <?php while ($brand = mysqli_fetch_assoc($brands)) : ?>
            <div class="header-title">
                <h1>Brand</h1>
            </div>
            <div class="brand_wrapper">
                <div class="brand_image_wrapper">
                    <img src="<?= ROOT_URL . 'images/' . $brand['thumbnail'] ?>" alt="">
                </div>
                <div class="brand_information_wrapper">
                    <h2 class="brand_title"><?= $brand['brand'] ?></h2>
                    <p class="brand_description"><?= $brand['description'] ?></p>
                    <button class="brand_move_btn">go to <?= $brand['brand'] ?></button>
                </div>
                <div class="brand_information_wrapper">
                    <h2 class="brand_title"><?= $brand['brand'] ?></h2>
                    <p class="brand_description"><?= $brand['description'] ?></p>
                    <button class="brand_move_btn">go to <?= $brand['brand'] ?></button>
                </div>
                <div class="brand_image_wrapper">
                    <img src="<?= ROOT_URL . 'images/' . $brand['thumbnail'] ?>" alt="">
                </div>
                <div class="brand_image_wrapper">
                    <img src="./images/Razer.jpg" alt="">
                </div>
                <div class="brand_information_wrapper">
                    <h2 class="brand_title">Razer</h2>
                    <p class="brand_description">The essence of game technology on every key at Razer - The top choice of gamers.</p>
                    <button class="brand_move_btn">go to products</button>
                </div>
                <div class="brand_information_wrapper">
                    <h2 class="brand_title">Logitech</h2>
                    <p class="brand_description">Perfect typing experience with Logitech mechanical keyboard - The perfect combination of aesthetics and technology.</p>
                    <button class="brand_move_btn">go to products</button>
                </div>
                <div class="brand_image_wrapper">
                    <img src="./images/Logitech.jpg" alt="">
                </div>
            </div>
        <?php endwhile ?>
    </div>
</section>




<?php
include './partials/footer.php';
?>