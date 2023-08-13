<?php
include './partials/header.php';

$product_query = "SELECT * FROM products ";
$product_result = mysqli_query($connection,$product_query);
$product = mysqli_fetch_assoc($product_result);
?>





<?php if(mysqli_num_rows($product_result) == 1) : ?>
<section class="products">
    <div class="header-title">
        <h1>Products</h1>
    </div>
    <div class="container products_container">
        <ul class="products_items">
            <li class="product">
                <a href="" class="product_link">
                    <div class="product_images"><img src="./images/<?= $product['ima']?>" alt=""></div>
                    <div class="product_title">
                        <h3>Bàn phím AKKO 5108B Plus Demon Slayer - Kamado Tanjirou</h3>
                    </div>
                    <div class="product_brand">
                        <h4>AKKO</h4>
                    </div>
                    <div class="product_price">
                        <h5>2.890.000</h5>
                    </div>
                </a>
            </li>
            
        </ul>
        <div class="pagination">
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
        </div>
    </div>
</section>




<?php
include './partials/footer.php';
?>