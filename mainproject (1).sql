-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 07:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abouts` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `abouts`, `created_at`, `updated_at`) VALUES
(1, 'Big Mart Retail is a grocery supermarket brand, and it is widely known for its home delivery services of food and grocery.', NULL, '2021-12-09 00:47:52'),
(2, 'Everybody wants to know how to buy goods cheaper or how to advertise them at low cost. I have been thinking of  the same topic for long time. Here you go the answer. That is Big Mart.', NULL, '2021-12-09 00:48:15'),
(3, 'Loyalty programs, sponsored by retailers and other businesses, offer rewards, discounts, and other special incentives as a way to attract and retain customers.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uname`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p-method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cash on Delivery',
  `p_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'not',
  `c_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_date` date NOT NULL DEFAULT current_timestamp(),
  `qnty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `prize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not defined',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `p-method`, `p_id`, `c_id`, `b_date`, `qnty`, `prize`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cash on Delivery', '3', '1', '2021-12-23', '4', '120', 'order', NULL, '2021-12-23 23:45:40'),
(2, 'Cash on Delivery', '1', '1', '2021-12-23', '1', '20', 'order', NULL, '2021-12-23 23:45:40'),
(3, 'Cash on Delivery', '2', '1', '2021-12-23', '2', '120', 'order', NULL, '2021-12-23 23:45:40'),
(4, 'Cash on Delivery', '1', '1', '2021-12-23', '50', '1000', 'order', NULL, '2021-12-23 23:45:40'),
(5, 'Cash on Delivery', '2', '1', '2021-12-23', '1', '60', 'order', NULL, '2021-12-23 23:45:40'),
(6, 'Cash on Delivery', '2', '2', '2021-12-23', '3', '180', 'order', NULL, '2021-12-24 00:05:53'),
(7, 'Cash on Delivery', '5', '2', '2021-12-23', '1', '1200', 'order', NULL, '2021-12-24 00:05:53'),
(8, 'Cash on Delivery', '2', '2', '2021-12-23', '3', '180', 'order', NULL, '2021-12-24 00:05:53'),
(9, 'Cash on Delivery', '4', '2', '2021-12-23', '1', '40', 'order', NULL, '2021-12-24 00:05:53'),
(10, 'Cash on Delivery', '1', '2', '2021-12-23', '3', '60', 'order', NULL, '2021-12-24 00:05:53'),
(11, 'Cash on Delivery', '5', '2', '2021-12-23', '1', '1200', 'order', NULL, '2021-12-24 00:05:53'),
(12, 'Cash on Delivery', '1', '1', '2021-12-24', '1', '20', 'order', NULL, '2021-12-23 23:45:40'),
(13, 'Cash on Delivery', '5', '1', '2021-12-24', '1', '1200', 'order', NULL, '2021-12-23 23:45:40'),
(14, 'Cash on Delivery', '1', '1', '2021-12-24', '6', '120', 'order', NULL, '2021-12-23 23:45:40'),
(15, 'Cash on Delivery', '2', '1', '2021-12-24', '5', '300', 'order', NULL, '2021-12-23 23:45:40'),
(16, 'Cash on Delivery', '1', '1', '2021-12-24', '25', '500', 'order', NULL, '2021-12-23 23:45:40'),
(17, 'Cash on Delivery', '5', '1', '2021-12-24', '1', '1200', 'order', NULL, '2021-12-23 23:45:40'),
(18, 'Cash on Delivery', '2', '1', '2021-12-24', '3', '180', 'order', NULL, '2021-12-23 23:45:40'),
(19, 'Cash on Delivery', '2', '2', '2021-12-24', '3', '180', 'order', NULL, '2021-12-24 00:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `address`, `phno`, `created_at`, `updated_at`) VALUES
(1, 'bigmartnew@gm.in', 'Kakkanad ,Kochi', 7675675, NULL, '2021-12-23 23:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditpoints` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '100 ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `district`, `address`, `city`, `pincode`, `email`, `phno`, `username`, `password`, `creditpoints`, `created_at`, `updated_at`) VALUES
(1, 'akhila', 'ernakulam', 'kizhakamablam', 'aluva', 678906, 'luttu@gm.in', 9207, 'akh', '123', '190', NULL, '2021-12-23 23:45:40'),
(2, 'sincy', 'Ernakulam', 'saodsjfoiujsf', 'mamangalam', 67541, 'sin@gm.in', 3544365, 'sin', '123', '140', NULL, '2021-12-23 01:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `city`, `pincode`, `email`, `phno`, `username`, `password`, `sname`, `status`, `created_at`, `updated_at`) VALUES
(1, 'akhila', 'sjdksl', 7675685, 'akh@gm.in', 4756585, 'akh', '123', 'Ashop', 'Approve', NULL, '2021-12-15 00:48:50'),
(2, 'sincy', 'mamangalam', 565676, 'sin@gm.in', 564564, 'sin', '123', 'S-shop', 'Decline', NULL, '2021-12-15 00:48:53'),
(3, 'vignes', 'palarivatto', 75687, 'vignesh@gm.in', 88888, 'vign', '1234', 'Vshop', 'Decline', NULL, '2021-12-23 23:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(38, '2021_12_03_050832_create_shops_table', 1),
(39, '2021_12_03_051221_create_admins_table', 1),
(40, '2021_12_03_051316_create_abouts_table', 1),
(41, '2021_12_03_051358_create_products_table', 1),
(42, '2021_12_03_051502_create_contacts_table', 1),
(43, '2021_12_03_054532_create_customers_table', 1),
(44, '2021_12_03_062314_create_managers_table', 1),
(45, '2021_12_10_044145_create_bookings_table', 2),
(46, '2021_12_13_054511_create_wishlis_table', 3),
(47, '2021_12_20_064421_create_orders_table', 4),
(48, '2021_12_22_044559_create_payments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'book',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cid`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '120', 'payed', NULL, '2021-12-23 23:45:40'),
(2, 1, '20', 'payed', NULL, '2021-12-23 23:45:40'),
(3, 1, '120', 'payed', NULL, '2021-12-23 23:45:40'),
(4, 1, '1000', 'payed', NULL, '2021-12-23 23:45:40'),
(5, 1, '60', 'payed', NULL, '2021-12-23 23:45:40'),
(6, 2, '180', 'payed', NULL, '2021-12-23 01:04:59'),
(7, 2, '1200', 'payed', NULL, '2021-12-23 01:04:59'),
(8, 2, '180', 'payed', NULL, '2021-12-23 01:04:59'),
(9, 2, '40', 'payed', NULL, '2021-12-23 01:04:59'),
(10, 2, '60', 'payed', NULL, '2021-12-23 01:04:59'),
(11, 2, '1200', 'payed', NULL, '2021-12-23 01:04:59'),
(12, 1, '20', 'payed', NULL, '2021-12-23 23:45:40'),
(13, 1, '1200', 'payed', NULL, '2021-12-23 23:45:40'),
(14, 1, '120', 'payed', NULL, '2021-12-23 23:45:40'),
(15, 1, '300', 'payed', NULL, '2021-12-23 23:45:40'),
(16, 1, '480', 'payed', NULL, '2021-12-23 23:45:40'),
(17, 1, '1200', 'payed', NULL, '2021-12-23 23:45:40'),
(18, 1, '180', 'payed', NULL, '2021-12-23 23:45:40'),
(19, 2, '180', 'book', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnumber` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'payed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `cid`, `cname`, `cnumber`, `amount`, `cvv`, `expdate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'akhila', 1212121212, 120, 345, '2021-12-25', 'payed', NULL, NULL),
(2, 1, 'akhila', 1212121212, 120, 345, '2021-12-25', 'payed', NULL, NULL),
(3, 1, 'akhila', 1212121212, 1000, 345, '2030-11-24', 'payed', NULL, NULL),
(4, 2, 'sincy', 1313131313, 180, 456, '2021-12-17', 'payed', NULL, NULL),
(5, 2, 'sincy', 13131313, 1200, 253, '2021-12-26', 'payed', NULL, NULL),
(6, 2, 'hgffu', 35434, 40, 344, '2022-01-02', 'payed', NULL, NULL),
(7, 2, 'asffsd', 768534, 60, 654, '2022-01-01', 'payed', NULL, NULL),
(8, 2, 'sdsfd', 3545765, 1200, 675, '2022-01-01', 'payed', NULL, NULL),
(9, 1, 'akhila', 12121212, 1200, 234, '2021-12-30', 'payed', NULL, NULL),
(10, 1, 'sdas', 34356, 120, 234, '2022-01-02', 'payed', NULL, NULL),
(11, 1, 'sdasdas', 2323423, 300, 564, '2027-12-12', 'payed', NULL, NULL),
(12, 1, 'dadsa', 354232, 480, 234, '2030-02-12', 'payed', NULL, NULL),
(13, 1, 'dsafdasfds', 343245, 1200, 123, '2034-03-31', 'payed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avail_qnty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not defined',
  `Prize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `shop_name`, `pname`, `avail_qnty`, `Prize`, `pdate`, `pimg`, `product_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ashop', 'Teddy bear', '12', '20', '2021-12-08', 'teddybear.jpg', 'Toys', 'Approve', NULL, '2021-12-15 18:53:23'),
(2, 'Ashop', 'carrot', '35', '60', '2021-12-08', 'veg1.jpg', 'Vegetables', 'Approve', NULL, '2021-12-23 23:47:31'),
(3, 'Ashop', 'Choclate Cupcakes', '123', '30', '2021-12-15', 'cc.jpg', 'Others', 'Decline', NULL, '2021-12-23 23:47:35'),
(4, 'Ashop', 'ghjgwef', '21', '40', '2021-12-17', 'gifts.jpg', 'Gifts', 'Approve', NULL, '2021-12-14 19:12:38'),
(5, 'Ashop', 'asd', '567', '1200', '2022-01-01', 'tb.jpg', 'Toys', 'Approve', NULL, '2021-12-23 00:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_uname_unique` (`uname`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_username_unique` (`username`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managers_username_unique` (`username`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
