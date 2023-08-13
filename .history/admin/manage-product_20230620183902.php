<?php
include '../partials/header.php';
?>

<!-- neu la admin moi co the truy cap   -->
<!-- <?php if (isset($_SESSION['user_is_admin'])) : ?> 

<?php endif ?> -->

<style>
    .btn.sm {
        padding: 0.2rem 0.5rem;
        font-size: 16px;
    }

    .btn .danger {
        background: var(--color-red);
    }
    .dashboard h5{
        color:var(--color-white);
    }

    .dashboard_container {
        display: grid;
        grid-template-columns: 14rem auto;
        gap: 1rem;
        background: rgb(51, 51, 51);
        padding: 2rem;
        margin-bottom: 5rem;
        color: #ffffff;
    }

    .dashboard aside a {
        background: rgb(21, 21, 21);
        display: flex;
        gap: 1rem;
        align-items: center;
        padding: 1.6rem;
        color: var(--color-white);
    }

     .dashboard aside a:hover {
        background: rgb(31, 31, 31);
    }

    .dashboard aside a:active {
        background: var(--color-gray-900);
    }

    .dashboard aside ul li:not(:last-child) a {
        border-bottom: 1px solid #ffffff;
    }

    .dashboard main h2 {
        margin-bottom: 0 0 2rem 0;
        line-height: 1;
        color:var(--color-white);
    }

    .dashboard main table {
        width: 100%;
        text-align: left;
    }

    .dashboard main table th {
        background: rgb(51, 51, 51);
        padding: 0.8rem;
        color: var(--color-white);
    }

    .dashboard main table td {
        padding: 0.8rem;
        border-bottom: 1px solid var(--color-gray-200);
        font-size: 16px;
    }

    .dashboard main table tr:hover td {
        background: #eaeaea;
        color: var(--color-white);
        cursor: default;
        transition: var(--transition);
    }
</style>


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
            <h2>Manage Product</h2>
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
                        <td><a href="delete-product.php" class="btn danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>khoa1</td>
                        <td><a href="edit-product.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-product.php" class="btn danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>khoa1</td>
                        <td><a href="edit-product.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-product.php" class="btn danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>