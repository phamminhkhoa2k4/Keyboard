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
        <form action="<?= ROOT_URL ?>admin/edit-product-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $products['id'] ?>">
            <div class="form_control">
                <label for="no1">Image Product No 1</label>
                <input type="file" value="<?= $products['images_no1'] ?>" name="image_no1" id="no1" />
            </div>
            <input type="text" name="brand" value="<?= $products['brand'] ?>" placeholder="Brand" />
            <input type="text" name="name" value="<?= $products['name'] ?>" placeholder="Name" />
            <input type="number" name="price" value="<?= $products['price'] ?>" placeholder="Price">
            <div class="form_control">
                <label for="no2">Image Product No 2</label>
                <input type="file" value="<?= $products['images_no2'] ?>" name="image_no2" id="no2" />
            </div>
            <div class="form_control">
                <label for="no3">Image Product No 3</label>
                <input type="file" value="<?= $products['images_no3'] ?>" name="image_no3" id="no3" />
            </div>
            <div class="form_control">
                <label for="no4">Image Product No 4</label>
                <input type="file" value="<?= $products['images_no4'] ?>" name="image_no4" id="n04" />
            </div>
            <div class="form_control">
                <label for="no5">Image Product No 5</label>
                <input type="file" value="<?= $products['images_no5'] ?>" name="image_no5" id="no5" />
            </div>
            <input type="text" name="description_" value="<?= $products['description_title'] ?>" placeholder="Description Title" />
            <textarea rows="5" value="<?= $products['description'] ?>" placeholder="Description"></textarea>
            <input type="text" name="guarantee" value="<?= $products['guarantee'] ?>" placeholder="guarantee" />
            <input type="text" name="type" value="<?= $products['type'] ?>" placeholder="Type" />
            <input type="text" name="cable" value="<?= $products['cable'] ?>" placeholder="cable" />
            <input type="text" name="switch" value="<?= $products['switch'] ?>" placeholder="Switch Type" />
            <input type="text" name="size" value="<?= $products['size'] ?>" placeholder="Size" />
            <input type="text" name="connect_type" value="<?= $products['connection'] ?>" placeholder="Connection Type" />
            <input type="text" name="color" value="<?= $products['color'] ?>" placeholder="Color" />
            <input type="text" name="led_color" value="<?= $products['led_color'] ?>" placeholder="Led Color" />
            <input type="text" name="keycap_material" value="<?= $products['keycap_material'] ?>" placeholder="KeyCap Material" />
            <button type="submit" name="submit" class="signup-btn">
                Edit Product
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>