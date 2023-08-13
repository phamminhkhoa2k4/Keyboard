<?php
include 'partials/header.php';
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Brand</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" placeholder="Brand">
            <textarea rows="10" placeholder="Description"></textarea>
            <div class="form_control">
                <label for="avatar">Thumbnail</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <button type="submit" name="submit" class="signup-btn">
                Edit Brand
            </button>
        </form>
    </div>
</section>
</body>

</html>