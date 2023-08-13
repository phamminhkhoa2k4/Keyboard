<?php
include 'partials/header.php';
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM brand WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if (mysqli_fetch_assoc($result) == 1) {
        $brand = mysqli_fetch_assoc($result);
    }
} else {
    header('location:' . ROOT_URL . 'admin/manage-brand.php');
    die();
}
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Brand</h2>
        <form action="<?= ROOT_URL ?>admin/edit-brand-logic.php" enctype="multipart/form-data" method="POST">
            <?php if (isset($brand)) : ?>
                <input type="hidden" name="id" value="<?= $brand['id'] ?>" />
            <?php endif; ?>
            <div class="form_control">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" value="<?= $brand['thumbnail'] ?>" name="thumbnail" id="thumbnail " />
            </div>
            <input type="text" name="brand" value="<?= $brand['brand'] ?>" placeholder="Brand">
            <textarea rows="10" name="description" placeholder="Description"><?= $brand['description'] ?></textarea>
            <button type="submit" name="submit" class="signup-btn">
                Edit Brand
            </button>
        </form>
    </div>
</section>
<h1><</h1>

<?php
include '../partials/footer.php';
?>