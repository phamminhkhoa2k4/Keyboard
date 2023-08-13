<?php
include './partials/header.php';


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
    <div class="checkout-container container">
        <div class="checkout-wrapper">
            <div class="checkout-info">
                <div class="checkout-form">
                    <input type="text" name="username" value="" placeholder="Username">
                    <input type="text" name="phone" value="" placeholder="Phone">
                    <input type="text" name="email" value="" placeholder="Email">
                    <textarea name="address" rows="5" placeholder="Address"></textarea>
                </div>
            </div>
            <div class="checkout-order">
                <table class="checkout-table">
                    <thead>
                        <th>thumbnail</th>
                        <th>name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="./images/1687342183akkko.jpg" alt="">
                            </td>
                            <td>sdfsd</td>
                            <td>312</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <h4>total: </h4>
                <hr>
                <div style="margin-top: 20px;">
                    <button class="btn">Confirm Order </button>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include './partials/footer.php';


?>