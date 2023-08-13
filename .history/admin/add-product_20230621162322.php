<?php
include 'partials/header.php';



$brand = $_SESSION['add-product-data']['brand'] ?? null;
$name = $_SESSION['add-product-data']['name'] ?? null;
$price = $_SESSION['add-product-data']['price'] ?? null;
$description_title = $_SESSION['add-product-data']['description_title'] ?? null;
$description = $_SESSION['add-product-data']['description'] ?? null;
$guarantee = $_SESSION['add-product-data']['guarantee'] ?? null;
$type = $_SESSION['add-product-data']['type'] ?? null;
$cable = $_SESSION['add-product-data']['cable'] ?? null;
$switch = $_SESSION['add-product-data']['switch'] ?? null;
$size = $_SESSION['add-product-data']['size'] ?? null;
$connect_type = $_SESSION['add-product-data']['connect_type'] ?? null;
$color = $_SESSION['add-product-data']['color'] ?? null;
$led_color = $_SESSION['add-product-data']['led_color'] ?? null;
$keycap_material = $_SESSION['add-product-data']['keycap_material'] ?? null;





unset($_SESSION['add-product-data']);
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Product</h2>
        <?php if (isset($_SESSION['add-product'])) :   ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['add-product'];
                    unset($_SESSION['add-product']);
                    ?>
                </p>

            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-product-logic.php" enctype="multipart/form-data" method="POST">
            <div class="form_control">
                <label for="no1">Image Product No 1</label>
                <input type="file" name="image_no1" id="no1" />
            </div>
            <input type="text" name="brand" value="<?= $brand ?>" placeholder="Brand" />
            <input type="text" name="name" value="<?= $name ?>" placeholder="Name" />
            <input type="number" name="price" value="<?= $price ?>" placeholder="Price">
            <div class="form_control">
                <label for="no2">Image Product No 2</label>
                <input type="file" name="image_no2" id="no2" />
            </div>
            <div class="form_control">
                <label for="no3">Image Product No 3</label>
                <input type="file" name="image_no3" id="no3" />
            </div>
            <div class="form_control">
                <label for="no4">Image Product No 4</label>
                <input type="file" name="image_no4" id="no4" />
            </div>
            <div class="form_control">
                <label for="no5">Image Product No 5</label>
                <input type="file" name="image_no5" id="no5" />
            </div>
            <input type="text" name="description_title" value="<?= $description_title ?>" placeholder="Description Title" />
            <textarea rows="5" name="description" placeholder="Description"></textarea>
            <input type="text" name="guarantee" value="<?= $guarantee ?>" placeholder="guarantee" />
            <input type="text" name="type" value="<?= $type ?>" placeholder="Type" />
            <input type="text" name="cable" value="<?= $cable ?>" placeholder="Cable" />
            <input type="text" name="switch" value="<?= $switch ?>" placeholder="Switch Type" />
            <input type="text" name="size" value="<?= $size ?>" placeholder="Size" />
            <input type="text" name="connect_type" value="<?= $connect_type ?>" placeholder="Connection Type" />
            <input type="text" name="color" value="<?= $color ?>" placeholder="Color" />
            <input type="text" name="led_color" value="<?= $led_color ?>" placeholder="Led Color" />
            <input type="text" name="keycap_material" value="<?= $keycap_material ?>" placeholder="KeyCap Material" />
            <button type="submit" name="submit" class="signup-btn">
                Add Product
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>