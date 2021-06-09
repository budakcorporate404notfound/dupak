-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 06:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_dupak`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `lu_administrasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lu_buktifisik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `lu_administrasi`, `lu_buktifisik`, `user_id`, `keterangan`, `created_at`, `updated_at`) VALUES
(7, 'upload link ', 'upload link', 21, 'pengajuan dupak', '2021-05-01 20:47:43', '2021-05-01 20:47:43'),
(10, 'https://www.lipsum.com/feed/html', 'https://www.lipsum.com/feed/html', 19, 'pengajuan dupak', '2021-05-01 21:42:09', '2021-05-01 21:42:09'),
(16, 'test', 'TEST', 19, 'pengajuan dupak', '2021-05-21 01:47:51', '2021-05-21 01:47:51'),
(17, 'test', 'test', 21, 'pengajuan dupak', '2021-05-23 21:36:44', '2021-05-23 21:36:44'),
(18, 'https://www.google.com/search?q=chelsea&oq=chelsea&aqs=chrome..69i57j0i433j69i60l2j5l2j69i61j69i60.934j1j7&sourceid=chrome&ie=UTF-8#sie=t;/m/023fb;2;/m/02_tc;st;fp;1;;', 'https://www.google.com/search?q=chelsea&oq=chelsea&aqs=chrome..69i57j0i433j69i60l2j5l2j69i61j69i60.934j1j7&sourceid=chrome&ie=UTF-8#sie=t;/m/023fb;2;/m/02_tc;st;fp;1;;', 21, 'pengajuan dupak', '2021-05-24 21:28:44', '2021-05-24 21:28:44'),
(19, 'https://www.google.com/search?q=chelsea&oq=chelsea&aqs=chrome..69i57j0i433j69i60l2j5l2j69i61j69i60.934j1j7&sourceid=chrome&ie=UTF-8#sie=t;/m/023fb;2;/m/02_tc;mt;fp;1;;', 'https://www.google.com/search?q=chelsea&oq=chelsea&aqs=chrome..69i57j0i433j69i60l2j5l2j69i61j69i60.934j1j7&sourceid=chrome&ie=UTF-8#sie=t;/m/023fb;2;/m/02_tc;mt;fp;1;;', 21, 'pengajuan dupak', '2021-05-24 21:30:37', '2021-05-24 21:30:37'),
(20, 'https://www.google.com/search?q=chelsea&oq=chelsea&aqs=chrome..69i57j0i433j69i60l2j5l2j69i61j69i60.934j1j7&sourceid=chrome&ie=UTF-8#sie=t;/m/023fb;2;/m/02_tc;pl;fp;1;;', 'https://www.google.com/search?q=chelsea&oq=chelsea&aqs=chrome..69i57j0i433j69i60l2j5l2j69i61j69i60.934j1j7&sourceid=chrome&ie=UTF-8#sie=t;/m/023fb;2;/m/02_tc;pl;fp;1;;', 21, 'pengajuan dupak', '2021-05-25 04:45:01', '2021-05-25 04:45:01');

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
-- Table structure for table `histori_data`
--

CREATE TABLE `histori_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `verifikator` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_verifikator` int(1) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histori_data`
--

INSERT INTO `histori_data` (`id`, `user_id`, `data_id`, `verifikator`, `hasil_verifikator`, `keterangan`, `catatan`, `created_at`, `updated_at`) VALUES
(86, 19, 10, 'kukuh binanto', 1, 'pengecekan berkas', '', '2021-05-27 14:28:43', '2021-05-27 14:28:43'),
(87, 19, 16, 'kukuh binanto', 1, 'pengecekan berkas', '', '2021-05-27 14:28:55', '2021-05-27 14:28:55'),
(99, 21, 7, 'kukuh binanto', 1, 'pengecekan berkas 1', 'data sudah sesuai untuk mengajukan dupak', '2021-06-01 03:59:33', '2021-06-01 03:59:33'),
(100, 21, 17, 'kukuh binanto', 0, 'pengecekan berkas 1', 'link yang dikirim tidak dapat dibuka', '2021-06-01 04:16:44', '2021-06-01 04:16:44'),
(146, 21, 7, 'kukuh binanto', 1, 'pengiriman berkas ke tu', '-', '2021-06-01 06:01:59', '2021-06-01 06:01:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_03_042451_create_data_table', 2),
(5, '2021_04_08_153910_add_image_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@gmail.com', '$2y$10$Zh.pzqwSb5qWx2PqKpd3eeFOG6fkyfU7nfpGxCKxpinUAeH.AJ6ni', '2021-04-02 19:21:47'),
('kukuhbinanto@gmail.com', '$2y$10$sygCeLSnUK/AHP5Fo.iAx.wo.baLBd8gdM8G2jqS3PREfkOGz2fXK', '2021-05-15 22:34:26');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `role` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `role`) VALUES
(19, 'kukuh binanto', 'kukuhbinanto@gmail.com', '2021-04-12 11:10:01', '$2y$10$P61snhVmHprNRAmYbXJdD.6oo7/DGo0bAtq4rCzA7DSwJ7RzLdMLu', '3MBMIFJTRXnydGOmzdcbzn12mBNODkChj9y5aDjpFsp6tqjjWcaNgmPRdEB0', '2021-04-12 11:06:29', '2021-05-20 20:19:52', 'user.png', 'user'),
(21, 'endah sri  mulyani gradini gradini gradini', 'esmgradini@gmail.com', '2021-05-01 01:22:27', '$2y$10$QDtHZJ16HpwP7cWMeNwBUuQuKAGe4hsOvu5jJcgvjKz55b.C54QlW', 'hnprWAxhWrdjohP9ioz1PQjmjMCuLP8oH3v9XoWcwO54vDSO7acPmUEzc0gg', '2021-05-01 01:19:55', '2021-05-20 00:50:04', 'user.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histori_data`
--
ALTER TABLE `histori_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histori_data`
--
ALTER TABLE `histori_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
