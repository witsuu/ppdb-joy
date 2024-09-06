-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2024 pada 19.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_peserta`
--

CREATE TABLE `dokumen_peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_akte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumen_peserta`
--

INSERT INTO `dokumen_peserta` (`id`, `foto`, `foto_kk`, `foto_akte`, `user_id`, `created_at`, `updated_at`) VALUES
(4, '1725590190_3680b32f4c6b5c102d62.png', '1725590190_b5494dd3a7ed9824ffb8.png', '1725590190_d285387ff8568b32abf7.png', 2, '2024-09-05 19:36:30', '2024-09-05 19:36:30'),
(5, '1725640604_57b93a52ae9b7e22a3ad.png', '1725640604_58f9023561399b48576c.png', '1725640604_fe269a62c703a61d5034.png', 4, '2024-09-06 09:36:44', '2024-09-06 09:36:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_ayah`
--

CREATE TABLE `informasi_ayah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` bigint(20) NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_ayah`
--

INSERT INTO `informasi_ayah` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `nik`, `pekerjaan`, `pendapatan`, `pendidikan`, `no_hp`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'FARUQI', 'PAMEKASAN', '1856-06-16', 1234567891234567, 'Petani', 1200000, 'SLTA', '085222703300', 2, '2024-09-05 19:36:30', '2024-09-06 08:21:38'),
(6, 'Bapak', 'PAMEKASAN', '1955-06-11', 1234567891234567, 'Pedagang', 5000000, 'SLTA', '085222703300', 4, '2024-09-06 09:36:44', '2024-09-06 09:51:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_ibu`
--

CREATE TABLE `informasi_ibu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik` bigint(20) NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_ibu`
--

INSERT INTO `informasi_ibu` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `nik`, `pekerjaan`, `pendapatan`, `pendidikan`, `no_hp`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'SULASTRI', 'PAMEKASAN', '1865-05-16', 1234567891234567, 'Wiraswasta', 1200000, 'SLTA', '085222703300', 2, '2024-09-05 19:36:30', '2024-09-06 08:21:38'),
(6, 'Ibu', 'PAMEKASAN', '1968-03-12', 1234567891234567, 'Wiraswasta', 4300000, 'SLTA', '085222703300', 4, '2024-09-06 09:36:44', '2024-09-06 09:51:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_peserta`
--

CREATE TABLE `informasi_peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `status` enum('wait','reject','accepted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wait',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_peserta`
--

INSERT INTO `informasi_peserta` (`id`, `nama_panggilan`, `nik`, `no_kk`, `jenjang_pendidikan`, `alamat_lengkap`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `anak_ke`, `jumlah_anak`, `no_hp`, `status`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'Witsudi', 1234567891234567, 1234567891234567, 'MTS', 'DSN TACEMPAH', 'PAMEKASAN', '1999-03-14', 'SDN PLAKPAK V', 3, 4, 82333537366, 'accepted', 'Foto KK dan Akte tidak jelas', 2, '2024-09-05 19:36:30', '2024-09-06 09:07:47'),
(7, 'Uly', 1234567891234567, 1234567891234567, 'MTS', 'Pamekasan', 'Pamekasan', '2001-09-11', 'SDN 1', 2, 3, 85222703300, 'wait', NULL, 4, '2024-09-06 09:36:44', '2024-09-06 09:51:11');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_09_05_231210_create_users_table', 2),
(3, '2024_09_05_231255_create_informasi_peserta_table', 2),
(4, '2024_09_05_231324_create_informasi_ayah_table', 2),
(5, '2024_09_05_231330_create_informasi_ibu_table', 2),
(7, '2024_09_06_004723_create_dokumen_peserta_table', 3);

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', '$2y$10$8v1/iMHprt/wJVfJN5VC/ue/JtGST6F.bLdSCkE.1MYBgcnOfu83u', 'admin', '2024-09-05 16:41:08', '2024-09-05 16:41:08'),
(2, 'Witsudi Anasrullah', 'witsudi217@gmail.com', '$2y$10$S6hYzTSika3LGZY2TZcWBuYLDRg8WqfGnNMPIguvl0XF2gi8S5L7m', 'user', '2024-09-05 18:34:16', '2024-09-05 18:34:16'),
(4, 'Ulydhatul Ismiyana', 'ulydhatul.ismiayana@gmail.com', '$2y$10$CTtaNe9gw9HFJv1tARyIcuHgbjxnXH6M1JSln4UeP0.Uwz6MTEUg6', 'user', '2024-09-06 03:55:27', '2024-09-06 03:55:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokumen_peserta`
--
ALTER TABLE `dokumen_peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_peserta_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `informasi_ayah`
--
ALTER TABLE `informasi_ayah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_ayah_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `informasi_ibu`
--
ALTER TABLE `informasi_ibu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_ibu_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `informasi_peserta`
--
ALTER TABLE `informasi_peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_peserta_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen_peserta`
--
ALTER TABLE `dokumen_peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `informasi_ayah`
--
ALTER TABLE `informasi_ayah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `informasi_ibu`
--
ALTER TABLE `informasi_ibu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `informasi_peserta`
--
ALTER TABLE `informasi_peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokumen_peserta`
--
ALTER TABLE `dokumen_peserta`
  ADD CONSTRAINT `dokumen_peserta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi_ayah`
--
ALTER TABLE `informasi_ayah`
  ADD CONSTRAINT `informasi_ayah_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi_ibu`
--
ALTER TABLE `informasi_ibu`
  ADD CONSTRAINT `informasi_ibu_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi_peserta`
--
ALTER TABLE `informasi_peserta`
  ADD CONSTRAINT `informasi_peserta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
