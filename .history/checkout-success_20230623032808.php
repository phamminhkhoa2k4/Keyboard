<?php
include './partials/header.php';
?>

<section>
    <?php if (isset($_SESSION['add-product'])) :   ?>
        <div class="alert_message error">
            <p>
                <?= $_SESSION['add-product'];
                unset($_SESSION['add-product']);
                ?>
            </p>

        </div>
    <?php endif ?>
</section>


<?php
include './partials/footer.php';
?>