<?php
include 'partials/header.php';

$current_admin_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE NOT id = $current_admin_id";
$users = mysqli_query($connection, $query);
?>




<style>
    .sm {
        background: var(--color-green);
        padding: 0.4rem 0.8rem;
        font-size: 16px;
        border-radius: 7px;
    }

    .danger {
        background: var(--color-red);
        padding: 0.4rem 0.8rem;
        font-size: 16px;
        border-radius: 7px;
    }
    .dashboard{
        margin-top: 216px;
    }
    .dashboard h5 {
        color: var(--color-white);
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
        background: rgb(41, 41, 41);
    }

    .dashboard aside a .active {
        background: rgb(41, 41, 41);

    }

    .dashboard aside ul li:not(:last-child) a {
        border-bottom: 1px solid #ffffff;
    }

    .dashboard main h2 {
        margin-bottom: 0 0 2rem 0;
        line-height: 1;
        color: var(--color-white);
    }

    .dashboard main table {
        width: 100%;
        text-align: left;
    }

    .dashboard main table th {
        background: rgb(31, 31, 31);
        padding: 0.8rem;
        color: var(--color-white);
    }

    .dashboard main table td {
        padding: 0.8rem;
        border-bottom: 1px solid var(--color-gray-200);
        font-size: 16px;
    }

    .dashboard main table tr:hover td {
        background: rgb(41, 41, 41);
        color: var(--color-white);
        cursor: default;
        transition: var(--transition);
    }

    td img {
        width: 70px;
        height: 70px;
    }
</style>

<?php if (isset($_SESSION['user_is_admin'])) : ?>
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
                    <li><a href="<?= ROOT_URL ?>admin/manage-user.php" style="background: rgb(41, 41, 41);">
                            <h5>Manage User</h5>
                        </a></li>
                    <li><a href=" <?= ROOT_URL ?>admin/add-brand.php">
                            <h5>Add Brand</h5>
                        </a></li>
                    <li><a href="<?= ROOT_URL ?>admin/manage-brand.php">
                            <h5>Manage Brand</h5>
                        </a></li>
                </ul>
            </aside>
            <main>
                <h2>Manage Brand</h2>
                <table>
                    <thead>
                        <tr>
                            <th>avatar</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($user = mysqli_fetch_assoc($users)) : ?>
                        <tr>
                            <td>
                                <img src="../images/1687186584tải xuống.jpg" alt="">
                            </td>
                            <td>pham minh khoa</td>
                            <td>Mscience</td>
                            <td><a href="edit-product.php" class="sm">Edit</a></td>
                            <td><a href="delete-product.php" class="danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </main>
        </div>
    </section>

<?php endif ?>

<?php
include '../partials/footer.php';
?>