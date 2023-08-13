<?php
include './partials/header.php';

$product_query = "SELECT * FROM products ";
$product_result = mysqli_query($connection, $product_query);
$product = mysqli_fetch_assoc($product_result);
?>





<?php if (mysqli_num_rows($product_result) == 1) : ?>
    <section class="products">
        <div class="header-title">
            <h1>Products</h1>
        </div>
        <div class="container products_container">
            <ul class="products_items">
                <li class="product">
                    <?php 
                    <a href="" class="product_link">
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
<?php endif ?>




<?php
include './partials/footer.php';
?>