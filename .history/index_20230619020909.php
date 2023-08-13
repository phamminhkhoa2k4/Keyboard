<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Web Keyboards</title>
</head>
<body>
    <header>
        <div class=" container header_container">
            <div class="logo">
                <a href="index.php">Mscience</a>
            </div>
            <form action="" class="search_container">
                <div class="search_box">
                    <input type="search" placeholder="Search" class="search_input">
                <button class="search_btn"><i class='bx bx-search-alt-2'></i></button>
                </div>
            </form>
            <div class="header-actions">
                <ul class="header-actions-items">
                    <li>
                        <a href="">
                            <i class='bx bxs-discount' ></i>
                            <span>discount</span>
                        </a>
                    </li>
                    <li>
                        <a href="./cart.php">
                            <i class='bx bx-cart'></i>
                            <span>cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bx-user-circle'></i>
                            <span>sign in</span>
                        </a>
                    </li>
                    <li class="profile">
                    <div class="avatar">
                        <img src="./images/space.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>
                
                </ul>
            </div>
        </div>
        <!-- end header site  -->
    </header>
    <nav>
        <div class="nav_container">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./product.php">Products</a></li>
                <li><a href="./brand.php">Brand</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- end nav  -->

    
    <section class="slider">
        <div class="home_heading_title">
            <h1>home</h1>
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
                    <img src="./images/ban-phim-akko-3098s-spongebob-0.jpg" alt="">
                    <span>switch</span>
                </div>
                <div class="category_list">
                    <img src="./images/ban-phim-akko-3098s-spongebob-0.jpg" alt="">
                    <span>KeyCap</span>
                </div>
                <div class="category_list">
                    <img src="./images/ban-phim-akko-3098s-spongebob-0.jpg" alt="">
                    <span>Kit</span>
                </div>
                <div class="category_list">
                    <img src="./images/ban-phim-akko-3098s-spongebob-0.jpg" alt="">
                    <span>cable</span>
                </div>
                <div class="category_list">
                    <img src="./images/ban-phim-akko-3098s-spongebob-0.jpg" alt="">
                    <span>pads</span>
                </div>
                <div class="category_list">
                    <img src="./images/ban-phim-akko-3098s-spongebob-0.jpg" alt="">
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

    <footer>
        <section class="category_buttons">
        <div class="container category_buttons_container">
            <a href="" class="category_button">Switch</a>
            <a href="" class="category_button">KeyCap</a>
            <a href="" class="category_button">Kit</a>
            <a href="" class="category_button">Cable</a>
            <a href="" class="category_button">Pads</a>
            <a href="" class="category_button">Foam</a>
        </div>
    </section>


    <footer>
        <div class="footer_socials">
            <a href="" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
            <a href="" target="_blank"><i class='bx bxl-youtube'></i></a>
            <a href="" target="_blank"><i class='bx bxl-linkedin-square' ></i></a>
            <a href="" target="_blank"><i class='bx bxl-tiktok' ></i></a>
            <a href="" target="_blank"><i class='bx bxl-instagram' ></i></a>
            <a href="" target="_blank"><i class='bx bxl-github' ></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Switch</a></li>
                    <li><a href="">KeyCap</a></li>
                    <li><a href="">Kit</a></li>
                    <li><a href="">Cable</a></li>
                    <li><a href="">Pads</a></li>
                    <li><a href="">Foam</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Suport</a></li>
                    <li><a href="">Location</a></li>
                    
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                   
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Brands</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; MScience </small>
        </div>
    </footer>
    </footer>
    
</body>
<script src="./js/app.js"></script>
</html>