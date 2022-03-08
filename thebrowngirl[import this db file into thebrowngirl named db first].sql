-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 09:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebrowngirl`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `sr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `name`, `mobile`, `pincode`, `locality`, `building`, `landmark`, `city`, `state`, `sr`) VALUES
(1, 'Ganesh Ghutiya', '9853456545', '123422', 'Khul', 'KH-67', 'Power Houses', 'Silvassaaa', 'Dadra and Nagar Haveli', 9);

-- --------------------------------------------------------

--
-- Table structure for table `best_value`
--

CREATE TABLE `best_value` (
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_value`
--

INSERT INTO `best_value` (`product_id`) VALUES
('p1'),
('p16'),
('p2'),
('p3'),
('p4'),
('p9');

-- --------------------------------------------------------

--
-- Table structure for table `carouselimages`
--

CREATE TABLE `carouselimages` (
  `product_id` varchar(11) NOT NULL,
  `fileName` text NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carouselimages`
--

INSERT INTO `carouselimages` (`product_id`, `fileName`, `timeStamp`) VALUES
('p1', './carousel/images/1.jpg', '2022-02-01 03:39:11'),
('p2', './carousel/images/2.jpg', '2022-02-01 03:39:17'),
('p3', './carousel/images/3.jpg', '2022-02-01 03:39:20'),
('p4', './carousel/images/4.jpg', '2022-02-01 03:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `checkoutlist`
--

CREATE TABLE `checkoutlist` (
  `product_id` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkoutlist`
--

INSERT INTO `checkoutlist` (`product_id`, `user_id`, `amount`) VALUES
('p1', 37, 1),
('p2', 37, 1),
('p4', 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comingsoon`
--

CREATE TABLE `comingsoon` (
  `sr` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comingsoon`
--

INSERT INTO `comingsoon` (`sr`, `image`) VALUES
(0, '.assetscomingSoonBridal.png'),
(0, '.assetscomingSoonBridal.png'),
(0, '.assetscomingSoonBridal.png'),
(0, '.assetscomingSoonBridal.png');

-- --------------------------------------------------------

--
-- Table structure for table `comingsoonimg`
--

CREATE TABLE `comingsoonimg` (
  `sr` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comingsoonimg`
--

INSERT INTO `comingsoonimg` (`sr`, `img`) VALUES
(1, '/assets/comingSoon/Bridal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `deal_of_the_day`
--

CREATE TABLE `deal_of_the_day` (
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deal_of_the_day`
--

INSERT INTO `deal_of_the_day` (`product_id`) VALUES
('p2'),
('p3'),
('p4'),
('p9'),
('p2'),
('p2'),
('p9'),
('p2'),
('p3'),
('p4'),
('p9'),
('p2'),
('p2'),
('p9'),
('p2'),
('p3'),
('p4'),
('p9'),
('p2'),
('p2'),
('p9'),
('p2'),
('p3'),
('p4'),
('p9'),
('p2'),
('p2'),
('p9');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `sr` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `offer_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`sr`, `product_id`, `offer_id`) VALUES
(1, 'p1', 'o1'),
(2, 'p2', 'o1'),
(3, 'p3', 'o1'),
(4, 'p4', 'o1'),
(5, 'p5', 'o1'),
(6, 'p6', 'o1'),
(7, 'p7', 'o1'),
(8, 'p7', 'o1'),
(9, 'p9', 'o1'),
(10, 'p10', 'o1'),
(11, 'p11', 'o1'),
(12, 'p12', 'o1'),
(13, 'p13', 'o1'),
(14, 'p14', 'o1'),
(15, 'p15', 'o1'),
(16, 'p16', 'o1'),
(17, 'p17', 'o1'),
(18, 'p18', 'o1'),
(19, 'p19', 'o1'),
(20, 'p1', 'o2'),
(21, 'p2', 'o3'),
(22, 'p3', 'o2'),
(23, 'p4', 'o3'),
(24, 'p5', 'o2'),
(25, 'p6', 'o3'),
(26, 'p7', 'o2'),
(27, 'p7', 'o3'),
(28, 'p9', 'o2'),
(29, 'p10', 'o3'),
(30, 'p11', 'o3'),
(31, 'p12', 'o2'),
(32, 'p13', 'o3'),
(33, 'p14', 'o2'),
(34, 'p15', 'o3'),
(35, 'p16', 'o2'),
(36, 'p17', 'o3'),
(37, 'p18', 'o2'),
(38, 'p19', 'o3');

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE `offer_info` (
  `offer_id` varchar(50) NOT NULL,
  `offer_title` varchar(50) NOT NULL,
  `offer_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_title`, `offer_info`) VALUES
('o1', 'Bank Offer', '20% instant discount up to ₹200 on First time Txn via Dhani One Freedom Card'),
('o2', 'Special Offer', '10% discount up to ₹150 on ICICI Bank Debit Cards'),
('o3', 'Partner Offer', 'Get upto ₹500 off on Select Product');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `order_amount` double NOT NULL,
  `address` text NOT NULL,
  `orderTime` varchar(50) NOT NULL,
  `method` varchar(10) NOT NULL,
  `status` text NOT NULL,
  `arival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `order_amount`, `address`, `orderTime`, `method`, `status`, `arival`) VALUES
(63, 1, 'p4', 10170, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-07 12:28:09pm', 'net', 'NA', 'NA'),
(64, 1, 'p4', 10170, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-07 12:29:34pm', 'card', 'NA', 'NA'),
(65, 1, 'p4', 10170, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-08 09:17:18am', 'net', 'NA', 'NA'),
(66, 1, 'p7', 1000, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-08 09:17:18am', 'net', 'NA', 'NA'),
(67, 1, 'p8', 1100, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-08 09:17:18am', 'net', 'NA', 'NA'),
(68, 1, 'p9', 5999, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-08 09:17:18am', 'net', 'NA', 'NA'),
(69, 1, 'p4', 10170, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-08 09:18:06am', 'card', 'NA', 'NA'),
(70, 1, 'p4', 10170, '{\"user_id\":\"1\",\"name\":\"Ganesh Ghutiya\",\"mobile\":\"9853456545\",\"pincode\":\"123422\",\"locality\":\"Khul\",\"building\":\"KH-67\",\"landmark\":\"Power Houses\",\"city\":\"Silvassaaa\",\"state\":\"Dadra and Nagar Haveli\",\"sr\":\"9\"}', '2022-03-08 09:18:26am', 'cod', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `sr` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `file_name` text NOT NULL,
  `is_primary` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`sr`, `product_id`, `file_name`, `is_primary`) VALUES
(1, 'p1', '/assets/product/img(1).jpg', 1),
(2, 'p10', '/assets/product/img(10).jpg', 1),
(3, 'p11', '/assets/product/img(11).jpg', 1),
(4, 'p12', '/assets/product/img(12).jpg', 1),
(5, 'p13', '/assets/product/img(13).jpg', 1),
(6, 'p14', '/assets/product/img(14).jpg', 1),
(7, 'p15', '/assets/product/img(15).jpg', 1),
(8, 'p16', '/assets/product/img(16).jpg', 1),
(9, 'p2', '/assets/product/img(2).jpg', 1),
(10, 'p3', '/assets/product/img(3).jpg', 1),
(11, 'p4', '/assets/product/img(4).jpg', 1),
(12, 'p5', '/assets/product/img(5).jpg', 1),
(13, 'p6', '/assets/product/img(6).jpg', 1),
(14, 'p7', '/assets/product/img(7).jpg', 1),
(15, 'p8', '/assets/product/img(8).jpg', 1),
(16, 'p9', '/assets/product/img(9).jpg', 1),
(17, 'p17', '/assets/product/i1.jfif', 1),
(18, 'p18', '/assets/product/i2.jfif', 1),
(19, 'p19', '/assets/product/i3.jfif', 1),
(20, 'p2', '/assets/product/p1(1).jpg', 0),
(21, 'p2', '/assets/product/p1(2).jpg', 0),
(22, 'p2', '/assets/product/p1(3).jpg', 0),
(23, 'p2', '/assets/product/p1(4).jpg', 0),
(24, 'p2', '/assets/product/p1(5).jpg', 0),
(25, 'p2', '/assets/product/p1(6).jpg', 0),
(26, 'p1', '/assets/product/p1(7).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `altPrice` double NOT NULL,
  `discount` int(3) NOT NULL,
  `ratings` int(2) NOT NULL,
  `dimension` text NOT NULL,
  `inside` text NOT NULL,
  `front` text NOT NULL,
  `returnPolicy` text NOT NULL,
  `deliver` int(11) NOT NULL,
  `deliver_charge` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `title`, `description`, `price`, `altPrice`, `discount`, `ratings`, `dimension`, `inside`, `front`, `returnPolicy`, `deliver`, `deliver_charge`) VALUES
('p1', 'Women Blue, Grey Shoulder Bag - Extra Spacious', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 999, 300, 50, 2, '30 x 22 x 9 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '30 x22 x 9 cms', '5 Days', 1, 0),
('p10', 'Women Green, Black Shoulder Bag - Extra Spacious', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 19999, 29999, 70, 4, '35 x 227 x 8 cms', '1 main compartment available', '35 x 227 x 8 cms', '6 Days', 2, 0),
('p11', 'Women Multicolor Shoulder Bag - Extra Spacious', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 999, 200, 90, 5, '85 x 429 x 7 cms', ' 1 main compartment available', '85 x 429 x 7 cms', '90 Days', 3, 0),
('p12', 'Women Grey Shoulder Bag - Mini  (Pack of: 3)', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 2999, 3999, 90, 4, '35 x 227 x 8 cms', ' 1 main compartment available', '35 x 227 x 8 cms', ' 1 Days', 6, 0),
('p13', 'Women Khaki Shoulder Bag - Mini  (Pack of: 3)', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 8769, 2999, 10, 3, '65 x 927 x 8 cms', ' 4 main compartment available', '30 x 22 x 9 cms', '6 Weeks', 10, 0),
('p14', 'Women Blue Shoulder Bag', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 1999, 7600, 90, 5, '30 x 22 x 9 cms', '6 Section with zips', '30 x 22 x 9 cms', '1 Month', 19, 0),
('p15', 'Women Multicolor Shoulder Bag - Mini', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 3499, 5000, 10, 5, '35 x 227 x 8 cms', 'Only one compartment', '30 x 22 x 9 cms', '90 Days', 19, 0),
('p16', 'Women Green Hand-held Bag - Regular Size', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 99, 1000, 10, 4, '30 x 22 x 9 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '85 x 429 x 7 cms', '5 Days', 2, 10),
('p17', 'CROC Cheery Hand', 'CROC Cheery Hand Bag_The Brown Girl//markhind.com', 3499, 1499, 10, 4, '65 x 927 x 8 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '30 x 22 x 9 cms', '5 Days', 6, 0),
('p18', 'Luxury Hand Bag', 'The Brown Girl Luxury Hand Bag (export quality)', 9499, 1999, 0, 4, '85 x 429 x 7 cms', '6 Section with zips', '65 x 927 x 8 cms', ' 1 Days', 9, 50),
('p19', 'CROC Cheery Hand', 'The Brown Girl Vean Leather Black Handbag Combo (set of 3)', 399, 199, 20, 5, '30 x 22 x 9 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '65 x 927 x 8 cms', '1 Month', 9, 0),
('p2', 'Women Tan Shoulder Bag - Extra Spacious', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 4020, 6000, 17, 4, '65 x 927 x 8 cms', ' 4 main compartment available', '85 x 429 x 7 cms', ' 1 Days', 6, 0),
('p3', 'Women Grey Shoulder Bag - Regular Size', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 399, 6000, 0, 5, '30 x 22 x 9 cms', '1 main compartment available', '85 x 429 x 7 cms', '5 Days', 9, 0),
('p4', 'Women Brown Shoulder Bag', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 10080, 19086, 0, 3, '35 x 227 x 8 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '35 x 227 x 8 cms', '90 Days', 15, 90),
('p5', 'Women Grey Hand-held Bag - Regular Size ', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 100, 6790, 0, 4, '35 x 227 x 8 cms', 'Only one compartment', '35 x 227 x 8 cms', '1 Month', 8, 0),
('p6', 'Women Multicolor Shoulder Bag', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 10, 11, 0, 4, '85 x 429 x 7 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '30 x 22 x 9 cms', '5 Days', 4, 80),
('p7', 'Women Black Shoulder Bag - Extra Spacious', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 1000, 999, 0, 4, '65 x 927 x 8 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '65 x 927 x 8 cms', '6 Days', 5, 0),
('p8', 'Women Black Shoulder Bag  (Pack of: 3)', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 1100, 5789, 0, 5, '85 x 429 x 7 cms', '6 Section with zips', '35 x 227 x 8 cms', '6 Weeks', 6, 0),
('p9', 'Women Maroon Hand-held Bag - Mini', 'A handbag is any type of bag or case that can be carried either by hand or over the shoulder.', 5999, 8000, 0, 5, '35 x 227 x 8 cms', '11 Main Compartment, 1 Zip Compartment, 1 Mobile & 1 Slip Pocket.', '65 x 927 x 8 cms', '1 Month', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `product_id` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `ratting` double NOT NULL,
  `review` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `product_id`, `user_id`, `ratting`, `review`, `date`) VALUES
('r1', 'p1', 'u1', 3, 'good', '2022-01-23'),
('r10', 'p2', 'u1', 4, 'good', '0000-00-00'),
('r11', 'p11', 'u1', 5, 'good', '0000-00-00'),
('r12', 'p12', 'u1', 4, 'good', '0000-00-00'),
('r13', 'p13', 'u1', 4, 'good', '0000-00-00'),
('r14', 'p14', 'u1', 4, 'good', '0000-00-00'),
('r15', 'p15', 'u1', 4, 'good', '0000-00-00'),
('r16', 'p16', 'u1', 4, 'good', '0000-00-00'),
('r17', 'p17', 'u1', 2, 'good', '0000-00-00'),
('r18', 'p18', 'u1', 4, 'good', '0000-00-00'),
('r19', 'p19', 'u1', 5, 'good', '0000-00-00'),
('r2', 'p2', 'u1', 4, 'good', '0000-00-00'),
('r20', 'p1', 'u2', 3, 'Ok Ok', '0000-00-00'),
('r21', 'p1', 'u3', 4, 'Ok Ok', '0000-00-00'),
('r3', 'p3', 'u1', 2, 'good', '0000-00-00'),
('r4', 'p4', 'u1', 4, 'good', '0000-00-00'),
('r5', 'p5', 'u1', 4, 'good', '0000-00-00'),
('r6', 'p6', 'u1', 3, 'good', '0000-00-00'),
('r7', 'p7', 'u1', 4, 'good', '0000-00-00'),
('r8', 'p8', 'u1', 4, 'good', '0000-00-00'),
('r9', 'p9', 'u1', 4, 'good', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `recent_view`
--

CREATE TABLE `recent_view` (
  `sr` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent_view`
--

INSERT INTO `recent_view` (`sr`, `product_id`) VALUES
(1, 'p6'),
(2, 'p3'),
(3, 'p5'),
(4, 'p8');

-- --------------------------------------------------------

--
-- Table structure for table `similar_product`
--

CREATE TABLE `similar_product` (
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `similar_product`
--

INSERT INTO `similar_product` (`product_id`) VALUES
('p14'),
('p15'),
('p17'),
('p7');

-- --------------------------------------------------------

--
-- Table structure for table `top_pics`
--

CREATE TABLE `top_pics` (
  `product_id` varchar(50) NOT NULL,
  `sr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_pics`
--

INSERT INTO `top_pics` (`product_id`, `sr`) VALUES
('p8', 4),
('p6', 6),
('p11', 7),
('p10', 8),
('p5', 10);

-- --------------------------------------------------------

--
-- Table structure for table `trending_images`
--

CREATE TABLE `trending_images` (
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trending_images`
--

INSERT INTO `trending_images` (`product_id`) VALUES
('p1'),
('p2'),
('p4'),
('p6'),
('p7'),
('p9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `attempts` int(11) NOT NULL,
  `lastAttempt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `lastName`, `gender`, `dob`, `mobile`, `isVerified`, `attempts`, `lastAttempt`) VALUES
(24, 'abc@abc.com', '123', 'abc', '', '', '', '1234567890', 0, 0, '2022-02-24 11:53:53am'),
(25, 'abc@xyz.com', '987', 'qq', '', '', '', '984 847918', 0, 0, '2022-02-24 11:53:53am'),
(26, 'abc@xyz1.com', '987', 'qq', '', '', '', '984847918', 0, 0, '2022-02-24 11:53:53am'),
(31, 'bn@bn.com', '123', 'bb', 'bn', '', '', '9737354410', 0, 0, '2022-02-25 11:10:37am'),
(22, 'csed08@laxmi.edu.in', '123', 'Ganesh Ghutiya', '', '', '', '9737354410', 0, 0, '2022-02-24 11:53:53am'),
(1, 'g@g.com', '123', 'Ganesh', 'Ghutiya', 'm', '2021-08-21', '9737354410', 1, 1, '2022-03-08 09:16:15am'),
(14, 'ganeshghutiya@live.com', '123', 'Ganesh Ghutiya', '', '', '', '1234567890', 0, 0, '2022-02-24 11:53:53am'),
(21, 'ganeshghutiya@live.coms', 'd', 'fdg', '', '', '', '984 847918', 0, 0, '2022-02-24 11:53:53am'),
(36, 'ganeshghutiya@live.comsgg', '123', 'Ganesh', 'Ghutiya', '', '', '9737354410', 0, 1, '2022-03-03 06:18:54pm'),
(27, 'pqr@pqr.com', 'pqr', 'pqr', '', '', '', '9876543210', 0, 0, '2022-02-24 11:53:53am'),
(28, 'qwe@a.com', '123', 'qwe', '', '', '', '0987654321', 0, 0, '2022-02-24 11:53:53am'),
(2, 's@s.com', '123', 's', 'b', 'f', '2022-02-25', '9876543210', 0, 0, '2022-02-24 11:53:53am'),
(37, 's@ss.com', '123', 's', 's', '', '', '9737354410', 1, 1, '2022-03-04 10:25:35am'),
(30, 'se@s.com', '123', 'sp', 'n', '', '', '1234567890', 0, 0, '2022-02-24 11:57:43am'),
(23, 'temp@gmail.com', '123', 'temp', '', '', '', '1234567890', 0, 0, '2022-02-24 11:53:53am'),
(29, 'zxc@123.com', '123', 'zxc', '', '', '', '1234567890', 0, 0, '2022-02-24 11:53:53am');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `user_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`user_id`, `product_id`) VALUES
(1, 'p17'),
(1, 'p4'),
(1, 'p5'),
(1, 'p6'),
(1, 'p7'),
(1, 'p8'),
(1, 'p9'),
(2, 'p2'),
(2, 'p6'),
(2, 'p7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `best_value`
--
ALTER TABLE `best_value`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `carouselimages`
--
ALTER TABLE `carouselimages`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `checkoutlist`
--
ALTER TABLE `checkoutlist`
  ADD PRIMARY KEY (`product_id`,`user_id`);

--
-- Indexes for table `comingsoonimg`
--
ALTER TABLE `comingsoonimg`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `offer_info`
--
ALTER TABLE `offer_info`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `recent_view`
--
ALTER TABLE `recent_view`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `similar_product`
--
ALTER TABLE `similar_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `top_pics`
--
ALTER TABLE `top_pics`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `trending_images`
--
ALTER TABLE `trending_images`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`user_id`,`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comingsoonimg`
--
ALTER TABLE `comingsoonimg`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recent_view`
--
ALTER TABLE `recent_view`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_pics`
--
ALTER TABLE `top_pics`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
