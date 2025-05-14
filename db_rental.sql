-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2025 at 03:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`, `foto`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `nama_customer` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `jns_kelamin` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `no_ktp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `username`, `password`, `email`, `alamat`, `jns_kelamin`, `no_tlp`, `no_ktp`, `foto`, `role_id`) VALUES
(14, 'Arif', 'arif', '827ccb0eea8a706c4c34a16891f84e7b', 'arif@gmail.com', 'kalijambe', 'Laki-laki', '08123129834', '2102100201213412', '', 0),
(21, 'Ahmad', 'Dia', '827ccb0eea8a706c4c34a16891f84e7b', 'Ahmad@gmail.com', 'Sragen Pertengahan', 'Laki-laki', '085612181243', '21143254564342', 'Deku-1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int NOT NULL,
  `nama_mobil` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_mobil` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `kapasitas_mobil` int NOT NULL,
  `harga_mobil` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `warna_mobil` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `bbm_mobil` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `plat_no_mobil` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `ac_mobil` int NOT NULL,
  `media_player_mobil` int NOT NULL,
  `denda_mobil` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_mobil` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status_mobil` int NOT NULL,
  `created_mobil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `tahun_mobil`, `kapasitas_mobil`, `harga_mobil`, `warna_mobil`, `bbm_mobil`, `plat_no_mobil`, `ac_mobil`, `media_player_mobil`, `denda_mobil`, `foto_mobil`, `status_mobil`, `created_mobil`) VALUES
(4, 'Avanza', '2020', 6, '400000', 'Hitam', 'Pertalite', 'AD 0000 BG', 0, 1, '100000', '2022_Toyota_Avanza_1_5_G_Toyota_Safety_Sense_W101RE_(20220403).jpg', 1, '2023-01-02'),
(7, 'Crv', '2018', 6, '500000', 'Hitam', 'Pertalite', 'AD 5001 UE', 1, 1, '100000', 'ukuran-mobil-crv.jpg', 1, '2023-01-04'),
(8, 'Honda Jazz', '2019', 4, '350000', 'Kuning', 'Pertalite', 'B 1147 BE', 1, 1, '100000', 'jazz-kuning.jpg', 1, '2023-01-04'),
(9, 'New Yaris Variants', '2022', 5, '600000', 'Kuning', 'Pertamax', 'AD 6458 KE', 1, 1, '200000', 'yaris_kuning.jpg', 1, '2023-01-09'),
(10, ' PAJERO SPORT ', '2021', 7, '1000000', 'putih', 'Pertamina Dex', 'AD 6487 HE', 1, 1, '500000', 'parejo.jpg', 1, '2023-01-09'),
(11, 'Xpander Cross', '2021', 7, '450000', 'putih', 'Pertamax', 'K 2755 RW', 1, 1, '100000', 'xpander_cross.jpg', 1, '2023-01-09'),
(12, 'Xenia', '2022', 7, '480000', 'Putih', 'Pertamax', 'AD 4002 DL', 1, 1, '150000', 'Warna-Daihatsu-All-Xenia-2022-Gen-3.jpg', 1, '2023-01-09'),
(13, 'Kijang Innova', '2020', 6, '350000', 'Silver', 'Pertalite', 'AD 2843 BE', 1, 1, '100000', '21102020_new-innova.jpg', 1, '2023-01-09'),
(14, 'Agya', '2021', 4, '300000', 'Kuning', 'Pertamax', 'B 1957 SGK', 1, 1, '120000', 'whatsapp-image-2021-12-15-at-07-20211215070709.jpeg', 1, '2023-01-09'),
(15, 'Brio', '2022', 4, '350000', 'Kuning', 'Pertamax', 'H 1405 CQ', 1, 1, '100000', 'BRIO.jpg', 1, '2023-01-09'),
(16, 'Ayla', '2022', 4, '350000', 'Merah', 'Pertalite', 'AD 6796 MM', 1, 1, '120000', '5-fakta-yang-harus-diketahui-pemburu-mobil-daihatsu-ayla-bekas.jpg', 1, '2023-01-09'),
(17, 'City', '2020', 4, '300000', 'Hitam', 'Pertalite', 'AD 5443 RF', 1, 1, '100000', '9158-honda-all-new-city-2015-2016-10-26-08-50-06.jpg', 1, '2023-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_mobil` int NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga_mobil` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `denda_mobil` int NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status_rental` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `bukti_pembayaran` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `status_pembayaran` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tgl_rental`, `tgl_kembali`, `harga_mobil`, `denda_mobil`, `tgl_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(87, 14, 11, '2023-01-11', '2023-01-12', '450000', 100000, '2023-01-13', 'Kembali', 'Selesai', '', 1),
(88, 14, 8, '2023-01-11', '2023-01-12', '350000', 100000, '2023-01-13', 'Kembali', 'Selesai', '', 1),
(90, 14, 9, '2023-01-18', '2023-01-19', '600000', 200000, '2023-01-13', 'Kembali', 'Selesai', '', 1),
(92, 14, 4, '2023-01-12', '2023-01-13', '400000', 100000, '2023-01-13', 'Kembali', 'Selesai', '', 1),
(94, 14, 4, '2023-01-12', '2023-01-13', '400000', 100000, '2023-01-13', 'Kembali', 'Selesai', '3447d6c8192dfab6c96d9316a185b9211eaef351df8184cd5cad15f3bc8d2d006727.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
