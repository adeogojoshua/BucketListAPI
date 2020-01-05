-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 12:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucketlistapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bucketlistitems`
--

CREATE TABLE `bucketlistitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bucket_list_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bucketlistitems`
--

INSERT INTO `bucketlistitems` (`id`, `bucket_list_id`, `name`, `done`, `created_at`, `updated_at`) VALUES
(6, 2, ' Engage in an extreme sport like wakeboarding, ice yachting and snow boarding.', 'False', '2020-01-01 12:29:45', '2020-01-01 12:29:45'),
(7, 2, 'Take part in a marathon or triathlon', 'False', '2020-01-01 12:29:45', '2020-01-01 12:29:45'),
(8, 2, 'Fly in a helicopter', 'False', '2020-01-01 12:29:45', '2020-01-01 12:29:45'),
(9, 2, 'Master the art of Kung Fu.', 'False', '2020-01-01 12:29:45', '2020-01-01 12:29:45'),
(10, 2, 'Bungee jump', 'False', '2020-01-01 12:29:45', '2020-01-01 12:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `bucketlists`
--

CREATE TABLE `bucketlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bucketlists`
--

INSERT INTO `bucketlists` (`id`, `name`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'Sports & Special Interests', 1, '2020-01-04 20:22:53', '2020-01-04 20:22:53'),
(4, 'Charity', 1, '2020-01-04 20:22:53', '2020-01-04 20:22:53'),
(6, 'Travel', 1, '2020-01-04 21:09:11', '2020-01-04 21:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_01_120843_create_bucketlists_table', 1),
(4, '2020_01_01_121025_create_bucketlistitems_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2020_01_02_231443_add_api_token_to_users_table', 3),
(7, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(8, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(9, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(10, '2016_06_01_000004_create_oauth_clients_table', 4),
(11, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0cef2ef4e67cff52ed3c6bc407af9b329973fec43b4502256ec0a9b2319acda7d4f63f05f6c86741', 1, 1, 'BucketListApi', '[]', 0, '2020-01-04 18:06:41', '2020-01-04 18:06:41', '2021-01-04 19:06:41'),
('17f068999e42b89f0b7f7444117aefc13ccae1b9ad78a1ec92e836bc3c4f60a6ac31e92fed65858f', 1, 2, NULL, '[]', 0, '2020-01-04 17:24:41', '2020-01-04 17:24:41', '2021-01-04 18:24:41'),
('9115101c13611d813b7e2f36db9829a12896a3d557d3ac0bca5dc8ca19172db62c2218b0d1f46241', 2, 1, 'register', '[]', 0, '2020-01-04 17:45:07', '2020-01-04 17:45:07', '2021-01-04 18:45:07'),
('ab3dabbf280dac235d77c911b40ab537ce6b167613ac5094253c592c9c8d48cddb60b18cb1544545', 1, 1, 'BucketListApi', '[]', 0, '2020-01-04 18:26:42', '2020-01-04 18:26:42', '2021-01-04 19:26:42'),
('b2321b7d7d1d5377b3ae52e71ad595236158968bc777743d878fcc4ba81ea1c406c8d7865016b3dd', 3, 1, 'BucketListApi', '[]', 0, '2020-01-04 18:24:38', '2020-01-04 18:24:38', '2021-01-04 19:24:38'),
('c9c3fb4bda764a4c0d887f36cf93bf2c0feba4f80d1b536c7703d90c0742541cbee22ce9cbbb8315', 1, 1, 'BucketListApi', '[]', 0, '2020-01-04 18:26:11', '2020-01-04 18:26:11', '2021-01-04 19:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'BucketListAPI Personal Access Client', 'iNiIYX87az3TjzmHuw5VXGsKDAqm4q3y1JTWIyNy', 'http://localhost', 1, 0, 0, '2020-01-02 22:32:11', '2020-01-02 22:32:11'),
(2, NULL, 'BucketListAPI Password Grant Client', 'D4Noi3bEAW267grXgMzAIoCQcQPH5BqkGZAwl9U5', 'http://localhost', 0, 1, 0, '2020-01-02 22:32:12', '2020-01-02 22:32:12'),
(3, 3, 'Frontend', 'w2M0XsXOz3IxZydoWd6sd5rYlUHeKQEztRszW2i8', 'http://localhost/auth/callback', 0, 0, 0, '2020-01-04 17:33:00', '2020-01-04 17:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-01-02 22:32:12', '2020-01-02 22:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('45cff8af51aa2ada9a4cdbbdcd2387acd303091276ffe48b15976d3a20e46c06a6a7586553c80591', '17f068999e42b89f0b7f7444117aefc13ccae1b9ad78a1ec92e836bc3c4f60a6ac31e92fed65858f', 0, '2021-01-04 18:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adeogo', 'adeogojoshua10@gmail.com', NULL, '$2y$10$StvrWgBD1NcLkezxs.oj/uz8EBpN8.nzjdGnMH3ADFTMxLUiUyZui', NULL, 'WG8ce0LdMtR98fcHaHHdvzOlsn4C9NR6ECGmL5ZhGaW7vG0tIUyHud4dyM6G', '2020-01-01 22:28:30', '2020-01-01 22:28:30'),
(3, 'adeogo2', 'adeogo@gmail.com', NULL, '$2y$10$okyyaZSzkXji6hL55SHQhOyaCn5f/BuFiW9Dcwjg1hCo5Tr1Wxbmi', NULL, NULL, '2020-01-04 18:24:38', '2020-01-04 18:24:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bucketlistitems`
--
ALTER TABLE `bucketlistitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bucketlists`
--
ALTER TABLE `bucketlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bucketlistitems`
--
ALTER TABLE `bucketlistitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bucketlists`
--
ALTER TABLE `bucketlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
