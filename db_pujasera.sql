-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 05:54 PM
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
-- Database: `db_pujasera`
--

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
(3, '2020_01_15_201837_create_table_user', 1),
(4, '2020_01_16_002204_create_tb_toko', 2),
(5, '2020_01_24_164402_tb_item', 3),
(6, '2020_01_28_175136_create_table_user', 4),
(7, '2020_01_28_191112_create_tb_pemesanan', 5);

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
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id_item` int(10) UNSIGNED NOT NULL,
  `id_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id_item`, `id_toko`, `nama_item`, `harga_item`, `ket_item`, `created_at`, `updated_at`) VALUES
(4, '4', 'Ayam Goreng', '8500', 'Makanan', '2020-01-24 10:24:25', '2020-01-24 10:24:25'),
(6, '4', 'Chizza', '15000', 'Makanan', '2020-01-28 08:57:26', '2020-01-28 08:57:26'),
(7, '4', 'Smokey Grilled Chicken', '12000', 'Makanan', '2020-01-28 08:59:40', '2020-01-28 08:59:40'),
(8, '4', 'Chicken Zingger', '20000', 'Makanan', '2020-01-28 09:00:19', '2020-01-28 09:00:19'),
(9, '4', 'Vegan Zinger', '19000', 'Makanan', '2020-01-28 09:00:37', '2020-01-28 09:00:37'),
(10, '4', 'Boneless Strips', '15000', 'Makanan', '2020-01-28 09:01:03', '2020-01-28 09:01:03'),
(11, '4', 'Full Box', '65000', 'Makanan', '2020-01-28 09:01:26', '2020-01-28 09:01:26'),
(12, '4', 'Burger Box', '37000', 'Makanan', '2020-01-28 09:01:50', '2020-01-28 09:01:50'),
(13, '4', 'Signature Box', '37000', 'Makanan', '2020-01-28 09:02:08', '2020-01-28 09:02:08'),
(14, '4', 'Chicken Box', '36000', 'Makanan', '2020-01-28 09:02:49', '2020-01-28 09:02:49'),
(15, '4', 'Salad', '15000', 'Makanan', '2020-01-28 09:06:01', '2020-01-28 09:06:01'),
(16, '4', 'Jumbo Bucket', '65000', 'Makanan', '2020-01-28 09:06:32', '2020-01-28 09:06:32'),
(18, '4', 'Burger', '10000', 'Makanan', '2020-01-28 12:04:13', '2020-01-28 12:04:13'),
(19, '3', 'McFlurry', '11000', 'Minuman', '2020-01-28 18:35:57', '2020-01-28 18:35:57'),
(20, '3', 'Apple Pie', '9000', 'Makanan', '2020-01-28 18:36:06', '2020-01-28 18:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(10) UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status_pemesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `nama_pemesan`, `id_user`, `id_toko`, `id_item`, `jumlah`, `status_pemesanan`, `created_at`, `updated_at`) VALUES
(1, 'Feni', '1', '3', '20', 2, 'Belum Dibayar', '2020-01-29 07:33:42', '2020-01-29 07:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id_toko` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id_toko`, `id_user`, `nama_toko`, `no_toko`, `created_at`, `updated_at`) VALUES
(3, '2', 'McD', '1', '2020-01-28 11:58:19', '2020-01-28 11:58:19'),
(4, '3', 'KFC', '2', '2020-01-28 12:05:40', '2020-01-28 12:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_user` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_user` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` enum('Super Admin','Admin','Pemilik Toko','Kasir','Penjaga Toko') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `jk_user`, `alamat_user`, `no_user`, `status_user`, `keterangan_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farhan', 'Faruzaan', '$2y$10$mtOiTiLEJxXSrm5EUUigluUCCGA7QNBw.RwoTBYaQ8xpVmsoWUSn2', 'L', 'Cianjur', '082218334321', 'Super Admin', 'Super Admin', NULL, '2020-01-28 11:03:33', '2020-01-28 11:03:33'),
(2, 'Siti', 'Siti112', 'admin', 'P', 'CJR', '084444556698', 'Pemilik Toko', 'Pemilik Toko', NULL, '2020-01-28 11:31:40', '2020-01-28 11:31:40'),
(3, 'Alex', 'Alex', '123', 'L', 'JL. Kapten Musa, no.15, RT 004, RW 010', '084556569874', 'Pemilik Toko', 'Pemilik Toko', NULL, '2020-01-28 12:00:05', '2020-01-28 12:00:05'),
(4, 'Ilham', 'Ilham', '123', 'L', 'JL. Kapten Musa, no.15, RT 004, RW 010', '084444556988', 'Penjaga Toko', 'Penjaga Toko KFC', NULL, '2020-01-28 12:08:17', '2020-01-28 12:08:17'),
(8, 'Ai', 'Ai', '123', 'P', 'JL. Kapten Musa, no.15, RT 004, RW 010', '40849640', 'Kasir', 'Kasir', NULL, '2020-01-28 12:28:17', '2020-01-28 12:28:17');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id_item` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id_toko` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
