-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 08.26
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensipegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bukti_absensi` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `user_id`, `bukti_absensi`, `status`, `created_at`, `updated_at`) VALUES
(16, 8, 'belum', 'hadir', '2020-12-06 07:22:10', '2020-12-13 14:22:10'),
(17, 9, 'belum', 'hadir', '2020-12-06 07:22:10', '2020-12-13 14:22:10'),
(18, 10, 'belum', 'hadir', '2020-12-06 07:22:10', '2020-12-13 14:22:10'),
(19, 8, 'belum', 'hadir', '2020-12-07 07:22:57', '2020-12-13 14:22:57'),
(20, 9, 'belum', 'alfa', '2020-12-07 07:22:57', '2020-12-13 14:22:57'),
(21, 10, 'belum', 'alfa', '2020-12-07 07:22:57', '2020-12-13 14:22:57'),
(22, 8, 'belum', 'alfa', '2020-12-08 07:23:32', '2020-12-13 14:23:32'),
(23, 9, 'belum', 'hadir', '2020-12-08 07:23:32', '2020-12-13 14:23:32'),
(24, 10, 'belum', 'alfa', '2020-12-08 07:23:32', '2020-12-13 14:23:32'),
(25, 8, 'belum', 'hadir', '2020-12-09 07:24:30', '2020-12-13 14:24:30'),
(26, 9, 'belum', 'alfa', '2020-12-09 07:24:30', '2020-12-13 14:24:30'),
(27, 10, 'belum', 'hadir', '2020-12-09 07:24:30', '2020-12-13 14:24:30'),
(28, 8, 'belum', 'alfa', '2020-12-10 07:25:01', '2020-12-13 14:25:01'),
(29, 9, 'belum', 'hadir', '2020-12-10 07:25:01', '2020-12-13 14:25:01'),
(30, 10, 'belum', 'alfa', '2020-12-10 07:25:01', '2020-12-13 14:25:01'),
(31, 8, 'belum', 'hadir', '2020-12-11 07:25:27', '2020-12-13 14:25:27'),
(32, 9, 'belum', 'alfa', '2020-12-11 07:25:27', '2020-12-13 14:25:27'),
(33, 10, 'belum', 'hadir', '2020-12-11 07:25:27', '2020-12-13 14:25:27'),
(34, 8, 'dota 1.jpg', 'hadir', '2020-12-13 12:08:55', '2020-12-13 19:11:29'),
(35, 9, 'dota 3.jpg', 'hadir', '2020-12-13 12:08:55', '2020-12-13 19:18:35'),
(36, 10, 'belum', 'alfa', '2020-12-13 12:08:55', '2020-12-13 19:08:55'),
(37, 8, 'dota 5.jpg', 'hadir', '2020-12-14 12:53:00', '2020-12-14 20:10:22'),
(38, 9, 'belum', 'hadir', '2020-12-14 12:49:25', '2020-12-14 20:12:04'),
(39, 10, 'belum', 'alfa', '2020-12-14 12:49:25', '2020-12-14 19:49:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id`, `user_id`, `tanggal`, `tanggal_selesai`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(8, 8, '2020-12-01', NULL, 'Ada urusan keluarga', 'sukses', '2020-12-13 07:37:44', '2020-12-13 14:41:55'),
(9, 8, '2020-12-03', NULL, 'Ada urusan untuk memenuhi kebutuhan', 'sukses', '2020-12-13 07:38:18', '2020-12-13 14:41:57'),
(10, 8, '2020-12-06', NULL, 'Menemani Istri Lahiran', 'sukses', '2020-12-13 07:38:48', '2020-12-13 14:42:00'),
(11, 8, '2020-12-07', NULL, 'Mengantar ibu ke rumah sakit', 'sukses', '2020-12-13 07:39:16', '2020-12-13 14:42:02'),
(12, 8, '2020-12-08', NULL, 'Membantu orang tua', 'sukses', '2020-12-13 07:40:50', '2020-12-13 14:42:03'),
(13, 8, '2020-12-09', NULL, 'Pindahan rumah', 'sukses', '2020-12-13 07:41:15', '2020-12-13 14:42:05'),
(14, 8, '2020-12-10', NULL, 'Jalan Jalan liburan ke bangkok', 'sukses', '2020-12-13 07:41:41', '2020-12-13 14:42:07'),
(16, 9, '2020-12-26', NULL, 'Mengantar Keluarga', 'sukses', '2020-12-13 12:13:53', '2020-12-13 19:15:01'),
(17, 9, '2020-12-17', NULL, 'Jalan Jalan', 'gagal', '2020-12-13 12:17:06', '2020-12-13 19:17:21'),
(18, 9, '2021-01-30', NULL, 'Umroh', 'sukses', '2020-12-14 12:57:30', '2020-12-14 19:58:38'),
(19, 9, '2020-12-22', '2020-12-17', 'Mau Ke Dunia Lain', 'sukses', '2020-12-14 13:58:58', '2020-12-14 21:02:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `no_telpon`, `no_pegawai`, `jabatan`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'admin', 'admin', 'admin@gmail.com', '081221504444', '991928827', 'administrasi', NULL, '$2y$10$RDnCFemhmCNl5NpjlxCWT./Ji3vErwtCq/cfMWRvhq6DuhlzoWwie', NULL, '2020-12-13 07:13:55', '2020-12-13 07:13:55'),
(8, 'pegawai', 'pegawai1', 'pegawai1@gmail.com', '082121309092', '98998821', 'staff', NULL, '$2y$10$RQlZ9zCKHHaidEzdenNW2un17OW7OWL4viNmHc.StrJN4vjQ5bXVS', 'YGtfSd0eEhYdMlxrJl9XrKKxRSnaL1DvUdgiA56DhQZHW6vWLP1SEl8k1Q2B', '2020-12-13 07:15:21', '2020-12-14 13:51:50'),
(9, 'pegawai', 'pegawai2', 'pegawai2@gmail.com', '09882788172', '89882991', 'Pilih Jabatan Anda', NULL, '$2y$10$JU9HkqVrSbR/VzYtVQak0uvSatgJqJ.s/Pz4xZ/UQM1f1D6LMCF4S', NULL, '2020-12-13 07:16:47', '2020-12-13 07:16:47'),
(10, 'pegawai', 'pegawai3', 'pegawai3@gmail.com', '0829918821', '98968996', 'satpam', NULL, '$2y$10$1tcxtBXq3iGVTah5WT/13Ojr48xnI.5D/ix01Z7qPRoSret9McIhS', NULL, '2020-12-13 07:18:01', '2020-12-13 07:18:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
