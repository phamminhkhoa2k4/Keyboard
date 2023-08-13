<?php
include './partials/header.php';
?>

<section>
    <?php if (isset($_SESSION['add-checkout-success'])) :   ?>
        <div class="alert_message success ">
            <p>
                <?= $_SESSION['add-checkout-success'];
                unset($_SESSION['add-checkout-success']);
                ?>
            </p>

        </div>
    <?php endif ?>
</section>


<?php
include '../partials/footer.php';
?>