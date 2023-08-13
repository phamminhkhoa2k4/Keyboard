<?php 
require 'partials/.php';
 if(isset($_GET['search']) && isset($_GET['submit'])){
    $search = filter_var($_GET['search'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = "SELECT * FROM products WHERE name LIKE '%$search%' ORDER BY id DESC";
    $Product = mysqli_query($connection,$query);

 }else{
    header('location:'.ROOT_URL .'product.php');
 }


?>






<section class="products">
    <div class="header-title">
        <h1>Products</h1>
    </div>
    <div class="container products_container">
        <ul class="products_items">
            <?php while ($product = mysqli_fetch_assoc($product_result)) { ?>
                <li class="product">

                    <a href="<?php ROOT_URL ?>product-detail.php?id=<?= $product['id'] ?>" class="product_link">

                        <div class="product_images"><img src="./images/<?= $product['images_no1'] ?>" alt=""></div>
                        <div class="product_title">
                            <h3><?= $product['name'] ?></h3>
                        </div>
                        <div class="product_brand">
                            <h4><?= $product['brand'] ?></h4>
                        </div>
                        <div class="product_price">
                            <h5><?= $product['price'] ?></h5>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <!-- <div class="pagination">
                <button class="pagination_prev-btn">Next</button>
                <ul class="pagination_items">
                    <li class="active" value="1">1</li>
                    <li value="2">2</li>
                    <li value="3">3</li>
                    <li value="4">4</li>
                    <li value="5">5</li>
                    <li value="6">6</li>
                </ul>
                <button class="pagination_next-btn">Prev</button>
            </div> -->
    </div>
</section>




<?php
include './partials/footer.php';
?>