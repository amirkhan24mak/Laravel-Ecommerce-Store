-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 07:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amart`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagery_twos`
--

CREATE TABLE `catagery_twos` (
  `Subcata_id` bigint(20) UNSIGNED NOT NULL,
  `Subcata_Name` varchar(35) NOT NULL,
  `Mcata_Id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagery_twos`
--

INSERT INTO `catagery_twos` (`Subcata_id`, `Subcata_Name`, `Mcata_Id`, `created_at`, `updated_at`) VALUES
(2, 'OIL & GHEE', 8, '2023-07-06 19:35:25', '2023-07-06 19:35:25'),
(6, 'RICE', 8, '2023-07-06 19:56:13', '2023-07-06 19:56:13'),
(7, 'FLOUR', 8, '2023-07-06 19:56:37', '2023-07-06 19:56:37'),
(9, 'SNACKS', 8, '2023-07-06 19:57:08', '2023-07-06 19:57:08'),
(10, 'DESSERTS', 8, '2023-07-06 19:57:31', '2023-07-06 19:57:31'),
(11, 'SUGAR', 8, '2023-07-06 19:57:59', '2023-07-06 19:57:59'),
(12, 'PACKAGED FOOD', 8, '2023-07-06 19:58:18', '2023-07-06 19:58:18'),
(13, 'FRUIT & VEGETABLES', 8, '2023-07-06 19:58:41', '2023-07-06 19:58:41'),
(14, 'TVs & ENTERTAINMENT', 9, '2023-07-06 20:05:00', '2023-07-06 20:05:00'),
(15, 'HEATING & COOLING', 9, '2023-07-06 20:05:20', '2023-07-06 20:05:20'),
(16, 'LAPTOP', 9, '2023-07-06 20:05:43', '2023-07-06 20:05:43'),
(17, 'GAMING ACCESSORIES', 9, '2023-07-06 20:06:24', '2023-07-06 20:06:24'),
(18, 'MOBILES', 9, '2023-07-06 20:07:04', '2023-07-06 20:07:04'),
(19, 'MAKEUP', 10, '2023-07-06 20:07:33', '2023-07-06 20:07:33'),
(20, 'LIPS', 10, '2023-07-06 20:07:57', '2023-07-06 20:07:57'),
(21, 'BABY CORNER', 10, '2023-07-06 20:08:19', '2023-07-06 20:08:19'),
(22, 'HAIR', 10, '2023-07-06 20:08:42', '2023-07-06 20:08:42'),
(23, 'FRAGRANCE', 10, '2023-07-06 20:08:59', '2023-07-06 20:08:59'),
(24, 'SKIN CARE', 10, '2023-07-06 20:09:18', '2023-07-06 20:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `contactuse`
--

CREATE TABLE `contactuse` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Massage` varchar(80) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuse`
--

INSERT INTO `contactuse` (`ID`, `Name`, `Email`, `Massage`, `created_at`, `updated_at`) VALUES
(1, 'Faizan', 'faizan244@gmail.com', 'Good Service', '2023-07-06 12:50:45', '2023-07-06 12:50:45'),
(3, 'Laiba Khan', 'laibabaig44@gmail.com', 'Late Delvery', '2023-07-06 13:01:05', '2023-07-06 13:01:05'),
(8, 'Shahid Anwar', 'shahidanwarllc@gmail.com', 'I want sell products on your Ecommerce Store', '2023-07-06 13:29:27', '2023-07-06 13:29:27');

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
-- Table structure for table `main_catas`
--

CREATE TABLE `main_catas` (
  `Mcata_Id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_catas`
--

INSERT INTO `main_catas` (`Mcata_Id`, `Name`, `created_at`, `updated_at`) VALUES
(8, 'Grocery', '2023-07-06 17:10:43', '2023-07-06 17:10:43'),
(9, 'Electronics', '2023-07-06 17:11:04', '2023-07-06 17:11:04'),
(10, 'Beauty', '2023-07-06 17:11:15', '2023-07-06 17:11:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_06_043610_create_contactuses_table', 1),
(6, '2023_07_06_080007_create_main_catas_table', 2),
(7, '2023_07_06_114228_create_catagery_twos_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagery_twos`
--
ALTER TABLE `catagery_twos`
  ADD PRIMARY KEY (`Subcata_id`),
  ADD KEY `catagery_twos_mcata_id_foreign` (`Mcata_Id`);

--
-- Indexes for table `contactuse`
--
ALTER TABLE `contactuse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `main_catas`
--
ALTER TABLE `main_catas`
  ADD PRIMARY KEY (`Mcata_Id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `catagery_twos`
--
ALTER TABLE `catagery_twos`
  MODIFY `Subcata_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contactuse`
--
ALTER TABLE `contactuse`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_catas`
--
ALTER TABLE `main_catas`
  MODIFY `Mcata_Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catagery_twos`
--
ALTER TABLE `catagery_twos`
  ADD CONSTRAINT `catagery_twos_mcata_id_foreign` FOREIGN KEY (`Mcata_Id`) REFERENCES `main_catas` (`Mcata_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
