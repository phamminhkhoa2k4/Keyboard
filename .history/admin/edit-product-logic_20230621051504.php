<?php
require 'config/database.php';


if (isset($_POST['submit'])) {
    $images_no1 = $_FILES['image_no1'];
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $images_no2 = $_FILES['image_no2'];
    $images_no3 = $_FILES['image_no3'];
    $images_no4 = $_FILES['image_no4'];
    $images_no5 = $_FILES['image_no5'];
    $description_title = filter_var($_POST['description_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $guarantee = filter_var($_POST['guarantee'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cable = filter_var($_POST['cable'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $switch = filter_var($_POST['switch'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $size = filter_var($_POST['size'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $connect_type = filter_var($_POST['connect_type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $color = filter_var($_POST['color'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $led_color = filter_var($_POST['led_color'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $keycap_material = filter_var($_POST['keycap_material'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


}