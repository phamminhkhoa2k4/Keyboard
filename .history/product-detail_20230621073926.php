<?php
include './partials/header.php';

// if (isset($_GET['id'])) {
//     $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
//     $query = "SELECT * FROM products WHERE id=$id";
//     $result = mysqli_query($connection, $query);
//     $product = mysqli_fetch_assoc($result);
// } else {
//     header('location:' . ROOT_URL . 'index.php');
//     die();
// }
// 
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $product_query = "SELECT * FROM products WHERE id=$productId";
    $product_result = mysqli_query($connection, $product_query);
    $product = mysqli_fetch_assoc($product_result);
    // Hiển thị thông tin sản phẩm trên trang chi tiết sản phẩm
} else {
    header('Location: ' . ROOT_URL . 'index.php');
    die();
}
?>

<style>
    .quality_text {
        padding: 0 !important;
        border-radius: 0; 
    }
</style>


<section class="product_detail">
    <div class="container product_detail_container">
        <div class="detail_thumbnail_container">
            <div class="thumbnail_chief_wrapper">
                <div class="thumbnail_images_wrapper">
                    <div class="thumbnail_images">
                        <a href="#">
                            <img src="./images/<?= $product['images_no1'] ?>" alt="">
                        </a>
                    </div>
                    <button class="thumbnail_prev-btn"><i class='bx bx-chevron-left'></i></button>
                    <button class="thumbnail_next-btn"><i class='bx bx-chevron-right'></i></button>
                </div>
                <div class="extend_thumbnail-btn-wrapper">
                    <a href=""><i class='bx bx-expand-alt'></i></a>
                </div>
            </div>
            <div class="thumbnail_list-wrapper-container">
                <div class="thumbnail_list-wrapper">
                    <div class="thumbnail_list-items">
                        <div class="thumbnail_list-items-list"><a href=""><img src="./images/<?= $product['images_no2'] ?>" alt=""></a></div>
                        <div class="thumbnail_list-items-list"><a href=""><img src="./images/<?= $product['images_no3'] ?>" alt=""></a></div>
                        <div class="thumbnail_list-items-list"><a href=""><img src="./images/<?= $product['images_no4'] ?>" alt=""></a></div>
                        <div class="thumbnail_list-items-list"><a href=""><img src="./images/<?= $product['images_no5'] ?>" alt=""></a></div>
                    </div>
                    <button class="thumbnail_prev-list-btn"><i class='bx bx-chevron-left'></i></button>
                    <button class="thumbnail_next-list-btn"><i class='bx bx-chevron-right'></i></button>
                </div>
            </div>
        </div>
        <div class="detail_information_container">
            <div class="detail_information_wrapper">
                <div class="brand_information_wrapper">
                    <span><?= $product['brand'] ?></span>
                </div>
                <h1 class="detail_information_title">
                    <?= $product['name'] ?></h1>
                <div class="price_information_wrapper">
                    <p><?= $product['price'] ?><span>vnd</span></p>
                </div>
                <form action="./cart.html" class="detail_form_cart">
                    <div class="detail_form_cart_wrapper">
                        <div class="button_add_quality">
                            <input type="button" value='-' class="minus_quality">
                            <input type="number" class="quality_text" min='1' value="1" step="1">
                            <input type="button" value="+" class="plus_quality">
                        </div>
                        <button type="submit" class="add_to_cart">Add to cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container product_detail_container_footer">
        <div class="detail_description_container">
            <div class="detail_description_wrapper">
                <div class="detail_description_inner">
                    <h2 class="detail_description_heading">Mô Tả</h2>
                    <h2 class="detail_description_title">Bàn Phím Cơ AKKO 3098S Patrick</h2>
                    <p class="detail_description_content">AKKO 3098S Patrick với layout 98 phím là phiên bản rút gọn của bàn phím Full-size. Bàn phím này vẫn có cụm phím điều hướng và dãy numpad nhưng được thiết kế sát gần nhau; phím mũi tên được đặt nằm ngày dưới nút Enter và nút Numpad ép sát vào cụm phím mũi tên. Điều này đã tạo nên một mẫu bàn phím có vẻ ngoài độc đáo, đầy đủ phím nhưng chiếm ít diện tích hơn. Bàn phím được thiết kế và lấy màu chủ đạo theo tạo hình nhân vật Patrick trong bộ phim hoạt hình nổi tiếng của Mỹ: “SpongeBob SquarePants“.
                    </p>
                    <ul class="detail_description_items">
                        <li>Model: 3098S (98 keys)</li>
                        <li>Kết nối: USB Type-C , có thể tháo rời</li>
                        <li>LED nền RGB (Backlit, dạng SMT bottom không cấn switch) với nhiều chế độ</li>
                        <li>Có lót tiêu âm (FOAM) EVA dầy 3.5mm (nằm giữa plate và PCB)</li>
                        <li>Stab pre-lubed và được tinh chỉnh sẵn</li>
                    </ul>
                    <p class="detail_description_thumbnail_tutorial">
                        <img src="./images/ban-phim-akko-5108b-plus-kamado-tanjirou-1.jpg" alt="">
                    </p>
                </div>
            </div>
        </div>
        <div class="detail_specifications_container">
            <div class="detail_specifications_wrapper">
                <div class="detail_specifications_inner-header">
                    <h2>Thông Số Kỹ Thuật</h2>
                </div>
                <div class="detail_specifications_inner-body">
                    <table>
                        <tbody>
                            <tr>
                                <th>thương hiệu</th>
                                <td>akko</td>
                            </tr>
                            <tr>
                                <th>bảo hành</th>
                                <td>12 tháng</td>
                            </tr>
                            <tr>
                                <th>kiểu</th>
                                <td>bàn phím cơ</td>
                            </tr>
                            <tr>
                                <th>kết nối</th>
                                <td>usc-c</td>
                            </tr>
                            <tr>
                                <th>kiểu switch</th>
                                <td>akko cs switch = starfish</td>
                            </tr>
                            <tr>
                                <th>KÍCH THƯỚC</th>
                                <td>382x134x40 mm, Layout 98 phím</td>
                            </tr>
                            <tr>
                                <th>KIỂU KẾT NỐI</th>
                                <td>Có dây</td>
                            </tr>
                            <tr>
                                <th>MÀU SẮC</th>
                                <td>Hồng</td>
                            </tr>
                            <tr>
                                <th>MÀU SẮC ĐÈN LED</th>
                                <td>RGB</td>
                            </tr>
                            <tr>
                                <th>CHẤT LIỆU KEYCAP</th>
                                <td>Dye Subbed PBT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include './partials/footer.php';
?>