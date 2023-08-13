<?php
include './partials/header.php';


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(isset($_GET['delete_cart']) && ($_GET['delete_cart'] == 1)){
    unset($_SESSION['cart']);
}

if(isset($_GET['deleteId']) && ($_GET['deleteId']) >= 0){
    array_splice($_SESSION['cart'],$_GET['deleteId'],1);
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

    if($flag == 0){
        $products = [$image, $name, $price, $size, $brand, $quantity];
        $_SESSION['cart'][] = $products;
    }
   
    var_dump($_SESSION['cart']);
}

// var_dump($_SESSION['cart']);

$totalAll = 0;

function showCart()
{
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        if(sizeof($_SESSION['cart']) > 0){
            global $totalAll;
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $total = intval($_SESSION['cart'][$i][2]) * intval($_SESSION['cart'][$i][5]);
                $totalAll += $total;
                echo '<tr>
                <td>
                    <figure class="itemside align-items-center">
                        <div class="aside">
                            <img src="' . $_SESSION['cart'][$i][0] . '" class="img-sm" />
                        </div>
                        <figcaption class="info">
                            <a href="#" class="title text-dark" data-abc="true">' . $_SESSION['cart'][$i][1] . '</a>
                            <p class="text-muted small">
                                SIZE: ' . $_SESSION['cart'][$i][3] . ' <br />
                                Brand:' . $_SESSION['cart'][$i][4] . '
                            </p>
                        </figcaption>
                    </figure>
                </td>
                <td>
                    <input type="number" value="' . $_SESSION['cart'][$i][5] . '" min="1" onchange="updateCartItem(0, this.value)">
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">' . $_SESSION['cart'][$i][2] . '</var>
                        <small class="text-muted">' . $total . '</small>
                    </div>
                </td>
                <td class="text-right d-none d-md-block">
                    <a href="cart.php?deleteId=' . $i . '" class="btn btn-light" data-abc="true" onclick="removeCartItem(0)">
                        Remove</a>
                </td>
            </tr>';
            }
        }else{
            echo '
            <style>
                .table{
                    display:none;
                    
                }
                .table-respe{
                    border:none;
            </style>
            <div class="alert_message error container " style="text-align: center;">
                <p>
                   Giỏ Hàng Đang Trống ! 
                </p>

            </div>';
            
           
        }
        
    
    }
}
?>

<style>
    .search_btn {
        top: -4px !important;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<section>
    <div class="header-title">
        <h1>My Cart</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                showCart();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Have coupon?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control coupon" name="" placeholder="Coupon code" />
                                    <span class="input-group-append">
                                        <button class="btn btn-primary btn-apply coupon" onclick="applyCoupon()">
                                            Apply
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Total price:</dt>
                            <dd id="total-price" class="text-right ml-3"><?php echo $totalAll; ?></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right text-danger ml-3" id="discount">- $10.00</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3" id="final-total">
                                <strong>$59.97</strong>
                            </dd>
                        </dl>
                        <hr />
                        <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true">
                            Make Purchase
                        </a>
                        <a href="product.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>






<?php
include './partials/footer.php';
?>





