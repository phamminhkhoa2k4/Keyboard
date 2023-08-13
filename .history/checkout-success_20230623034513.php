<?php
include './partials/header.php';
?>

<section>
    <?php if (isset($_SESSION['add-checkou'])) :   ?>
        <div class="alert_message ">
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