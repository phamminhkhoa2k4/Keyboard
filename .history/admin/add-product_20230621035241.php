<?php
include 'partials/header.php';
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Product</h2>
        <?php if (isset($_SESSION['add-user'])) :   ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']);
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