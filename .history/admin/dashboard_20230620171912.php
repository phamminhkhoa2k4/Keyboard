<?php
include 'partials/header.php';
?>

<!-- neu la admin moi co the truy cap   -->
<!-- <?php if (isset($_SESSION['user_is_admin'])) : ?> 

<?php endif ?> -->




<section class="dashboard">
    <div class="container dashboard_container">
        <aside>
            <ul>
                <li><a href="<?= ROOT_URL ?>admin/add-product.php">
                        Add Product</a></li>
                <li><a href="<?= ROOT_URL ?>admin/ma">Manage Product</a></li>
                <li><a href="<?= ROOT_URL ?>admin/">Add User</a></li>
                <li><a href="<?= ROOT_URL ?>admin/">Manage User</a></li>
                <li><a href="<?= ROOT_URL ?>admin/">Add Brand</a></li>
                <li><a href="<?= ROOT_URL ?>admin/">Manage Brand</a></li>
            </ul>
        </aside>
    </div>
</section>

<?php
include '../partials/footer.php';
?>