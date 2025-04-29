-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 03:56 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `order_status` enum('Pending','Comfirm','Shipped','Delivered','Cancelled') DEFAULT 'Pending',
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
(768, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 11.35, 368, '2025-04-27 10:15:52', 62, 1, 79),
(769, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 11.35, 368, '2025-04-27 10:15:52', 62, 1, 78),
(770, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 550.25, 369, '2025-04-27 10:19:00', 62, 15, 79),
(771, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 550.25, 369, '2025-04-27 10:19:00', 62, 53, 78),
(772, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 550.25, 370, '2025-04-27 10:19:04', 62, 15, 79),
(773, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 550.25, 370, '2025-04-27 10:19:04', 62, 53, 78),
(774, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 550.25, 371, '2025-04-27 10:29:39', 62, 15, 79),
(775, 0, 'Barbara', 'Shannon', '0965324312', 'Pending', 550.25, 371, '2025-04-27 10:29:39', 62, 53, 78),
(776, 0, 'Connor', 'Haynes', '0965324312', 'Pending', 75.60, 372, '2025-04-27 15:29:01', 62, 1, 80),
(777, 0, 'Connor', 'Haynes', '0965324312', 'Pending', 75.60, 372, '2025-04-27 15:29:01', 62, 1, 83),
(778, 0, 'Connor', 'Haynes', '0965324312', 'Pending', 75.60, 372, '2025-04-27 15:29:01', 62, 3, 108),
(779, 0, 'Connor', 'Haynes', '0965324312', 'Pending', 75.60, 372, '2025-04-27 15:29:01', 62, 3, 110),
(780, 0, 'Ferdinand', 'Hudson', '03945274', 'Pending', 15.40, 373, '2025-04-28 15:06:44', 63, 3, 83),
(781, 0, 'Ferdinand', 'Hudson', '03945274', 'Pending', 15.40, 373, '2025-04-28 15:06:44', 63, 1, 78),
(782, 0, 'Scarlet', 'Saunders', '03945274', 'Pending', 50.00, 374, '2025-04-28 17:38:43', 62, 5, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `fk_address` (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=783;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
