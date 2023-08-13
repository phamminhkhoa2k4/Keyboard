<?php
include 'partials/header.php';



$brand = $_SESSION['add-user-data']['firstname'] ?? null;
$name = $_SESSION['add-user-data']['lastname'] ?? null;
$price = $_SESSION['add-user-data']['username'] ?? null;
$description_title = $_SESSION['add-user-data']['username'] ?? null;
$description = $_SESSION['add-user-data']['username'] ?? null;
$guarantee = $_SESSION['add-user-data']['username'] ?? null;
$type = $_SESSION['add-user-data']['username'] ?? null;
$cable = $_SESSION['add-user-data']['username'] ?? null;
$switch = $_SESSION['add-user-data']['username'] ?? null;
$size = $_SESSION['add-user-data']['username'] ?? null;
$connect_type = $_SESSION['add-user-data']['username'] ?? null;
$color = $_SESSION['add-user-data']['username'] ?? null;
$connect_type = $_SESSION['add-user-data']['username'] ?? null;




unset($_SESSION['add-user-data']);
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
            <input type="text" name="brand" value="" placeholder="Brand" />
            <input type="text" name="name" value="" placeholder="Name" />
            <input type="number" name="price" value="" placeholder="Price">
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
            <input type="text" name="description_title" value="" placeholder="Description Title" />
            <textarea rows="5" name="description" placeholder="Description"></textarea>
            <input type="text" name="guarantee" value="" placeholder="guarantee" />
            <input type="text" name="type" value="" placeholder="Type" />
            <input type="text" name="cable" value="" placeholder="Cable" />
            <input type="text" name="switch" value="" placeholder="Switch Type" />
            <input type="text" name="size" value="" placeholder="Size" />
            <input type="text" name="connect_type" value="" placeholder="Connection Type" />
            <input type="text" name="color" value="" placeholder="Color" />
            <input type="text" name="led_color" value="" placeholder="Led Color" />
            <input type="text" name="keycap_material" value="" placeholder="KeyCap Material" />
            <button type="submit" name="submit" class="signup-btn">
                Add Product
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>