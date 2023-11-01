-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 03:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(60) NOT NULL,
  `brand_img_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_img_name`) VALUES
(1, 'Audi', 'Audi A1 den.jpg'),
(2, 'Audi', 'Audi A1 do.jpg'),
(3, 'Ford Ranger', 'Ford Ranger đen.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `email`, `message`) VALUES
('chang', 'huongduong199197@gmail.com', 'xe tốt'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hot_products`
--

CREATE TABLE `hot_products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `rate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_products`
--

INSERT INTO `hot_products` (`id`, `product_code`, `product_name`, `product_img_name`, `price`, `color`, `rate`) VALUES
(1, 'PD1001', 'Audi A1', 'Audi A1 do.jpg', '6000000000', 'Đỏ', '3'),
(2, 'PD1002', 'Ford Ranger', 'Ford Ranger nâu.png', '6000000000', 'Đen', '3'),
(3, 'PD1003', 'Hyundai Accent ', 'Hyundai Accent  đen.jpg', '6000000000', 'Đen', '4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `L` varchar(60) NOT NULL,
  `PS` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`, `L`, `PS`) VALUES
(1, 'PD1001', 'Audi A1', 'xe đẹp', 'Audi A1 den.jpg', '6000000000', '2.4', '122'),
(2, 'PD1002', 'Ford Ranger', 'Ford Ranger 2023 chính là sở hữu thiết kế đổi mới hiện đại hơn, đây là một chiếc xe tải cực kỳ nam tính. Ở Ford Ranger 2023 có sự pha trộn các yếu tố thiết kế cổ với thẩm mỹ hiện đại để t', 'Ford Ranger trắng.png', '918000000', '2.2', '213'),
(3, 'PD1003', 'Hyundai Accent', 'Hyndai Accent Hyundai Accent phiên bản mới có thiết kế uyển chuyển, sắc sảo, hiện đại và không kém phần thể thao.Sở hữu khoang nội thất rộng rãi, hoàn thiện hơn so với phiên bản cũ. Cốp thông minh, t', 'Hyundai Accent  đỏ.jpg', '540000000', '1.4', '770'),
(4, 'PD1004', 'KIA Seltos', 'xe tốt', 'KIA Seltos Xám.jpg', '6000000000', '1.6', '116'),
(5, 'PD1005', 'Lamborghino Aventador', 'Lamborghini Aventador là một chiếc xe thể thao động cơ đặt ở giữa được sản xuất bởi hãng xe Ý Lamborghini .Được ra mắt vào ngày 28 tháng 2 năm 2011 tại Geneva Motor Show, 5 tháng sau khi ra mắt tại Sant Agata', 'Lamborghino Aventador trắng.jpg', '60000000000', '6.5', '770'),
(6, 'PD1006', 'Land Rover Range Rover', 'Range rover là của hãng Land Rover, là một trong những mẫu SUV hạng sang nổi tiếng được nhiều người yêu thích đến từ Anh quốc.Chiếc Range Rover hạng sang với thiết kế đẹp, đẳng cấp, trang bị tiện ng', 'Land Rover Range Rover cam.jpg', '13 125 000 000', '1.3', '360'),
(7, 'PD1007', 'Mazda CX', 'Mazda CX được áp dụng công nghệ SkyActiv mới nhất của Mazda với mức tiêu hao nhiên liệu thấp, công suất và mô-men xoắn cao so với động cơ xăng cùng loại cho khả năng vận hành mạnh mẽ và tiết kiệm n', 'Mazda CX-3 đen.jpg', '3 500 000 000', '1.5', '110'),
(8, 'PD1008', 'Toyota Yaris', 'Toyota Yaris thu hút với cụm lưới tản nhiệt chữ X mạnh mẽ. Phần trên là một dải chrome kết nối hai cụm đèn tạo thành vòng cung ôm trọn đầu xe. Phần dưới mở rộng đổ dài đến hết cản trước. B', 'Toyota Yaris trắng.jpg', '6000000000', '1.5', '107'),
(9, 'PD1009', 'Toyota Yaris', 'Toyota Yaris thu hút với cụm lưới tản nhiệt chữ X mạnh mẽ. Phần trên là một dải chrome kết nối hai cụm đèn tạo thành vòng cung ôm trọn đầu xe. Phần dưới mở rộng đổ dài đến hết cản trước. B', 'Toyota Yaris trắng.jpg', '6000000000', '1.5', '107');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(50) NOT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '1234', '2'),
(2, 'chang', '2002', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hot_products`
--
ALTER TABLE `hot_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hot_products`
--
ALTER TABLE `hot_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
