<?php
include 'partials/header.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    $query = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) == 1){
        $products = mysqli_fetch_assoc($result);
    }

}else{
    header('location:' . ROOT_URL . 'admin/manage-product.php');
    die();
}
?>




<section class="form_section">
    <div class="container form_section_container">
        <h2>Edit Product</h2>
        <form action="signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="id">
            <div class="form_control">
                <label for="avatar">Image Product No 1</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <input type="text" value="" placeholder="Brand" />
            <input type="text" value="" placeholder="Name" />
            <input type="number" value="" placeholder="Price">
            <div class="form_control">
                <label for="avatar">Image Product No 2</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <div class="form_control">
                <label for="avatar">Image Product No 3</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <div class="form_control">
                <label for="avatar">Image Product No 4</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <div class="form_control">
                <label for="avatar">Image Product No 5</label>
                <input type="file" name="avatar" id="avatar " />
            </div>
            <input type="text" value="" placeholder="Description Title" />
            <textarea rows="5" placeholder="Description"></textarea>
            <input type="text" name="username" value="" placeholder="guarantee" />
            <input type="text" name="username" value="" placeholder="Type" />
            <input type="text" name="username" value="" placeholder="cable" />
            <input type="text" name="username" value="" placeholder="Switch Type" />
            <input type="text" name="username" value="" placeholder="Size" />
            <input type="text" name="username" value="" placeholder="Connection Type" />
            <input type="text" name="username" value="" placeholder="Color" />
            <input type="text" name="username" value="" placeholder="Led Color" />
            <input type="text" name="username" value="" placeholder="KeyCap Material" />
            <button type="submit" name="submit" class="signup-btn">
                Edit Product
            </button>
        </form>
    </div>
</section>


<?php
include '../partials/footer.php';
?>