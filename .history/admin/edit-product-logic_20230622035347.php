<?php
require 'config/database.php';



// if (isset($_POST['submit'])) {
//     $images_no1 = $_FILES['image_no1'];
//     $brand = filter_var($_POST['brand'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
//     $images_no2 = $_FILES['image_no2'];
//     $images_no3 = $_FILES['image_no3'];
//     $images_no4 = $_FILES['image_no4'];
//     $images_no5 = $_FILES['image_no5'];
//     $description_title = filter_var($_POST['description_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $guarantee = filter_var($_POST['guarantee'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $type = filter_var($_POST['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $cable = filter_var($_POST['cable'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $switch = filter_var($_POST['switch'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $size = filter_var($_POST['size'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $connect_type = filter_var($_POST['connect_type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $color = filter_var($_POST['color'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $led_color = filter_var($_POST['led_color'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $keycap_material = filter_var($_POST['keycap_material'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//     if (!$brand) {
//         $_SESSION['edit-product'] = " please enter your Brand";
//     } elseif (!$name) {
//         $_SESSION['edit-product'] = " please enter your Name ";
//     } elseif (!$price) {
//         $_SESSION['edit-product'] = " please enter your Price";
//     } elseif (!$description_title) {
//         $_SESSION['edit-product'] = " please enter your Description Title";
//     } elseif (!$description) {
//         $_SESSION['edit-product'] = " please enter your Description";
//     } elseif (!$guarantee) {
//         $_SESSION['edit-product'] = " please enter your Guarantee";
//     } elseif (!$type) {
//         $_SESSION['edit-product'] = " please enter your Type";
//     } elseif (!$cable) {
//         $_SESSION['edit-product'] = " please enter your Cable";
//     } elseif (!$switch) {
//         $_SESSION['edit-product'] = " please enter your Switch Type";
//     } elseif (!$size) {
//         $_SESSION['edit-product'] = " please enter your Size";
//     } elseif (!$connect_type) {
//         $_SESSION['edit-product'] = " please enter your Connection Type";
//     } elseif (!$color) {
//         $_SESSION['edit-product'] = " please enter your Color";
//     } elseif (!$led_color) {
//         $_SESSION['edit-product'] = " please enter your Led Color";
//     } elseif (!$keycap_material) {
//         $_SESSION['edit-product'] = " please enter your KeyCap Material";
//     } else {
//         $time = time();
//         $avatar_name1 = $time . $images_no1['name'];
//         $avatar_name2 = $time . $images_no2['name'];
//         $avatar_name3 = $time . $images_no3['name'];
//         $avatar_name4 = $time . $images_no4['name'];
//         $avatar_name5 = $time . $images_no5['name'];
//         $avatar_tmp_name1 = $images_no1['tmp_name'];
//         $avatar_tmp_name2 = $images_no2['tmp_name'];
//         $avatar_tmp_name3 = $images_no3['tmp_name'];
//         $avatar_tmp_name4 = $images_no4['tmp_name'];
//         $avatar_tmp_name5 = $images_no5['tmp_name'];
//         $avatar_destination_path1 = '../images/' . $avatar_name1;
//         $avatar_destination_path2 = '../images/' . $avatar_name2;
//         $avatar_destination_path3 = '../images/' . $avatar_name3;
//         $avatar_destination_path4 = '../images/' . $avatar_name4;
//         $avatar_destination_path5 = '../images/' . $avatar_name5;

//         $allowed_files = ['png', 'jpg', 'jpeg'];
//         $extension1 = explode('.', $avatar_name1);
//         $extension2 = explode('.', $avatar_name2);
//         $extension3 = explode('.', $avatar_name3);
//         $extension4 = explode('.', $avatar_name4);
//         $extension5 = explode('.', $avatar_name5);

//         $extension1 = end($extension1);
//         $extension2 = end($extension2);
//         $extension3 = end($extension3);
//         $extension4 = end($extension4);
//         $extension5 = end($extension5);
//         if (in_array($extension1, $allowed_files)) {
//             if ($images_no1['size'] < 100000) {
//                 move_uploaded_file($avatar_tmp_name1, $avatar_destination_path1);
//             } else {
//                 $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
//             }
//         } else {
//             $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
//         }
//         if (in_array($extension2, $allowed_files)) {
//             if ($images_no2['size'] < 100000) {
//                 move_uploaded_file($avatar_tmp_name2, $avatar_destination_path2);
//             } else {
//                 $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
//             }
//         } else {
//             $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
//         }
//         if (in_array($extension3, $allowed_files)) {
//             if ($images_no3['size'] < 100000) {
//                 move_uploaded_file($avatar_tmp_name3, $avatar_destination_path3);
//             } else {
//                 $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
//             }
//         } else {
//             $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
//         }
//         if (in_array($extension4, $allowed_files)) {
//             if ($images_no4['size'] < 100000) {
//                 move_uploaded_file($avatar_tmp_name4, $avatar_destination_path4);
//             } else {
//                 $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
//             }
//         } else {
//             $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
//         }
//         if (in_array($extension5, $allowed_files)) {
//             if ($images_no5['size'] < 100000) {
//                 move_uploaded_file($avatar_tmp_name5, $avatar_destination_path5);
//             } else {
//                 $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
//             }
//         } else {
//             $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
//         }

//         $query = "UPDATE products SET images_no1=?, brand=?, name=?, price=?, images_no2=?, images_no3=?, images_no4=?, images_no5=?, description_title=?, description=?, guarantee=?, type=?, cable=?, switch=?, size=?, connection=?, color=?, led_color=?, keycap_material=? WHERE id=? LIMIT 1";
//         $stmt = mysqli_prepare($connection, $query);
//         mysqli_stmt_bind_param($stmt, "sssisssssssssssssssi", $avatar_name1, $brand, $name, $price, $avatar_name2, $avatar_name3, $avatar_name4, $avatar_name5, $description_title, $description, $guarantee, $type, $cable, $switch, $size, $connect_type, $color, $led_color, $keycap_material, $id);
//         mysqli_stmt_execute($stmt);

//         if (mysqli_error($connection)) {
//             $_SESSION['edit-product'] = "Couldn't update product";
//         } else {
//             $_SESSION['edit-product-success'] = "Product $name updated successfully";
//         }
//     }
// }
// // header('location:' . ROOT_URL . 'admin/manage-product.php');
// // die();
// header('location:' . ROOT_URL . 'admin/edit-product.php');
// die();




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

    if (!$brand) {
        $_SESSION['edit-product'] = " please enter your Brand";
    } elseif (!$name) {
        $_SESSION['edit-product'] = " please enter your Name ";
    } elseif (!$price) {
        $_SESSION['edit-product'] = " please enter your Price";
    } elseif (!$description_title) {
        $_SESSION['edit-product'] = " please enter your Description Title";
    } elseif (!$description) {
        $_SESSION['edit-product'] = " please enter your Description";
    } elseif (!$guarantee) {
        $_SESSION['edit-product'] = " please enter your Guarantee";
    } elseif (!$type) {
        $_SESSION['edit-product'] = " please enter your Type";
    } elseif (!$cable) {
        $_SESSION['edit-product'] = " please enter your Cable";
    } elseif (!$switch) {
        $_SESSION['edit-product'] = " please enter your Switch Type";
    } elseif (!$size) {
        $_SESSION['edit-product'] = " please enter your Size";
    } elseif (!$connect_type) {
        $_SESSION['edit-product'] = " please enter your Connection Type";
    } elseif (!$color) {
        $_SESSION['edit-product'] = " please enter your Color";
    } elseif (!$led_color) {
        $_SESSION['edit-product'] = " please enter your Led Color";
    } elseif (!$keycap_material) {
        $_SESSION['edit-product'] = " please enter your KeyCap Material";
    } else {
        $time = time();
        $avatar_name1 = $time . $images_no1['name'];
        $avatar_name2 = $time . $images_no2['name'];
        $avatar_name3 = $time . $images_no3['name'];
        $avatar_name4 = $time . $images_no4['name'];
        $avatar_name5 = $time . $images_no5['name'];
        $avatar_tmp_name1 = $images_no1['tmp_name'];
        $avatar_tmp_name2 = $images_no2['tmp_name'];
        $avatar_tmp_name3 = $images_no3['tmp_name'];
        $avatar_tmp_name4 = $images_no4['tmp_name'];
        $avatar_tmp_name5 = $images_no5['tmp_name'];
        $avatar_destination_path1 = '../images/' . $avatar_name1;
        $avatar_destination_path2 = '../images/' . $avatar_name2;
        $avatar_destination_path3 = '../images/' . $avatar_name3;
        $avatar_destination_path4 = '../images/' . $avatar_name4;
        $avatar_destination_path5 = '../images/' . $avatar_name5;

        $allowed_files = ['png', 'jpg', 'jpeg'];
        $extension1 = explode('.', $avatar_name1);
        $extension2 = explode('.', $avatar_name2);
        $extension3 = explode('.', $avatar_name3);
        $extension4 = explode('.', $avatar_name4);
        $extension5 = explode('.', $avatar_name5);

        $extension1 = end($extension1);
        $extension2 = end($extension2);
        $extension3 = end($extension3);
        $extension4 = end($extension4);
        $extension5 = end($extension5);
        if (in_array($extension1, $allowed_files)) {
            if ($images_no1['size'] < 100000) {
                move_uploaded_file($avatar_tmp_name1, $avatar_destination_path1);
            } else {
                $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
            }
        } else {
            $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
        }
        if (in_array($extension2, $allowed_files)) {
            if ($images_no2['size'] < 100000) {
                move_uploaded_file($avatar_tmp_name2, $avatar_destination_path2);
            } else {
                $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
            }
        } else {
            $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
        }
        if (in_array($extension3, $allowed_files)) {
            if ($images_no3['size'] < 100000) {
                move_uploaded_file($avatar_tmp_name3, $avatar_destination_path3);
            } else {
                $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
            }
        } else {
            $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
        }
        if (in_array($extension4, $allowed_files)) {
            if ($images_no4['size'] < 100000) {
                move_uploaded_file($avatar_tmp_name4, $avatar_destination_path4);
            } else {
                $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
            }
        } else {
            $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
        }
        if (in_array($extension5, $allowed_files)) {
            if ($images_no5['size'] < 100000) {
                move_uploaded_file($avatar_tmp_name5, $avatar_destination_path5);
            } else {
                $_SESSION['edit-product'] = 'File size too big. Should be less than 1mb.';
            }
        } else {
            $_SESSION['edit-product'] = 'File should be png, jpg or jpeg.';
        }

        $query = "UPDATE products SET  brand=?, name=?, price=?, description_title=?, description=?, guarantee=?, type=?, cable=?, switch=?, size=?, connection=?, color=?, led_color=?, keycap_material=? WHERE id=? LIMIT 1";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "sssisssssssssssssssi", $avatar_name1, $brand, $name, $price, $description_title, $description, $guarantee, $type, $cable, $switch, $size, $connect_type, $color, $led_color, $keycap_material, $id);
        mysqli_stmt_execute($stmt);

        if (mysqli_error($connection)) {
            $_SESSION['edit-product'] = "Couldn't update product";
        } else {
            $_SESSION['edit-product-success'] = "Product $name updated successfully";
        }
    }
}
// header('location:' . ROOT_URL . 'admin/manage-product.php');
// die();
header('location:' . ROOT_URL . 'admin/edit-product.php');
die();