<?php
include 'partials/header.php';

$brand = $_SESSION['add-brand-data']['brand'] ?? null;
$description = $_SESSION['add-brand-data']['description'] ?? null;


unset($_SESSION['add-brand-data']);
?>



<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Brand</h2>
        <?php if (isset($_SESSION['add-brand'])) :   ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['add-brand'];
                    unset($_SESSION['add-brand']);
                    ?>
                </p>

            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>admin/add-brand-logic.php" enctype="multipart/form-data" method="POST">
            <div class="form_control">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" />
            </div>
            <input type="text" name="brand" value="<?= $brand ?>" placeholder="Brand">
            <textarea rows="10" name="description" value="<?= $description ?>" placeholder="Description"></textarea>
            <button type="submit" name="submit" class="signup-btn">
                Add Brand
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>