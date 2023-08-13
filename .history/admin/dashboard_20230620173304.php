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
                <li><a href="<?= ROOT_URL ?>admin/manage-product.php">Manage Product</a></li>
                <li><a href="<?= ROOT_URL ?>admin/add-user.php">Add User</a></li>
                <li><a href="<?= ROOT_URL ?>admin/manage-user.php">Manage User</a></li>
                <li><a href="<?= ROOT_URL ?>admin/add-brand.php">Add Brand</a></li>
                <li><a href="<?= ROOT_URL ?>admin/manage-brand.php">Manage Brand</a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                    </tr>
                    <tr>
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                    </tr>
                    <tr>
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                        <td><a href=""></a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>