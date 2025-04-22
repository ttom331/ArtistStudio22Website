-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2025 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lisaart2`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `print_ID` int(11) DEFAULT NULL,
  `print_Name` varchar(255) DEFAULT NULL,
  `print_Image` varchar(255) DEFAULT NULL,
  `print_Price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `basket_ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`print_ID`, `print_Name`, `print_Image`, `print_Price`, `quantity`, `basket_ID`, `user_id`) VALUES
(3, 'Badger', 'Badger-on-log.jpg', 33.99, 1, 11, 0),
(3, 'Badger', 'Badger-on-log.jpg', 33.99, 1, 13, 0),
(2, 'Harriet Hare', 'Hare---Focused.jpg', 33.99, 1, 50, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 127, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 128, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 129, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 131, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 11, 132, 0),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 1, 140, 0),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 1, 141, 0),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 1, 142, 7),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 143, 7),
(5, 'Foraging Red Squirrel', 'Foraging---Red-Squirrel.jpg', 33.99, 1, 144, 7),
(6, 'Owl', 'Peeking---Barn-Owl.jpg', 33.99, 1, 145, 7),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 2, 149, 8),
(12, 'Busy-Bee', 'Busy-Bee.jpg', 33.99, 1, 150, 8),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 1, 151, 0),
(1, 'Badger', 'Badger-on-log.jpg', 33.99, 1, 152, 0),
(4, 'Dinky Duckling', 'Dinky-Duckling.jpg', 33.99, 1, 155, 0),
(9, 'Sidney Sebright', 'Sidney-Sebright.jpg', 33.99, 3, 173, 10),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 1, 177, 0),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 2, 178, 0),
(5, 'Foraging Red Squirrel', 'Foraging---Red-Squirrel.jpg', 33.99, 1, 179, 0),
(7, 'Wild Rabbit', 'Wild-Rabbit.jpg', 33.99, 1, 181, 0),
(8, 'Partridge', 'Partridge.jpg', 33.99, 1, 182, 0),
(3, 'Puffin on rocks', 'Contemplation---Puffin-on-rocks.jpg', 33.99, 1, 183, 0),
(8, 'Partridge', 'Partridge.jpg', 33.99, 1, 184, 0),
(6, 'Owl', 'Peeking---Barn-Owl.jpg', 33.99, 1, 185, 0),
(3, 'Puffin on rocks', 'Contemplation---Puffin-on-rocks.jpg', 33.99, 1, 186, 0),
(6, 'Owl', 'Peeking---Barn-Owl.jpg', 33.99, 1, 187, 0),
(8, 'Partridge', 'Partridge.jpg', 33.99, 1, 188, 0),
(11, 'Emrys Elephant', 'Emrys-Elephant.jpg', 33.99, 1, 190, 0),
(5, 'Foraging Red Squirrel', 'Foraging---Red-Squirrel.jpg', 33.99, 1, 191, 0),
(7, 'Wild Rabbit', 'Wild-Rabbit.jpg', 33.99, 1, 192, 0),
(11, 'Emrys Elephant', 'Emrys-Elephant.jpg', 33.99, 1, 193, 0),
(10, 'Touchdown Kingfisher', 'Touchdown---Kingfisher.jpg', 33.99, 1, 194, 0),
(9, 'Sidney Sebright', 'Sidney-Sebright.jpg', 33.99, 1, 195, 0),
(7, 'Wild Rabbit', 'Wild-Rabbit.jpg', 33.99, 1, 196, 0),
(11, 'Emrys Elephant', 'Emrys-Elephant.jpg', 33.99, 1, 197, 0),
(3, 'Puffin on rocks', 'Contemplation---Puffin-on-rocks.jpg', 33.99, 1, 198, 0),
(10, 'Touchdown Kingfisher', 'Touchdown---Kingfisher.jpg', 33.99, 1, 199, 0),
(8, 'Partridge', 'Partridge.jpg', 33.99, 1, 200, 0),
(5, 'Foraging Red Squirrel', 'Foraging---Red-Squirrel.jpg', 33.99, 1, 201, 0),
(12, 'Busy-Bee', 'Busy-Bee.jpg', 33.99, 1, 202, 0),
(11, 'Emrys Elephant', 'Emrys-Elephant.jpg', 33.99, 1, 204, 0),
(9, 'Sidney Sebright', 'Sidney-Sebright.jpg', 33.99, 1, 206, 0),
(12, 'Busy-Bee', 'Busy-Bee.jpg', 33.99, 1, 209, 0),
(2, 'Bashful Fox', 'Bashful---Fox.jpg', 33.99, 1, 210, 0),
(9, 'Sidney Sebright', 'Sidney-Sebright.jpg', 33.99, 1, 211, 0),
(11, 'Emrys Elephant', 'Emrys-Elephant.jpg', 33.99, 1, 212, 0),
(7, 'Wild Rabbit', 'Wild-Rabbit.jpg', 33.99, 1, 213, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 214, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 215, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 216, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 217, 0),
(2, '4 x Premium Xmas cards', 'IMG_2694.jpg', 12.50, 1, 218, 0),
(6, 'Owl', 'Peeking---Barn-Owl.jpg', 33.99, 1, 219, 0),
(6, 'Owl', 'Peeking---Barn-Owl.jpg', 33.99, 1, 220, 0),
(8, 'Partridge', 'Partridge.jpg', 33.99, 1, 221, 0),
(6, 'Owl', 'Peeking---Barn-Owl.jpg', 33.99, 1, 222, 0),
(3, 'Puffin on rocks', 'Contemplation---Puffin-on-rocks.jpg', 33.99, 1, 223, 0),
(11, 'Emrys Elephant', 'Emrys-Elephant.jpg', 33.99, 1, 224, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 225, 0),
(4, 'Dinky Duckling', 'Dinky-Duckling.jpg', 33.99, 1, 226, 0),
(12, 'Busy-Bee', 'Busy-Bee.jpg', 33.99, 1, 227, 0),
(7, 'Wild Rabbit', 'Wild-Rabbit.jpg', 33.99, 1, 228, 0),
(2, '4 x Premium Xmas cards', 'IMG_2694.jpg', 12.50, 1, 229, 0),
(2, '4 x Premium Xmas cards', 'IMG_2694.jpg', 12.50, 1, 230, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 231, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 232, 0),
(2, '4 x Premium Xmas cards', 'IMG_2694.jpg', 12.50, 1, 235, 0),
(2, '4 x Premium Xmas cards', 'IMG_2694.jpg', 12.50, 1, 236, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 247, 0),
(1, '5 x Premium Animal Christmas cards', 'IMG_2644.jpg', 15.00, 1, 271, 0),
(1, 'Badger', 'Badger-on-log.jpg', 33.99, 1, 274, 1),
(12, 'Busy-Bee', 'Busy-Bee.jpg', 33.99, 1, 281, 1),
(17, '\'Pheasant\' Original Drawing', 'pheasantorgmounted.jpg', 199.99, 1, 321, 22),
(18, '\'Concentration\' (Fox) Original Drawing', 'concentrationfoxmounted.jpg', 199.99, 1, 322, 22),
(5, 'Foraging Red Squirrel', 'Foraging---Red-Squirrel.jpg', 33.99, 1, 323, 22);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_total` decimal(6,2) NOT NULL,
  `order_Status` varchar(255) NOT NULL,
  `order_address1` varchar(255) NOT NULL,
  `order_address2` varchar(255) NOT NULL,
  `town` varchar(155) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_ID` int(12) NOT NULL,
  `order_Date` datetime NOT NULL,
  `order_Discount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_total`, `order_Status`, `order_address1`, `order_address2`, `town`, `postcode`, `user_id`, `order_ID`, `order_Date`, `order_Discount`) VALUES
(67.98, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 1, 19, '2024-11-11 14:59:09', 0),
(169.95, 'Paid', '22 roe avenue', '22', '0', 'BA22 8SD', 1, 20, '2024-11-11 15:05:18', 0),
(12.50, 'Paid', '22 roe avenue', '22', '0', 'BA22 8SD', 7, 21, '2024-11-11 16:59:48', 0),
(116.97, 'Paid', '22 roe avenue', '22', '0', 'BA22 8SD', 7, 22, '2024-11-11 17:26:23', 0),
(95.48, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 1, 23, '2024-11-12 12:16:08', 0),
(58.00, 'Paid', '22 roe avenue', '', 'Yeovil', 'BA22 8SD', 8, 24, '2024-11-12 12:39:37', 0),
(15.00, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 1, 25, '2024-11-25 11:03:28', 0),
(48.99, 'Paid', '22 roe avenue', 'xcxcxcx', 'yeo', 'BA22 8SD', 1, 26, '2024-12-10 11:52:23', 0),
(15.00, 'Paid', '22 roe avenue', 'gfgfg', 'Yeovil', 'BA22 8SD', 1, 27, '2024-12-10 11:56:34', 0),
(15.00, 'Paid', '22 roe avenue', 'gfgfg', 'Yeovil', 'BA22 8SD', 1, 28, '2024-12-10 11:56:57', 0),
(101.97, 'Paid', '22 roe avenue', '22', 'yeo', 'BA22 8SD', 1, 29, '2024-12-10 12:11:32', 0),
(12.50, 'Paid', '22 roe avenue', '33', 'Yeovil', 'BA22 8SD', 1, 30, '2025-01-02 11:55:07', 0),
(373.89, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 1, 31, '2025-03-05 12:01:33', 0),
(768.84, 'Paid', '22 roe avenue', 'w', 'w', 'w', 1, 32, '2025-03-11 00:11:37', 0),
(80.48, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 1, 33, '2025-03-11 14:39:47', 0),
(67.98, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 22, 34, '2025-03-13 12:31:59', 0),
(48.99, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 22, 35, '2025-03-13 12:48:57', 0),
(33.99, 'Paid', '22', '22', '22', '22', 22, 36, '2025-03-14 00:15:56', 0),
(33.99, 'Paid', '22', '22', '22', '22', 22, 37, '2025-03-14 00:38:27', 0),
(101.97, 'Paid', '22 Roe Avenue', '22', 'Yeovil', 'BA22 8SD', 22, 38, '2025-03-15 12:43:42', 0),
(139.00, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 22, 39, '2025-03-15 14:24:13', 0),
(31.00, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 22, 40, '2025-03-15 14:48:08', 10),
(136.00, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 22, 41, '2025-03-16 23:42:24', 10),
(108.00, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 23, 42, '2025-03-17 15:42:44', 10),
(82.98, 'Paid', '22 Roe Avenue', '22', 'Yeovil', 'BA22 8SD', 22, 43, '2025-03-21 16:39:36', 0),
(75.00, 'Paid', '22 roe avenue', '22', 'Yeovil', 'BA22 8SD', 22, 44, '2025-03-22 11:56:52', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderitemid` int(11) NOT NULL,
  `print_Image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_ID` int(8) NOT NULL,
  `print_ID` int(11) NOT NULL,
  `print_Name` varchar(255) NOT NULL,
  `print_Price` decimal(10,2) NOT NULL,
  `quantity` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderitemid`, `print_Image`, `user_id`, `order_ID`, `print_ID`, `print_Name`, `print_Price`, `quantity`) VALUES
(111, 'Touchdown---Kingfisher.jpg', 1, 19, 10, 'Touchdown Kingfisher', 33.99, 1),
(112, 'Dinky-Duckling.jpg', 1, 19, 4, 'Dinky Duckling', 33.99, 1),
(113, 'Touchdown---Kingfisher.jpg', 1, 20, 10, 'Touchdown Kingfisher', 33.99, 1),
(114, 'Dinky-Duckling.jpg', 1, 20, 4, 'Dinky Duckling', 33.99, 1),
(115, 'Touchdown---Kingfisher.jpg', 1, 20, 10, 'Touchdown Kingfisher', 33.99, 3),
(116, 'IMG_2694.jpg', 7, 21, 2, '4 x Premium Xmas cards', 12.50, 1),
(117, 'Bashful---Fox.jpg', 7, 22, 2, 'Bashful Fox', 33.99, 1),
(118, 'IMG_2644.jpg', 7, 22, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(119, 'Foraging---Red-Squirrel.jpg', 7, 22, 5, 'Foraging Red Squirrel', 33.99, 1),
(120, 'Peeking---Barn-Owl.jpg', 7, 22, 6, 'Owl', 33.99, 1),
(121, 'Wild-Rabbit.jpg', 1, 23, 7, 'Wild Rabbit', 33.99, 1),
(122, 'IMG_2644.jpg', 1, 23, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(123, 'IMG_2694.jpg', 1, 23, 2, '4 x Premium Xmas cards', 12.50, 1),
(124, 'Emrys-Elephant.jpg', 1, 23, 11, 'Emrys Elephant', 33.99, 1),
(125, 'IMG_2644.jpg', 8, 24, 1, '5 x Premium Animal Christmas cards', 15.00, 2),
(126, 'Busy-Bee.jpg', 8, 24, 12, 'Busy-Bee', 33.99, 1),
(127, 'IMG_2644.jpg', 1, 25, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(128, 'IMG_2644.jpg', 1, 27, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(129, 'IMG_2644.jpg', 1, 28, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(130, 'Bashful---Fox.jpg', 1, 29, 2, 'Bashful Fox', 33.99, 3),
(131, 'IMG_2694.jpg', 1, 30, 2, '4 x Premium Xmas cards', 12.50, 1),
(132, 'Wild-Rabbit.jpg', 1, 31, 7, 'Wild Rabbit', 33.99, 11),
(133, 'Wild-Rabbit.jpg', 1, 32, 7, 'Wild Rabbit', 33.99, 1),
(134, 'Peeking---Barn-Owl.jpg', 1, 33, 6, 'Owl', 33.99, 1),
(135, 'Foraging---Red-Squirrel.jpg', 1, 33, 5, 'Foraging Red Squirrel', 33.99, 1),
(136, 'IMG_2694.jpg', 1, 33, 2, '4 x Premium Xmas cards', 12.50, 1),
(137, 'Bashful---Fox.jpg', 22, 34, 2, 'Bashful Fox', 33.99, 2),
(138, 'IMG_2644.jpg', 22, 35, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(139, 'Badger-on-log.jpg', 22, 35, 1, 'Badger', 33.99, 1),
(140, 'Foraging---Red-Squirrel.jpg', 22, 36, 5, 'Foraging Red Squirrel', 33.99, 1),
(141, 'Badger-on-log.jpg', 22, 37, 1, 'Badger', 33.99, 1),
(142, 'Dinky-Duckling.jpg', 22, 38, 4, 'Dinky Duckling', 33.99, 2),
(143, 'Sidney-Sebright.jpg', 22, 38, 9, 'Sidney Sebright', 33.99, 1),
(144, 'Wild-Rabbit.jpg', 22, 39, 7, 'Wild Rabbit', 33.99, 2),
(145, 'Foraging---Red-Squirrel.jpg', 22, 39, 5, 'Foraging Red Squirrel', 33.99, 1),
(146, '6cardbirdsandinsects.jpg', 22, 39, 4, '6 x Premium Wildlife Cards (Birds & Insects)', 17.99, 1),
(147, 'Bashful---Fox.jpg', 22, 39, 2, 'Bashful Fox', 33.99, 1),
(148, 'Peeking---Barn-Owl.jpg', 22, 40, 6, 'Owl', 33.99, 1),
(149, 'Bashful---Fox.jpg', 22, 41, 2, 'Bashful Fox', 33.99, 1),
(150, 'Foraging---Red-Squirrel.jpg', 22, 41, 5, 'Foraging Red Squirrel', 33.99, 1),
(151, 'Emrys-Elephant.jpg', 22, 41, 11, 'Emrys Elephant', 33.99, 2),
(152, 'IMG_2644.jpg', 22, 41, 1, '5 x Premium Animal Christmas cards', 15.00, 1),
(153, 'Badger-on-log.jpg', 23, 42, 1, 'Badger', 33.99, 1),
(154, 'Wild-Rabbit.jpg', 23, 42, 7, 'Wild Rabbit', 33.99, 2),
(155, '6cardbirdsandinsects.jpg', 23, 42, 4, '6 x Premium Wildlife Cards (Birds & Insects)', 17.99, 1),
(156, 'Emrys-Elephant.jpg', 22, 43, 11, 'Emrys Elephant', 33.99, 2),
(157, '6cardbirdsandinsects.jpg\r\n', 22, 43, 14, '6 x Premium Wildlife Cards (Birds & Insects)', 15.00, 1),
(158, 'Badger-on-log.jpg', 22, 44, 1, 'Badger', 33.99, 2),
(159, 'IMG_2644.jpg', 22, 44, 13, '5 x Premium Animal Christmas cards\r\n', 15.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `printcard`
--

CREATE TABLE `printcard` (
  `print_ID` int(11) NOT NULL,
  `print_Name` varchar(100) NOT NULL,
  `print_Desc` varchar(255) NOT NULL,
  `print_Price` decimal(6,2) NOT NULL,
  `print_Stock` int(11) NOT NULL,
  `print_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `printcard`
--

INSERT INTO `printcard` (`print_ID`, `print_Name`, `print_Desc`, `print_Price`, `print_Stock`, `print_Image`) VALUES
(1, '5 x Premium Animal Christmas cards', '148mm square cards with white envelopes, professionally printed on 300gsm Trucard. Blank inside card.', 15.00, 1000, 'IMG_2644.jpg'),
(4, '6 x Premium Wildlife Cards (Birds & Insects)', '148mm square cards with kraft envelopes, featuring scans of my original drawings, professionally printed on 300gsm Trucard.Blank inside.', 17.99, 400, '6cardbirdsandinsects.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prints`
--

CREATE TABLE `prints` (
  `print_ID` int(11) NOT NULL,
  `print_Name` varchar(100) NOT NULL,
  `print_Desc` varchar(2000) NOT NULL,
  `print_Price` decimal(6,2) NOT NULL,
  `print_Stock` varchar(50) NOT NULL,
  `print_Image` varchar(255) NOT NULL,
  `category` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prints`
--

INSERT INTO `prints` (`print_ID`, `print_Name`, `print_Desc`, `print_Price`, `print_Stock`, `print_Image`, `category`) VALUES
(1, 'Badger', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Badger-on-log.jpg', 'print'),
(2, 'Bashful Fox', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Bashful---Fox.jpg', 'print'),
(3, 'Puffin on rocks', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '', 'Contemplation---Puffin-on-rocks.jpg', 'print'),
(4, 'Dinky Duckling', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Dinky-Duckling.jpg', 'print'),
(5, 'Foraging Red Squirrel', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Foraging---Red-Squirrel.jpg', 'print'),
(6, 'Owl', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Peeking---Barn-Owl.jpg', 'print'),
(7, 'Wild Rabbit', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Wild-Rabbit.jpg', 'print'),
(8, 'Partridge', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Partridge.jpg', 'print'),
(9, 'Sidney Sebright', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Sidney-Sebright.jpg', 'print'),
(10, 'Touchdown Kingfisher', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Touchdown---Kingfisher.jpg', 'print'),
(11, 'Emrys Elephant', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Emrys-Elephant.jpg', 'print'),
(12, 'Busy-Bee', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Busy-Bee.jpg', 'print'),
(13, '5 x Premium Animal Christmas cards\r\n', '148mm square cards with white envelopes, featuring scans of my original drawings, professionally printed on 300gsm Trucard.', 15.00, '1000', 'IMG_2644.jpg', 'card'),
(14, '6 x Premium Wildlife Cards (Birds & Insects)', '148mm square cards with white envelopes, featuring scans of my original drawings, professionally printed on 300gsm Trucard.', 15.00, '1000', '6cardbirdsandinsects.jpg\r\n', 'card'),
(15, '6 x Premium Cards (Woodland)', '148mm square cards with white envelopes, featuring scans of my original drawings, professionally printed on 300gsm Trucard.', 15.00, '1000', '6pack-woodland-pack.jpg\r\n', 'card'),
(16, '\'Pensive\' (Woodpecker) Original Drawing', 'Original, signed coloured pencil drawing of a great spotted woodpecker drawn with Polychromo and Pablo pencils on Bristol smooth paper.\r\n\r\nMounted In a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to pop in a frame.\r\n\r\nAuthenticity sticker on reverse.', 199.99, '2', 'woodpeckeronlogmounted.jpg', 'original'),
(17, '\'Pheasant\' Original Drawing', 'Original, signed coloured pencil drawing of a great spotted woodpecker drawn with Polychromo and Pablo pencils on Bristol smooth paper.\r\n\r\nMounted In a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to pop in a frame.\r\n\r\nAuthenticity sticker on reverse.', 199.99, '2', 'pheasantorgmounted.jpg', 'original'),
(18, '\'Concentration\' (Fox) Original Drawing', 'Original, signed coloured pencil drawing of a great spotted woodpecker drawn with Polychromo and Pablo pencils on Bristol smooth paper.\r\n\r\nMounted In a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to pop in a frame.\r\n\r\nAuthenticity sticker on reverse.', 199.99, '2', 'concentrationfoxmounted.jpg', 'original'),
(19, '\'Pretty\' (Puffin)', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'prettypuffinprint.jpg', 'print'),
(20, '\'Deliberation\' (Kingfisher)', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Deliberation---Kingfisher_018bce1e-32f1-458a-978f-cd10135407d4.jpg', 'print'),
(21, '\'Furtive\' (Fox)', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'FurtiveFoxscan11-24.jpg', 'print'),
(22, '\'Gladys\' (Giraffe)', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Gladys-Giraffe.jpg', 'print'),
(23, 'Badger', 'Signed Fine Art Giclee Print. Professionally printed on 310g photo rag paper using the highest quality archival inks and paper.&nbsp;\r\n\r\nMounted in a 16 x 12\" off-white, slightly textured mount with an A4 aperture, ready to frame. Comes with a certificate of authenticity.\r\n\r\nPlease note: The main image shows the professional scan of my drawing. Any additional images are not professionally photographed but show the fit in the mount.', 33.99, '2', 'Badger-on-log.jpg', 'print');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `promo_ID` int(8) NOT NULL,
  `promo_amount` int(3) NOT NULL,
  `promo_Code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`promo_ID`, `promo_amount`, `promo_Code`) VALUES
(2, 10, 'TOM123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `pass` longtext NOT NULL,
  `email_address` tinytext NOT NULL,
  `user_Type` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pass`, `email_address`, `user_Type`, `verified`) VALUES
(1, 'thomas', '$2y$10$s/dgTFDIdtmy27cjKQ.ATuu7cVA1N57KREZRLmJsp8KupcuxQJUv.', 'thomaswellwood3@gmail.com', 1, 0),
(2, 'thomas1', '$2y$10$B.DoN41XB1XNQp/a2Ar6Y.7FxLKUQr/5FxhX6TKMjiAS9FNzh5fYu', 'thomaswellwood2@gmail.com', 0, 0),
(3, 'thomas43', '$2y$10$3Mwda58koN2pnd.s9Q00SOSmzF2YvBgqrbqkf/ZjRXbPF9OLEACEC', 'thomaswellwood4@gmail.com', 0, 0),
(4, 'thomas4', '$2y$10$5qBCWwK09yCXCoaGVzi3IeZPZWtbAMafxIaxl5hxH3qitf.vh.3rq', 'thomaswellwood6@gmail.com', 0, 0),
(5, 'lise', '$2y$10$m//b/nFGIQlhyhxgndd8lOH417334yY1sdtVu8EZbzxkMffEoaQbS', 'thomaswellwood7@gmail.com', 0, 0),
(6, 'tom123', '$2y$10$qVZiQsGWPfcplJh38IcMceM4xzeuQkdCEOD5NcWjnymxteTORaeGe', 'tom@gmail.com', 0, 0),
(7, 'Ebony', '$2y$10$remv5YOGWQKclOBg1/3Hh.y0RF5JYOGN8r7MM6.6RDqYM/KIT2uxi', '687892@yeovil.ac.uk', 0, 0),
(8, 'lisaissuchagreatmum', '$2y$10$jGtp6yWxm2DQ8N9/7irvUegVk3T3WTCxs5VKERXlFLYU6KJKmqHr6', 'thomaswellwood55555@gmail.com', 0, 0),
(9, 'tom123876', '$2y$10$yerbUvlLxdTFS54JQG3vXepV8cRAD2O4GhYvJmlft8jTGVsfPrOgK', 'thomaswellwood233@gmail.com', 0, 0),
(10, 'Ebony123', '$2y$10$gIYPkPJVLuETiCH0rRV2Ber2yCDA4FSKig.kp4lOdSsDMxh9RvCzq', '68784492@yeovil.ac.uk', 0, 0),
(16, 'thomaskjhg', '$2y$10$NOJUo0VWGBw/T9HFVsEaveHaNVYMm3VqPwPh4eRPdyYx4vR9TDTYO', 'thomaswellwood@gmail.com', 0, 1),
(17, 'Ebony99', '$2y$10$fxOi.6fv0sdT82Hlclqf5.TcrsRy2AL7cEefH/b3OVD0S1YK0sJ3C', 'thomaswellwoodkkk@gmail.com', 0, 1),
(18, 'ni', '$2y$10$5nTM.1H5F0RDszjnmvKq5.T7emlEj5Vbs/ftM1xhhLCzWzpYUIz1C', '6855555555555555555555555552@yeovil.ac.uk', 0, 0),
(19, 'ebby', '$2y$10$lFigZVt2ITfL0MCZeeNS9Of.sM3dBm0/Bj9DqzTGODoK4Z8YFv7SO', 'thomaswellwoodgfd@gmail.com', 0, 0),
(20, 'tom123567', '$2y$10$mlf5UFUUflx9g0XjqgBCzeWAyD0SGtbv18HRdIl46thw7AoFqkQzS', 'thomaswellwood4666@gmail.com', 0, 1),
(21, 'Lisa234', '$2y$10$NGQeQoWr6k75DVqZJ8LQuOzy4YANuR9/yzICA/fj/wGv/OkKIgrgy', 'lisawellwood@aol.co.uk', 0, 1),
(22, 'tom2', '$2y$10$SZ8KGCP6xZSajBznfgIUreCVT5Xsczz6qDzrCpA9pJ47YZIOcERRa', 'thomaswellwood456@gmail.com', 0, 1),
(23, 'Ebony543', '$2y$10$o3ctrjeAlFYGGzacYFlbxObmZYS6nStrMvVHduFc/ge3k47oK.vCK', 'thomaswellwood244444@gmail.com', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basket_ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`orderitemid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `printcard`
--
ALTER TABLE `printcard`
  ADD PRIMARY KEY (`print_ID`);

--
-- Indexes for table `prints`
--
ALTER TABLE `prints`
  ADD PRIMARY KEY (`print_ID`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`promo_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `basket_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `orderitemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `printcard`
--
ALTER TABLE `printcard`
  MODIFY `print_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prints`
--
ALTER TABLE `prints`
  MODIFY `print_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `promo_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
