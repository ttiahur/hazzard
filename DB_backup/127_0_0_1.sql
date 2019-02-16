-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lut 2019, 11:01
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hazzard`
--
CREATE DATABASE IF NOT EXISTS `hazzard` DEFAULT CHARACTER SET cp1251 COLLATE cp1251_bin;
USE `hazzard`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bets`
--

CREATE TABLE `bets` (
  `id` int(10) UNSIGNED NOT NULL,
  `deal_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `point_start` int(11) NOT NULL,
  `point_end` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `bets`
--

INSERT INTO `bets` (`id`, `deal_id`, `user_id`, `points`, `point_start`, `point_end`, `status`, `created_at`, `updated_at`) VALUES
(17, 9, 3, 487, 8001, 8487, 0, '2018-12-23 14:17:00', '2018-12-23 14:17:00'),
(18, 9, 3, 143, 8488, 8630, 0, '2018-12-23 14:17:00', '2018-12-23 14:17:00'),
(19, 9, 3, 349, 8631, 8979, 0, '2018-12-23 14:17:01', '2018-12-23 14:17:01'),
(20, 9, 3, 188, 8980, 9167, 0, '2018-12-23 14:17:01', '2018-12-23 14:17:01'),
(21, 9, 3, 284, 9168, 9451, 0, '2018-12-23 14:17:22', '2018-12-23 14:17:22'),
(22, 9, 3, 422, 9452, 9873, 0, '2018-12-23 14:17:22', '2018-12-23 14:17:22'),
(23, 9, 3, 362, 9874, 10235, 0, '2018-12-23 14:38:31', '2018-12-23 14:38:31'),
(24, 9, 3, 447, 10236, 10682, 0, '2018-12-23 14:38:34', '2018-12-23 14:38:34'),
(25, 9, 3, 268, 10683, 10950, 0, '2018-12-23 14:38:34', '2018-12-23 14:38:34'),
(26, 9, 3, 260, 10951, 11210, 0, '2018-12-23 14:38:34', '2018-12-23 14:38:34'),
(27, 9, 3, 50, 11211, 11260, 0, '2018-12-23 14:38:35', '2018-12-23 14:38:35'),
(28, 9, 3, 151, 11261, 11411, 0, '2018-12-23 14:38:35', '2018-12-23 14:38:35'),
(29, 9, 3, 39, 11412, 11450, 0, '2018-12-23 14:38:35', '2018-12-23 14:38:35'),
(30, 9, 3, 7, 11451, 11457, 0, '2018-12-23 14:38:36', '2018-12-23 14:38:36'),
(31, 9, 3, 227, 11458, 11684, 0, '2018-12-23 14:38:36', '2018-12-23 14:38:36'),
(32, 9, 3, 246, 11685, 11930, 0, '2018-12-23 14:38:36', '2018-12-23 14:38:36'),
(33, 9, 3, 117, 11931, 12047, 0, '2018-12-23 14:38:37', '2018-12-23 14:38:37'),
(35, 9, 3, 275, 12118, 12392, 0, '2018-12-23 14:38:38', '2018-12-23 14:38:38'),
(36, 13, 3, 269, 1, 269, 1, '2018-12-24 13:47:32', '2019-01-13 22:10:20'),
(37, 13, 3, 251, 270, 520, 1, '2018-12-24 13:47:33', '2019-01-13 22:10:20'),
(38, 13, 3, 78, 521, 598, 1, '2018-12-24 13:47:34', '2019-01-13 22:10:20'),
(39, 13, 3, 320, 599, 918, 1, '2018-12-24 13:47:34', '2019-01-13 22:10:20'),
(40, 13, 3, 445, 919, 1363, 1, '2018-12-24 13:47:35', '2019-01-13 22:10:21'),
(41, 13, 3, 197, 1364, 1560, 1, '2018-12-24 13:47:37', '2019-01-13 22:10:21'),
(42, 13, 3, 92, 1561, 1652, 1, '2018-12-24 13:50:07', '2019-01-13 22:10:21'),
(43, 13, 3, 241, 1653, 1893, 1, '2018-12-24 13:50:09', '2019-01-13 22:10:21'),
(44, 13, 3, 471, 1894, 2364, 1, '2018-12-24 13:50:16', '2019-01-13 22:10:21'),
(45, 15, 3, 112, 1, 112, 1, '2018-12-24 13:50:40', '2019-01-13 22:10:10'),
(46, 15, 3, 463, 113, 575, 1, '2018-12-24 13:50:42', '2019-01-13 22:10:10'),
(47, 15, 3, 13, 576, 588, 1, '2018-12-24 13:50:42', '2019-01-13 22:10:10'),
(48, 15, 3, 465, 589, 1053, 1, '2018-12-24 13:50:52', '2019-01-13 22:10:10'),
(49, 15, 3, 198, 1054, 1251, 1, '2018-12-24 13:50:53', '2019-01-13 22:10:10'),
(50, 15, 3, 277, 1252, 1528, 1, '2018-12-24 13:50:53', '2019-01-13 22:10:10'),
(51, 15, 3, 287, 1529, 1815, 3, '2018-12-24 13:50:53', '2019-01-22 19:15:13'),
(52, 15, 3, 115, 1816, 1930, 1, '2018-12-24 13:50:54', '2019-01-13 22:10:10'),
(53, 15, 3, 113, 1931, 2043, 1, '2018-12-24 13:51:02', '2019-01-13 22:10:10'),
(54, 15, 3, 139, 2044, 2182, 1, '2018-12-24 13:51:02', '2019-01-13 22:10:10'),
(55, 15, 3, 372, 2183, 2554, 1, '2018-12-24 13:51:08', '2019-01-13 22:10:10'),
(56, 15, 3, 100, 2555, 2654, 1, '2018-12-24 13:51:09', '2019-01-13 22:10:10'),
(57, 14, 3, 314, 1, 314, 1, '2018-12-24 13:52:28', '2019-01-21 17:06:05'),
(58, 14, 3, 121, 315, 435, 1, '2018-12-24 13:53:24', '2019-01-21 17:06:05'),
(59, 14, 3, 181, 436, 616, 1, '2018-12-24 13:53:24', '2019-01-21 17:06:05'),
(60, 14, 3, 148, 617, 764, 1, '2018-12-24 13:53:25', '2019-01-21 17:06:05'),
(61, 14, 3, 202, 765, 966, 1, '2018-12-24 13:53:26', '2019-01-21 17:06:05'),
(64, 11, 3, 269, 201, 469, 3, '2018-12-30 11:49:56', '2019-01-22 19:15:21'),
(65, 11, 3, 166, 470, 635, 1, '2018-12-30 11:51:42', '2019-01-13 13:05:38'),
(66, 12, 3, 671, 2001, 2671, 3, '2018-12-30 11:53:57', '2019-01-22 19:15:34'),
(67, 14, 3, 2918, 967, 3884, 3, '2018-12-30 11:54:09', '2019-01-22 19:15:59'),
(68, 14, 3, 1773, 3885, 5657, 1, '2018-12-30 11:54:26', '2019-01-21 17:06:05'),
(71, 16, 3, 1002, 1, 1002, 3, '2018-12-30 11:56:18', '2019-01-22 19:20:02'),
(72, 16, 3, 278, 1003, 1280, 1, '2018-12-30 11:59:32', '2019-01-13 22:10:04'),
(73, 8, 3, 855, 5501, 6355, 1, '2018-12-30 12:12:38', '2019-01-13 22:09:28'),
(74, 8, 3, 855, 6356, 7210, 1, '2018-12-30 12:12:52', '2019-01-13 22:09:28'),
(75, 8, 3, 855, 7211, 8065, 1, '2018-12-30 12:14:11', '2019-01-13 22:09:29'),
(76, 8, 3, 3029, 8066, 11094, 1, '2018-12-30 12:14:44', '2019-01-13 22:09:29'),
(77, 8, 3, 1128, 11095, 12222, 1, '2018-12-30 12:15:25', '2019-01-13 22:09:29'),
(78, 11, 3, 18, 636, 653, 1, '2018-12-30 12:18:08', '2019-01-13 13:05:38'),
(79, 11, 3, 49, 654, 702, 1, '2018-12-30 12:19:07', '2019-01-13 13:05:38'),
(80, 11, 3, 58, 703, 760, 1, '2018-12-30 12:19:53', '2019-01-13 13:05:38'),
(81, 11, 3, 76, 761, 836, 1, '2018-12-30 12:20:26', '2019-01-13 13:05:38'),
(82, 11, 3, 14, 837, 850, 1, '2018-12-30 12:22:46', '2019-01-13 13:05:38'),
(84, 11, 3, 30, 851, 880, 1, '2018-12-30 12:25:13', '2019-01-13 13:05:38'),
(85, 14, 3, 2434, 5658, 8091, 1, '2018-12-30 12:25:47', '2019-01-21 17:06:05'),
(86, 15, 3, 2050, 2655, 4704, 1, '2018-12-30 12:27:07', '2019-01-13 22:10:10'),
(87, 12, 3, 5516, 2672, 8187, 1, '2018-12-30 12:27:53', '2019-01-13 22:09:17'),
(136, 17, 3, 31, 1, 31, 3, '2019-01-13 11:32:27', '2019-01-22 19:20:06'),
(137, 17, 3, 16, 32, 47, 1, '2019-01-13 11:32:31', '2019-01-13 11:32:45'),
(138, 17, 3, 2, 48, 49, 1, '2019-01-13 11:32:36', '2019-01-13 11:32:46'),
(139, 17, 3, 6, 50, 55, 1, '2019-01-13 11:32:40', '2019-01-13 11:32:46'),
(141, 10, 3, 24, 1, 24, 3, '2019-01-13 13:04:41', '2019-01-22 19:20:13'),
(142, 10, 3, 18, 25, 42, 1, '2019-01-13 13:04:47', '2019-01-13 13:04:59'),
(143, 10, 3, 10, 43, 52, 1, '2019-01-13 13:04:51', '2019-01-13 13:04:59'),
(144, 10, 3, 5, 53, 57, 1, '2019-01-13 13:04:54', '2019-01-13 13:04:59'),
(145, 10, 3, 3, 58, 60, 1, '2019-01-13 13:04:59', '2019-01-13 13:04:59'),
(146, 11, 3, 80, 881, 960, 1, '2019-01-13 13:05:37', '2019-01-13 13:05:38'),
(147, 12, 3, 24, 8182, 8205, 1, '2019-01-13 13:09:50', '2019-01-13 22:09:17'),
(148, 20, 3, 513, 1, 513, 1, '2019-01-13 20:45:27', '2019-01-13 22:08:56'),
(149, 19, 3, 50, 1, 50, 1, '2019-01-13 20:45:34', '2019-01-13 22:09:11'),
(150, 19, 3, 147, 51, 197, 1, '2019-01-13 20:45:52', '2019-01-13 22:09:11'),
(151, 20, 3, 1270, 514, 1783, 1, '2019-01-13 20:45:56', '2019-01-13 22:08:56'),
(152, 16, 3, 215, 1281, 1495, 1, '2019-01-13 20:46:03', '2019-01-13 22:10:04'),
(153, 20, 3, 28217, 1784, 30000, 3, '2019-01-13 22:08:56', '2019-01-22 19:20:51'),
(154, 19, 3, 402, 198, 599, 1, '2019-01-13 22:09:07', '2019-01-13 22:09:11'),
(155, 19, 3, 361, 600, 960, 3, '2019-01-13 22:09:11', '2019-01-22 19:21:06'),
(156, 12, 3, 193, 8206, 8398, 1, '2019-01-13 22:09:17', '2019-01-13 22:09:17'),
(157, 8, 3, 7937, 12222, 20158, 3, '2019-01-13 22:09:28', '2019-01-22 19:21:24'),
(158, 18, 3, 4245, 1, 4245, 3, '2019-01-13 22:09:39', '2019-01-22 19:21:38'),
(159, 18, 3, 5026, 4246, 9271, 1, '2019-01-13 22:09:43', '2019-01-13 22:09:56'),
(160, 18, 3, 5057, 9272, 14328, 1, '2019-01-13 22:09:46', '2019-01-13 22:09:56'),
(161, 18, 3, 3441, 14329, 17769, 1, '2019-01-13 22:09:49', '2019-01-13 22:09:56'),
(162, 18, 3, 5340, 17770, 23109, 1, '2019-01-13 22:09:52', '2019-01-13 22:09:56'),
(163, 18, 3, 6891, 23110, 30000, 1, '2019-01-13 22:09:56', '2019-01-13 22:09:56'),
(164, 16, 3, 1689, 1496, 3184, 1, '2019-01-13 22:10:04', '2019-01-13 22:10:04'),
(165, 15, 3, 621, 4702, 5322, 1, '2019-01-13 22:10:09', '2019-01-13 22:10:10'),
(166, 13, 3, 823, 2362, 3184, 3, '2019-01-13 22:10:20', '2019-01-22 19:22:35'),
(167, 14, 3, 307, 8092, 8398, 1, '2019-01-21 17:06:05', '2019-01-21 17:06:05'),
(168, 23, 3, 960, 1, 960, 3, '2019-01-21 17:06:42', '2019-01-22 19:22:42'),
(169, 22, 3, 168, 1, 168, 0, '2019-01-21 17:12:15', '2019-01-21 17:12:15'),
(170, 22, 3, 1345, 169, 1513, 0, '2019-01-21 17:12:21', '2019-01-21 17:12:21'),
(171, 22, 3, 381, 1514, 1894, 0, '2019-01-21 17:12:32', '2019-01-21 17:12:32'),
(172, 21, 3, 454, 1, 454, 1, '2019-02-03 17:00:09', '2019-02-08 17:51:15'),
(173, 21, 3, 645, 455, 1099, 1, '2019-02-03 17:00:14', '2019-02-08 17:51:15'),
(174, 25, 3, 397, 1, 397, 0, '2019-02-03 17:12:26', '2019-02-03 17:12:26'),
(175, 24, 3, 638, 1, 638, 0, '2019-02-03 17:12:30', '2019-02-03 17:12:30'),
(176, 21, 3, 7299, 1100, 8398, 3, '2019-02-08 17:51:15', '2019-02-08 17:52:20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phone', '2018-11-28 20:01:40', '2018-11-28 20:01:40'),
(2, 'Laptop', '2018-11-28 20:01:49', '2018-11-28 20:01:49'),
(4, 'PC', '2018-11-28 20:06:52', '2018-11-28 20:06:52'),
(7, 'Xiaomi', '2018-12-23 10:01:37', '2018-12-23 10:01:37'),
(9, 'Lenovo', '2018-12-23 10:04:00', '2018-12-23 10:04:00'),
(10, 'Fly', '2018-12-23 10:04:12', '2018-12-23 10:04:12'),
(11, 'IDE', '2019-01-29 17:16:48', '2019-01-29 17:16:48');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `deals`
--

CREATE TABLE `deals` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `current_point` int(11) DEFAULT '0',
  `added_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ready_on` timestamp NULL DEFAULT NULL,
  `closed_on` timestamp NULL DEFAULT NULL,
  `realased_on` timestamp NULL DEFAULT NULL,
  `users` int(11) DEFAULT '0',
  `creator_id` int(11) NOT NULL,
  `operator_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `deals`
--

INSERT INTO `deals` (`id`, `category_id`, `product_id`, `status`, `current_point`, `added_on`, `ready_on`, `closed_on`, `realased_on`, `users`, `creator_id`, `operator_id`, `created_at`, `updated_at`) VALUES
(8, 2, 1, 2, 20158, '2018-12-10 18:19:37', NULL, NULL, NULL, 0, 2, NULL, '2018-12-10 17:19:37', '2019-01-22 19:21:24'),
(9, 1, 3, 0, 12391, '2018-12-10 18:19:43', NULL, NULL, NULL, 0, 2, NULL, '2018-12-10 17:19:43', '2018-12-23 14:38:38'),
(10, 9, 5, 2, 60, '2018-12-23 11:20:18', NULL, NULL, NULL, 0, 3, NULL, '2018-12-23 10:20:18', '2019-01-22 19:20:13'),
(11, 7, 6, 2, 960, '2018-12-23 13:31:38', NULL, NULL, NULL, 0, 3, NULL, '2018-12-23 12:31:38', '2019-01-22 19:15:21'),
(12, 1, 3, 5, 8398, '2018-12-23 13:31:53', NULL, NULL, NULL, 0, 3, NULL, '2018-12-23 12:31:53', '2019-02-09 19:39:54'),
(13, 1, 8, 2, 3184, '2018-12-24 13:59:11', NULL, NULL, NULL, 0, 3, NULL, '2018-12-24 12:59:11', '2019-01-22 19:22:35'),
(14, 2, 3, 2, 8398, '2018-12-24 14:03:47', NULL, NULL, NULL, 0, 3, NULL, '2018-12-24 13:03:47', '2019-01-22 19:15:59'),
(15, 2, 7, 2, 5322, '2018-12-24 14:08:17', NULL, NULL, NULL, 0, 3, NULL, '2018-12-24 13:08:17', '2019-01-22 19:10:38'),
(16, 1, 8, 5, 3184, '2018-12-24 14:08:22', NULL, NULL, NULL, 0, 3, NULL, '2018-12-24 13:08:22', '2019-02-09 19:41:39'),
(17, 9, 5, 4, 60, '2018-12-24 14:24:23', NULL, NULL, NULL, 0, 3, NULL, '2018-12-24 13:24:23', '2019-02-09 19:32:47'),
(18, 4, 9, 4, 30000, '2019-01-13 10:42:42', NULL, NULL, NULL, 0, 3, NULL, '2019-01-13 09:42:42', '2019-02-09 19:44:38'),
(19, 7, 6, 2, 960, '2019-01-13 21:44:43', NULL, NULL, NULL, 0, 3, NULL, '2019-01-13 20:44:43', '2019-01-22 19:21:06'),
(20, 4, 9, 2, 30000, '2019-01-13 21:44:54', NULL, NULL, NULL, 0, 3, NULL, '2019-01-13 20:44:54', '2019-01-22 19:20:52'),
(21, 1, 3, 3, 8398, '2019-01-21 18:06:20', NULL, NULL, NULL, 0, 3, NULL, '2019-01-21 17:06:20', '2019-02-09 18:34:46'),
(22, 2, 1, 0, 1894, '2019-01-21 18:06:28', NULL, NULL, NULL, 0, 3, NULL, '2019-01-21 17:06:28', '2019-01-21 17:12:32'),
(23, 7, 6, 2, 960, '2019-01-21 18:06:33', NULL, NULL, NULL, 0, 3, NULL, '2019-01-21 17:06:33', '2019-01-22 19:22:42'),
(24, 2, 7, 0, 638, '2019-01-22 21:01:36', NULL, NULL, NULL, 0, 3, NULL, '2019-01-22 20:01:36', '2019-02-03 17:12:30'),
(25, 1, 8, 0, 397, '2019-01-22 21:01:45', NULL, NULL, NULL, 0, 3, NULL, '2019-01-22 20:01:45', '2019-02-03 17:12:26'),
(26, 2, 2, 0, 0, '2019-02-09 20:43:23', NULL, NULL, NULL, 0, 3, NULL, '2019-02-09 19:43:23', '2019-02-09 19:43:23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(11) NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `deliveries`
--

INSERT INTO `deliveries` (`id`, `street`, `city`, `post_code`, `created_at`, `updated_at`) VALUES
(10, 'Stanislawa Staszica 9/13', 'Lublin', '20-085', '2019-01-22 19:20:13', '2019-01-22 19:20:13'),
(12, '3 maja 4/17', 'Piaski', '20-085', '2019-01-22 19:21:24', '2019-01-22 19:21:24'),
(13, 'Aleja Warszawska 102/4', 'Lublin', '20-085', '2019-01-22 19:22:35', '2019-01-22 19:22:35'),
(16, 'Stanislawa Staszica 9/13', 'Lublin', '20-085', '2019-01-22 19:20:02', '2019-01-22 19:20:02'),
(17, 'Stanislawa Staszica 9/13', 'Lublin', '20-085', '2019-01-22 19:20:06', '2019-01-22 19:20:06'),
(18, 'aleja Warszawska 102', 'Lublin', '20-803', '2019-01-22 19:21:38', '2019-01-22 19:21:38'),
(19, 'Stanislawa Staszica 9/13', 'Kalusz', '20-012', '2019-01-22 19:21:06', '2019-01-22 19:21:06'),
(20, 'Stanislawa Staszica 9/13', 'wARSZAWA', '20-085', '2019-01-22 19:20:51', '2019-01-22 19:20:51'),
(21, 'Stanislawa Staszica 9/13', 'Lublin', '20-085', '2019-02-08 17:52:20', '2019-02-08 17:52:20'),
(23, 'Stanislawa Staszica 9/13', 'Lublin', '20-085', '2019-01-22 19:22:42', '2019-01-22 19:22:42');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2018_11_19_203951_create_bets_table', 1),
(20, '2018_11_19_204030_create_deals_table', 1),
(21, '2018_11_19_205222_create_products_table', 1),
(22, '2018_11_28_202409_create_categories_table', 1),
(23, '2018_12_24_150224_rename_product_id', 2),
(24, '2019_01_22_190622_create_deliveries_table', 2),
(25, '2019_02_08_194303_rename_product_id_column', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `realeased_count` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `points`, `name`, `about`, `product_url`, `shop_url`, `realeased_count`, `creator_id`, `created_at`, `updated_at`) VALUES
(1, 2, 20157, 'Apple MacBook Pro i9', 'ompilujesz kod, masz uruchomionych kilka maszyn wirtualnych i chcesz jak najkrócej czekać, aż Twój pomysł przyjmie ostateczny kształt? Szybciej zobaczysz rezultaty.', 'https://www.apple.com/pl/macbook-pro/specs/', 'https://www.x-kom.pl/p/441054-notebook-laptop-154-apple-macbook-pro-i9-29ghz-32-512-radeon-555x-space.html', 0, 3, '2018-11-29 15:57:58', '2019-02-08 18:50:30'),
(2, 2, 20157, 'Apple MacBook Pro i5', 'Kompilujesz kod, masz uruchomionych kilka maszyn wirtualnych i chcesz jak najkrócej czekać, aż Twój pomysł przyjmie ostateczny kształt? Szybciej zobaczysz rezultaty.', 'https://www.apple.com/pl/macbook-pro/specs/', 'https://www.x-kom.pl/p/441054-notebook-laptop-154-apple-macbook-pro-i9-29ghz-32-512-radeon-555x-space.html', 0, 3, '2018-11-29 16:00:59', '2019-02-08 18:58:07'),
(3, 1, 8400, 'Apple iPhone Xs Max 512GB Silver', 'iPhone Xs Max 512 GB srebrny Podziwiaj soczyste kolory na największym ekranie w historii smartfonów Apple. Ekranie iPhone Xs Max 512 GB srebrnego. Korzystaj z niego gdzie chcesz i kiedy chcesz, ciesząc się z odporności na pył i wodę klasy IP68. W tej smukłej konstrukcji elegancja i wytworność spotykają się z potęgą procesora A12 Bionic. Dotknij perfekcji. Poczuj imponujące możliwości technologii obecnych w udoskonalonym podwójnym aparacie 12 Mpix. Bo iPhone Xs Max złoty to gwiazda wielkiego formatu.', 'https://www.apple.com/pl/iphone-xs/specs/', 'https://www.x-kom.pl/p/448441-smartfon-telefon-apple-iphone-xs-max-512gb-silver.html', 0, 3, '2018-11-29 16:02:38', '2019-02-09 19:43:50'),
(4, 6, 147, 'Nykolyshyn', 'bsadbjkdabjksdabjksadkjlsda', 'sadasdasdasdasd', 'asdasdsadasdas', 0, 3, '2018-12-17 18:31:46', '2018-12-17 18:31:46'),
(5, 9, 60, 'A820', 'telefon gavno', 'https://www.mgsm.pl/pl/katalog/lenovo/a820/', 'dupa.zakup.pl', 0, 3, '2018-12-23 10:12:41', '2018-12-23 10:12:41'),
(6, 7, 960, 'Redmi note 5', 'clasica', 'https://www.mi.com/global/redmi-note-5/l', 'https://www.x-kom.pl/p/441054-notebook-laptop-154-apple-macbook-pro-i9-29ghz-32-512-radeon-555x-space.html', 0, 3, '2018-12-23 12:31:22', '2018-12-23 12:31:22'),
(7, 2, 5322, 'Samsung Galaxy s9+', 'SSSSSSSSS', 'https://www.samsung.com/global/galaxy/galaxy-s9/', 'x-kom.pl', 0, 3, '2018-12-24 12:50:01', '2018-12-24 12:50:01'),
(8, 1, 3184, 'One Plus 5T', 'one', 'oneplus.com', 'x-kom.pl', 0, 3, '2018-12-24 12:50:37', '2018-12-24 12:50:37'),
(9, 4, 30000, 'Asus predator', 'Laptop do gier za duże hajsy', 'Undefinded', 'Www.x-kom.pl', 0, 3, '2019-01-13 09:41:51', '2019-01-13 09:41:51');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `points` int(11) DEFAULT '0',
  `admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `city`, `street`, `post_code`, `phone_number`, `points`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'Tiahur', 'tarid1997@gmail.com', NULL, '$2y$10$i3FwPhpiyxWMX8Tk2J.dgerkZe02vzLfmTqSB3Eykcj3zUJ6rvdC.', 'Lublin', 'Stanislawa Staszica 9/13', '20-085', '576831177', 105213, NULL, 'uEzMB9Zp0q6AMODjw1R2vkGQcHbs1DFZ2p0j9TmVww5jlAIZQ8gU0qVUbN6c', '2018-12-17 18:27:27', '2019-02-08 17:51:15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deal_id` (`deal_id`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `bets`
--
ALTER TABLE `bets`
  ADD CONSTRAINT `bets_ibfk_1` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`);

--
-- Ograniczenia dla tabeli `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
--
-- Baza danych: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Zrzut danych tabeli `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"true\",\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Zrzut danych tabeli `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"hazzard\",\"table\":\"deliveries\"},{\"db\":\"hazzard\",\"table\":\"users\"},{\"db\":\"hazzard\",\"table\":\"bets\"},{\"db\":\"hazzard\",\"table\":\"deals\"},{\"db\":\"hazzard\",\"table\":\"products\"},{\"db\":\"hazzard\",\"table\":\"categories\"},{\"db\":\"hazzard\",\"table\":\"password_resets\"},{\"db\":\"hazzard\",\"table\":\"migrations\"},{\"db\":\"start\",\"table\":\"user\"},{\"db\":\"start\",\"table\":\"video\"}]');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Zrzut danych tabeli `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'hazzard', 'bets', '[]', '2019-02-03 21:53:26'),
('root', 'hazzard', 'deals', '{\"sorted_col\":\"`deals`.`id` ASC\"}', '2019-01-22 21:03:53'),
('root', 'hazzard', 'products', '[]', '2018-12-23 14:45:40');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Zrzut danych tabeli `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-02-16 10:01:11', '{\"lang\":\"pl\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indeksy dla tabeli `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indeksy dla tabeli `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indeksy dla tabeli `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indeksy dla tabeli `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indeksy dla tabeli `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indeksy dla tabeli `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indeksy dla tabeli `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indeksy dla tabeli `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indeksy dla tabeli `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indeksy dla tabeli `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indeksy dla tabeli `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indeksy dla tabeli `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indeksy dla tabeli `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indeksy dla tabeli `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indeksy dla tabeli `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indeksy dla tabeli `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indeksy dla tabeli `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Baza danych: `start`
--
CREATE DATABASE IF NOT EXISTS `start` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `start`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `full_name` varchar(512) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `pwd_reset_token` varchar(32) DEFAULT NULL,
  `pwd_reset_token_creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `email`, `full_name`, `password`, `status`, `date_created`, `pwd_reset_token`, `pwd_reset_token_creation_date`) VALUES
(3, 'tarid1997@gmail.com', 'Admin', '$2y$10$dkZkDGUmlY1.uMLC3A87fe6oEyaeD0y.bSfLr2.Vo0Nr3zpsKi/Qi', 1, '2018-11-05 19:26:09', NULL, NULL),
(4, 'tarid19972@gmail.com', 'Taras Tiahur', '$2y$10$JrFcOt406b/IArmGIv6YeukfI4RjuNTdeWlTanOqyJBWM6VfjkKxC', 1, '2018-11-05 19:27:11', NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_idx` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Baza danych: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
