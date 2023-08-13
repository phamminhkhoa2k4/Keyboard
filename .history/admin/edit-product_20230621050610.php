<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $products = mysqli_fetch_assoc($result);
    }
} else {
    header('location:' . ROOT_URL . 'admin/manage-product.php');
    die();
}
?>




<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Product</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id">
            <div class="form_control">
                <label for="">Image Product No 1</label>
                <input type="file" value="<?= $products['images_no1'] ?>" name="image_no1" id=" " />
            </div>
            <input type="text" name="brand" value="<?= $products['images_no1'] ?>" placeholder="Brand" />
            <input type="text" name="name" value="<?= $products['images_no1'] ?>" placeholder="Name" />
            <input type="number" name="price" value="<?= $products['images_no1'] ?>" placeholder="Price">
            <div class="form_control">
                <label for="">Image Product No 2</label>
                <input type="file" value="<?= $products['images_no1'] ?>" name="image_no1" id=" " />
            </div>
            <div class="form_control">
                <label for="">Image Product No 3</label>
                <input type="file" value="<?= $products['images_no1'] ?>" name="image_no1" id=" " />
            </div>
            <div class="form_control">
                <label for="">Image Product No 4</label>
                <input type="file" value="<?= $products['images_no1'] ?>" name="image_no1" id=" " />
            </div>
            <div class="form_control">
                <label for="">Image Product No 5</label>
                <input type="file" value="<?= $products['images_no1'] ?>" name="image_no1" id=" " />
            </div>
            <input type="text" value="<?= $products['images_no1'] ?>" placeholder="Description Title" />
            <textarea rows="5" placeholder="Description"></textarea>
            <input type="text" name="guarantee" value="<?= $products['images_no1'] ?>" placeholder="guarantee" />
            <input type="text" name="type" value="<?= $products['images_no1'] ?>" placeholder="Type" />
            <input type="text" name="cable" value="<?= $products['images_no1'] ?>" placeholder="cable" />
            <input type="text" name="switch" value="<?= $products['images_no1'] ?>" placeholder="Switch Type" />
            <input type="text" name="size" value="<?= $products['images_no1'] ?>" placeholder="Size" />
            <input type="text" name="connect_type" value="<?= $products['images_no1'] ?>" placeholder="Connection Type" />
            <input type="text" name="color" value="<?= $products['images_no1'] ?>" placeholder="Color" />
            <input type="text" name="led_color" value="<?= $products['images_no1'] ?>" placeholder="Led Color" />
            <input type="text" name="keycap" value="<?= $products['images_no1'] ?>" placeholder="KeyCap Material" />
            <button type="submit" name="submit" class="signup-btn">
                Edit Product
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>