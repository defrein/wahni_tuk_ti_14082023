-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 11:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtuk_ti_wahni`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(10) UNSIGNED NOT NULL,
  `nama_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2023-08-14 03:23:08', '2023-08-14 03:23:08');

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
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_06_13_131349_level', 1),
(24, '2023_08_14_103455_create_users_wahni_table', 1),
(25, '2023_08_14_110203_create_surat_masuk_table', 1),
(26, '2023_08_14_111209_create_surat_keluar_table', 1),
(27, '2023_08_14_111322_create_penerbit_table', 1),
(28, '2023_08_14_111336_create_pengesah_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit_wahni`
--

CREATE TABLE `penerbit_wahni` (
  `id_penerbit` int(10) UNSIGNED NOT NULL,
  `nama_penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerbit_wahni`
--

INSERT INTO `penerbit_wahni` (`id_penerbit`, `nama_penerbit`, `created_at`, `updated_at`) VALUES
(1, 'Institusi', '2023-08-14 03:23:08', '2023-08-14 03:23:08'),
(2, 'Jurusan Teknik Sipil', '2023-08-14 03:23:08', '2023-08-14 03:23:08'),
(3, 'Jurusan Teknik Mesin', '2023-08-14 03:23:08', '2023-08-14 03:23:08'),
(4, 'Jurusan Teknik Elektro', '2023-08-14 03:23:08', '2023-08-14 03:23:08'),
(5, 'Jurusan Akuntansi', '2023-08-14 03:23:08', '2023-08-14 03:23:08'),
(6, 'Jurusan Administrasi Bisnis', '2023-08-14 03:23:09', '2023-08-14 03:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `pengesah_wahni`
--

CREATE TABLE `pengesah_wahni` (
  `id_pengesah` int(10) UNSIGNED NOT NULL,
  `nama_pengesah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengesah_wahni`
--

INSERT INTO `pengesah_wahni` (`id_pengesah`, `nama_pengesah`, `created_at`, `updated_at`) VALUES
(1, 'Direktur', '2023-08-14 03:23:09', '2023-08-14 03:23:09'),
(2, 'Ketua Jurusan Teknik Sipil', '2023-08-14 03:23:09', '2023-08-14 03:23:09'),
(3, 'Ketua Jurusan Teknik Mesin', '2023-08-14 03:23:09', '2023-08-14 03:23:09'),
(4, 'Ketua Jurusan Teknik Elektro', '2023-08-14 03:23:09', '2023-08-14 03:23:09'),
(5, 'Ketua Jurusan Akuntansi', '2023-08-14 03:23:09', '2023-08-14 03:23:09'),
(6, 'Ketua Jurusan Administrasi Bisnis', '2023-08-14 03:23:09', '2023-08-14 03:23:09');

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
-- Table structure for table `surat_keluar_wahni`
--

CREATE TABLE `surat_keluar_wahni` (
  `id_surat_keluar` int(10) UNSIGNED NOT NULL,
  `no_surat` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_surat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penerbit` tinyint(4) NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengesah` tinyint(4) NOT NULL,
  `tembusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file-scan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluar_wahni`
--

INSERT INTO `surat_keluar_wahni` (`id_surat_keluar`, `no_surat`, `nama_pengirim`, `waktu`, `lampiran`, `perihal`, `nama_penerima`, `isi_surat`, `id_penerbit`, `tempat`, `id_pengesah`, `tembusan`, `file-scan`, `created_at`, `updated_at`) VALUES
(1, 'LKPL/0023/2023', 'Wahni Adnani', '2023-08-01', 'Tidak Ada', 'LSP Poliban', 'Def Rein', 'Tidak Ada', 1, 'Banjarmasin', 1, 'Ketua Jurusan', NULL, NULL, NULL),
(2, '73291913/121', 'Avian', '2023-08-14', 'saa', 'dd', 'ddd', 'saas', 3, 'Dicoding', 1, 'dada', NULL, '2023-08-14 06:27:16', '2023-08-14 06:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk_wahni`
--

CREATE TABLE `surat_masuk_wahni` (
  `id_surat_masuk` int(10) UNSIGNED NOT NULL,
  `no_surat` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` date NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_surat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penerbit` tinyint(4) NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengesah` tinyint(4) NOT NULL,
  `tembusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file-scan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_masuk_wahni`
--

INSERT INTO `surat_masuk_wahni` (`id_surat_masuk`, `no_surat`, `nama_pengirim`, `waktu`, `lampiran`, `perihal`, `nama_penerima`, `isi_surat`, `id_penerbit`, `tempat`, `id_pengesah`, `tembusan`, `file-scan`, `created_at`, `updated_at`) VALUES
(1, 'LKPL/0023/2023', 'Wahni Adnani', '2023-08-01', 'Tidak Ada', 'LSP Poliban', 'Def Rein', 'Tidak Ada', 1, 'Banjarmasin', 1, 'Ketua Jurusan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_wahni`
--

CREATE TABLE `users_wahni` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_wahni`
--

INSERT INTO `users_wahni` (`id_user`, `username`, `password`, `nama`, `id_level`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$7peQs1nZLiIuHSNmtkOCA.FP7z02vEeSBGeGj7B6/.PMD4IjA//sm', 'Saya Administrator', 1, '2023-08-14 03:23:08', '2023-08-14 03:23:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit_wahni`
--
ALTER TABLE `penerbit_wahni`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengesah_wahni`
--
ALTER TABLE `pengesah_wahni`
  ADD PRIMARY KEY (`id_pengesah`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `surat_keluar_wahni`
--
ALTER TABLE `surat_keluar_wahni`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_masuk_wahni`
--
ALTER TABLE `surat_masuk_wahni`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `users_wahni`
--
ALTER TABLE `users_wahni`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `penerbit_wahni`
--
ALTER TABLE `penerbit_wahni`
  MODIFY `id_penerbit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengesah_wahni`
--
ALTER TABLE `pengesah_wahni`
  MODIFY `id_pengesah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_keluar_wahni`
--
ALTER TABLE `surat_keluar_wahni`
  MODIFY `id_surat_keluar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk_wahni`
--
ALTER TABLE `surat_masuk_wahni`
  MODIFY `id_surat_masuk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_wahni`
--
ALTER TABLE `users_wahni`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
