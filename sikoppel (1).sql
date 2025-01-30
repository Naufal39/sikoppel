-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 08:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikoppel`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'test', 'test', 'post-images/k1PuMhTWi8Q69UeFYVd7kiTiMa0yPVzcOCRlgCrl.jpg', '&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit expedita itaque cumque t...', '<div>&nbsp;</div><div><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit expedita itaque cumque tempore blanditiis eos voluptate distinctio. Iusto voluptate dolorem, beatae molestias quaerat labore natus consequatur quae quia ducimus?&nbsp;</div>', NULL, '2025-01-30 08:45:52', '2025-01-30 08:45:52'),
(2, 1, 3, 'test2', 'test2', 'post-images/zNL3hxH4SQ15TTGP55nkxt8g3zvtqv5FbHfUGQWt.png', '&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit expedita itaque cumque t...', '<div>&nbsp;</div><div><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad suscipit expedita itaque cumque tempore blanditiis eos voluptate distinctio. Iusto voluptate dolorem, beatae molestias quaerat labore natus consequatur quae quia ducimus?&nbsp;</div>', NULL, '2025-01-30 08:46:32', '2025-01-30 08:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `bulans`
--

CREATE TABLE `bulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bulans`
--

INSERT INTO `bulans` (`id`, `nama_bulan`, `created_at`, `updated_at`) VALUES
(1, 'Januari', NULL, NULL),
(2, 'Februari', NULL, NULL),
(3, 'Maret', NULL, NULL),
(4, 'April', NULL, NULL),
(5, 'Mei', NULL, NULL),
(6, 'Juni', NULL, NULL),
(7, 'Juli', NULL, NULL),
(8, 'Agustus', NULL, NULL),
(9, 'September', NULL, NULL),
(10, 'Oktober', NULL, NULL),
(11, 'November', NULL, NULL),
(12, 'Desember', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan Internal', 'kegiatan-internal', '2025-01-30 05:13:46', NULL),
(2, 'Infografis', 'infografis', '2025-01-30 05:13:46', NULL),
(3, 'Artikel', 'artikel', '2025-01-30 05:14:26', NULL);

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_id` bigint(20) UNSIGNED NOT NULL,
  `bulan_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `tahun_id`, `bulan_id`, `user_id`, `nama_file`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '', '2025-01-30 04:56:16', NULL),
(3, 2, 2, 2, 'post-laporan/nBbs98tq3Kk5lN2PFubZGFp7H4w12BELEce1fn4b.jpg', '2025-01-30 07:13:22', '2025-01-30 07:13:22'),
(4, 1, 1, 2, 'post-laporan/I9atj0aP4tZU4SMF0L8eDyKimWBeFG4FKfpCskaW.html', '2025-01-30 07:17:15', '2025-01-30 07:17:15'),
(5, 1, 3, 2, 'post-laporan/BZCbfSP4G9Yvl5ogf6GPD5yyghMmANvRDyUjeSRY.pdf', '2025-01-30 07:24:50', '2025-01-30 07:24:50'),
(6, 1, 4, 2, 'post-laporan/qifAdvUoFqY1rbF5d0Q74LWve6zcoYhn8yF3X9z0.xlsx', '2025-01-30 07:25:19', '2025-01-30 07:25:19'),
(7, 1, 1, 2, 'post-laporan/8p46MIsRImmsI4uAmcWY8SYBw0MAhkO0uJ3iNARC.xlsx', '2025-01-30 08:38:04', '2025-01-30 08:38:04');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_09_145806_create_beritas_table', 1),
(6, '2023_10_10_054102_create_categories_table', 1),
(7, '2025_01_24_230143_bulan', 1),
(8, '2025_01_24_230402_file_upload', 1),
(9, '2025_01_24_232256_tahun', 1),
(10, '2025_01_25_102407_create_cache_table', 1);

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
-- Table structure for table `tahuns`
--

CREATE TABLE `tahuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahuns`
--

INSERT INTO `tahuns` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 2024, NULL, NULL),
(2, 2025, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_superadmin` tinyint(1) NOT NULL DEFAULT 0,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_comp` tinyint(1) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `is_superadmin`, `is_admin`, `is_comp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'UPTD PPPPL', 'uptdppppl', 'uptdpppplaut@gmail.com', 1, 0, 0, '$2y$10$wIiMsquGMN3w2kshVqmpD.aChj.VjN8pgBX4DPIPOUEjtuI4DH/NK', NULL, '2025-01-25 03:31:44', '2025-01-25 03:31:44'),
(2, 'Perusahaan Satu', 'perusahaan1', 'perusahaan1@gmail.com', 0, 0, 1, '$2y$10$MzB.dnZ88NXEyfa0O.pI3eBcxwIJOHtkMXuDnlAd0PaivfsZYZH6C', NULL, '2025-01-25 07:19:32', '2025-01-25 07:19:32'),
(3, 'admin uptd ppppl', 'adminuptdppppl', 'adminuptdpppplaut@gmail.com', 0, 1, 0, '$2y$10$d0EJ55IT4AhB2KCdXevIq.vdX9VbvMtLhkeYjtR94WXvwNYPWUzsi', NULL, '2025-01-30 08:44:02', '2025-01-30 08:44:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

--
-- Indexes for table `bulans`
--
ALTER TABLE `bulans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bulans_nama_bulan_unique` (`nama_bulan`);

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
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahuns_tahun_unique` (`tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bulans`
--
ALTER TABLE `bulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahuns`
--
ALTER TABLE `tahuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
