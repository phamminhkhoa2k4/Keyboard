<?php
include './partials/header.php';

$query = "SELECT * FROM brand";
$brands = mysqli_query($connection, $query);

?>






<section class="brand">
    <div class="container brand_container">

        <div class="header-title">
            <h1>Brand</h1>
        </div>
        <?php while ($brand = mysqli_fetch_assoc($brands)) : ?>
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
                
                </div> -->
            </div>
        <?php endwhile ?>
    </div>
</section>




<?php
include './partials/footer.php';
?>