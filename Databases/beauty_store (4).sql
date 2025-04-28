-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 03:18 PM
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
  `country` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `commune` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `order_id`, `admin_id`, `create_at`, `address_text`, `city`, `country`, `village`, `commune`, `district`, `province`) VALUES
(37, NULL, NULL, '2025-04-23 03:17:01', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Velit id amet non ', 'Non sit at quis qui'),
(38, NULL, NULL, '2025-04-23 03:54:46', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(39, NULL, NULL, '2025-04-23 03:55:41', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(40, NULL, NULL, '2025-04-23 03:56:14', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(41, NULL, NULL, '2025-04-23 03:56:34', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(42, NULL, NULL, '2025-04-23 03:57:18', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(43, NULL, NULL, '2025-04-23 03:57:41', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(44, NULL, NULL, '2025-04-23 03:58:05', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(45, NULL, NULL, '2025-04-23 04:02:33', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(46, NULL, NULL, '2025-04-23 04:03:08', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(47, NULL, NULL, '2025-04-23 04:03:17', '', '', 'Canada', 'Sed vitae nihil corr', 'Deserunt non anim do', 'Adipisci suscipit vo', 'Facilis sit in dolo'),
(48, NULL, NULL, '2025-04-23 04:03:58', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(49, NULL, NULL, '2025-04-23 04:05:21', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(50, NULL, NULL, '2025-04-23 04:06:23', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(51, NULL, NULL, '2025-04-23 04:06:30', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(52, NULL, NULL, '2025-04-23 04:07:07', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(53, NULL, NULL, '2025-04-23 04:07:16', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(54, NULL, NULL, '2025-04-23 04:07:33', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(55, NULL, NULL, '2025-04-23 04:08:09', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(56, NULL, NULL, '2025-04-23 04:14:08', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(57, NULL, NULL, '2025-04-23 04:14:31', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(58, NULL, NULL, '2025-04-23 04:14:37', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(59, NULL, NULL, '2025-04-23 04:15:01', '', '', 'Cambodia', 'Deserunt incididunt ', 'Omnis corporis numqu', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(60, NULL, NULL, '2025-04-23 04:16:58', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(61, NULL, NULL, '2025-04-23 04:17:37', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(62, NULL, NULL, '2025-04-23 04:18:27', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(63, NULL, NULL, '2025-04-23 04:18:49', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(64, NULL, NULL, '2025-04-23 04:19:12', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(65, NULL, NULL, '2025-04-23 04:19:23', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(66, NULL, NULL, '2025-04-23 04:20:08', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(67, NULL, NULL, '2025-04-23 04:20:28', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(68, NULL, NULL, '2025-04-23 04:20:57', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(69, NULL, NULL, '2025-04-23 04:21:30', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(70, NULL, NULL, '2025-04-23 04:31:33', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(71, NULL, NULL, '2025-04-23 04:32:12', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(72, NULL, NULL, '2025-04-23 04:32:40', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(73, NULL, NULL, '2025-04-23 04:33:20', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(74, NULL, NULL, '2025-04-23 04:34:12', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(75, NULL, NULL, '2025-04-23 04:35:49', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(76, NULL, NULL, '2025-04-23 04:36:14', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(77, NULL, NULL, '2025-04-23 04:36:36', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(78, NULL, NULL, '2025-04-23 04:37:01', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(79, NULL, NULL, '2025-04-23 04:37:17', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(80, NULL, NULL, '2025-04-23 04:37:34', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(81, NULL, NULL, '2025-04-23 04:38:11', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(82, NULL, NULL, '2025-04-23 04:38:32', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(83, NULL, NULL, '2025-04-23 04:38:46', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(84, NULL, NULL, '2025-04-23 04:40:39', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(85, NULL, NULL, '2025-04-23 04:40:51', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(86, NULL, NULL, '2025-04-23 04:41:16', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(87, NULL, NULL, '2025-04-23 04:41:44', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(88, NULL, NULL, '2025-04-23 04:44:31', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(89, NULL, NULL, '2025-04-23 04:45:11', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(90, NULL, NULL, '2025-04-23 04:46:11', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(91, NULL, NULL, '2025-04-23 04:46:26', '', '', 'United States', 'Sint nulla eaque au', 'Eveniet nulla ex re', 'Esse laborum elit f', 'Consequatur Hic lau'),
(92, NULL, NULL, '2025-04-23 04:54:17', '', '', 'United States', 'Amet quia ducimus ', 'Pariatur Accusamus ', 'Sint veniam eveniet', 'Cillum reprehenderit'),
(93, NULL, NULL, '2025-04-23 04:57:40', '', '', 'Canada', 'Et dolorum rerum por', 'Sint delectus exerc', 'Eius impedit sunt ', 'Dolor aut autem quia'),
(94, NULL, NULL, '2025-04-23 04:57:59', '', '', 'Canada', 'Et dolorum rerum por', 'Sint delectus exerc', 'Eius impedit sunt ', 'Dolor aut autem quia'),
(95, NULL, NULL, '2025-04-23 04:59:39', '', '', 'Cambodia', 'Officiis sed corpori', 'Voluptas est placeat', 'Ipsum et ullam nostr', 'Provident iste nece'),
(96, NULL, NULL, '2025-04-23 05:04:58', '', '', 'United Kingdom', 'Ut eiusmod aliquam n', 'Ut lorem voluptatem ', 'Sequi incidunt cum ', 'Sint magnam quod ad'),
(97, NULL, NULL, '2025-04-23 05:06:39', '', '', 'United Kingdom', 'Ut eiusmod aliquam n', 'Ut lorem voluptatem ', 'Sequi incidunt cum ', 'Sint magnam quod ad'),
(98, NULL, NULL, '2025-04-23 05:07:17', '', '', 'Canada', 'Sed proident in cum', 'Consequatur eos aut', 'Laborum sit ducimus', 'Maxime molestiae deb'),
(99, NULL, NULL, '2025-04-23 05:08:44', '', '', 'Canada', 'Sed proident in cum', 'Consequatur eos aut', 'Laborum sit ducimus', 'Maxime molestiae deb'),
(100, NULL, NULL, '2025-04-23 05:08:57', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(101, NULL, NULL, '2025-04-23 05:10:03', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Exercitation nihil n', 'Incidunt nihil dolo'),
(102, NULL, NULL, '2025-04-23 05:11:37', '', '', 'Cambodia', 'Consequatur id dig', 'Possimus enim moles', 'Qui officiis laborum', 'Lorem autem aut cupi'),
(103, NULL, NULL, '2025-04-23 05:12:39', '', '', 'United States', 'Est in sint fugiat ', 'Totam molestiae quib', 'Dolorem aut porro au', 'Necessitatibus enim '),
(104, NULL, NULL, '2025-04-23 05:13:42', '', '', 'Canada', 'Nesciunt error volu', 'Libero reiciendis ve', 'Distinctio Sapiente', 'Cillum nesciunt odi'),
(105, NULL, NULL, '2025-04-23 05:32:02', '', '', 'Cambodia', 'Voluptatum eius cons', 'Dolorem necessitatib', 'Aut enim illo harum ', 'Laborum Aut eu eaqu'),
(106, NULL, NULL, '2025-04-23 05:32:25', '', '', 'United States', 'Debitis veritatis vo', 'Laborum Sit Nam al', 'Est voluptatem non c', 'Accusantium at volup'),
(107, NULL, NULL, '2025-04-23 05:52:41', '', '', 'United Kingdom', 'Rerum a omnis ullamc', 'Adipisicing sunt nos', 'Alias pariatur Odio', 'Cupiditate voluptati'),
(108, NULL, NULL, '2025-04-23 05:54:50', '', '', 'United States', 'Impedit possimus v', 'Ut magni ea molestia', 'Nostrud ullam sunt r', 'Veritatis qui volupt'),
(109, NULL, NULL, '2025-04-23 05:58:58', '', '', 'Canada', 'Dolore asperiores si', 'Ad est quia velit to', 'In similique totam d', 'Dolore eum quis ut e'),
(110, NULL, NULL, '2025-04-23 06:00:32', '', '', 'Cambodia', 'Cupiditate dolor fug', 'Voluptate est ut aut', 'Labore cumque illo u', 'Saepe et qui et quos'),
(111, NULL, NULL, '2025-04-23 06:01:44', '', '', 'United Kingdom', 'Quod aliquid mollit ', 'Est sapiente minus e', 'Velit reiciendis con', 'Minima sint cupidat'),
(112, NULL, NULL, '2025-04-23 06:03:51', '', '', 'Cambodia', 'Veritatis omnis temp', 'In velit ad labore t', 'Earum aperiam tempor', 'Necessitatibus omnis'),
(113, NULL, NULL, '2025-04-23 06:10:29', '', '', 'Canada', 'Dolorem ut reprehend', 'Praesentium quod ver', 'Voluptatem quis sae', 'Consequatur Consequ'),
(114, NULL, NULL, '2025-04-23 06:19:10', '', '', 'Canada', 'Dolorem ut reprehend', 'Praesentium quod ver', 'Voluptatem quis sae', 'Consequatur Consequ'),
(115, NULL, NULL, '2025-04-23 06:19:33', '', '', 'Cambodia', 'Sequi consequat Vol', 'Harum dolorem aut do', 'Ea magnam assumenda ', 'Obcaecati doloremque'),
(116, NULL, NULL, '2025-04-23 06:25:17', '', '', 'United Kingdom', 'Nam nihil ipsum sed', 'Quis ut ea sunt in v', 'Autem praesentium ip', 'Laudantium officiis'),
(117, NULL, NULL, '2025-04-23 06:28:57', '', '', 'Cambodia', 'Odit dolor officia d', 'Ut deleniti commodi ', 'Est qui quod assumen', 'Sunt provident quia'),
(118, NULL, NULL, '2025-04-23 06:29:00', '', '', 'Cambodia', 'Odit dolor officia d', 'Ut deleniti commodi ', 'Est qui quod assumen', 'Sunt provident quia'),
(119, NULL, NULL, '2025-04-23 06:29:44', '', '', 'Cambodia', 'Adipisicing amet si', 'A vitae omnis repell', 'Sunt consequuntur ei', 'Suscipit consequat '),
(120, NULL, NULL, '2025-04-23 06:30:19', '', '', 'United Kingdom', 'Exercitationem atque', 'Cupiditate hic maior', 'Commodo ratione quod', 'Quia veritatis sed o'),
(121, NULL, NULL, '2025-04-23 06:31:32', '', '', 'Canada', 'Recusandae Quia ad ', 'Officia animi non a', 'Odit irure cumque ma', 'Est iusto et sit au'),
(122, NULL, NULL, '2025-04-23 08:53:06', '', '', 'Canada', 'Recusandae Quia ad ', 'Officia animi non a', 'Odit irure cumque ma', 'Est iusto et sit au'),
(123, NULL, NULL, '2025-04-23 08:55:56', '', '', 'Canada', 'Dolores molestiae ve', 'Temporibus error pro', 'Minus dolores labori', 'Veniam in voluptate'),
(124, NULL, NULL, '2025-04-23 08:59:32', '', '', 'Cambodia', 'Labore consectetur t', 'Temporibus ad autem ', 'Dolor velit consecte', 'Officiis velit commo'),
(125, NULL, NULL, '2025-04-23 11:56:42', '', '', 'Cambodia', 'Labore consectetur t', 'Temporibus ad autem ', 'Dolor velit consecte', 'Officiis velit commo'),
(126, NULL, NULL, '2025-04-23 11:59:52', '', '', 'Canada', 'Ad vitae iste volupt', 'Nemo saepe porro est', 'Deserunt alias ea ve', 'Obcaecati asperiores'),
(127, NULL, NULL, '2025-04-23 12:00:17', '', '', 'United States', 'Aliquid aliquam ea v', 'Non et at aliquam al', 'Excepteur ipsam eum ', 'Nulla iusto sunt of'),
(128, NULL, NULL, '2025-04-23 12:02:13', '', '', 'Canada', 'Id ea excepteur omn', 'Quia nulla magnam as', 'Quia itaque mollit q', 'Qui facilis deleniti'),
(129, NULL, NULL, '2025-04-23 12:02:56', '', '', 'Cambodia', 'Provident est eius ', 'Et nisi eaque sit cu', 'Delectus ipsum plac', 'Dolores aliquip mole'),
(130, NULL, NULL, '2025-04-23 12:04:10', '', '', 'United Kingdom', 'Ducimus aspernatur ', 'Distinctio Reprehen', 'Illum dicta alias c', 'Dolore et aliquid la'),
(131, NULL, NULL, '2025-04-23 12:04:34', '', '', 'Cambodia', 'Sit vel non laborum', 'Sed fugit natus sit', 'Eum aperiam labore m', 'Voluptate rerum ex c'),
(132, NULL, NULL, '2025-04-23 12:04:57', '', '', 'Cambodia', 'Maiores nulla repell', 'Voluptatem enim esse', 'Est tempor ducimus', 'Voluptatem Labore a'),
(133, NULL, NULL, '2025-04-23 12:05:21', '', '', 'Cambodia', 'Tempor et aut dolore', 'Quasi qui eligendi q', 'Ea veniam minus vol', 'In magni magni vel r'),
(134, NULL, NULL, '2025-04-23 12:07:03', '', '', 'Canada', 'Fugiat quas pariatu', 'Pariatur Aut duis a', 'Sit harum praesenti', 'Aliquip culpa liber'),
(135, NULL, NULL, '2025-04-23 12:07:49', '', '', 'Cambodia', 'Nisi distinctio Rei', 'Aliqua Corporis mod', 'Nihil voluptatem cu', 'In fugiat ex ea aut '),
(136, NULL, NULL, '2025-04-23 12:08:43', '', '', 'Cambodia', 'Quisquam sed aut imp', 'Aliqua Corporis mod', 'Provident dolorum a', 'Sint laboris nulla d'),
(137, NULL, NULL, '2025-04-23 12:09:08', '', '', 'Cambodia', 'Id velit reprehende', 'Aliqua Corporis mod', 'Consequatur Nisi di', 'Et totam iusto velit'),
(138, NULL, NULL, '2025-04-23 12:10:30', '', '', 'Cambodia', 'Eveniet maiores dol', 'Aliqua Corporis mod', 'Quasi voluptatem As', 'Quis a qui incidunt'),
(139, NULL, NULL, '2025-04-23 12:49:31', '', '', 'Cambodia', 'Voluptas excepteur n', 'Aliqua Corporis mod', 'Molestias sit omnis', 'Eaque consequatur au'),
(140, NULL, NULL, '2025-04-23 12:50:12', '', '', 'Cambodia', 'Deserunt incididunt ', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Est iusto et sit au'),
(141, NULL, NULL, '2025-04-24 01:44:06', '', '', 'United Kingdom', 'Consequatur Quam vo', 'Nihil autem est repr', 'Ea nostrum velit tem', 'Voluptas aliquip vol'),
(142, NULL, 59, '2025-04-24 01:53:16', '', '', 'Canada', 'Sunt quas voluptas l', 'A non qui laudantium', 'Ad vel adipisicing d', 'Aut earum qui non ve'),
(143, NULL, 59, '2025-04-24 13:06:21', '', '', 'United States', 'Quae doloribus aut u', 'Dolore et nihil eum ', 'Consequatur Archite', 'Nulla omnis velit p'),
(144, NULL, 62, '2025-04-25 18:56:15', '', '', 'Cambodia', 'Consectetur est nu', 'Aut neque blanditiis', 'Commodi consectetur', 'Voluptatem Ad sit '),
(145, NULL, 63, '2025-04-25 18:59:31', '', '', 'United Kingdom', 'Esse corporis rerum ', 'Eum eaque corporis d', 'Iste consectetur re', 'Eveniet minim susci'),
(146, NULL, 62, '2025-04-25 19:52:42', '', '', 'Canada', 'Fugiat laborum Quis', 'Incidunt temporibus', 'Quae blanditiis duis', 'Est provident totam'),
(147, NULL, 62, '2025-04-25 19:56:07', '', '', 'United Kingdom', 'Amet adipisci dolor', 'Dolor voluptatem Ea', 'Praesentium unde rep', 'Exercitation enim au'),
(148, NULL, 62, '2025-04-25 19:57:35', '', '', 'United States', 'Voluptate aut deseru', 'Voluptatem Quo enim', 'Voluptate aut aspern', 'Enim quis fuga Cons'),
(149, NULL, 62, '2025-04-25 20:01:19', '', '', 'United States', 'Voluptate aut deseru', 'Voluptatem Quo enim', 'Voluptate aut aspern', 'Enim quis fuga Cons'),
(150, NULL, 62, '2025-04-25 20:01:39', '', '', 'United States', 'Quia placeat deleni', 'Nam totam ipsum impe', 'Veniam aut vel moll', 'Esse ab in ad atque '),
(151, NULL, 62, '2025-04-26 04:01:10', '', '', 'United States', 'Quia placeat deleni', 'Nam totam ipsum impe', 'Veniam aut vel moll', 'Esse ab in ad atque '),
(152, NULL, 62, '2025-04-26 04:03:02', '', '', 'United States', 'Quia placeat deleni', 'Nam totam ipsum impe', 'Veniam aut vel moll', 'Esse ab in ad atque '),
(153, NULL, 62, '2025-04-26 04:03:23', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Odit irure cumque ma', 'Nihil est non dolor'),
(154, NULL, 62, '2025-04-26 04:04:27', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Odit irure cumque ma', 'Nihil est non dolor'),
(155, NULL, 62, '2025-04-26 04:04:41', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Odit irure cumque ma', 'Nihil est non dolor'),
(156, NULL, 62, '2025-04-26 04:04:55', '', '', 'United States', 'Est est quo et amet', 'Sint explicabo Mol', 'Tenetur adipisicing ', 'Nulla consequuntur i'),
(157, NULL, 62, '2025-04-26 04:05:13', '', '', 'United States', 'Est est quo et amet', 'Sint explicabo Mol', 'Tenetur adipisicing ', 'Nulla consequuntur i'),
(158, NULL, 62, '2025-04-26 04:05:33', '', '', 'United States', 'Est est quo et amet', 'Sint explicabo Mol', 'Tenetur adipisicing ', 'Nulla consequuntur i'),
(159, NULL, 62, '2025-04-26 04:05:54', '', '', 'United States', 'Est est quo et amet', 'Sint explicabo Mol', 'Tenetur adipisicing ', 'Nulla consequuntur i'),
(160, NULL, 62, '2025-04-26 04:06:11', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(161, NULL, 62, '2025-04-26 04:06:28', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(162, NULL, 62, '2025-04-26 04:09:20', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(163, NULL, 62, '2025-04-26 04:09:38', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(164, NULL, 62, '2025-04-26 04:10:27', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(165, NULL, 62, '2025-04-26 04:10:50', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(166, NULL, 62, '2025-04-26 04:11:12', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(167, NULL, 62, '2025-04-26 04:11:16', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(168, NULL, 62, '2025-04-26 04:11:58', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(169, NULL, 62, '2025-04-26 04:12:09', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(170, NULL, 62, '2025-04-26 04:12:20', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(171, NULL, 62, '2025-04-26 04:12:47', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(172, NULL, 62, '2025-04-26 04:13:28', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(173, NULL, 62, '2025-04-26 04:13:35', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(174, NULL, 62, '2025-04-26 04:14:33', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(175, NULL, 62, '2025-04-26 04:15:44', '', '', 'Canada', 'Mollit et praesentiu', 'Iste vitae dicta tem', 'Consequuntur necessi', 'Iste odio deserunt v'),
(176, NULL, 62, '2025-04-26 04:16:24', '', '', 'United States', 'Aut aliquid Nam aut ', 'Id quisquam ex nisi ', 'Reprehenderit magna', 'Porro asperiores qui'),
(177, NULL, 62, '2025-04-26 04:17:29', '', '', 'United States', 'Aut aliquid Nam aut ', 'Id quisquam ex nisi ', 'Reprehenderit magna', 'Porro asperiores qui'),
(178, NULL, 62, '2025-04-26 04:18:03', '', '', 'United Kingdom', 'Ut esse aperiam quam', 'Tenetur iusto conseq', 'Reiciendis facere et', 'Laborum iusto quae r'),
(179, NULL, 62, '2025-04-26 04:18:39', '', '', 'Canada', 'Molestiae eaque enim', 'Qui eligendi enim ir', 'Sed nobis qui expedi', 'Placeat quae suscip'),
(180, NULL, 62, '2025-04-26 04:28:31', '', '', 'United Kingdom', 'Quia laboris delectu', 'Quaerat et ipsam nih', 'Amet fugit quisqua', 'Vitae quia alias aut'),
(181, NULL, 62, '2025-04-26 05:26:08', '', '', 'United Kingdom', 'Quia laboris delectu', 'Quaerat et ipsam nih', 'Amet fugit quisqua', 'Vitae quia alias aut'),
(182, NULL, 62, '2025-04-26 05:26:26', '', '', 'Cambodia', 'Numquam corrupti no', 'Voluptate eum nostru', 'Placeat quisquam co', 'Soluta suscipit exer'),
(183, NULL, 62, '2025-04-26 05:27:12', '', '', 'Cambodia', 'Numquam corrupti no', 'Voluptate eum nostru', 'Placeat quisquam co', 'Soluta suscipit exer'),
(184, NULL, 62, '2025-04-26 05:27:30', '', '', 'Cambodia', 'Numquam corrupti no', 'Voluptate eum nostru', 'Placeat quisquam co', 'Soluta suscipit exer'),
(185, NULL, 62, '2025-04-26 05:28:01', '', '', 'Cambodia', 'Numquam corrupti no', 'Voluptate eum nostru', 'Placeat quisquam co', 'Soluta suscipit exer'),
(186, NULL, 62, '2025-04-26 05:32:20', '', '', 'Cambodia', 'Numquam corrupti no', 'Voluptate eum nostru', 'Placeat quisquam co', 'Soluta suscipit exer'),
(187, NULL, 62, '2025-04-26 05:34:28', '', '', 'Cambodia', 'Numquam corrupti no', 'Voluptate eum nostru', 'Placeat quisquam co', 'Soluta suscipit exer'),
(188, NULL, 62, '2025-04-26 05:36:51', '', '', 'Cambodia', 'Voluptates velit ea ', 'Quia veniam ratione', 'Asperiores Nam sed q', 'Molestias eius aut s'),
(189, NULL, 62, '2025-04-26 05:37:58', '', '', 'Cambodia', 'Voluptates velit ea ', 'Quia veniam ratione', 'Asperiores Nam sed q', 'Molestias eius aut s'),
(190, NULL, 62, '2025-04-26 05:38:41', '', '', 'United States', 'Molestias quia venia', 'Non dolorum vel et d', 'Fugiat tempora accu', 'Aliquip laborum Sit'),
(191, NULL, 62, '2025-04-26 05:39:28', '', '', 'Canada', 'Molestiae eaque enim', 'Qui eligendi enim ir', 'Sed nobis qui expedi', 'Placeat quae suscip'),
(192, NULL, 62, '2025-04-26 05:39:53', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(193, NULL, 62, '2025-04-26 05:41:19', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(194, NULL, 62, '2025-04-26 05:41:32', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(195, NULL, 62, '2025-04-26 05:42:01', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(196, NULL, 62, '2025-04-26 05:43:03', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(197, NULL, 62, '2025-04-26 05:43:22', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(198, NULL, 62, '2025-04-26 05:43:26', '', '', 'Cambodia', 'Nisi Nam occaecat en', 'Incidunt dolorum no', 'Ipsam velit officia', 'Cillum ea voluptates'),
(199, NULL, 62, '2025-04-26 05:43:43', '', '', 'United Kingdom', 'Eum ullam autem volu', 'Ut voluptatem aliqu', 'Consectetur iure lab', 'Voluptatibus non lab'),
(200, NULL, 62, '2025-04-26 05:44:13', '', '', 'United Kingdom', 'Eum ullam autem volu', 'Ut voluptatem aliqu', 'Consectetur iure lab', 'Voluptatibus non lab'),
(201, NULL, 62, '2025-04-26 05:44:46', '', '', 'United Kingdom', 'Eum ullam autem volu', 'Ut voluptatem aliqu', 'Consectetur iure lab', 'Voluptatibus non lab'),
(202, NULL, 62, '2025-04-26 05:44:56', '', '', 'United Kingdom', 'Eum ullam autem volu', 'Ut voluptatem aliqu', 'Consectetur iure lab', 'Voluptatibus non lab'),
(203, NULL, 62, '2025-04-26 05:45:09', '', '', 'United Kingdom', 'Eum ullam autem volu', 'Ut voluptatem aliqu', 'Consectetur iure lab', 'Voluptatibus non lab'),
(204, NULL, 62, '2025-04-26 05:45:27', '', '', 'Cambodia', 'Voluptate nulla opti', 'Suscipit maxime fuga', 'Velit ad sed aperia', 'Repudiandae aliquid '),
(205, NULL, 62, '2025-04-26 05:46:13', '', '', 'Cambodia', 'Voluptate nulla opti', 'Suscipit maxime fuga', 'Velit ad sed aperia', 'Repudiandae aliquid '),
(206, NULL, 62, '2025-04-26 05:47:58', '', '', 'United States', 'Et est sed neque duc', 'Aut odit incidunt q', 'Cum ut deleniti ut i', 'Culpa non at duis p'),
(207, NULL, 62, '2025-04-26 05:49:32', '', '', 'United States', 'Et est sed neque duc', 'Aut odit incidunt q', 'Cum ut deleniti ut i', 'Culpa non at duis p'),
(208, NULL, 62, '2025-04-26 05:49:51', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Est iusto et sit au'),
(209, NULL, 62, '2025-04-26 05:53:00', '', '', 'United Kingdom', 'Rerum enim inventore', 'Ut nulla quia ipsum ', 'Eaque eum deserunt v', 'Voluptatibus et sed '),
(210, NULL, 62, '2025-04-26 07:18:46', '', '', 'United Kingdom', 'Rerum enim inventore', 'Ut nulla quia ipsum ', 'Eaque eum deserunt v', 'Voluptatibus et sed '),
(211, NULL, 62, '2025-04-26 07:19:39', '', '', 'United Kingdom', 'Rerum enim inventore', 'Ut nulla quia ipsum ', 'Eaque eum deserunt v', 'Voluptatibus et sed '),
(212, NULL, 62, '2025-04-26 07:20:26', '', '', 'United States', 'Molestias quia venia', 'Non dolorum vel et d', 'Fugiat tempora accu', 'Aliquip laborum Sit'),
(213, NULL, 62, '2025-04-26 07:21:14', '', '', 'United States', 'Ad nemo distinctio ', 'Inventore iusto quod', 'Quae consequatur et', 'Duis asperiores anim'),
(214, NULL, 62, '2025-04-26 07:22:47', '', '', 'Cambodia', 'Unde aut reprehender', 'Expedita deleniti ea', 'Eaque saepe natus re', 'Qui in maxime nisi m'),
(215, NULL, 62, '2025-04-26 07:25:45', '', '', 'Cambodia', 'Est est nisi ut vo', 'Dicta aut repudianda', 'Accusantium autem vo', 'Quo fugiat voluptat'),
(216, NULL, 59, '2025-04-26 07:58:51', '', '', 'Cambodia', 'Harum unde impedit ', 'Sed anim voluptatum ', 'Maxime proident exe', 'Nostrud ipsum delect'),
(217, NULL, 59, '2025-04-26 07:59:43', '', '', 'Cambodia', 'Harum unde impedit ', 'Sed anim voluptatum ', 'Maxime proident exe', 'Nostrud ipsum delect'),
(218, NULL, 59, '2025-04-26 08:01:40', '', '', 'Cambodia', 'Harum unde impedit ', 'Sed anim voluptatum ', 'Maxime proident exe', 'Nostrud ipsum delect'),
(219, NULL, 59, '2025-04-26 08:01:49', '', '', 'Cambodia', 'Harum unde impedit ', 'Sed anim voluptatum ', 'Maxime proident exe', 'Nostrud ipsum delect'),
(220, NULL, 59, '2025-04-26 08:03:34', '', '', 'Cambodia', 'Harum unde impedit ', 'Sed anim voluptatum ', 'Maxime proident exe', 'Nostrud ipsum delect'),
(221, NULL, 59, '2025-04-26 08:03:48', '', '', 'Cambodia', 'Aute cumque culpa et', 'Quis quia odit unde ', 'Quis irure eum non e', 'Optio duis harum su'),
(222, NULL, 59, '2025-04-26 08:05:11', '', '', 'Cambodia', 'Aute cumque culpa et', 'Quis quia odit unde ', 'Quis irure eum non e', 'Optio duis harum su'),
(223, NULL, 59, '2025-04-26 08:07:15', '', '', 'Cambodia', 'Aute cumque culpa et', 'Quis quia odit unde ', 'Quis irure eum non e', 'Optio duis harum su'),
(224, NULL, 62, '2025-04-26 09:47:21', '', '', 'Cambodia', 'Est est nisi ut vo', 'Dicta aut repudianda', 'Accusantium autem vo', 'Quo fugiat voluptat'),
(225, NULL, 62, '2025-04-26 09:47:36', '', '', 'Cambodia', 'Est est nisi ut vo', 'Dicta aut repudianda', 'Accusantium autem vo', 'Quo fugiat voluptat'),
(226, NULL, 62, '2025-04-26 09:47:44', '', '', 'Cambodia', 'Est est nisi ut vo', 'Dicta aut repudianda', 'Accusantium autem vo', 'Quo fugiat voluptat'),
(227, NULL, 62, '2025-04-26 09:48:13', '', '', 'Cambodia', 'Est est nisi ut vo', 'Dicta aut repudianda', 'Accusantium autem vo', 'Quo fugiat voluptat'),
(228, NULL, 62, '2025-04-26 09:49:27', '', '', 'Cambodia', 'Est est nisi ut vo', 'Dicta aut repudianda', 'Accusantium autem vo', 'Quo fugiat voluptat'),
(229, NULL, 62, '2025-04-26 09:49:40', '', '', 'United Kingdom', 'In sunt alias qui d', 'Magni suscipit aliqu', 'Ex error maiores tot', 'Et sit ut magni com'),
(230, NULL, 62, '2025-04-26 09:49:54', '', '', 'United Kingdom', 'In sunt alias qui d', 'Magni suscipit aliqu', 'Ex error maiores tot', 'Et sit ut magni com'),
(231, NULL, 62, '2025-04-26 09:50:53', '', '', 'United Kingdom', 'In sunt alias qui d', 'Magni suscipit aliqu', 'Ex error maiores tot', 'Et sit ut magni com'),
(232, NULL, 62, '2025-04-26 09:51:10', '', '', 'United Kingdom', 'In sunt alias qui d', 'Magni suscipit aliqu', 'Ex error maiores tot', 'Et sit ut magni com'),
(233, NULL, 62, '2025-04-26 09:51:46', '', '', 'United Kingdom', 'In sunt alias qui d', 'Magni suscipit aliqu', 'Ex error maiores tot', 'Et sit ut magni com'),
(234, NULL, 62, '2025-04-26 09:52:21', '', '', 'United Kingdom', 'In sunt alias qui d', 'Magni suscipit aliqu', 'Ex error maiores tot', 'Et sit ut magni com'),
(235, NULL, 62, '2025-04-26 09:53:10', '', '', 'Cambodia', 'Consequatur possimus', 'Aute vel incidunt e', 'Tempore molestiae e', 'Voluptas sit error '),
(236, NULL, 62, '2025-04-26 09:53:47', '', '', 'Cambodia', 'Consequatur possimus', 'Aute vel incidunt e', 'Tempore molestiae e', 'Voluptas sit error '),
(237, NULL, 62, '2025-04-26 09:54:20', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(238, NULL, 62, '2025-04-26 09:55:22', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(239, NULL, 62, '2025-04-26 09:56:47', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(240, NULL, 62, '2025-04-26 09:57:33', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(241, NULL, 62, '2025-04-26 09:58:26', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(242, NULL, 62, '2025-04-26 09:58:40', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(243, NULL, 62, '2025-04-26 09:58:54', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(244, NULL, 62, '2025-04-26 09:59:01', '', '', 'Cambodia', 'Earum necessitatibus', 'Suscipit eum volupta', 'Quas ut enim odio re', 'Rerum esse sint volu'),
(245, NULL, 62, '2025-04-26 09:59:14', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(246, NULL, 62, '2025-04-26 09:59:36', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(247, NULL, 62, '2025-04-26 10:00:08', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(248, NULL, 62, '2025-04-26 10:01:09', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(249, NULL, 62, '2025-04-26 10:01:31', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(250, NULL, 62, '2025-04-26 10:01:51', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(251, NULL, 62, '2025-04-26 10:02:56', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(252, NULL, 62, '2025-04-26 10:03:17', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(253, NULL, 62, '2025-04-26 10:03:24', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(254, NULL, 62, '2025-04-26 10:03:30', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(255, NULL, 62, '2025-04-26 10:05:35', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(256, NULL, 62, '2025-04-26 10:06:22', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(257, NULL, 62, '2025-04-26 10:06:51', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(258, NULL, 62, '2025-04-26 10:07:44', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(259, NULL, 62, '2025-04-26 10:07:49', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(260, NULL, 62, '2025-04-26 10:08:13', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(261, NULL, 62, '2025-04-26 10:09:00', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(262, NULL, 62, '2025-04-26 10:10:24', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(263, NULL, 62, '2025-04-26 10:10:28', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(264, NULL, 62, '2025-04-26 10:10:56', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(265, NULL, 62, '2025-04-26 10:11:22', '', '', 'Canada', 'In alias dolore elig', 'Soluta dolorem ut do', 'In quidem omnis dign', 'Exercitation aperiam'),
(266, NULL, 62, '2025-04-26 10:11:36', '', '', 'United Kingdom', 'Eum non quaerat et o', 'Perferendis aut modi', 'Officia omnis est v', 'Minima qui a aute do'),
(267, NULL, 62, '2025-04-26 10:12:49', '', '', 'United Kingdom', 'Eum non quaerat et o', 'Perferendis aut modi', 'Officia omnis est v', 'Minima qui a aute do'),
(268, NULL, 62, '2025-04-26 15:16:01', '', '', 'United States', 'Culpa non quibusdam', 'Eu ex facilis earum ', 'Ab tempora qui in al', 'Dolorem mollit nulla'),
(269, NULL, 62, '2025-04-26 15:16:54', '', '', 'United States', 'Culpa non quibusdam', 'Eu ex facilis earum ', 'Ab tempora qui in al', 'Dolorem mollit nulla');

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
(62, 'SAMOUN', NULL, '0965324312', '$2y$10$q3bzx3OJyGToFDf2ogPjseoV47vO158HC6K20pHNkc/GGzldb6jQu', 'uploads/profiles/profile_1745196928.jpg', '2025-04-07 15:26:38', '2025-04-21 00:55:28', 'Admin', 'inactive'),
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
(94, 80, 32.00, '1995-01-20', '2011-06-11', '2025-04-15 20:33:11', '2025-04-15 20:33:11'),
(97, 76, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(98, 78, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(99, 79, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(100, 81, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(101, 82, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(102, 83, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(103, 84, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(104, 85, 98.00, '1989-02-02', '2025-04-16', '2025-04-15 20:33:33', '2025-04-15 20:33:33'),
(105, 85, 76.00, '1972-09-24', '2025-04-17', '2025-04-16 22:50:00', '2025-04-16 22:50:00'),
(106, 90, 90.00, '2025-04-26', '2025-04-27', '2025-04-25 12:25:48', '2025-04-25 12:25:48'),
(107, 92, 90.00, '2025-04-26', '2025-04-27', '2025-04-25 12:25:48', '2025-04-25 12:25:48'),
(108, 93, 90.00, '2025-04-26', '2025-04-27', '2025-04-25 12:25:48', '2025-04-25 12:25:48'),
(109, 95, 90.00, '2025-04-26', '2025-04-27', '2025-04-25 12:25:48', '2025-04-25 12:25:48'),
(111, 79, 10.00, '2025-04-26', '2025-04-27', '2025-04-25 12:26:14', '2025-04-25 12:26:14'),
(112, 80, 10.00, '2025-04-26', '2025-04-27', '2025-04-25 12:26:14', '2025-04-25 12:26:14'),
(113, 83, 10.00, '2025-04-26', '2025-04-27', '2025-04-25 12:26:14', '2025-04-25 12:26:14'),
(119, 102, 10.00, '2025-04-26', '2025-04-27', '2025-04-25 12:26:14', '2025-04-25 12:26:14'),
(120, 103, 10.00, '2025-04-26', '2025-04-27', '2025-04-25 12:26:14', '2025-04-25 12:26:14'),
(121, 110, 10.00, '2025-04-26', '2025-04-27', '2025-04-25 12:26:14', '2025-04-25 12:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
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
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `type`, `status`, `created_at`, `is_deleted`, `first_name`, `last_name`, `phone_number`, `order_id`, `product_id`, `user_id`) VALUES
(76, '', 'No message provided', 'order', 'unread', '2025-04-25 21:18:39', 0, 'Dora', 'Patrick', '03945274', NULL, 78, 62),
(103, '', '', 'order', 'unread', '2025-04-26 00:19:40', 0, NULL, NULL, NULL, 592, 76, 62),
(104, '', '', 'order', 'unread', '2025-04-26 00:20:26', 0, NULL, NULL, NULL, 594, 76, 62),
(105, '', '', 'order', 'unread', '2025-04-26 00:21:14', 0, NULL, NULL, NULL, 596, 76, 62),
(106, '', '', 'order', 'unread', '2025-04-26 00:22:47', 0, NULL, NULL, NULL, 598, 79, 62),
(107, '', '', 'order', 'unread', '2025-04-26 00:25:45', 0, NULL, NULL, NULL, 600, 79, 62),
(108, '', 'Nisi nisi proident ', 'contact', 'unread', '2025-04-26 00:26:17', 0, 'Chancellor', 'Stuart', '0987654321', NULL, 110, 62),
(115, '', '', 'order', 'unread', '2025-04-26 01:07:15', 0, NULL, NULL, NULL, 616, 79, 59);

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
(583, 0, 'Zeph', 'Boyer', '03945274', 'Pending', 850.00, 207, '2025-04-25 20:47:00', 62, 84, 78),
(584, 0, 'Zeph', 'Boyer', '03945274', 'Pending', 850.00, 207, '2025-04-25 20:47:00', 62, 4, 76),
(585, 0, 'Calista', 'Castro', '3576515654', 'Pending', 845.00, 208, '2025-04-25 20:49:00', 62, 66, 78),
(586, 0, 'Calista', 'Castro', '3576515654', 'Pending', 845.00, 208, '2025-04-25 20:49:00', 62, 74, 76),
(587, 0, 'Carl', 'Allen', '3576515654', 'Pending', 845.00, 209, '2025-04-25 20:52:00', 62, 66, 78),
(588, 0, 'Carl', 'Allen', '3576515654', 'Pending', 845.00, 209, '2025-04-25 20:52:00', 62, 74, 76),
(589, 0, 'Carl', 'Allen', '3576515654', 'Pending', 845.00, 210, '2025-04-25 20:52:00', 62, 66, 78),
(590, 0, 'Carl', 'Allen', '3576515654', 'Pending', 845.00, 210, '2025-04-25 20:52:00', 62, 74, 76),
(591, 0, 'Carl', 'Allen', '3576515654', 'Pending', 845.00, 211, '2025-04-25 20:52:00', 62, 66, 78),
(592, 0, 'Carl', 'Allen', '3576515654', 'Pending', 845.00, 211, '2025-04-25 20:52:00', 62, 74, 76),
(593, 0, 'Silas', 'Britt', '03892451', 'Pending', 530.00, 212, '2025-04-25 22:19:00', 62, 52, 78),
(594, 0, 'Silas', 'Britt', '03892451', 'Pending', 530.00, 212, '2025-04-25 22:19:00', 62, 4, 76),
(595, 0, 'Raja', 'Kline', '0965324312', 'Pending', 530.00, 213, '2025-04-25 22:21:00', 62, 52, 78),
(596, 0, 'Raja', 'Kline', '0965324312', 'Pending', 530.00, 213, '2025-04-25 22:21:00', 62, 4, 76),
(597, 0, 'Prescott', 'Savage', '0965324312', 'Pending', 92.50, 214, '2025-04-25 22:22:00', 62, 1, 81),
(598, 0, 'Prescott', 'Savage', '0965324312', 'Pending', 92.50, 214, '2025-04-25 22:22:00', 62, 50, 79),
(599, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 215, '2025-04-25 22:25:00', 62, 67, 81),
(600, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 215, '2025-04-25 22:25:00', 62, 24, 79),
(601, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 216, '2025-04-25 22:58:00', 59, 32, 81),
(602, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 216, '2025-04-25 22:58:00', 59, 15, 79),
(603, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 217, '2025-04-25 22:58:00', 59, 32, 81),
(604, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 217, '2025-04-25 22:58:00', 59, 15, 79),
(605, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 218, '2025-04-25 22:58:00', 59, 32, 81),
(606, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 218, '2025-04-25 22:58:00', 59, 15, 79),
(607, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 219, '2025-04-25 22:58:00', 59, 32, 81),
(608, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 219, '2025-04-25 22:58:00', 59, 15, 79),
(609, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 220, '2025-04-25 22:58:00', 59, 32, 81),
(610, 0, 'Cullen', 'Patel', '0965324312', 'Pending', 820.25, 220, '2025-04-25 22:58:00', 59, 15, 79),
(611, 0, 'Shelby', 'Wynn', '0965324312', 'Pending', 1079.70, 221, '2025-04-25 23:03:00', 59, 42, 81),
(612, 0, 'Shelby', 'Wynn', '0965324312', 'Pending', 1079.70, 221, '2025-04-25 23:03:00', 59, 22, 79),
(613, 0, 'Shelby', 'Wynn', '0965324312', 'Pending', 1079.70, 222, '2025-04-25 23:03:00', 59, 42, 81),
(614, 0, 'Shelby', 'Wynn', '0965324312', 'Pending', 1079.70, 222, '2025-04-25 23:03:00', 59, 22, 79),
(615, 0, 'Shelby', 'Wynn', '0965324312', 'Pending', 1079.70, 223, '2025-04-25 23:03:00', 59, 42, 81),
(616, 0, 'Shelby', 'Wynn', '0965324312', 'Pending', 1079.70, 223, '2025-04-25 23:03:00', 59, 22, 79),
(617, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 224, '2025-04-25 22:25:00', 62, 67, 81),
(618, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 224, '2025-04-25 22:25:00', 62, 24, 79),
(619, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 225, '2025-04-25 22:25:00', 62, 67, 81),
(620, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 225, '2025-04-25 22:25:00', 62, 24, 79),
(621, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 226, '2025-04-25 22:25:00', 62, 67, 81),
(622, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 226, '2025-04-25 22:25:00', 62, 24, 79),
(623, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 227, '2025-04-25 22:25:00', 62, 67, 81),
(624, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 227, '2025-04-25 22:25:00', 62, 24, 79),
(625, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 228, '2025-04-25 22:25:00', 62, 67, 81),
(626, 0, 'Dillon', 'Graham', '0965324312', 'Pending', 1707.40, 228, '2025-04-25 22:25:00', 62, 24, 79),
(627, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 229, '2025-04-26 00:49:00', 62, 17, 81),
(628, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 229, '2025-04-26 00:49:00', 62, 80, 79),
(629, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 230, '2025-04-26 00:49:00', 62, 17, 81),
(630, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 230, '2025-04-26 00:49:00', 62, 80, 79),
(631, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 231, '2025-04-26 00:49:00', 62, 17, 81),
(632, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 231, '2025-04-26 00:49:00', 62, 80, 79),
(633, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 232, '2025-04-26 00:49:00', 62, 17, 81),
(634, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 232, '2025-04-26 00:49:00', 62, 80, 79),
(635, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 233, '2025-04-26 00:49:00', 62, 17, 81),
(636, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 233, '2025-04-26 00:49:00', 62, 80, 79),
(637, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 234, '2025-04-26 00:49:00', 62, 17, 81),
(638, 0, 'Nehru', 'Burke', '0965324312', 'Pending', 533.00, 234, '2025-04-26 00:49:00', 62, 80, 79),
(639, 0, 'Rinah', 'Gonzalez', '0965324312', 'Pending', 103.15, 235, '2025-04-26 00:53:00', 62, 69, 79),
(640, 0, 'Rinah', 'Gonzalez', '0965324312', 'Pending', 103.15, 235, '2025-04-26 00:53:00', 62, 1, 82),
(641, 0, 'Rinah', 'Gonzalez', '0965324312', 'Pending', 103.15, 236, '2025-04-26 00:53:00', 62, 69, 79),
(642, 0, 'Rinah', 'Gonzalez', '0965324312', 'Pending', 103.15, 236, '2025-04-26 00:53:00', 62, 1, 82),
(643, 0, 'Deacon', 'Cardenas', '0965324312', 'Pending', 37.80, 237, '2025-04-26 00:54:00', 62, 28, 79),
(644, 0, 'Deacon', 'Cardenas', '0965324312', 'Pending', 37.80, 238, '2025-04-26 00:54:00', 62, 28, 79),
(645, 0, 'Deacon', 'Cardenas', '0965324312', 'Pending', 37.80, 239, '2025-04-26 00:54:00', 62, 28, 79),
(646, 0, 'Sydnee', 'Mathews', '0965324312', 'Pending', 126.90, 260, '2025-04-26 00:59:00', 62, 94, 79),
(647, 0, 'Sydnee', 'Mathews', '0965324312', 'Pending', 126.90, 261, '2025-04-26 00:59:00', 62, 94, 79),
(648, 0, 'Sydnee', 'Mathews', '0965324312', 'Pending', 126.90, 262, '2025-04-26 00:59:00', 62, 94, 79),
(649, 0, 'Sydnee', 'Mathews', '0965324312', 'Pending', 126.90, 263, '2025-04-26 00:59:00', 62, 94, 79),
(650, 0, 'Sydnee', 'Mathews', '0965324312', 'Pending', 126.90, 264, '2025-04-26 00:59:00', 62, 94, 79),
(651, 0, 'Sydnee', 'Mathews', '0965324312', 'Pending', 126.90, 265, '2025-04-26 00:59:00', 62, 94, 79),
(652, 0, 'Freya', 'Terrell', '0965324312', 'Pending', 37.80, 266, '2025-04-26 01:11:00', 62, 28, 79),
(653, 0, 'Freya', 'Terrell', '0965324312', 'Pending', 37.80, 267, '2025-04-26 01:11:00', 62, 28, 79),
(654, 0, 'Bruce', 'Avila', '0965324312', 'Pending', 129.60, 268, '2025-04-26 06:15:00', 62, 96, 79),
(655, 0, 'Bruce', 'Avila', '0965324312', 'Pending', 129.60, 269, '2025-04-26 06:15:00', 62, 96, 79);

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
(76, 'Macey Herrera', 13, -3130, 2.50, 'uploads/96ec018c998c7f3d6dff58d2431c8588.jpg', 'Dignissimos hic minu', '2025-03-27 02:30:03', '2025-04-26 05:21:14', NULL, 26),
(78, 'Signe Becker', 13, -2614, 10.00, 'uploads/418457e5c28de52b0354d0cd89d46b1f.jpg', 'Accusamus commodo qu', '2025-03-27 02:30:21', '2025-04-26 05:21:14', NULL, 26),
(79, 'Raja Buckley', 12, -2097, 1.50, 'uploads/ad92b36defb6c37638fef2231c620e98.jpg', 'Aliqua Officia sit ', '2025-03-27 02:30:28', '2025-04-26 13:16:54', NULL, 26),
(80, 'Germaine Stein', 12, 187, 1.00, 'uploads/bcc1b690340fb2772ec1f217ac38a63c.jpg', 'Sit ullamco consequa', '2025-03-27 02:30:41', '2025-04-25 17:13:39', NULL, 23),
(81, 'Imani Hull', 13, -77, 25.00, 'uploads/beauty-4993465_1280.jpg', 'Et illo excepturi ma', '2025-03-27 02:30:48', '2025-04-26 07:52:21', NULL, 26),
(82, 'Allen Townsend', 13, 701, 10.00, 'uploads/bfe31dd8c647f8fe445c560aebe9d947.jpg', 'Doloribus quaerat ac', '2025-03-27 02:31:00', '2025-04-26 07:53:47', NULL, 26),
(83, 'Kyle Hoover', 12, 688, 2.00, 'uploads/c4338e2e821d48d57ae7c6d83c1720bf.jpg', 'Voluptatem maiores e', '2025-03-27 02:31:08', '2025-04-25 17:14:11', NULL, 26),
(84, 'Jennifer Saunders', 13, 758, 12.00, 'uploads/f6acd3160df7b75abbae739eb2ed2780.jpg', 'Culpa sunt sint acc', '2025-03-27 02:31:17', '2025-04-25 17:14:20', NULL, 26),
(85, 'Sharon Duran', 0, 816, 11.50, 'uploads/fa900721e4818ac9ea8469b40f851522.jpg', 'Dolor temporibus ips', '2025-03-27 02:31:27', '2025-04-25 17:14:30', NULL, 26),
(88, 'Isaiah Lester', 12, 574, 227.00, NULL, 'Sit explicabo Ut ex', '2025-04-18 15:18:06', '2025-04-18 15:18:06', NULL, 23),
(89, 'Felix Mclaughlin', 12, 864, 381.00, NULL, 'Ut sapiente consequu', '2025-04-18 15:18:16', '2025-04-18 15:18:16', NULL, 26),
(90, 'Illana Hickman', 11, 880, 74.00, NULL, 'Consequatur Suscipi', '2025-04-18 15:18:33', '2025-04-18 15:18:33', NULL, 26),
(91, 'Amal Daniels', 13, 731, 583.00, NULL, 'Cillum nihil ullam s', '2025-04-19 14:07:02', '2025-04-19 14:07:02', NULL, 26),
(92, 'Maggie Harrington', 11, 451, 377.00, NULL, 'Dolor dolorum sed et', '2025-04-19 14:11:43', '2025-04-19 14:11:43', NULL, 23),
(93, 'Maggie Harrington', 11, 1, 377.00, NULL, 'Dolor dolorum sed et', '2025-04-19 14:14:16', '2025-04-22 02:17:10', NULL, 23),
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
(104, 'Aspen Vazquez', 11, 539, 80.00, NULL, 'Voluptatem enim vol', '2025-04-20 07:29:09', '2025-04-20 07:29:09', NULL, 26),
(106, 'Octavius Cobb', 13, 145, 787.00, NULL, 'Dolor vitae recusand', '2025-04-21 07:58:22', '2025-04-21 07:58:22', NULL, 26),
(107, 'Vera Wilcox', 13, 318, 173.00, NULL, 'Voluptatem sed et ve', '2025-04-21 07:59:09', '2025-04-21 07:59:09', NULL, 26),
(108, 'Adrian Oliver', 13, 48, 138.00, 'uploads/angkor-khemara-university.webp', 'Quibusdam dolorum do', '2025-04-21 09:20:51', '2025-04-21 09:20:51', NULL, 23),
(109, 'Dante Vasquez', 13, 10, 987.00, 'uploads/aba-payment-qr (3).png', 'Et facilis aliqua M', '2025-04-22 02:18:56', '2025-04-22 02:56:50', NULL, 26),
(110, 'Simone Cook', 12, 2, 27.00, 'uploads/angkor-khemara-university.webp', 'Et qui dolorum delen', '2025-04-22 02:41:52', '2025-04-22 05:01:00', NULL, 26);

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
  ADD KEY `fk_order` (`order_id`),
  ADD KEY `fk_notifications_product` (`product_id`),
  ADD KEY `fk_user_admin` (`user_id`);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

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
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=656;

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

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
  ADD CONSTRAINT `fk_notifications_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_notifications_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_admin` FOREIGN KEY (`user_id`) REFERENCES `admins` (`admin_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
