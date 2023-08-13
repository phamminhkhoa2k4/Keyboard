<?php
include './partials/header.php';
?>


<section class="slider">
    <div class="header-title">
        <h1>Home</h1>
    </div>
    <div class="container slider_wrapper">
        <div class="slider_inner">
            <img id="image" src="./images/ban-phim-akko-3098s-spongebob-0.jpg" onclick='changeImages();' alt="">
        </div>
    </div>
</section>
<section class="category_home">
    <div class=" container category_wrapper">
        <div class="category_items">
            <div class="category_list">
                <img src="./images/swich.jpg" alt="">
                <span>switch</span>
            </div>
            <div class="category_list">
                <img src="./images/Keycap.jpg" alt="">
                <span>KeyCap</span>
            </div>
            <div class="category_list">
                <img src="./images/Kit.jpg" alt="">
                <span>Kit</span>
            </div>
            <div class="category_list">
                <img src="./images/capble.jpg" alt="">
                <span>cable</span>
            </div>
            <div class="category_list">
                <img src="./images/Pads.jpg" alt="">
                <span>pads</span>
            </div>
            <div class="category_list">
                <img src="./images/Foam.jpg" alt="">
                <span>foam</span>
            </div>
        </div>
    </div>
    <div class="images_footer">
        <div class="container images_footer_slider-wrapper">
            <img src="./images/slider_footer.jpg" alt="">
        </div>
        <div class="images_footer_slider-sub">
            <h2>keyboards buying guide</h2>
            <p>Which Keychron keyboard is best for you?</p>
            <a href="./product.php">go to check</a>
        </div>
    </div>
</section>

<?php
include './partials/footer.php';
?>