-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 12:42 PM
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
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', '2025-05-27 05:55:51', '2025-06-26 02:47:05'),
(2, 'Women', '2025-05-27 05:58:23', '2025-06-26 02:47:16'),
(5, 'Accessories', '2025-05-31 07:06:42', '2025-06-26 02:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `city`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-21 04:24:10', '2025-06-21 04:24:10'),
(2, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-21 04:33:15', '2025-06-21 04:33:15'),
(3, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-21 04:35:31', '2025-06-21 04:35:31'),
(4, 'Danish', '923181447026', 'danish@gmail.com', '123 street', 'karachi', '75400', '2025-06-21 05:32:43', '2025-06-21 05:32:43'),
(5, 'Kinza', '03172815136', 'kinza@gmail.com', 'Gulshan', 'karachi', '75400', '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(6, 'Shoaib Khan', '03172815136', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-22 05:26:05', '2025-06-22 05:26:05'),
(7, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:13:31', '2025-06-28 11:13:31'),
(8, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:16:27', '2025-06-28 11:16:27'),
(9, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:26:30', '2025-06-28 11:26:30'),
(10, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:28:47', '2025-06-28 11:28:47'),
(11, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:40:07', '2025-06-28 11:40:07'),
(12, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:45:14', '2025-06-28 11:45:14'),
(13, 'Shoaib Khan', '03181447026', 'ahsan@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 11:51:37', '2025-06-28 11:51:37'),
(14, 'Shoaib Khan', '03181447026', 'ahsan@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 12:05:56', '2025-06-28 12:05:56'),
(15, 'Shoaib Khan', '03181447026', 'ahsan@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 12:08:32', '2025-06-28 12:08:32'),
(16, 'Shoaib Khan', '03181447026', 'ahsan@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-06-28 12:10:47', '2025-06-28 12:10:47'),
(17, 'Shareef Khan', '03121231245', 'shareefkhoso08@gmail.com', 'sddddddddd', 'lahore', '7500', '2025-06-29 01:31:14', '2025-06-29 01:31:14'),
(18, 'Saira', '03154854521', 'saira@gmail.com', 'karachi', 'karachi', '75400', '2025-06-29 03:18:47', '2025-06-29 03:18:47'),
(19, 'Saira', '03181447026', 'saira@gmail.com', 'Gulshan', 'karachi', '75400', '2025-06-30 10:59:23', '2025-06-30 10:59:23'),
(20, 'Shoaib Khan', '03181447026', 'ahsan@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-07-05 02:19:25', '2025-07-05 02:19:25'),
(21, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-07-05 02:25:10', '2025-07-05 02:25:10'),
(22, 'Shoaib Khan', '03181447026', 'shoaibkhan1447026@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-07-05 02:28:53', '2025-07-05 02:28:53'),
(23, 'Saira', '03172815136', 'ahsan@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-07-07 05:13:38', '2025-07-07 05:13:38'),
(24, 'Shoaib Khan', '03181447026', 'skadmin@gmail.com', '30-A, Progressive Center, Suite # 202-203, Main Shahra-e-Faisal, near Lal Kothi (house), Karachi, 75400', 'karachi', '75400', '2025-07-07 05:24:25', '2025-07-07 05:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`id`, `customer_id`, `total_amount`, `payment_method`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 7000.00, 'COD', NULL, '2025-06-21 04:24:10', '2025-06-21 04:24:10'),
(2, 2, 1300.00, 'COD', NULL, '2025-06-21 04:33:15', '2025-06-21 04:33:15'),
(3, 3, 6500.00, 'COD', NULL, '2025-06-21 04:35:31', '2025-06-21 04:35:31'),
(4, 4, 1500.00, 'COD', 'Door Pr Pohnch kr Call krna', '2025-06-21 05:32:43', '2025-06-21 05:32:43'),
(5, 5, 10750.00, 'COD', NULL, '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(6, 6, 7600.00, 'COD', NULL, '2025-06-22 05:26:05', '2025-06-22 05:26:05'),
(7, 7, 7500.00, 'COD', NULL, '2025-06-28 11:13:31', '2025-06-28 11:13:31'),
(8, 8, 7500.00, 'COD', NULL, '2025-06-28 11:16:27', '2025-06-28 11:16:27'),
(9, 9, 2600.00, 'COD', NULL, '2025-06-28 11:26:30', '2025-06-28 11:26:30'),
(10, 10, 5200.00, 'COD', NULL, '2025-06-28 11:28:47', '2025-06-28 11:28:47'),
(11, 11, 3200.00, 'COD', NULL, '2025-06-28 11:40:07', '2025-06-28 11:40:07'),
(12, 12, 1000.00, 'COD', NULL, '2025-06-28 11:45:14', '2025-06-28 11:45:14'),
(13, 13, 23400.00, 'COD', NULL, '2025-06-28 11:51:37', '2025-06-28 11:51:37'),
(14, 14, 4500.00, 'COD', NULL, '2025-06-28 12:05:56', '2025-06-28 12:05:56'),
(15, 15, 2000.00, 'COD', NULL, '2025-06-28 12:08:32', '2025-06-28 12:08:32'),
(16, 16, 1600.00, 'COD', NULL, '2025-06-28 12:10:47', '2025-06-28 12:10:47'),
(17, 17, 27450.00, 'COD', NULL, '2025-06-29 01:31:14', '2025-06-29 01:31:14'),
(18, 18, 1399.00, 'COD', 'Bell Mat Bajana', '2025-06-29 03:18:47', '2025-06-29 03:18:47'),
(19, 19, 12900.00, 'COD', NULL, '2025-06-30 10:59:23', '2025-06-30 10:59:23'),
(20, 20, 2500.00, 'COD', NULL, '2025-07-05 02:19:25', '2025-07-05 02:19:25'),
(21, 21, 1300.00, 'COD', NULL, '2025-07-05 02:25:10', '2025-07-05 02:25:10'),
(22, 22, 2000.00, 'COD', NULL, '2025-07-05 02:28:53', '2025-07-05 02:28:53'),
(23, 23, 2600.00, 'COD', NULL, '2025-07-07 05:13:39', '2025-07-07 05:13:39'),
(24, 24, 2600.00, 'COD', NULL, '2025-07-07 05:24:25', '2025-07-07 05:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_items`
--

CREATE TABLE `customer_order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_order_items`
--

INSERT INTO `customer_order_items` (`id`, `order_id`, `product_name`, `price`, `quantity`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bluetooth Headphoness', 2500.00, 1, 2500.00, '2025-06-21 04:24:10', '2025-06-21 04:24:10'),
(2, 1, 'Power Bank 20000mah', 4500.00, 1, 4500.00, '2025-06-21 04:24:10', '2025-06-21 04:24:10'),
(3, 2, 'Mehron T-Shirt', 1300.00, 1, 1300.00, '2025-06-21 04:33:15', '2025-06-21 04:33:15'),
(4, 3, 'Sunglasses', 1000.00, 2, 2000.00, '2025-06-21 04:35:31', '2025-06-21 04:35:31'),
(5, 3, 'Power Bank 20000mah', 4500.00, 1, 4500.00, '2025-06-21 04:35:31', '2025-06-21 04:35:31'),
(6, 4, 'T_Shirt', 1500.00, 1, 1500.00, '2025-06-21 05:32:43', '2025-06-21 05:32:43'),
(7, 5, 'Leather Wallet', 2600.00, 1, 2600.00, '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(8, 5, 'Wireless Mouse', 1600.00, 1, 1600.00, '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(9, 5, 'Sports Sneakers', 2300.00, 1, 2300.00, '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(10, 5, 'Rose Water Spray', 250.00, 2, 500.00, '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(11, 5, 'Smart Watch', 3750.00, 1, 3750.00, '2025-06-21 05:42:49', '2025-06-21 05:42:49'),
(12, 6, 'Mehron T-Shirt', 1300.00, 2, 2600.00, '2025-06-22 05:26:05', '2025-06-22 05:26:05'),
(13, 6, 'Bluetooth Headphoness', 2500.00, 2, 5000.00, '2025-06-22 05:26:05', '2025-06-22 05:26:05'),
(14, 7, 'Bluetooth Headphoness', 2500.00, 3, 7500.00, '2025-06-28 11:13:31', '2025-06-28 11:13:31'),
(15, 8, 'Classic White Shirt', 1300.00, 2, 2600.00, '2025-06-28 11:16:27', '2025-06-28 11:16:27'),
(16, 8, 'Sports Sneakers', 2300.00, 1, 2300.00, '2025-06-28 11:16:27', '2025-06-28 11:16:27'),
(17, 8, 'Leather Wallet', 2600.00, 1, 2600.00, '2025-06-28 11:16:27', '2025-06-28 11:16:27'),
(18, 9, 'Classic White Shirt', 1300.00, 2, 2600.00, '2025-06-28 11:26:30', '2025-06-28 11:26:30'),
(19, 10, 'Leather Wallet', 2600.00, 2, 5200.00, '2025-06-28 11:28:47', '2025-06-28 11:28:47'),
(20, 11, 'Embroidered Shawl', 3200.00, 1, 3200.00, '2025-06-28 11:40:07', '2025-06-28 11:40:07'),
(21, 12, 'Formal Blazer', 1000.00, 1, 1000.00, '2025-06-28 11:45:14', '2025-06-28 11:45:14'),
(22, 13, 'Dior Sauvage', 23400.00, 1, 23400.00, '2025-06-28 11:51:37', '2025-06-28 11:51:37'),
(23, 14, 'Maxi Dress', 4500.00, 1, 4500.00, '2025-06-28 12:05:56', '2025-06-28 12:05:56'),
(24, 15, 'Formal Blazer', 1000.00, 2, 2000.00, '2025-06-28 12:08:32', '2025-06-28 12:08:32'),
(25, 16, 'White Cap', 800.00, 2, 1600.00, '2025-06-28 12:10:47', '2025-06-28 12:10:47'),
(26, 17, 'Embroidered Shawl', 3200.00, 1, 3200.00, '2025-06-29 01:31:14', '2025-06-29 01:31:14'),
(27, 17, 'Casual Sandals', 3250.00, 1, 3250.00, '2025-06-29 01:31:14', '2025-06-29 01:31:14'),
(28, 17, 'Chanel Coco Mademoiselle', 21000.00, 1, 21000.00, '2025-06-29 01:31:14', '2025-06-29 01:31:14'),
(29, 18, 'Sunglasses', 1399.00, 1, 1399.00, '2025-06-29 03:18:47', '2025-06-29 03:18:47'),
(30, 19, 'Embroidered Shawl', 3200.00, 1, 3200.00, '2025-06-30 10:59:23', '2025-06-30 10:59:23'),
(31, 19, 'Leather Wallet', 2600.00, 2, 5200.00, '2025-06-30 10:59:23', '2025-06-30 10:59:23'),
(32, 19, 'Maxi Dress', 4500.00, 1, 4500.00, '2025-06-30 10:59:23', '2025-06-30 10:59:23'),
(33, 20, 'Bluetooth Headphoness', 2500.00, 1, 2500.00, '2025-07-05 02:19:25', '2025-07-05 02:19:25'),
(34, 21, 'Classic White Shirt', 1300.00, 1, 1300.00, '2025-07-05 02:25:10', '2025-07-05 02:25:10'),
(35, 22, 'Formal Blazer', 1000.00, 2, 2000.00, '2025-07-05 02:28:53', '2025-07-05 02:28:53'),
(36, 23, 'Classic White Shirt', 1300.00, 2, 2600.00, '2025-07-07 05:13:39', '2025-07-07 05:13:39'),
(37, 24, 'Classic White Shir', 1300.00, 2, 2600.00, '2025-07-07 05:24:25', '2025-07-07 05:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_25_061204_add_is_admin_to_users_table', 2),
(5, '2025_05_25_073925_create_categories_table', 3),
(6, '2025_05_25_074129_create_products_table', 4),
(7, '2025_06_17_074440_add_image_to_products_table', 5),
(8, '2025_06_21_084718_create_customers_table', 6),
(9, '2025_06_21_084817_create_customer_orders_table', 6),
(10, '2025_06_21_084837_create_customer_order_items_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Classic White Shir', 'Formal wear for office or events.', 1300.00, 1, 'Classic White Shirt.jpg', '2025-05-28 09:47:23', '2025-07-07 05:22:24'),
(2, 'Embroidered Shawl', 'Traditional shawl with embroidery.', 3200.00, 2, 'Embroidered Shawl.jpg', '2025-05-28 09:50:49', '2025-06-26 02:56:11'),
(3, 'Bluetooth Headphoness', 'Wireless headphones with noise cancellation and HD sound.', 2500.00, 5, 'headphones.jpeg', '2025-05-28 09:51:13', '2025-06-26 02:56:35'),
(5, 'Maxi Dress', 'Floral full-length maxi.', 4500.00, 2, 'Maxi Dress.jpg', '2025-05-28 09:52:18', '2025-06-26 02:58:22'),
(6, 'Leather Wallet', 'Premium leather wallet with multiple compartments.', 2600.00, 5, 'Leather Wallet.jpeg', '2025-05-28 09:52:45', '2025-06-26 03:59:16'),
(8, 'Wireless Mouse', 'Smooth and ergonomic mouse with long battery life.', 1600.00, 5, 'mouse.jpeg', '2025-05-28 09:54:13', '2025-06-26 03:00:46'),
(10, 'Formal Blazer', 'Elegant Black blazer.', 1000.00, 1, 'Formal Blazer.jpg', '2025-05-28 09:56:16', '2025-06-26 03:00:23'),
(12, 'Earrings', 'Artificial gold plated', 12000.00, 2, 'Gold Earrings.jpg', '2025-05-28 09:57:35', '2025-06-26 03:03:33'),
(15, 'Lether Belt', 'Geniune Leather Belt', 900.00, 5, 'Lether Belt.jpeg', '2025-05-29 00:38:58', '2025-06-26 03:03:54'),
(16, 'White Cap', 'Cotton adjustable White cap.', 800.00, 1, 'cap.jpg', '2025-05-31 07:10:39', '2025-06-26 03:09:02'),
(17, 'Hair Dryer 1200W', 'Compact hair dryer .', 2499.00, 5, 'Hair Dryer.jpg', '2025-05-31 07:11:21', '2025-06-26 03:59:42'),
(18, 'Sports Sneakers', 'Lightweight running shoes with breathable fabric and durable sole', 2300.00, 1, 'sneakers.jpg', '2025-05-31 07:11:54', '2025-06-26 03:17:30'),
(19, 'Casual Sandals', 'Comfortable  sandals for girls.', 3250.00, 2, 'Casual Sandals.jpg', '2025-05-31 07:12:22', '2025-06-26 03:14:19'),
(21, 'Ladies Handbag - Leather', 'Stylish leather handbag with gold hardware and zipper compartments.', 3200.00, 5, 'Ladies Handbag - Leather.jpeg', '2025-05-31 07:13:31', '2025-06-26 04:00:28'),
(22, 'Bluetooth Speaker', 'Compact speaker with deep bass and 10-hour playtime.', 4250.00, 5, 'Bluetooth Speaker.jpeg', '2025-05-31 07:15:25', '2025-06-26 03:24:13'),
(23, 'Silver Watch', 'Watch For Boys', 3200.00, 5, 'Watch.jpg', '2025-05-31 07:15:54', '2025-06-26 04:00:42'),
(24, 'Sneakers', 'Black Sneakers For Boys .', 3450.00, 1, 'sneakers.jpg', '2025-05-31 07:16:22', '2025-06-26 03:22:58'),
(25, 'Shoes For Girls', 'Shoes for Girls.', 4000.00, 2, 'womenshoes.jpg', '2025-05-31 07:16:58', '2025-06-26 03:27:29'),
(27, 'Smart Watch', 'Water Proof Smart Watch', 3750.00, 5, 'watchforboys.jpg', '2025-05-31 07:46:15', '2025-06-26 04:01:10'),
(29, 'Zargiya', 'Zargiya is an amber woody fragrance for women and men', 3500.00, 1, 'zar.jpeg', '2025-06-17 03:36:11', '2025-06-26 03:47:15'),
(30, 'Lether HandBag', 'Black Shoulder Bag', 7200.00, 2, 'black-bag.jpg', '2025-06-25 04:03:25', '2025-06-25 04:03:25'),
(31, 'Face Makeup Kit', 'Foundation, blush, and compact combo', 2499.00, 5, 'Face Makeup Kit.jpg', '2025-06-26 03:38:55', '2025-06-26 04:01:55'),
(32, 'Slim Fit Jeans', 'Stretchable denim.', 2600.00, 1, 'Stretchable denim, dark blue.jpg', '2025-06-26 03:50:40', '2025-06-26 03:50:40'),
(33, 'Beard Grooming Kit', 'Oil, balm, comb, scissors', 5500.00, 5, 'Beard Grooming Kit.jpg', '2025-06-26 03:52:47', '2025-06-26 04:02:20'),
(34, 'Denim Jeans', 'Stretchable denim, dark blue', 1400.00, 1, 'Stretchable denim, dark blue.jpg', '2025-06-26 03:53:30', '2025-06-26 03:53:30'),
(35, 'Sunglasses', 'Matte black UV protection', 1399.00, 5, 'Sunglasses.jpg', '2025-06-26 03:55:24', '2025-06-26 04:02:39'),
(36, 'Chanel Coco Mademoiselle', 'elegant fragrance with notes of orange, jasmine, and patchouli.', 21000.00, 2, 'CHANEL Coco.jpg', '2025-06-26 03:57:05', '2025-06-26 03:57:05'),
(37, 'Dior Sauvage', 'Bold and powerful fragrance', 23400.00, 1, 'sauvage.jpg', '2025-06-26 03:58:11', '2025-06-26 03:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('psV83nORQPZYdlX9WZ2S6PPKdPTZ1fv1B06Hntho', 19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSUFneEh4RGNNajJXbnhqbzZWTnA1RnR5dm95RGg2ZEtnVVZCMjBKOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmRleCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE5O30=', 1751884148);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$12$Ob7vlJzbgYBo/XKZbP2BRuhZu3lMC31MyGI3U/mFu1mXoXHDG2CZG', NULL, '2025-05-28 08:54:15', '2025-05-28 08:54:15', 1),
(4, 'Saiyyan', 'saiyan@gmail.com', NULL, '$2y$12$3xCbh4ccesBad.V.sVexyuCqjgmqLhG7eW.usBGZgeYUvV4TjH6U.', NULL, '2025-05-29 01:07:38', '2025-05-29 01:07:38', 0),
(5, 'Kinza', 'kinza@gmail.com', NULL, '$2y$12$dRIMpxy62LnUqVGJwhO1ledsnJZ2Mg9YhOj8H7ALv.rCsXLaEfi4m', NULL, '2025-05-29 01:10:58', '2025-05-29 01:10:58', 0),
(6, 'Shayan', 'shayan@gmail.com', NULL, '$2y$12$.ervNS1RnIE9kHQOVHPTUOQu9NsBMN3Hun3vlnRkuHfc442YCVnqS', NULL, '2025-05-29 01:11:43', '2025-05-29 01:11:43', 0),
(7, 'Rahat', 'rahat@gmail.com', NULL, '$2y$12$utHlxL.z9wa8RUww5A/EbumNFjJx1JVfTMMDn4mAXl94Ceu31CKWu', NULL, '2025-05-30 10:26:02', '2025-05-30 10:26:02', 0),
(8, 'khalid', 'khalid@gmail.com', NULL, '$2y$12$4kR7lqHZXWZ/wiHmYaMOC.dlADtf7tQC1EhsD3Nys0YffkmxadM4a', NULL, '2025-05-30 10:47:00', '2025-05-30 10:47:00', 0),
(9, 'john', 'john@gmail.com', NULL, '$2y$12$ahs.453m/a.FYJDerlLcleD53xfScOl2co3jvS9qfLx9ophQEoQ.C', NULL, '2025-05-30 11:02:02', '2025-05-30 12:01:49', 0),
(11, 'pushpaa', 'pushpa@gmail.com', NULL, '$2y$12$ACr6tF7QosXRWMUptxh5eOdOpMwhX72HlvAOSMm5E5UUPEm5hhCnW', NULL, '2025-05-30 12:06:07', '2025-05-30 12:06:31', 0),
(12, 'naina', 'naina@gmail.com', NULL, '$2y$12$aiFq/D.WoxXJm3ZxwsT9H.JG50bGF/sT..6mD5GP1p0aYST2f/Tam', NULL, '2025-05-31 07:47:12', '2025-05-31 07:47:12', 0),
(14, 'Shoaib khan', 'skadmin@gmail.com', NULL, '$2y$12$xYcXn.T4XysUBK7b18eZQuOyAjaTIdkJkbwHtIKdvBqKMAFP/WIvy', NULL, NULL, '2025-06-24 01:59:12', 1),
(16, 'Ali khan', 'ali@gmail.com', NULL, '$2y$12$Je/OuFSjZ5DtVmvOCQAdWeHy9bDb2iJEbbZoIARsbJyIp1wFyeMK2', '4RWzYVUmsI6T0zGheIG00PHCbhZyDWG4Mc5WyMpla0LqOxJNTi8ZkdkZv3Vh', '2025-06-24 07:53:10', '2025-06-24 07:53:10', 0),
(17, 'Shoaib Khan', 'shoaibkhan1447026@gmail.com', NULL, '$2y$12$uSd4CWVHS43yFskaVXt3XOZvvhPyO3kzPE94ovXfZVj73vyvFVnA.', 'tviT3mQaZkDBIT7mjo9SehnP9dRqc6RtMEmjoshGbw299TXrQ70PL9F13wL8', '2025-06-24 07:57:32', '2025-06-24 08:03:52', 0),
(18, 'Ijaz Khan', 'ijaz@gmail.com', NULL, '$2y$12$ZnX.zbT1rYjWkFTsCa7mQudzhZKCQYWuWnLorFdnBBJrj01h/Nv2a', NULL, '2025-06-26 07:02:00', '2025-06-26 07:02:00', 0),
(19, 'Saira', 'saira@gmail.com', NULL, '$2y$12$g7/HrRYLHdgGcUIJBpZ/dOEdrCvK1YXHM/CEswIIPcfpJF4caLbRe', NULL, '2025-06-26 07:10:01', '2025-06-26 07:10:01', 0),
(20, 'Aeysha', 'aeysha@gmail.com', NULL, '$2y$12$PR5.zPsbSMveoOmFKQEPUOdRaW1YN1NITLD8jhjKNDSthSLGnfO3e', NULL, '2025-06-26 07:45:45', '2025-06-26 07:45:45', 0),
(21, 'pathan', 'pathan@gmail.com', NULL, '$2y$12$c38xpXeYs9XnrNzp41sh9eA.K6rDRJIUo.Sa32mzJr7MmB3UEsAi.', NULL, '2025-06-26 11:14:32', '2025-06-26 11:14:32', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customer_order_items`
--
ALTER TABLE `customer_order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_order_items`
--
ALTER TABLE `customer_order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD CONSTRAINT `customer_orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_order_items`
--
ALTER TABLE `customer_order_items`
  ADD CONSTRAINT `customer_order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `customer_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
