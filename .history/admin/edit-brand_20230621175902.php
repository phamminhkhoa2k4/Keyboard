<?php
include 'partials/header.php';
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM brand WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $brand = mysqli_fetch_assoc($result);
} else {
    header('location:' . ROOT_URL . 'admin/manage-brand.php');
    die();
}
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Brand</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>" />
            <div class="form_control">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" id="avatar " />
            </div>
            <input type="text" placeholder="Brand">
            <textarea rows="10" placeholder="Description"></textarea>

            <button type="submit" name="submit" class="signup-btn">
                Edit Brand
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>