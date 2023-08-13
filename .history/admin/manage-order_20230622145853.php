<?php
include 'partials/header.php';


// $query = "SELECT * FROM order";
// $orders = mysqli_query($connection, $query);

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

    .dashboard {
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

    .dashboard aside a:active {
        background: var(--color-gray-900);
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
        <?php if (isset($_SESSION['add-brand-success'])) :   ?>
            <div class="alert_message success container">
                <p>
                    <?= $_SESSION['add-brand-success'];
                    unset($_SESSION['add-brand-success']);
                    ?>
                </p>

            </div>
        <?php elseif (isset($_SESSION['edit-brand-success'])) :   ?>
            <div class="alert_message success container">
                <p>
                    <?= $_SESSION['edit-brand-success'];
                    unset($_SESSION['edit-brand-success']);
                    ?>
                </p>

            </div>
        <?php elseif (isset($_SESSION['edit-brand'])) :   ?>
            <div class="alert_message error container">
                <p>
                    <?= $_SESSION['edit-brand'];
                    unset($_SESSION['edit-brand']);
                    ?>
                </p>

            </div>
        <?php elseif (isset($_SESSION['delete-brand-success'])) :   ?>
            <div class="alert_message success container">
                <p>
                    <?= $_SESSION['delete-brand-success'];
                    unset($_SESSION['delete-brand-success']);
                    ?>
                </p>

            </div>
        <?php elseif (isset($_SESSION['delete-brand'])) :   ?>
            <div class="alert_message error container">
                <p>
                    <?= $_SESSION['delete-brand'];
                    unset($_SESSION['delete-brand']);
                    ?>
                </p>

            </div>
        <?php endif ?>
        <div class="container dashboard_container">
            <aside>
                <ul>
                    <li><a href="<?= ROOT_URL ?>admin/add-product.php">
                            <h5>Add Product</h5>
                        </a></li>
                    <li><a href="<?= ROOT_URL ?>admin/manage-product.php">
                            <h5>Manage Product</h5>
                        </a></li>
                    <li><a href=" <?= ROOT_URL ?>admin/add-user.php">
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
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-order.php" style="background: rgb(41, 41, 41);">
                            <h5>Add Order</h5>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h5>Manage Order</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <?php if (mysqli_num_rows($brands) > 0) : ?>
                    <h2>Manage Brand</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Brand</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($brand = mysqli_fetch_assoc($brands)) : ?>
                                <tr>
                                    <td>
                                        <img src=" <?= ROOT_URL . 'images/' . $brand['thumbnail'] ?>" alt="">
                            </td>
                            <td><?= $brand['brand'] ?></td>
                            <td><?= $brand['description'] ?></td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-brand.php?id=<?= $brand['id'] ?>" class="sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-brand.php?id=<?= $brand['id'] ?>" class="danger">Delete</a></td>
                            </tr>
                        <?php endwhile ?>
                        </tbody>
                        </table>
                    <?php else : ?>
                        <div class="alert_message error"><?= "No brand found" ?></div>
                    <?php endif ?>
                    </main>
        </div>
    </section>
<?php endif ?>
<?php
include '../partials/footer.php';
?>