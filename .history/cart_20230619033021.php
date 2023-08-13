<?php
include './partials/header.php';
?>




<style>
    top:-5px;
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<section>
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
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside">
                                                <img src="https://i.imgur.com/1eq5kmC.png" class="img-sm" />
                                            </div>
                                            <figcaption class="info">
                                                <a href="#" class="title text-dark" data-abc="true">Tshirt with round nect</a>
                                                <p class="text-muted small">
                                                    SIZE: L <br />
                                                    Brand: MAXTRA
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="number" value="1" min="1" onchange="updateCartItem(0, this.value)">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">$10.00</var>
                                            <small class="text-muted"> $9.20 each </small>
                                        </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a href="#" class="btn btn-light" data-abc="true" onclick="removeCartItem(0)">
                                            Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside">
                                                <img src="https://i.imgur.com/hqiAldf.jpg" class="img-sm" />
                                            </div>
                                            <figcaption class="info">
                                                <a href="#" class="title text-dark" data-abc="true">Flower Formal T-shirt</a>
                                                <p class="text-muted small">
                                                    SIZE: L <br />
                                                    Brand: ADDA
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="number" value="1" min="1" onchange="updateCartItem(1, this.value)">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">$15</var>
                                            <small class="text-muted"> $12 each </small>
                                        </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a href="#" class="btn btn-light btn-round" data-abc="true" onclick="removeCartItem(1)">
                                            Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside">
                                                <img src="https://i.imgur.com/UwvU0cT.jpg" class="img-sm" />
                                            </div>
                                            <figcaption class="info">
                                                <a href="#" class="title text-dark" data-abc="true">Printed White Tshirt</a>
                                                <p class="small text-muted">
                                                    SIZE:M <br />
                                                    Brand: Cantabil
                                                </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="number" value="1" min="1" onchange="updateCartItem(2, this.value)">
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">$9</var>
                                            <small class="text-muted"> $6 each</small>
                                        </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a href="#" class="btn btn-light btn-round" data-abc="true" onclick="removeCartItem(2)">Remove</a>
                                    </td>
                                </tr>
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
                            <dd id="total-price" class="text-right ml-3">$69.97</dd>
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
                        <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<script>
    // thông tin sản phẩm và giá
    let products = [{
            id: 0,
            name: 'Tshirt with round nect',
            price: 10.00
        },
        {
            id: 1,
            name: 'Flower Formal T-shirt',
            price: 15.00
        },
        {
            id: 2,
            name: 'Printed White Tshirt',
            price: 9.00
        }
    ];

    // thông tin giỏ hàng
    let cart = [{
            id: 0,
            quantity: 1
        },
        {
            id: 1,
            quantity: 1
        },
        {
            id: 2,
            quantity: 1
        }
    ];



    // cập nhật số lượng sản phẩm trong giỏ hàng và tính lại tổng giá tiền
    function updateCartItem(index, quantity) {
        cart[index].quantity = quantity;
        let totalPrice = 0;
        for (let i = 0; i < cart.length; i++) {
            totalPrice += cart[i].quantity * products[i].price;
        }
        let discountPrice = 0;
        if (couponApplied) {
            discountPrice = 10.00;
        }
        let finalPrice = totalPrice - discountPrice;
        document.getElementById("total-price").innerHTML = "$" + totalPrice.toFixed(2);
        document.getElementById("discount").innerHTML = "- $" + discountPrice.toFixed(2);
        document.getElementById("final-total").innerHTML = "<strong>$" + finalPrice.toFixed(2) + "</strong>";
    }

    // xóa sản phẩm khỏi giỏ hàng và tính lại tổng giá tiền
    function removeCartItem(index) {
        cart.splice(index, 1);
        let totalPrice = 0;
        for (let i = 0; i < cart.length; i++) {
            totalPrice += cart[i].quantity * products[i].price;
        }
        let discountPrice = 0;
        if (couponApplied) {
            discountPrice = 10.00;
        }
        let finalPrice = totalPrice - discountPrice;
        document.getElementById("total-price").innerHTML = "$" + totalPrice.toFixed(2);
        document.getElementById("discount").innerHTML = "- $" + discountPrice.toFixed(2);
        document.getElementById("final-total").innerHTML = "<strong>$" + finalPrice.toFixed(2) + "</strong>";
    }

    // áp dụng mã giảm giá và tính lại tổng giá tiền
    let couponApplied = false;

    function applyCoupon() {
        let couponCode = document.getElementsByClassName("coupon")[0].value;
        if (couponCode === "ABC123" && !couponApplied) {
            let totalPrice = 0;
            for (let i = 0; i < cart.length; i++) {
                totalPrice += cart[i].quantity * products[i].price;
            }
            let discountPrice = 10.00;
            let finalPrice = totalPrice - discountPrice;
            document.getElementById("total-price").innerHTML = "$" + totalPrice.toFixed(2);
            document.getElementById("discount").innerHTML = "- $" + discountPrice.toFixed(2);
            document.getElementById("final-total").innerHTML = "<strong>$" + finalPrice.toFixed(2) + "</strong>";
            couponApplied = true;
        }
    }
</script>



<?php
include './partials/footer.php';
?>