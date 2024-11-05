-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 07:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminuserauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Ayesha Khan', 'Ayesha13@gmail.com', NULL, '$2y$10$0ZyQnOrehecR9JgH9tE3UOYJGUNcmz33ZkAacO0DMTKNo3uSaIeNK', NULL, '2023-04-08 14:10:06', '2023-05-02 15:59:12'),
(11, 'Ayesha', 'ayeshabukhsh73@gmail.com', NULL, '$2y$10$dhhKIU.YHo4FwOqHG3PImOcLub1vBLUwHszJGknIR7.pzH32hHycK', NULL, '2023-08-04 22:55:24', '2023-08-04 22:55:24'),
(12, 'Ahsan', 'ahsan55@gmail.com', NULL, '$2y$10$.NcnQuklqwKHwQnN6m5PQe9nGgTrAHA1s/Ly1PA6SJnCGVGJ0rr1S', NULL, '2023-08-07 01:17:17', '2023-08-07 01:17:17'),
(13, 'ayesha', 'ayesha@gmail.com', NULL, '$2y$10$FYhX/TM3vIlROyxexvgMnuvvsnndVlDlntLlOWfipmMPoECTugwFO', NULL, '2023-08-24 02:43:38', '2023-08-24 15:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ce_Name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `prod_des` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `fname`, `lname`, `email`, `ce_Name`, `phone_no`, `prod_des`, `created_at`, `updated_at`) VALUES
(12, 'Ayesha', 'bukhsh', 'Ayesha33@gmail.com', 'Snofiii Company', '+92788999', 'Courier Managemant System', '2023-04-10 15:40:50', '2023-04-11 15:41:37'),
(18, 'Ahsan', 'ali', 'alil44@gmail.com', 'GulAhmad', '+9234556789', 'nxxm,cv', '2023-04-28 15:14:31', '2023-04-28 15:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Ayesha Khan', 'Ayesha33@gmail.com', 'Ayesha', 'Hello', '2023-04-26 16:09:38', '2023-04-26 16:09:38'),
(3, 'Aleena', 'Aleena44@gmail.com', 'Aleena', 'Hy', '2023-04-26 18:44:50', '2023-04-26 18:44:50'),
(4, 'Ariyal', 'Ariyaal13@gmail.com', 'Web Developer', 'hey', '2023-04-27 15:11:29', '2023-04-27 15:11:29'),
(5, 'Alii', 'Alii@33gmail.com', 'Aliii', 'Hyyy', '2023-04-27 17:22:49', '2023-04-27 17:22:49'),
(6, 'Ahsan444 ali', 'alil44@gmail.com', 'ahsan', 'hyyy', '2023-04-30 01:40:56', '2023-04-30 01:40:56'),
(7, 'Ali ali', 'alil44@gmail.com', 'Aliii Khan', 'Hyyy', '2023-05-03 02:10:44', '2023-05-03 02:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `courieragents`
--

CREATE TABLE `courieragents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ce_Name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courieragents`
--

INSERT INTO `courieragents` (`id`, `fname`, `lname`, `email`, `ce_Name`, `phone_no`, `city`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Ayesha khan2', 'khan', 'Ayesha33@gmail.com', 'Ayesha33@gmail.com', '546950', 'Hydrabad', 'recent-blog1.jpg', '2023-05-02 03:23:18', '2023-05-03 16:21:45'),
(11, 'Nimra', 'Rashid', 'NimraRashid@gmail.com', 'Super Courier check availability.', '3648734769869', 'Karachi', '20230502082357.png', '2023-05-02 15:23:57', '2023-05-02 15:23:57'),
(12, 'Miss', 'Muniba', 'Miss@gmail.com', 'CourierCo check availability.', '7658457496', 'Islamabad', '20230502084646.jpg', '2023-05-02 15:46:46', '2023-05-02 15:46:46'),
(13, 'Ali', 'ali', 'alil44@gmail.com', 'alil44@gmail.com', '+9234556789', 'Hydrabad', '20230502085646.png', '2023-05-02 15:56:46', '2023-05-02 15:56:46');

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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_10_111259_create_admins_table', 2),
(7, '2023_04_06_080023_create_agents_table', 3),
(9, '2023_04_09_184216_create_couriers_table', 4),
(11, '2023_04_09_195710_create_new_couriers_table', 5),
(13, '2023_04_11_084936_create_courieragents_table', 6),
(14, '2023_04_18_175547_create_qoutes_table', 7),
(15, '2023_04_22_183757_create_contacts_table', 8),
(21, '2023_04_26_181300_create_qoutations_table', 9),
(22, '2023_04_27_102458_create_froms_table', 10),
(24, '2023_04_27_105551_create_forms_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `new_couriers`
--

CREATE TABLE `new_couriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ce_Name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `prod_des` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_couriers`
--

INSERT INTO `new_couriers` (`id`, `fname`, `lname`, `email`, `ce_Name`, `phone_no`, `prod_des`, `city`, `image`, `created_at`, `updated_at`) VALUES
(1, 'nnn', 'kkk', 'bnxcjn@113gmail.com', 'bnxcjn@113gmail.com', '087987', 'd vmb', '2', 'C:\\xampp\\tmp\\phpF387.tmp', '2023-04-10 21:51:31', '2023-04-10 21:51:31'),
(7, 'Ahsan', 'khannn', 'bnxcjn@003gmail.com', 'bnxcjn@003gmail.com', '087987', 'bbbb', '2', 'C:\\xampp\\tmp\\php64E.tmp', '2023-04-11 00:47:27', '2023-04-11 00:47:27'),
(8, 'Ali', 'Khan', 'Alikhann211gmail.com', 'Gul Ahmad Company', '+9234567809', 'Service as a product', '4', 'C:\\xampp\\tmp\\php6F7D.tmp', '2023-04-11 00:57:44', '2023-04-11 00:57:44'),
(10, 'Ali', 'Khan', 'Alikhann2001gmail.com', 'Gul Ahmad Company', '+9234567809', 'Service as a product', '4', 'C:\\xampp\\tmp\\phpFFC4.tmp', '2023-04-11 00:59:27', '2023-04-11 00:59:27'),
(11, 'Haram', 'Ali', 'Haranali11@gmail.com', 'Snofii', '087987', 'Service as a product', 'Karachi', 'C:\\xampp\\tmp\\php6C40.tmp', '2023-04-11 01:38:08', '2023-04-11 01:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `qoutations`
--

CREATE TABLE `qoutations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qoutations`
--

INSERT INTO `qoutations` (`id`, `name`, `email`, `phone`, `standard`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ariyal', 'Ariyaal13@gmail.com', '+92788999', 'Standard', 'hyy', '2023-04-27 17:10:57', '2023-04-27 17:10:57'),
(2, 'Ayesha khan', 'Ayesha113@gmail.com', '+92788999', 'Pallet', 'hy', '2023-04-27 17:21:42', '2023-04-27 17:21:42'),
(3, 'Ali ali', 'alil44@gmail.com', '+9234556789', 'Standard', 'Heelooo', '2023-05-02 16:57:31', '2023-05-02 16:57:31'),
(4, 'Qamar', 'khan', '475948', 'Pallet', 'HelloO', '2023-05-03 01:02:31', '2023-05-03 01:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `qoutes`
--

CREATE TABLE `qoutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qoutes`
--

INSERT INTO `qoutes` (`id`, `name`, `email`, `subject`, `standard`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ariyal', 'Ariyaal13@gmail.com', 'Software engineer', 'Standard', 'hy', '2023-04-27 16:11:25', '2023-04-27 16:11:25'),
(3, 'Ayesha Khan', 'Ayesha33@gmail.com', 'Software engineer', 'Express', 'HelloOO', '2023-04-27 16:18:59', '2023-04-27 16:18:59'),
(4, 'Ayesha khan', 'Ayesha113@gmail.com', 'kkk', 'Standard', 'hyyy', '2023-04-27 17:04:46', '2023-04-27 17:04:46'),
(5, 'mifra', 'mifra@gmail.com', 'computer', 'Ware Housing', 'hello', '2023-04-27 17:22:21', '2023-04-27 17:22:21'),
(6, 'sarafaarz khan', 'sarafarzkhan@gmail.com', 'Software engineer', 'Express', 'hyy', '2023-04-28 01:21:51', '2023-04-28 01:21:51'),
(7, 'Sadique', 'Sadique33@gmail.com', 'computer', 'International', 'hyyy', '2023-05-07 23:06:00', '2023-05-07 23:06:00');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arain', 'Arain66@gmail.com', NULL, '$2y$10$FdMPjNhlrxsdZDs9DXLpv.ybJPto1k3R2ZXn4ROLGAhnnz1y11KPS', NULL, '2023-03-10 19:09:32', '2023-03-10 19:09:32'),
(2, 'Ayesha Khan', 'ayesha22@gmail.com', NULL, '$2y$10$FrZbkNZd8DHEEfsUiHKzhuAEHFUBjx43jqFo9XjPBzwq0lFJEt6aG', NULL, '2023-03-17 14:55:38', '2023-03-17 14:55:38'),
(3, 'uroooj', 'urooj77@gmail.com', NULL, '$2y$10$Ja8GuwOZfNmC1jm3Nz/ZieXXXpvvf9UxRR841b6MBV6uSmqihHVo.', NULL, '2023-03-17 17:37:57', '2023-03-17 17:37:57'),
(4, 'WarishaKhan', 'warisha@gmail.com', NULL, '$2y$10$IOiMDlE4dd6OcQW6JK17v.9ZandkorNBhTjiCoQn/glspCObiYEG6', NULL, '2023-03-18 15:10:04', '2023-03-18 15:10:21'),
(6, 'wanni', 'wanni11@gmail.com', NULL, '$2y$10$eDJ0gTF3AUyos5Epverw7uxO91btVBGE1LtbeLZ/4jFVtXics.QRK', NULL, '2023-03-20 17:24:06', '2023-03-20 17:24:06'),
(7, 'Ayesha Khan', 'Ayesha33@gmail.com', NULL, '$2y$10$VDzBTS6HhonG1t9NgkCFeOk9F8R6Hekh62YSEK597zGnykC4Yml6i', NULL, '2023-03-31 09:04:43', '2023-03-31 09:04:43'),
(9, 'urwa', 'urwa2@123GMAIL.COM', NULL, '$2y$10$S.P5SWSl/ER5p6KcWDbTUOXDdDUBY3N5PQ4YtJQrJtbN/x8LXJ8y.', NULL, '2023-04-19 00:04:57', '2023-04-19 00:04:57'),
(10, 'Sarfaraz khan', 'sarafarzkhan44@gmail.com', NULL, '$2y$10$49xGZf0b282F/9Zth5PgZ.Hc2XTzbwuL1FBoUYrU/YebdPeLH479a', NULL, '2023-04-21 01:40:05', '2023-04-21 01:40:05'),
(11, 'mifra', 'mifra@gmail.com', NULL, '$2y$10$k6wIJoS8un0W2fJWmMNWlu0VFVHV5cfIcS3h7bPYs0vP7OnuU4AtS', NULL, '2023-04-26 15:49:44', '2023-04-26 15:49:44'),
(12, 'Alii', 'Alii@33gmail.com', NULL, '$2y$10$9.i6/9PJ.3jmephADWYyZODam8eAhV5hM4mNu5DLhFhynXHCjEljG', NULL, '2023-04-26 18:05:02', '2023-04-26 18:05:02'),
(13, 'Iram', 'Iram@gmail.com', NULL, '$2y$10$m8RvIncMVnR4.JaHXqaEp.fGhFPexdm.p4/4ikBKPikujGiNrbibS', NULL, '2023-04-27 14:56:16', '2023-04-27 14:56:16'),
(14, 'Ayesha khan', 'Ayesha113@gmail.com', NULL, '$2y$10$Wc5.Q6bnqY3PxnE/.q2SvOfvYVozQlA09j0pWe2fh6JR3DbA/shhW', NULL, '2023-04-27 15:01:10', '2023-04-27 15:01:10'),
(15, 'Ayesha', 'Ayesha3@gmail.com', NULL, '$2y$10$TQaHnECDP84w9TGZuxJOAeQOrk3ba2S3aDul8sX1MfLRmtkveexbm', NULL, '2023-04-27 18:27:26', '2023-04-27 18:27:26'),
(16, 'Ayesha', 'ayeshabukhsh73@gmail.com', NULL, '$2y$10$mm56zSWX8i11jM1RcRC8beATj8JrYcqidw7GwbJbZCrv3tKvq0mR6', NULL, '2023-08-04 22:53:58', '2023-08-04 22:53:58'),
(17, 'Urooj', 'urooj@gmail.com', NULL, '$2y$10$y8J5b.vvi3OSFHwd6GGgGO/KH4n198Y3sssqsPvbJV.U56lVd.RRm', NULL, '2023-08-24 15:50:20', '2023-08-24 15:50:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courieragents`
--
ALTER TABLE `courieragents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courieragents_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_couriers`
--
ALTER TABLE `new_couriers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `new_couriers_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qoutations`
--
ALTER TABLE `qoutations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qoutes`
--
ALTER TABLE `qoutes`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courieragents`
--
ALTER TABLE `courieragents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `new_couriers`
--
ALTER TABLE `new_couriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qoutations`
--
ALTER TABLE `qoutations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qoutes`
--
ALTER TABLE `qoutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
