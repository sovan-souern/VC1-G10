-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2025 at 03:17 PM
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
(269, NULL, 62, '2025-04-26 15:16:54', '', '', 'United States', 'Culpa non quibusdam', 'Eu ex facilis earum ', 'Ab tempora qui in al', 'Dolorem mollit nulla'),
(270, NULL, 62, '2025-04-26 15:24:40', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(271, NULL, 62, '2025-04-26 15:27:25', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(272, NULL, 62, '2025-04-26 15:27:35', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(273, NULL, 62, '2025-04-26 15:31:40', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(274, NULL, 62, '2025-04-26 15:31:53', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(275, NULL, 62, '2025-04-26 15:32:41', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(276, NULL, 62, '2025-04-26 15:35:19', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(277, NULL, 62, '2025-04-26 15:35:41', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(278, NULL, 62, '2025-04-26 15:35:52', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(279, NULL, 62, '2025-04-26 15:37:47', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(280, NULL, 62, '2025-04-26 15:38:08', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(281, NULL, 62, '2025-04-26 15:38:22', '', '', 'United Kingdom', 'Repellendus Ea lore', 'Ratione quasi harum ', 'Provident veritatis', 'Omnis ex sed quia po'),
(282, NULL, 62, '2025-04-26 15:38:35', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(283, NULL, 62, '2025-04-26 15:40:46', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(284, NULL, 62, '2025-04-26 15:41:45', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(285, NULL, 62, '2025-04-26 15:42:26', '', '', 'Cambodia', 'Dolores officia anim', 'Repudiandae quasi pe', 'Ipsum dolores saepe ', 'Commodo sint unde ad'),
(286, NULL, 62, '2025-04-26 15:43:26', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(287, NULL, 62, '2025-04-26 15:44:57', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(288, NULL, 62, '2025-04-26 15:46:44', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(289, NULL, 62, '2025-04-26 15:47:00', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(290, NULL, 62, '2025-04-26 15:47:41', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(291, NULL, 62, '2025-04-26 15:47:52', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(292, NULL, 62, '2025-04-26 15:47:59', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(293, NULL, 62, '2025-04-26 15:48:22', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(294, NULL, 62, '2025-04-26 15:48:38', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(295, NULL, 62, '2025-04-26 15:48:52', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(296, NULL, 62, '2025-04-26 15:49:11', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(297, NULL, 62, '2025-04-26 15:49:29', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(298, NULL, 62, '2025-04-26 15:56:25', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(299, NULL, 62, '2025-04-26 15:57:54', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(300, NULL, 62, '2025-04-26 15:58:56', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(301, NULL, 62, '2025-04-26 15:59:12', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(302, NULL, 62, '2025-04-26 16:05:39', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(303, NULL, 62, '2025-04-26 19:14:19', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(304, NULL, 62, '2025-04-27 04:52:22', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(305, NULL, 62, '2025-04-27 04:53:24', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(306, NULL, 62, '2025-04-27 04:53:47', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(307, NULL, 62, '2025-04-27 04:53:59', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(308, NULL, 62, '2025-04-27 04:54:28', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(309, NULL, 62, '2025-04-27 04:55:06', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(310, NULL, 62, '2025-04-27 04:55:14', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(311, NULL, 62, '2025-04-27 04:55:34', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(312, NULL, 62, '2025-04-27 04:56:06', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(313, NULL, 62, '2025-04-27 04:58:46', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(314, NULL, 62, '2025-04-27 04:59:48', '', '', 'Canada', 'Reiciendis dolorem c', 'Qui numquam dolor iu', 'Adipisci nihil place', 'Ut delectus rerum o'),
(315, NULL, 62, '2025-04-27 05:08:45', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(316, NULL, 62, '2025-04-27 05:09:51', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(317, NULL, 62, '2025-04-27 05:10:23', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(318, NULL, 62, '2025-04-27 05:11:07', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(319, NULL, 62, '2025-04-27 05:11:57', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(320, NULL, 62, '2025-04-27 05:12:21', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(321, NULL, 62, '2025-04-27 05:12:39', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(322, NULL, 62, '2025-04-27 05:12:47', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(323, NULL, 62, '2025-04-27 05:13:06', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(324, NULL, 62, '2025-04-27 05:14:55', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(325, NULL, 62, '2025-04-27 05:15:26', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(326, NULL, 62, '2025-04-27 05:15:57', '', '', 'Cambodia', 'Eligendi obcaecati v', 'Fuga Corporis vero ', 'Quam qui necessitati', 'Fugiat qui et et in'),
(327, NULL, 62, '2025-04-27 05:16:34', '', '', 'United States', 'Exercitationem rerum', 'Et rerum odio nulla ', 'Nisi expedita in vol', 'Alias sunt quia nost'),
(328, NULL, 62, '2025-04-27 05:17:25', '', '', 'United States', 'Exercitationem rerum', 'Et rerum odio nulla ', 'Nisi expedita in vol', 'Alias sunt quia nost'),
(329, NULL, 62, '2025-04-27 05:19:20', '', '', 'United States', 'Exercitationem rerum', 'Et rerum odio nulla ', 'Nisi expedita in vol', 'Alias sunt quia nost'),
(330, NULL, 62, '2025-04-27 05:20:57', '', '', 'United States', 'Exercitationem rerum', 'Et rerum odio nulla ', 'Nisi expedita in vol', 'Alias sunt quia nost'),
(331, NULL, 62, '2025-04-27 05:21:59', '', '', 'United States', 'Exercitationem rerum', 'Et rerum odio nulla ', 'Nisi expedita in vol', 'Alias sunt quia nost'),
(332, NULL, 62, '2025-04-27 05:23:36', '', '', 'United States', 'Exercitationem rerum', 'Et rerum odio nulla ', 'Nisi expedita in vol', 'Alias sunt quia nost'),
(333, NULL, 62, '2025-04-27 05:27:11', '', '', 'Canada', 'Exercitation excepte', 'Cumque dolore volupt', 'Libero voluptatum la', 'Est et obcaecati vol'),
(334, NULL, 62, '2025-04-27 05:27:58', '', '', 'Canada', 'Exercitation excepte', 'Cumque dolore volupt', 'Libero voluptatum la', 'Est et obcaecati vol'),
(335, NULL, 62, '2025-04-27 05:28:44', '', '', 'Cambodia', 'Neque sed qui pariat', 'Omnis at corrupti e', 'Voluptatem deserunt', 'Praesentium mollitia'),
(336, NULL, 62, '2025-04-27 05:29:10', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(337, NULL, 62, '2025-04-27 05:31:58', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(338, NULL, 62, '2025-04-27 05:32:08', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(339, NULL, 62, '2025-04-27 09:40:35', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(340, NULL, 62, '2025-04-27 09:47:46', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(341, NULL, 62, '2025-04-27 09:49:29', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(342, NULL, 62, '2025-04-27 09:50:21', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(343, NULL, 62, '2025-04-27 09:53:20', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(344, NULL, 62, '2025-04-27 09:55:23', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(345, NULL, 62, '2025-04-27 09:55:46', '', '', 'United Kingdom', 'Earum doloribus sint', 'Dolor dolorem ad qui', 'Ullam aspernatur asp', 'Ea eligendi dolores '),
(346, NULL, 62, '2025-04-27 09:57:52', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(347, NULL, 62, '2025-04-27 09:58:06', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(348, NULL, 62, '2025-04-27 09:58:28', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(349, NULL, 62, '2025-04-27 10:00:02', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(350, NULL, 62, '2025-04-27 10:02:51', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(351, NULL, 62, '2025-04-27 10:03:46', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(352, NULL, 62, '2025-04-27 10:03:54', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(353, NULL, 62, '2025-04-27 10:04:11', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(354, NULL, 62, '2025-04-27 10:04:50', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(355, NULL, 62, '2025-04-27 10:05:54', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(356, NULL, 62, '2025-04-27 10:07:41', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(357, NULL, 62, '2025-04-27 10:08:09', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(358, NULL, 62, '2025-04-27 10:10:00', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(359, NULL, 62, '2025-04-27 10:12:50', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor');
INSERT INTO `address` (`address_id`, `order_id`, `admin_id`, `create_at`, `address_text`, `city`, `country`, `village`, `commune`, `district`, `province`) VALUES
(360, NULL, 62, '2025-04-27 15:13:16', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(361, NULL, 62, '2025-04-27 10:16:53', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(362, NULL, 62, '2025-04-27 15:17:53', '', '', 'Cambodia', 'Rerum irure quibusda', 'Aliqua Corporis mod', 'Vel et aliquip ea au', 'Nihil est non dolor'),
(363, NULL, 62, '2025-04-27 15:28:28', '', '', 'United Kingdom', 'Cupiditate odio sit', 'Elit nesciunt id q', 'Nostrud adipisci des', 'Nisi quae mollit sap'),
(364, NULL, 62, '2025-04-27 15:29:21', '', '', 'United Kingdom', 'Cupiditate odio sit', 'Elit nesciunt id q', 'Nostrud adipisci des', 'Nisi quae mollit sap'),
(365, NULL, 62, '2025-04-27 16:37:45', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(366, NULL, 62, '2025-04-27 16:38:46', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(367, NULL, 62, '2025-04-27 17:12:54', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(368, NULL, 62, '2025-04-27 17:15:52', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(369, NULL, 62, '2025-04-27 17:19:00', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(370, NULL, 62, '2025-04-27 17:19:04', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(371, NULL, 62, '2025-04-27 17:29:39', '', '', 'United Kingdom', 'Sit quod adipisci s', 'Est fugiat dolor id ', 'Ullam totam hic et a', 'Illo eius dolorum po'),
(372, NULL, 62, '2025-04-27 22:29:01', '', '', 'Canada', 'Non dolor aliquip al', 'Ipsum et et perspici', 'Quas pariatur Bland', 'Quia est minima ut '),
(373, NULL, 63, '2025-04-28 22:06:44', '', '', 'United States', 'In maxime ratione co', 'Aperiam quia dolores', 'Ex irure consectetur', 'Aliquid distinctio '),
(374, NULL, 62, '2025-04-29 00:38:43', '', '', 'United Kingdom', 'Ea cillum ipsa ab s', 'Sed quae perferendis', 'Ratione omnis necess', 'Laboris debitis vel '),
(375, NULL, 62, '2025-04-29 23:18:27', '', '', 'Canada', 'In numquam ipsa nih', 'Consectetur commodi ', 'Anim quia quis autem', 'Quae in est sed off'),
(376, NULL, 65, '2025-04-30 02:44:04', '', '', 'Cambodia', 'sen sok', 'Phnom Penh', 'tik tla', 'phnom penh'),
(377, NULL, 65, '2025-04-30 12:05:57', '', '', 'Cambodia', 'tik tla', 'Phnom Penh', 'Exercitation nihil n', 'phnom penh'),
(378, NULL, 62, '2025-04-30 12:41:28', '', '', 'United States', 'Laudantium debitis ', 'Ad aut quia enim opt', 'Possimus tempor ut ', 'Qui omnis qui omnis '),
(379, NULL, 63, '2025-04-30 14:47:48', '', '', 'Canada', 'Molestias fugiat sap', 'Similique dolore rep', 'Cupiditate eum rem a', 'Quas accusantium ut '),
(380, NULL, 62, '2025-04-30 14:53:20', '', '', 'Canada', 'Quam amet id aliqui', 'Corrupti quam odit ', 'Do sed in qui quidem', 'Mollit suscipit accu'),
(381, NULL, 62, '2025-04-30 14:55:42', '', '', 'United Kingdom', 'In omnis consequatur', 'Dolore beatae sed re', 'Quae sunt doloribus ', 'Sit voluptatem Maio'),
(382, NULL, 72, '2025-04-30 15:46:13', '', '', 'Cambodia', 'tik tla', 'Phnom Penh', 'Exercitation nihil n', 'phnom penh'),
(383, NULL, 65, '2025-05-02 07:34:14', '', '', 'United Kingdom', 'Elit adipisci ea qu', 'Qui minus porro omni', 'Velit quis est magna', 'Tenetur et dolorem e'),
(384, NULL, 65, '2025-05-02 09:15:58', '', '', 'Cambodia', 'Autem neque officia ', 'Amet quia porro con', 'Exercitationem eos ', 'Repellendus Dolorem'),
(385, NULL, 65, '2025-05-02 10:22:34', '', '', 'Cambodia', 'sala ches', 'Phnom penh', 'pnp', 'BMC');

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
(65, 'souern sovan', 'souernsovan7@gmail.com', NULL, '$2y$10$WC0Fp3RhKaEvObTbzemqSuNdqX1h91k.L9hGVZy/26U8SIMIUwQIe', 'uploads/profiles/profile_1746072355.jpg', '2025-04-29 18:50:13', '2025-05-02 05:59:51', 'Admin', 'inactive'),
(80, 'van', 'sovan.souern@student.passerellesnumeriques.org', NULL, '$2y$10$hErWHYCfT5d.lC6qLPFsgOvGDKLGQeOkSgZsO0R4ZJ32/TXzcCvAm', NULL, '2025-05-02 03:16:49', '2025-05-02 06:01:53', 'ShopOwner', 'inactive');

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
(32, 'Dior', 'uploads/dior-couture-logo-2.jpg', ''),
(33, 'La Mer', 'uploads/images.png', ''),
(34, 'L\'Oréal Paris', 'uploads/Loreal_logo_black.png', '');

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
(22, 'Perfume', NULL, '\r\nSmells good for 24 hours', 'uploads/1746147921_per.jpg'),
(23, 'Shampo', NULL, 'Helps treat dandruff and lice\r\n', 'uploads/1746148125_clk.jpg'),
(24, 'UV', NULL, 'Protect white face and have beutiful ', 'uploads/1746148537_be.avif'),
(25, 'Fom', NULL, 'Eliminates bacteria 100%\r\n', 'uploads/1746148678_f.webp'),
(27, 'Body Lotion', NULL, 'Helps skin glow in 3 days', 'uploads/1746148844_images.jpg');

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
(132, 134, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(133, 135, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(134, 136, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(135, 137, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(136, 138, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(137, 139, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(138, 140, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(139, 152, 30.00, '2025-05-01', '2025-05-03', '2025-05-01 21:30:37', '2025-05-01 21:30:37'),
(140, 155, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(141, 156, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(142, 157, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(143, 158, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(144, 159, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(145, 160, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(146, 161, 20.00, '2025-04-30', '2025-05-01', '2025-05-01 21:34:17', '2025-05-01 21:34:17'),
(147, 141, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25'),
(148, 142, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25'),
(149, 143, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25'),
(150, 144, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25'),
(151, 145, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25'),
(152, 146, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25'),
(153, 147, 40.00, '2025-05-02', '2025-05-03', '2025-05-01 22:15:25', '2025-05-01 22:15:25');

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
(292, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:27:49', 0, NULL, NULL, NULL, NULL, 126, NULL),
(293, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:28:40', 0, NULL, NULL, NULL, NULL, 127, NULL),
(294, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:30:47', 0, NULL, NULL, NULL, NULL, 128, NULL),
(295, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:32:10', 0, NULL, NULL, NULL, NULL, 129, NULL),
(296, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:33:42', 0, NULL, NULL, NULL, NULL, 130, NULL),
(297, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:34:47', 0, NULL, NULL, NULL, NULL, 131, NULL),
(298, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:35:52', 0, NULL, NULL, NULL, NULL, 132, NULL),
(299, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:37:46', 0, NULL, NULL, NULL, NULL, 133, NULL),
(300, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:38:53', 0, NULL, NULL, NULL, NULL, 134, NULL),
(301, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:39:38', 0, NULL, NULL, NULL, NULL, 135, NULL),
(302, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:40:11', 0, NULL, NULL, NULL, NULL, 136, NULL),
(303, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:40:50', 0, NULL, NULL, NULL, NULL, 137, NULL),
(304, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:41:25', 0, NULL, NULL, NULL, NULL, 138, NULL),
(305, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:42:14', 0, NULL, NULL, NULL, NULL, 139, NULL),
(306, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:42:49', 0, NULL, NULL, NULL, NULL, 140, NULL),
(307, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:43:49', 0, NULL, NULL, NULL, NULL, 141, NULL),
(308, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:44:19', 0, NULL, NULL, NULL, NULL, 142, NULL),
(309, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:44:50', 0, NULL, NULL, NULL, NULL, 143, NULL),
(310, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:45:37', 0, NULL, NULL, NULL, NULL, 144, NULL),
(311, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:46:17', 0, NULL, NULL, NULL, NULL, 145, NULL),
(312, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:47:04', 0, NULL, NULL, NULL, NULL, 146, NULL),
(313, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:48:20', 0, NULL, NULL, NULL, NULL, 147, NULL),
(314, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:49:53', 0, NULL, NULL, NULL, NULL, 148, NULL),
(315, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:50:18', 0, NULL, NULL, NULL, NULL, 149, NULL),
(316, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:50:40', 0, NULL, NULL, NULL, NULL, 150, NULL),
(317, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:50:59', 0, NULL, NULL, NULL, NULL, 151, NULL),
(318, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:51:38', 0, NULL, NULL, NULL, NULL, 152, NULL),
(319, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:52:27', 0, NULL, NULL, NULL, NULL, 153, NULL),
(321, '', 'Product out stock', 'product', 'unread', '2025-05-01 20:58:52', 0, NULL, NULL, NULL, NULL, 155, NULL),
(322, '', 'Product out stock', 'product', 'unread', '2025-05-01 21:03:28', 0, NULL, NULL, NULL, NULL, 156, NULL),
(323, '', 'Product out stock', 'product', 'unread', '2025-05-01 21:03:50', 0, NULL, NULL, NULL, NULL, 157, NULL),
(324, '', 'Product out stock', 'product', 'unread', '2025-05-01 21:04:48', 0, NULL, NULL, NULL, NULL, 158, NULL),
(325, '', 'Product out stock', 'product', 'unread', '2025-05-01 21:05:17', 0, NULL, NULL, NULL, NULL, 159, NULL),
(326, '', 'Product out stock', 'product', 'unread', '2025-05-01 21:05:50', 0, NULL, NULL, NULL, NULL, 160, NULL),
(327, '', 'Product out stock', 'product', 'unread', '2025-05-01 21:06:20', 0, NULL, NULL, NULL, NULL, 161, NULL),
(328, '', 'I have some problem to ask you', 'contact', 'unread', '2025-05-01 21:08:02', 0, 'Sovan', 'Souern', '086277461', NULL, 161, 65),
(329, '', 'sdw', 'contact', 'unread', '2025-05-01 21:11:21', 0, 'Sovan', 'Souern', '086277461', NULL, 161, 65),
(330, '', 'You have a new order from : souern sovan', 'order', 'unread', '2025-05-02 02:15:58', 0, NULL, NULL, NULL, 801, 126, 65),
(331, '', 'Product out stock', 'product', 'unread', '2025-05-01 22:14:31', 0, NULL, NULL, NULL, NULL, 162, NULL),
(332, '', 'hi', 'contact', 'unread', '2025-05-01 22:20:17', 0, 'Sovan', 'Souern', '086277461', NULL, 162, 65),
(333, '', 'You have a new order from : souern sovan', 'order', 'unread', '2025-05-02 03:22:34', 0, NULL, NULL, NULL, 802, 127, 65);

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
(783, 0, 'lievan', 'Hebert', '084534589343', 'Comfirm', 770.00, 375, '2025-04-29 16:18:27', 62, 77, 78),
(784, 0, 'sovan', 'souern', '086277461', 'Comfirm', 6.00, 376, '2025-04-29 19:44:04', 65, 1, 115),
(785, 0, 'sovan', 'souern', '086277461', 'Pending', 6.00, 376, '2025-04-29 19:44:04', 65, 1, 116),
(786, 0, 'sovan', 'souern', '086277461', 'Comfirm', 9.00, 377, '2025-04-30 05:05:57', 65, 1, 115),
(787, 0, 'sovan', 'souern', '086277461', 'Pending', 9.00, 377, '2025-04-30 05:05:57', 65, 2, 116),
(788, 0, 'Wyoming', 'Valentine', '0964839280', 'Comfirm', 8.20, 378, '2025-04-30 05:41:28', 62, 1, 122),
(789, 0, 'Wyoming', 'Valentine', '0964839280', 'Pending', 8.20, 378, '2025-04-30 05:41:28', 62, 1, 121),
(790, 0, 'Wyoming', 'Valentine', '0964839280', 'Pending', 8.20, 378, '2025-04-30 05:41:28', 62, 1, 116),
(791, 0, 'Priscilla', 'Frost', '07812394', 'Comfirm', 8.60, 379, '2025-04-30 07:47:48', 63, 2, 121),
(792, 0, 'Priscilla', 'Frost', '07812394', 'Pending', 8.60, 379, '2025-04-30 07:47:48', 63, 1, 120),
(793, 0, 'Priscilla', 'Frost', '07812394', 'Pending', 8.60, 379, '2025-04-30 07:47:48', 63, 1, 123),
(794, 0, 'Nissim', 'Kim', '0964839280', 'Cancelled', 33.00, 380, '2025-04-30 07:53:20', 62, 1, 117),
(795, 0, 'Nissim', 'Kim', '0964839280', 'Pending', 33.00, 380, '2025-04-30 07:53:20', 62, 10, 116),
(796, 0, 'Jamal', 'Shepard', '03945274', 'Comfirm', 6.00, 381, '2025-04-30 07:55:42', 62, 1, 115),
(797, 0, 'Jamal', 'Shepard', '03945274', 'Pending', 6.00, 381, '2025-04-30 07:55:42', 62, 1, 116),
(798, 0, 'sovan', 'souern', '086277461', 'Cancelled', 3.00, 382, '2025-04-30 08:46:13', 72, 1, 116),
(799, 0, 'Tanya', 'Guy', '083842323423', 'Pending', 5.40, 383, '2025-05-02 00:34:14', 65, 1, 117),
(800, 0, 'Tanya', 'Guy', '083842323423', 'Pending', 5.40, 383, '2025-05-02 00:34:14', 65, 1, 116),
(801, 0, 'Rhona', 'Kemp', '086277461', 'Pending', 2.00, 384, '2025-05-02 02:15:58', 65, 1, 126),
(802, 0, 'Sovan', 'Souern', '086277461', 'Pending', 5.00, 385, '2025-05-02 03:22:34', 65, 1, 127);

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
(126, 'Oudh Khmer', 22, 0, 2.00, 'uploads/photo_2025-05-02_08-27-34.jpg', 'Fragrant​ when use it', '2025-05-02 01:27:49', '2025-05-02 03:17:15', NULL, 0),
(127, 'Chanel', 22, 99, 5.00, 'uploads/photo_2025-05-02_08-28-02.jpg', '\r\nFragrant when use it', '2025-05-02 01:28:40', '2025-05-02 03:22:34', NULL, NULL),
(128, 'Victoria\'s Secret', 22, 100, 4.00, 'uploads/secret-bombshell-100ml.webp', '', '2025-05-02 01:30:47', '2025-05-02 01:31:03', NULL, 0),
(129, '24K', 22, 100, 4.00, 'uploads/51xWBdc+jhL.jpg', '', '2025-05-02 01:32:10', '2025-05-02 01:32:10', NULL, NULL),
(130, '24k main', 22, 100, 4.00, 'uploads/img_6015-scaled.jpeg', '', '2025-05-02 01:33:42', '2025-05-02 01:33:42', NULL, NULL),
(131, '24k main', 22, 100, 4.00, 'uploads/71Xj26mrfmL.jpg', '', '2025-05-02 01:34:47', '2025-05-02 01:34:47', NULL, NULL),
(132, 'Dior', 22, 100, 5.00, 'uploads/61R1+HpKFPL._SL1000_.jpg', '', '2025-05-02 01:35:52', '2025-05-02 01:35:52', NULL, NULL),
(133, 'Sauvage', 22, 100, 5.00, 'uploads/Y0998004_C099600455_E01_GHC.avif', '', '2025-05-02 01:37:46', '2025-05-02 01:37:46', NULL, NULL),
(134, 'Sunsilk', 23, 100, 5.00, 'uploads/photo_2025-05-02_08-38-13.jpg', '', '2025-05-02 01:38:53', '2025-05-02 01:38:53', NULL, NULL),
(135, 'Pantene', 23, 100, 4.00, 'uploads/photo_2025-05-02_08-39-09.jpg', '', '2025-05-02 01:39:38', '2025-05-02 01:39:38', NULL, NULL),
(136, 'Vaseline', 23, 100, 4.00, 'uploads/photo_2025-05-02_08-39-58.jpg', '', '2025-05-02 01:40:11', '2025-05-02 01:40:11', NULL, NULL),
(137, 'Head&Shoulders', 23, 100, 4.00, 'uploads/photo_2025-05-02_08-40-19.jpg', '', '2025-05-02 01:40:50', '2025-05-02 01:40:50', NULL, NULL),
(138, 'Clear Men', 23, 100, 4.00, 'uploads/photo_2025-05-02_08-40-59.jpg', '', '2025-05-02 01:41:25', '2025-05-02 01:41:25', NULL, NULL),
(139, 'Clear ', 23, 100, 4.00, 'uploads/photo_2025-05-02_08-41-47.jpg', '', '2025-05-02 01:42:14', '2025-05-02 01:42:14', NULL, NULL),
(140, 'Dove', 23, 100, 4.00, 'uploads/photo_2025-05-02_08-42-28.jpg', '', '2025-05-02 01:42:49', '2025-05-02 01:42:49', NULL, NULL),
(141, 'Rice water bright', 25, 100, 2.00, 'uploads/photo_2025-05-02_08-43-21.jpg', '', '2025-05-02 01:43:49', '2025-05-02 01:43:49', NULL, NULL),
(142, 'Aloe Vera', 25, 100, 2.00, 'uploads/photo_2025-05-02_08-43-56.jpg', '', '2025-05-02 01:44:19', '2025-05-02 01:44:19', NULL, NULL),
(143, 'Mistine', 25, 100, 1.00, 'uploads/photo_2025-05-02_08-44-27.jpg', '', '2025-05-02 01:44:50', '2025-05-02 01:44:50', NULL, NULL),
(144, 'Gatsby', 25, 100, 3.00, 'uploads/photo_2025-05-02_08-28-41.jpg', '', '2025-05-02 01:45:37', '2025-05-02 01:45:37', NULL, NULL),
(145, 'Perfect', 25, 100, 2.00, 'uploads/photo_2025-05-02_08-45-44.jpg', '', '2025-05-02 01:46:17', '2025-05-02 01:46:17', NULL, NULL),
(146, 'Gatsby', 25, 100, 2.00, 'uploads/photo_2025-05-02_08-46-34.jpg', '', '2025-05-02 01:47:04', '2025-05-02 01:47:04', NULL, NULL),
(147, 'Nivea', 25, 100, 3.00, 'uploads/641c31585b8f43ac914a48135286437c-screen (1).webp', '', '2025-05-02 01:48:20', '2025-05-02 02:02:39', NULL, 0),
(148, 'Vaseline', 24, 50, 1.00, 'uploads/photo_2025-05-02_08-45-21.jpg', '', '2025-05-02 01:49:53', '2025-05-02 02:00:37', NULL, 0),
(149, 'Intensive (UV)', 24, 100, 1.50, 'uploads/photo_2025-05-02_09-01-07.jpg', '', '2025-05-02 01:50:18', '2025-05-02 02:01:16', NULL, 0),
(150, 'Charcoal (UV)', 24, 100, 2.00, 'uploads/photo_2025-05-02_09-01-53.jpg', '', '2025-05-02 01:50:40', '2025-05-02 02:02:00', NULL, 0),
(151, 'Shisideo Essentials deep (UV)', 24, 100, 2.00, 'uploads/photo_2025-05-02_09-01-32.jpg', '', '2025-05-02 01:50:59', '2025-05-02 02:01:40', NULL, 0),
(152, 'Clear woman', 23, 100, 3.00, 'uploads/photo_2025-05-02_08-51-08.jpg', '', '2025-05-02 01:51:38', '2025-05-02 01:51:38', NULL, NULL),
(153, 'Skin Aqua (UV)', 24, 100, 2.00, 'uploads/photo_2025-05-02_08-51-50.jpg', '', '2025-05-02 01:52:27', '2025-05-02 01:52:27', NULL, NULL),
(155, 'Vaseline', 27, 100, 4.00, 'uploads/9010d5011337d85d051f3c70e30814cf.jpg', '', '2025-05-02 01:58:52', '2025-05-02 01:58:52', NULL, NULL),
(156, 'Body Milk', 27, 100, 5.00, 'uploads/photo_2025-05-02_09-03-02.jpg', '', '2025-05-02 02:03:28', '2025-05-02 02:03:28', NULL, NULL),
(157, 'Honey & Almonds', 27, 50, 4.00, 'uploads/photo_2025-05-02_09-03-59.jpg', '', '2025-05-02 02:03:50', '2025-05-02 02:04:11', NULL, 0),
(158, 'Aloe Vera', 27, 100, 3.00, 'uploads/photo_2025-05-02_09-04-40.jpg', '', '2025-05-02 02:04:48', '2025-05-02 02:04:48', NULL, NULL),
(159, 'Cocoa Glow', 27, 80, 3.00, 'uploads/photo_2025-05-02_09-04-53.jpg', '', '2025-05-02 02:05:17', '2025-05-02 02:05:17', NULL, NULL),
(160, 'Natuirali Intense Moisturizing', 27, 50, 4.00, 'uploads/photo_2025-05-02_09-05-25.jpg', '', '2025-05-02 02:05:50', '2025-05-02 02:05:50', NULL, NULL),
(161, 'COcoa butter formula', 27, 70, 5.00, 'uploads/photo_2025-05-02_09-05-57.jpg', '', '2025-05-02 02:06:20', '2025-05-02 02:06:20', NULL, NULL),
(162, 'sunm screen', 24, 50, 5.00, 'uploads/photo_2025-05-02_09-05-57.jpg', '', '2025-05-02 03:14:31', '2025-05-02 03:14:31', NULL, NULL);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=803;

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

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
