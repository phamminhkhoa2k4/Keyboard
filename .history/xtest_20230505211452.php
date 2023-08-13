<!-- Form để lọc sản phẩm -->
<form method="post">
    <label>Giá tiền tối đa:</label>
    <input type="number" name="max-price">
    <button type="submit" name="filter-btn">Lọc sản phẩm</button>
</form>

<!-- Danh sách sản phẩm -->
<ul>
    <?php
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100, 'category' => 'Category A'],
        ['id' => 2, 'name' => 'Product 2', 'price' => 200, 'category' => 'Category B'],
        ['id' => 3, 'name' => 'Product 3', 'price' => 150, 'category' => 'Category A'],
        ['id' => 4, 'name' => 'Product 4', 'price' => 300, 'category' => 'Category C'],
        ['id' => 5, 'name' => 'Product 5', 'price' => 250, 'category' => 'Category A'],
    ];

    // Lọc sản phẩm theo giá tiền
    if (isset($_POST['filter-btn'])) {
        $maxPrice = $_POST['max-price'];
        $products = array_filter($products, function ($product) use ($maxPrice) {
            return $product['price'] <= $maxPrice;
        });
    }

    // Hiển thị danh sách sản phẩm
    foreach ($products as $product) {
        echo '<li>' . $product['name'] . ' - ' . $product['price'] . '</li>';
    }
    ?>
</ul>