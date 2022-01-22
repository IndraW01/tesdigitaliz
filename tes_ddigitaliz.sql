-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 14.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_ddigitaliz`
--

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
(2, '2022_01_22_115044_create_monitorings_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitorings`
--

CREATE TABLE `monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `nama_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `monitorings`
--

INSERT INTO `monitorings` (`id`, `judul`, `project_leader`, `tanggal_mulai`, `tanggal_berakhir`, `nama_client`, `progress`, `created_at`, `updated_at`) VALUES
(2, 'Qui animi ea qui quas et accusantium.', 'Intan Kurniawan', '1988-10-24', '2009-06-24', 'UD Mandasari Pranowo', 66, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(3, 'Iste minima eos sed.', 'Karta Suryatmi', '1986-10-14', '2009-12-26', 'CV Iswahyudi Laksmiwati Tbk', 64, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(4, 'Quas culpa ut id.', 'Artanto Palastri', '2018-05-09', '2019-09-21', 'PT Widiastuti (Persero) Tbk', 84, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(5, 'Blanditiis molestiae odit.', 'Tami Dabukke', '1983-07-11', '1983-03-27', 'CV Firgantoro Wasita', 27, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(6, 'Velit deleniti.', 'Ika Nurdiyanti', '2003-04-18', '1971-05-01', 'PD Permata', 28, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(7, 'Neque porro quisquam iure.', 'Jais Uwais', '2013-03-14', '1986-10-20', 'CV Pertiwi (Persero) Tbk', 82, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(8, 'Sed nisi eum voluptate illo.', 'Narji Prayoga', '1986-09-29', '1977-04-12', 'CV Rahimah Usamah (Persero) Tbk', 4, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(9, 'Ipsa omnis a et beatae.', 'Ani Januar', '1998-11-18', '1988-05-16', 'UD Mustofa Tbk', 63, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(10, 'Suscipit voluptatem vitae labore magnam aut.', 'Jaiman Wastuti', '2003-08-02', '1978-05-05', 'Perum Zulaika Firgantoro', 85, '2022-01-22 04:11:31', '2022-01-22 04:11:31'),
(11, 'Laravel 8', 'Indra', '2022-01-22', '2022-01-29', 'WPU', 70, '2022-01-22 05:56:35', '2022-01-22 06:12:49');

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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monitorings`
--
ALTER TABLE `monitorings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `monitorings`
--
ALTER TABLE `monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
