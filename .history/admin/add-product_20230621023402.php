<?php
include 'partials/header.php';
?>


<section class="form_section">
    <div class="container form_section_container">
        <h2>Add Product</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <div class="form_control">
                <label for="avatar">Image Product No 1</label>
                <input type="file" name="image_no1" id="avatar " />
            </div>
            <input type="text" name="brand" value="" placeholder="Brand" />
            <input type="text"name="name" value="" placeholder="Name" />
            <input type="number" value="" placeholder="Price">
            <div class="form_control">
                <label for="avatar">Image Product No 2</label>
                <input type="file" name="image_no2" id="avatar " />
            </div>
            <div class="form_control">
                <label for="avatar">Image Product No 3</label>
                <input type="file" name="image_no3" id="avatar " />
            </div>
            <div class="form_control">
                <label for="avatar">Image Product No 4</label>
                <input type="file" name="image_no4" id="avatar " />
            </div>
            <div class="form_control">
                <label for="avatar">Image Product No 5</label>
                <input type="file" name="image_no5" id="avatar " />
            </div>
            <input type="text" value="" placeholder="Description Title" />
            <textarea rows="5" placeholder="Description"></textarea>
            <input type="text" name="username" value="" placeholder="guarantee" />
            <input type="text" name="username" value="" placeholder="Type" />
            <input type="text" name="username" value="" placeholder="Cable" />
            <input type="text" name="username" value="" placeholder="Switch Type" />
            <input type="text" name="username" value="" placeholder="Size" />
            <input type="text" name="username" value="" placeholder="Connection Type" />
            <input type="text" name="username" value="" placeholder="Color" />
            <input type="text" name="username" value="" placeholder="Led Color" />
            <input type="text" name="username" value="" placeholder="KeyCap Material" />
            <button type="submit" name="submit" class="signup-btn">
                Add Product
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>