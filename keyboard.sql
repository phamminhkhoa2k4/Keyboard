-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2023 lúc 02:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `keyboard`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `thumbnail`, `brand`, `description`) VALUES
(7, '1687353531akkko.jpg', 'AKKO', 'Experience more exciting gaming with Akko mechanical keyboard - The perfect choice for true gamers.'),
(8, '1687377386Keychron.jpg', 'Keychron', 'Conquer all challenges with Keychron mechanical keyboard - The optimal choice for work and play.'),
(9, '1687377416Razer.jpg', 'Razer', 'The essence of game technology on every key at Razer - The top choice of gamers.'),
(10, '1687377457Logitech.jpg', 'Logitech', 'Perfect typing experience with Logitech mechanical keyboard - The perfect combination of aesthetics and technology.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `username`, `phone`, `email`, `address`, `total`) VALUES
(1, 'eterte', 'tertert', 'erterwt', 'erterwterwt', 0),
(2, 'dsfsdf', 'fdsf', 'kfdgd@gmail.com', 'sdfsadf', 0),
(3, 'hfgh', 'fghfgh', 'khoapham280@gmail.com', 'gfhfghfg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `thumbnail`, `name`, `brand`, `price`, `quantity`) VALUES
(1, 1, './images/16873534091687337761swich.jpg', 'asda', 'AKKO', 12312, 5),
(2, 2, './images/16873534091687337761swich.jpg', 'asda', 'AKKO', 12312, 10),
(3, 3, './images/16873534091687337761swich.jpg', 'asda', 'AKKO', 12312, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_no1` varchar(255) NOT NULL,
  `price1` int(11) NOT NULL,
  `quantity1` int(11) NOT NULL,
  `product_no2` varchar(255) NOT NULL,
  `price2` int(11) NOT NULL,
  `quantity2` int(11) NOT NULL,
  `product_no3` varchar(255) NOT NULL,
  `price3` int(11) NOT NULL,
  `quantity3` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id`, `product_no1`, `price1`, `quantity1`, `product_no2`, `price2`, `quantity2`, `product_no3`, `price3`, `quantity3`, `total`, `username`, `phone`, `email`, `address`) VALUES
(3, 'jghjghjhjgh', 4231423, 324234, 'ghjghj', 4234, 234234, 'sdfsdf', 32423, 43223, 0, 0, 'fsdfsdf', 'sdfdws', 'fdsdfdsf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `images_no1` varchar(255) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `images_no2` varchar(255) NOT NULL,
  `images_no3` varchar(255) NOT NULL,
  `images_no4` varchar(255) NOT NULL,
  `images_no5` varchar(255) NOT NULL,
  `description_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `guarantee` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cable` varchar(255) NOT NULL,
  `switch` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `led_color` varchar(255) NOT NULL,
  `keycap_material` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `images_no1`, `brand`, `name`, `price`, `images_no2`, `images_no3`, `images_no4`, `images_no5`, `description_title`, `description`, `guarantee`, `type`, `cable`, `switch`, `size`, `connection`, `color`, `led_color`, `keycap_material`) VALUES
(13, '16873534091687337761swich.jpg', 'AKKO', 'asda', 12312, '16873534091687337761swich.jpg', '16873534091687337761swich.jpg', '16873534091687337761swich.jpg', '16873534091687337761swich.jpg', 'fsdfsdf', 'cbfdgh', 'dfsdf', 'sdfsdfsd', 'fsdfsdf', 'dfsdfsd', 'sdfsd', 'dsfsdf', 'dsfsdf', 'sdfsdff', 'sdfsdfsd'),
(14, '1687474786demo.jpg', 'akaadasd', 'aaaa', 123123, '1687474786demo.jpg', '1687474786demo.jpg', '1687474786demo.jpg', '1687474786demo.jpg', 'sdfsdaf', 'sdfsadfsadf', 'sadfsadf', 'sdfsadf', 'sadfsadf', 'asdfsadfsd', 'fsdafasdf', 'sadfsadf', 'sadfsadfsad', 'fsdfsadf', 'sadfsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(11, 'pham ', 'khoa', 'mscience', 'khoapham280@gmail.com', '$2y$10$2nRKayQ8reDexjkGmuQlfOLCSxRYEtacfkT0a1/QfMWL19Wr2EghO', '16873278741687186703tải xuống.jpg', 1),
(12, 'k1', 'k12', 'k1k1', 'k1@gmail.com', '$2y$10$7a7tCGgFIJxAm4x0/W3hle5whWiu..forMs78cP0Y1ttwx6oD1mV.', '1687337761swich.jpg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
