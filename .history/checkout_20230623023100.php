<?php
include './partials/header.php';



    <section class="checkout">
        <div class="checkout-container container">
            <div class="checkout-wrapper">
                <div class="checkout-info">
                    <div class="checkout-form">
                        <input type="text" name="username" value="" placeholder="Username">
                        <input type="text" name="phone" value="" placeholder="Phone">
                        <input type="text" name="email" value="" placeholder="Email">
                        <textarea name="address"  rows="5" placeholder="Address"></textarea>
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
</body>
</html>