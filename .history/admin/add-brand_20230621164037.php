<?php
include 'partials/header.php';

$firstname = $_SESSION['add-brand-data']['firstname'] ?? null;
$lastname = $_SESSION['add-brand-data']['lastname'] ?? null;
$username = $_SESSION['add-brand-data']['username'] ?? null;
$email = $_SESSION['add-brand-data']['email'] ?? null;
$createpassword = $_SESSION['add-brand-data']['createpassword'] ?? null;

unset($_SESSION['add-brand-data']);
?>



<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Brand</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <div class="form_control">
                <label for="avatar">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" />
            </div>
            <input type="text" placeholder="Brand">
            <textarea rows="10" placeholder="Description"></textarea>
            <button type="submit" name="submit" class="signup-btn">
                Add Brand
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>