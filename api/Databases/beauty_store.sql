-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 04:21 PM
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
-- Database: `beauty_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `address_text` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `order_id`, `admin_id`, `create_at`, `address_text`, `city`, `country`) VALUES
(4, NULL, 56, '2025-04-04 06:55:56', '281 East White Milton Extension', 'Suscipit occaecat no', 'United Kingdom'),
(5, NULL, 56, '2025-04-04 14:23:32', '245 Rocky New Freeway', 'Est ea dolore labori', 'Canada'),
(6, NULL, 56, '2025-04-04 17:24:48', '37 North Green Second Lane', 'Sint aperiam repreh', 'United Kingdom'),
(7, NULL, 56, '2025-04-05 18:47:41', '102 South Rocky Old Road', 'Dolor dicta proident', 'United Kingdom'),
(8, NULL, 56, '2025-04-05 18:51:27', '578 North First Extension', 'Vel mollitia ducimus', 'United Kingdom'),
(9, NULL, 56, '2025-04-05 18:54:38', '99 East Second Freeway', 'Irure dolor quos ame', 'Canada'),
(10, NULL, 56, '2025-04-05 19:05:39', '99 East Second Freeway', 'Irure dolor quos ame', 'Canada'),
(11, NULL, 56, '2025-04-05 19:11:07', '99 East Second Freeway', 'Irure dolor quos ame', 'Canada'),
(12, NULL, 56, '2025-04-05 19:11:31', '99 East Second Freeway', 'Irure dolor quos ame', 'Canada'),
(13, NULL, 56, '2025-04-05 19:13:46', '99 East Second Freeway', 'Irure dolor quos ame', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` enum('User','ShopOwner','Admin') NOT NULL DEFAULT 'User',
  `status` varchar(50) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `phone`, `password`, `profile_picture`, `created_at`, `last_activity`, `role`, `status`) VALUES
(59, 'panha', NULL, '0978211204', '$2y$10$T7s2ksJ6uAi8WguQmBCBxeV9ZkXMNqlt//hQgANJymzqthWtCzZbG', NULL, '2025-04-07 01:32:14', '2025-04-07 01:32:14', 'User', 'inactive'),
(60, 'panha', NULL, '0978211205', '$2y$10$vv1bXKXD5K3nXq3FGiSEv.aIiWOvQPszdCZsA8ceR/niVzySJUbH.', NULL, '2025-04-07 01:33:43', '2025-04-07 01:33:43', 'User', 'inactive'),
(61, 'panha', 'nheanpanha12629@gmail.com', NULL, '$2y$10$Y.ioIFFCUQrSnGzwX/PMg.AlzK4vxsP2ArGkmQWFtMzdpG6jsu49q', NULL, '2025-04-07 01:34:23', '2025-04-07 01:35:27', 'Admin', 'inactive'),
(62, 'SAMOUN', NULL, '0965324312', '$2y$10$q3bzx3OJyGToFDf2ogPjseoV47vO158HC6K20pHNkc/GGzldb6jQu', 'uploads/profiles/profile_1744042051.png', '2025-04-07 15:26:38', '2025-04-07 16:07:31', 'Admin', 'inactive'),
(63, 'seyha', NULL, '095552738', '$2y$10$lK52N0PYFK0L8UcszdIPk.NOPhRlkVPrhit6bs607Ks2qGr8C8k/2', 'uploads/profiles/profile_6804b5c26e4e1.png', '2025-04-20 08:52:18', '2025-04-20 08:52:18', 'User', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(200) DEFAULT NULL,
  `brand_image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_image`, `description`) VALUES
(23, 'Kyle Bradshaw', 'uploads/Screenshot 2024-08-19 151509.png', 'Sit id omnis accusa'),
(26, 'alibaba', 'uploads/6dbf204852a32e42e127460db6cde656 (1).png', 'ot luy kom jol merl\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `admin_id`, `description`, `image_url`) VALUES
(11, 'Abbot Potts', NULL, 'Elit dicta ipsam no', 'uploads/1742101242_Screenshot 2024-08-27 182056.png'),
(12, 'Eric Heath', NULL, 'Quis enim commodi cu', 'uploads/1742103060_Screenshot 2024-08-27 182056.png'),
(13, 'wq', NULL, '', 'uploads/1742171223_Group 1000003805 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount_percentage` decimal(5,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`discount_id`, `product_id`, `discount_percentage`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(93, 77, 32.00, '1995-01-20', '2011-06-11', '2025-04-15 20:33:11', '2025-04-15 20:33:11'),
(94, 80, 32.00, '1995-01-20', '2011-06-11', '2025-04-15 20:33:11', '2025-04-15 20:33:11'),
(95, 74, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(96, 75, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(97, 76, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(98, 78, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(99, 79, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(100, 81, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(101, 82, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(102, 83, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(103, 84, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(104, 85, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(105, 85, 76.00, '1972-09-24', '2025-04-17', '2025-04-16 22:50:00', '2025-04-16 22:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` enum('unread','read') DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) DEFAULT 0,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `message`, `type`, `status`, `created_at`, `is_deleted`, `first_name`, `last_name`, `phone_number`, `order_id`, `product_id`) VALUES
(42, 0, '', 'Possimus ut vitae i', 'contact', 'unread', '2025-04-20 04:15:35', 0, 'Logan', 'Baird', '+1 (233) 922-8886', NULL, 104),
(43, 0, '', 'Assumenda aut aut ve', 'contact', 'unread', '2025-04-20 05:50:34', 0, 'Colby', 'Sellers', '+1 (664) 638-3649', NULL, 104),
(44, 0, '', 'Odit qui aperiam sun', 'contact', 'unread', '2025-04-20 05:57:40', 0, 'Lacy', 'Nicholson', '+1 (697) 222-4013', NULL, 104),
(45, 0, '', 'Nihil et distinctio', 'contact', 'unread', '2025-04-20 05:58:35', 0, 'Maia', 'West', '+1 (507) 591-5764', NULL, 104),
(46, 0, '', 'Elit non dignissimo', 'contact', 'unread', '2025-04-20 06:17:04', 0, 'Jenna', 'Reeves', '+1 (408) 608-7733', NULL, 104);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `order_status` enum('Pending','Shipped','Delivered','Cancelled') DEFAULT 'Pending',
  `total` decimal(10,2) NOT NULL,
  `address_id` int(11) NOT NULL,
  `buy_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_id` int(11) DEFAULT NULL,
  `amount_product` int(11) NOT NULL DEFAULT 1,
  `product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `firstName`, `lastName`, `phone`, `order_status`, `total`, `address_id`, `buy_at`, `admin_id`, `amount_product`, `product_id`) VALUES
(245, 0, 'Lilah', 'Mcfadden', '+1 (544) 686-2212', 'Pending', 23925.00, 9, '2009-07-06 23:42:00', 56, 29, 75),
(246, 0, 'Lilah', 'Mcfadden', '+1 (544) 686-2212', 'Pending', 23925.00, 10, '2009-07-06 23:42:00', 56, 29, 75),
(247, 0, 'Lilah', 'Mcfadden', '+1 (544) 686-2212', 'Pending', 23925.00, 11, '2009-07-06 23:42:00', 56, 29, 75),
(248, 0, 'Lilah', 'Mcfadden', '+1 (544) 686-2212', 'Pending', 23925.00, 12, '2009-07-06 23:42:00', 56, 29, 75),
(249, 0, 'Lilah', 'Mcfadden', '+1 (544) 686-2212', 'Pending', 23925.00, 13, '2009-07-06 23:42:00', 56, 29, 75);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` enum('Pending','Completed','Failed') DEFAULT 'Pending',
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `quantity`, `price`, `image`, `product_content`, `created_at`, `updated_at`, `admin_id`, `brand_id`) VALUES
(74, 'Boris Savage', 11, 0, 726.00, 'uploads/00e70a76e18a44bf5e52a1be70784cc8.jpg', 'Vero eos eos laboru', '2025-03-27 02:29:51', '2025-04-05 01:47:39', NULL, 26),
(75, 'Fuller Day', 11, 1, 825.00, 'uploads/661ebaf65163c1683f4627e33d93e9f4.jpg', 'Possimus amet quis', '2025-03-27 02:29:58', '2025-04-05 16:35:10', NULL, 26),
(76, 'Macey Herrera', 10, 174, 993.00, 'uploads/96ec018c998c7f3d6dff58d2431c8588.jpg', 'Dignissimos hic minu', '2025-03-27 02:30:03', '2025-03-27 02:30:03', NULL, 26),
(77, 'William Melton', 11, 421, 46.00, 'uploads/37e9c41538773205901f2558fbb63eaa.jpg', 'Est iure mollitia q', '2025-03-27 02:30:11', '2025-03-27 02:30:11', NULL, 23),
(78, 'Signe Becker', 13, 961, 87.00, 'uploads/418457e5c28de52b0354d0cd89d46b1f.jpg', 'Accusamus commodo qu', '2025-03-27 02:30:21', '2025-03-27 02:30:21', NULL, 26),
(79, 'Raja Buckley', 11, 555, 342.00, 'uploads/ad92b36defb6c37638fef2231c620e98.jpg', 'Aliqua Officia sit ', '2025-03-27 02:30:28', '2025-03-27 02:30:28', NULL, 26),
(80, 'Germaine Stein', 12, 187, 677.00, 'uploads/bcc1b690340fb2772ec1f217ac38a63c.jpg', 'Sit ullamco consequa', '2025-03-27 02:30:41', '2025-03-27 02:30:41', NULL, 23),
(81, 'Imani Hull', 13, 672, 798.00, 'uploads/beauty-4993465_1280.jpg', 'Et illo excepturi ma', '2025-03-27 02:30:48', '2025-03-27 02:30:48', NULL, 26),
(82, 'Allen Townsend', 13, 703, 223.00, 'uploads/bfe31dd8c647f8fe445c560aebe9d947.jpg', 'Doloribus quaerat ac', '2025-03-27 02:31:00', '2025-03-27 02:31:00', NULL, 26),
(83, 'Kyle Hoover', 12, 689, 685.00, 'uploads/c4338e2e821d48d57ae7c6d83c1720bf.jpg', 'Voluptatem maiores e', '2025-03-27 02:31:08', '2025-03-27 02:31:08', NULL, 26),
(84, 'Jennifer Saunders', 13, 758, 185.00, 'uploads/f6acd3160df7b75abbae739eb2ed2780.jpg', 'Culpa sunt sint acc', '2025-03-27 02:31:17', '2025-03-27 02:31:17', NULL, 26),
(85, 'Sharon Duran', 10, 817, 404.00, 'uploads/fa900721e4818ac9ea8469b40f851522.jpg', 'Dolor temporibus ips', '2025-03-27 02:31:27', '2025-03-27 02:31:27', NULL, 26),
(86, 'Jade Rosa', 13, 165, 367.00, NULL, 'Quisquam qui irure r', '2025-04-18 15:02:57', '2025-04-18 15:02:57', NULL, 26),
(87, 'Cherokee Morris', 12, 427, 614.00, NULL, 'Exercitation asperio', '2025-04-18 15:04:41', '2025-04-18 15:04:41', NULL, 23),
(88, 'Isaiah Lester', 12, 574, 227.00, NULL, 'Sit explicabo Ut ex', '2025-04-18 15:18:06', '2025-04-18 15:18:06', NULL, 23),
(89, 'Felix Mclaughlin', 12, 864, 381.00, NULL, 'Ut sapiente consequu', '2025-04-18 15:18:16', '2025-04-18 15:18:16', NULL, 26),
(90, 'Illana Hickman', 11, 880, 74.00, NULL, 'Consequatur Suscipi', '2025-04-18 15:18:33', '2025-04-18 15:18:33', NULL, 26),
(91, 'Amal Daniels', 13, 731, 583.00, NULL, 'Cillum nihil ullam s', '2025-04-19 14:07:02', '2025-04-19 14:07:02', NULL, 26),
(92, 'Maggie Harrington', 11, 451, 377.00, NULL, 'Dolor dolorum sed et', '2025-04-19 14:11:43', '2025-04-19 14:11:43', NULL, 23),
(93, 'Maggie Harrington', 11, 451, 377.00, NULL, 'Dolor dolorum sed et', '2025-04-19 14:14:16', '2025-04-19 14:14:16', NULL, 23),
(94, 'Patience Curtis', 12, 542, 2.00, NULL, 'Et a adipisci in aut', '2025-04-19 14:14:23', '2025-04-19 14:14:23', NULL, 26),
(95, 'Graiden Lynn', 11, 830, 786.00, NULL, 'Culpa omnis perferen', '2025-04-19 14:17:19', '2025-04-19 14:17:19', NULL, 23),
(96, 'Julian Atkins', 13, 421, 24.00, NULL, 'Fugit consequatur ', '2025-04-19 14:22:38', '2025-04-19 14:22:38', NULL, 26),
(97, 'Julian Atkins', 13, 421, 24.00, NULL, 'Fugit consequatur ', '2025-04-19 14:22:47', '2025-04-19 14:22:47', NULL, 26),
(98, 'Helen Case', 13, 977, 134.00, NULL, 'Vel velit consectetu', '2025-04-19 14:23:35', '2025-04-19 14:23:35', NULL, 26),
(99, 'Bo Cervantes', 13, 994, 189.00, NULL, 'Nihil mollit volupta', '2025-04-19 14:27:34', '2025-04-19 14:27:34', NULL, 26),
(100, 'Diana Odom', 12, 700, 452.00, NULL, 'Voluptates porro par', '2025-04-19 14:28:17', '2025-04-19 14:28:17', NULL, 23),
(101, 'Rae Williams', 12, 409, 664.00, NULL, 'Consectetur dolorem', '2025-04-19 14:28:38', '2025-04-19 14:28:38', NULL, 23),
(102, 'Sybill Mason', 12, 716, 77.00, NULL, 'Esse repellendus V', '2025-04-19 14:29:16', '2025-04-19 14:29:16', NULL, 26),
(103, 'Maggie Pena', 12, 646, 775.00, NULL, 'Obcaecati dignissimo', '2025-04-19 14:31:09', '2025-04-19 14:31:09', NULL, 23),
(104, 'Aspen Vazquez', 11, 539, 80.00, NULL, 'Voluptatem enim vol', '2025-04-20 07:29:09', '2025-04-20 07:29:09', NULL, 26);

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

CREATE TABLE `product_name` (
  `product_1` varchar(100) NOT NULL,
  `product_2` varchar(100) NOT NULL,
  `product_3` varchar(100) NOT NULL,
  `product_4` varchar(100) NOT NULL,
  `product_store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_ratings`
--

CREATE TABLE `reviews_ratings` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_management`
--

CREATE TABLE `stock_management` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discount_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_order` (`order_id`),
  ADD KEY `fk_notifications_product` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `fk_address` (`address_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `fk_brand` (`brand_id`);

--
-- Indexes for table `product_name`
--
ALTER TABLE `product_name`
  ADD PRIMARY KEY (`product_store_id`);

--
-- Indexes for table `reviews_ratings`
--
ALTER TABLE `reviews_ratings`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `stock_management`
--
ALTER TABLE `stock_management`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `product_name`
--
ALTER TABLE `product_name`
  MODIFY `product_store_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews_ratings`
--
ALTER TABLE `reviews_ratings`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_management`
--
ALTER TABLE `stock_management`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notifications_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
