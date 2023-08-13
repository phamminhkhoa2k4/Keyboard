<?php
include 'partials/header.php';

$firstname = $_SESSION['add--data']['firstname'] ?? null;
$lastname = $_SESSION['add--data']['lastname'] ?? null;
$username = $_SESSION['add--data']['username'] ?? null;
$email = $_SESSION['add--data']['email'] ?? null;
$createpassword = $_SESSION['add--data']['createpassword'] ?? null;

unset($_SESSION['add--data']);
?>



<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Brand</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" placeholder="Brand">
            <textarea rows="10" placeholder="Description"></textarea>
            <div class="form_control">
                <label for="avatar">Thumbnail</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <button type="submit" name="submit" class="signup-btn">
                Add Brand
            </button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>