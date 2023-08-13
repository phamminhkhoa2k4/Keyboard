<?php
include './partials/header.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['delete_cart']) && ($_GET['delete_cart'] == 1)) {
    unset($_SESSION['cart']);
}

if (isset($_GET['deleteId']) && ($_GET['deleteId']) >= 0) {
    array_splice($_SESSION['cart'], $_GET['deleteId'], 1);
}

if ((isset($_POST['add_to_cart'])) && ($_POST['add_to_cart'])) {
    $image = $_POST['images_no1'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $brand = $_POST['brand'];
    $quantity = $_POST['product_qty'];

    $flag = 0;

    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
        if ($_SESSION['cart'][$i][1] == $name) {
            $flag = 1;
            $updateQuantity = $quantity + $_SESSION['cart'][$i][5];
            $_SESSION['cart'][$i][5] = $updateQuantity;
            break;
        }
    }

    if ($flag == 0) {
        $products = [$image, $name, $price, $size, $brand, $quantity];
        $_SESSION['cart'][] = $products;
    }

    var_dump($_SESSION['cart']);
}

// var_dump($_SESSION['cart']);

$totalAll = 0;

function showCheckout()
{
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        if (sizeof($_SESSION['cart']) > 0) {
            global $totalAll;
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $total = intval($_SESSION['cart'][$i][2]) * intval($_SESSION['cart'][$i][5]);
                $totalAll += $total;
                echo ' <tr>
                            <td>
                                <img src=".' . $_SESSION['cart'][$i][0] . '" alt="">
                            </td>
                            <td>' . $_SESSION['cart'][$i][1] . '</td>
                            <td>' . $_SESSION['cart'][$i][4] . '</td>
                            <td>' . $_SESSION['cart'][$i][2] . '</td>
                            <td>' . $_SESSION['cart'][$i][5] . '</td>
                        </tr> ';
            }
        } else {
            echo '
            <style>
                .checkout-table{
                    display: none;
                }
            </style>
            <div class="alert_message error container " style="text-align: center;margin-top:40px; margin-bottom: 50px;">
                <p>
                   Giỏ Hàng Đang Trống ! 
                </p>

            </div>';
        }
    }
}

$username = $_SESSION['add-checkout-data']['username'] ?? null;
$phone = $_SESSION['add-checkout-data']['phone'] ?? null;
$email = $_SESSION['add-checkout-data']['email'] ?? null;
$address = $_SESSION['add-checkout-data']['address'] ?? null;


unset($_SESSION['add-checkout-data']);
?>
<style>
    .checkout-wrapper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .checkout-form {
        display: grid;
        gap: 1rem;
    }

    td img {
        height: 80px;
        width: 80px;
    }

    .checkout-table {
        width: 100%;
        text-align: left;
        border: 1px solid rgb(0, 0, 0, 0.2);
    }

    .checkout-table th {
        padding: 0.8rem;
        border-bottom: 1px solid rgb(0, 0, 0, 0.2);

    }

    .checkout-table td {
        padding: 0.8rem;
        font-size: 16px;
    }

    .checkout-order h4 {
        margin-top: 20px;
    }


    .checkout-container {
        border: 1px solid rgb(0, 0, 0, 0.2);
        padding: 2rem;
        border-radius: 5px;
    }
</style>
<section class="checkout">
    <div class="header-title">
        <h1>checkout</h1>
    </div>
    <div class="checkout-container container">
        <div class="checkout-wrapper">
            <div class="checkout-info">
                <?php if (isset($_SESSION['add-checkout'])) :   ?>
                    <div class="alert_message error ">
                        <p>
                            <?= $_SESSION['add-checkout'];
                            unset($_SESSION['add-checkout']);
                            ?>
                        </p>

                    </div>
                <?php endif ?>
                <form method="POST" action="<?= ROOT_URL ?>admin/checkout-logic.php">
                    <div class="checkout-form">
                        <input type="hidden" name="total" value="<?= $totalAll ?>">
                        <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
                        <input type="text" name="phone" value="<?= $phone ?>" placeholder="Phone">
                        <input type="text" name="email" value="<?= $email ?>" placeholder="Email">
                        <textarea name="address" rows="5" placeholder="Address"><?= $address ?></textarea>
                    </div>
            </div>
            <div class="checkout-order">

                <table class="checkout-table">
                    <thead>
                        <th>thumbnail</th>
                        <th>name</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </thead>
                    <tbody>
                        <?php
                        showCheckout();
                        ?>
                    </tbody>
                </table>
                <hr>
                <h4>total:<span><?php
                                if (sizeof($_SESSION['cart']) > 0) {
                                    echo $totalAll;
                                } else {
                                    echo "0";
                                }
                                ?></span> </h4>
                <hr>
                <div style="margin-top: 20px;">
                    <input type="submit" name="submit" class="btn" value="Confirm Order ">
                </div>
                </form>
            </div>
        </div>
    </div>
</section>




<?php
include '../partials/footer.php';


?>