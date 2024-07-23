-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2024 pada 02.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.27

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
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `category_id`, `user_id`, `title`, `slug`, `excerpt`, `body`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(19, 1, 16, 'Rapat Koordinasi Teknis Sub Urusan Pelayaran', 'rapat-koordinasi-teknis-sub-urusan-pelayaran', 'Untuk bahan materi dapat diunduh di link berikut :KLIK DISINI', '<h1><strong>Untuk bahan materi dapat diunduh di link berikut :</strong></h1><div><br><a href=\"https://drive.google.com/file/d/1uOi-awAMZ_2FrKtZShhVof_6tRiU3S5a/view?usp=sharing\">KLIK DISINI</a></div>', 'post-image/banner.jpg', NULL, '2024-02-20 07:09:33', '2024-02-20 07:16:02'),
(20, 1, 16, 'Rapat Koordinasi Teknis Sub Urusan Pelayarann', 'rapat-koordinasi-teknis-sub-urusan-pelayarann', 'Untuk Bahan Paparan Dapat Diunduh link berikut :KLIK DISINI', '<h1>Untuk Bahan Paparan Dapat Diunduh link berikut :</h1><div><br><a href=\"https://drive.google.com/file/d/1uOi-awAMZ_2FrKtZShhVof_6tRiU3S5a/view?usp=sharing\"><strong>KLIK DISINI</strong></a></div>', 'post-image/banner.jpg', NULL, '2024-02-20 07:12:57', '2024-02-20 07:22:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan Internal', 'kegiatan-internal', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(2, 'Berita', 'berita', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(3, 'Infografis', 'infografis', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(4, 'Pengumuman', 'pengumuman', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(5, 'Artikel', 'artikel', '2023-10-15 21:55:41', '2023-10-15 21:55:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_09_145806_create_beritas_table', 1),
(6, '2023_10_10_054102_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ratna Nurdiyanti', 'rnovitasari', 'hardi22@example.net', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yYp9JP9GsI', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(2, 'Paris Hasanah', 'ifa74', 'rlazuardi@example.com', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '82hmgu3Fvb', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(3, 'Elvina Purwanti', 'hasanah.jamal', 'sakura81@example.com', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4Vz9Y7SMUo', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(4, 'Rusman Sidiq Lazuardi', 'ikhsan.sinaga', 'hasan00@example.org', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qxK3aKrMn9', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(5, 'Tedi Manah Uwais M.Kom.', 'elma34', 'bagus44@example.net', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8PCvVu2qJT', '2023-10-15 21:55:41', '2023-10-15 21:55:41'),
(12, 'alsknalsd', 'laksnlaknsd', 'alksnalksn@gmail.com', 0, '$2y$10$KRLbfhl3wC50nQNdjyCnj.1Sm9dQaV4Ul9dX.WaYgRjZoXhfS/d.O', NULL, '2023-10-18 23:43:06', '2023-10-18 23:43:06'),
(13, 's.,dfn.s,df', 'lkajhfksjehf', 'kjsfbskjdbf@gmail.com', 0, '$2y$10$mR4pfBQuaKgxwXudlQLrHOaAijuVKAXK6NPkKVdgwlH3pnMor48Uu', NULL, '2023-10-18 23:44:54', '2023-10-18 23:44:54'),
(14, 'lshckjsh', 'sljkdbnfksjbdf', 'kajsd@gmail.com', 0, '$2y$10$AU7TSbOxzQYBsJqhMoEqueVo1vFrOYyXoI2VIQy90l.J01BOn52HO', NULL, '2023-10-18 23:47:15', '2023-10-18 23:47:15'),
(15, 'admin', 'admin1', 'admin@gmail.com', 0, '$2y$10$MYsIG8VCeEFPGDiOKhLlZO4uggJ2u2zzFqgJt.SOqey/7LyNVfy4q', NULL, '2023-10-19 01:27:49', '2023-10-19 01:27:49'),
(16, 'UPTD PPPPL', 'uptdpppl', 'admin2@gmail.com', 0, '$2y$10$bxgxRzS96H8OjgIpI3k.a.NFYjtggzOM.uKD2j2UyvLOHANPxZTOa', NULL, '2023-10-24 19:47:27', '2023-10-24 19:47:27'),
(17, 'cirebon', 'cirebon', 'cirebon@gmail.com', 0, '$2y$10$OVPHlhuNKxh5s0cyXYsMP.Yx0X2szgCPYr/lUjnlhafHg0/YQM.Kq', NULL, '2023-11-30 01:05:48', '2023-11-30 01:05:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
