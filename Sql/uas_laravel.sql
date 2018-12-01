-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2018 pada 01.54
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `gudang_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `gudang_id`, `nama`, `berat`, `created_at`, `updated_at`) VALUES
(1, 4, 'Pensil', 100, '2018-11-30 17:33:28', '2018-11-30 17:33:28'),
(2, 2, 'Spidol', 200, '2018-11-30 17:33:40', '2018-11-30 17:33:40'),
(3, 2, 'Penghapus Papan Tulis', 25, '2018-11-30 17:34:02', '2018-11-30 17:34:02'),
(4, 4, 'Penghapus', 50, '2018-11-30 17:34:18', '2018-11-30 17:34:18'),
(5, 2, 'Penggaris Papan Tulis', 25, '2018-11-30 17:34:56', '2018-11-30 17:34:56'),
(6, 4, 'Penggaris', 20, '2018-11-30 17:35:26', '2018-11-30 17:35:26'),
(7, 2, 'Proyektor', 5, '2018-11-30 17:36:03', '2018-11-30 17:36:03'),
(8, 4, 'Pulpen', 100, '2018-11-30 17:36:19', '2018-11-30 17:36:19'),
(9, 3, 'Panci', 2, '2018-11-30 17:36:31', '2018-11-30 17:36:31'),
(10, 3, 'Spatula', 1, '2018-11-30 17:36:41', '2018-11-30 17:36:41'),
(11, 3, 'Baskom', 2, '2018-11-30 17:37:10', '2018-11-30 17:37:10'),
(12, 3, 'Sendok', 10, '2018-11-30 17:37:32', '2018-11-30 17:37:32'),
(13, 5, 'Folio', 100, '2018-11-30 17:37:44', '2018-11-30 17:37:44'),
(14, 5, 'Map', 20, '2018-11-30 17:38:04', '2018-11-30 17:38:04'),
(15, 5, 'Stapler', 15, '2018-11-30 17:38:22', '2018-11-30 17:38:22'),
(16, 5, 'Printer', 2, '2018-11-30 17:38:35', '2018-11-30 17:38:35'),
(17, 6, 'Lemari', 1, '2018-11-30 17:38:47', '2018-11-30 17:38:47'),
(18, 6, 'Meja', 1, '2018-11-30 17:38:58', '2018-11-30 17:38:58'),
(19, 6, 'Kursi', 1, '2018-11-30 17:39:09', '2018-11-30 17:39:09'),
(20, 6, 'Papan Tulis', 1, '2018-11-30 17:39:33', '2018-11-30 17:39:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudangs`
--

CREATE TABLE `gudangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kapasitas` int(10) UNSIGNED NOT NULL,
  `pict` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gudangs`
--

INSERT INTO `gudangs` (`id`, `alamat`, `nama`, `kapasitas`, `pict`, `created_at`, `updated_at`) VALUES
(2, 'Smkn 10', 'Gudang sekolah', 100, NULL, '2018-11-30 17:28:33', '2018-11-30 17:28:33'),
(3, 'Jakarta', 'Gudang Rumah', 98, NULL, '2018-11-30 17:28:56', '2018-11-30 17:28:56'),
(4, 'PT.Kantor', 'Gudang Kantor', 129, NULL, '2018-11-30 17:29:38', '2018-11-30 17:29:38'),
(5, 'Dimana Aja', 'Gudang Pemerintah', 523, NULL, '2018-11-30 17:29:59', '2018-11-30 17:29:59'),
(6, 'Mana Saia tau', 'Gudang Barang', 184, NULL, '2018-11-30 17:30:16', '2018-11-30 17:30:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_30_041232_create_gudang', 1),
(4, '2018_11_30_041343_create_barang', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_gudang_id_foreign` (`gudang_id`);

--
-- Indeks untuk tabel `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_gudang_id_foreign` FOREIGN KEY (`gudang_id`) REFERENCES `gudangs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
