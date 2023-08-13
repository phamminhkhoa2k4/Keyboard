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
                        <h5>Add Product</h5>
                    </a></li>
                <li><a href="<?= ROOT_URL ?>admin/manage-product.php">
                        <h5>Manage Product</h5>
                    </a></li>
                <li><a href="<?= ROOT_URL ?>admin/add-user.php">
                        <h5>Add User</h5>
                    </a></li>
                <li><a href="<?= ROOT_URL ?>admin/manage-user.php">
                        <h5>Manage User</h5>
                    </a></li>
                <li><a href="<?= ROOT_URL ?>admin/add-brand.php">
                        <h5>Add Brand</h5>
                    </a></li>
                <li><a href="<?= ROOT_URL ?>admin/manage-brand.php">
                        <h5>Manage Brand</h5>
                    </a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>khoa1</td>
                        <td><a href="edit-product.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-product.php" class="btn sm"></a></td>
                    </tr>
                    <tr>
                        <td>khoa1</td>
                        <td><a href="edit-product.php" class="btn sm"></a></td>
                        <td><a href="delete-product.php" class="btn sm"></a></td>
                    </tr>
                    <tr>
                        <td>khoa1</td>
                        <td><a href="edit-product.php" class="btn sm"></a></td>
                        <td><a href="delete-product.php" class="btn sm"></a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>