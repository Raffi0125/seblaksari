-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 04:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_kasir_restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kode_menu` varchar(12) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `status` enum('tersedia','tidak tersedia') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kode_menu`, `nama`, `harga`, `gambar`, `kategori`, `status`) VALUES
(0, 'MN51', 'Seblak Original', 10000, 'seblak biasa.jpg', 'Makanan', 'tersedia'),
(1, 'MN01', 'Seblak Sosis Ceker', 12000, 'seblak sosis ceker.jpeg', 'Makanan', 'tersedia'),
(2, 'MN02', 'Seblak Sosis Siomay', 12000, 'seblak sosis siomay2.jpg', 'Makanan', 'tersedia'),
(3, 'MN03', 'Seblak Sosis Telur Puyuh', 12000, 'seblak telur puyuh (1).jpg', 'Makanan', 'tersedia'),
(4, 'MN04', 'Seblak Sosis Ceker Puyuh', 17000, 'seblak sosis ceker telur puyuh.jpeg', 'Makanan', 'tersedia'),
(5, 'MN05', 'Seblak Pentol Jumbo', 12000, 'seblak pentol jumbo.jpg', 'Makanan', 'tersedia'),
(6, 'MN06', 'Seblak Pentol Jumbo Mini', 10000, 'seblak pentol mini.jpg', 'Makanan', 'tersedia'),
(7, 'MN07', 'Seblak Sosis Seafood', 15000, 'seblak sosis seafood.jpg', 'Makanan', 'tersedia'),
(8, 'MN08', 'Seblak Jamur Enoki', 15000, 'seblak enoki.jpg', 'Makanan', 'tersedia'),
(9, 'MN09', 'Seblak Super Lengkap', 30000, 'seblak super lengkap.jpg', 'Makanan', 'tersedia'),
(10, 'MN10', 'Seblak Sosis Pentol Jumbo', 17000, 'seblak sosis pentol jumbo.jpeg', 'Makanan', 'tersedia'),
(11, 'MN11', 'Dumpling Cheese', 2000, 'dumplingkeju.jpg', 'Topping', 'tersedia'),
(12, 'MN12', 'Dumpling Ayam', 2000, 'dumplingayam.jpeg', 'Topping', 'tersedia'),
(13, 'MN13', 'Crabstik', 2000, 'crabstik.jpg', 'Topping', 'tersedia'),
(14, 'MN14', 'Sosis Bakar', 2000, 'sosis bakar.jpg', 'Topping', 'tersedia'),
(15, 'MN15', 'Siomay', 2000, 'siomay.jpg', 'Topping', 'tersedia'),
(16, 'MN16', 'Skalop', 2000, 'skalop.jpeg', 'Topping', 'tersedia'),
(17, 'MN17', 'Telur Puyuh', 3000, 'telurpuyuh.jpg', 'Topping', 'tersedia'),
(18, 'MN18', 'Otak-otak Ikan', 1000, 'otakotak.jpg', 'Topping', 'tersedia'),
(19, 'MN19', 'Kembang Cumi', 1000, 'kembangcumi.jpg', 'Topping', 'tersedia'),
(20, 'MN20', 'Chikuwa', 1000, 'chikuwa.jpeg', 'Topping', 'tersedia'),
(21, 'MN21', 'Tempura', 1000, 'tempura.jpg', 'Topping', 'tersedia'),
(22, 'MN22', 'Sosis', 1000, 'sosis.jpg', 'Topping', 'tersedia'),
(23, 'MN23', 'Ceker', 1000, 'ceker ayam.jpg', 'Topping', 'tersedia'),
(24, 'MN24', 'Pentol', 1000, 'pentol darsi.jpg', 'Topping', 'tersedia'),
(25, 'MN25', 'Mie', 1000, 'mieh.jpg', 'Topping', 'tersedia'),
(26, 'MN26', 'Sayur', 1000, 'sayut.jpeg', 'Topping', 'tersedia'),
(27, 'MN27', 'Cireng', 1000, 'cirengd.jpg', 'Topping', 'tersedia'),
(28, 'MN28', 'Jamur Enoki', 5000, 'enoki.jpg', 'Topping', 'tersedia'),
(29, 'MN29', 'Pentol Jumbo Mini', 5000, 'pentol jumbomini.jpg', 'Topping', 'tersedia'),
(30, 'MN30', 'Pentol Jumbo', 10000, 'pentol.jumbo.jpg', 'Topping', 'tersedia'),
(31, 'MN31', 'Pop Ice', 3000, 'popice.jpg', 'Minuman', 'tersedia'),
(32, 'MN32', 'Nutrisari', 3000, 'nutrisari.jpg', 'Minuman', 'tersedia'),
(33, 'MN33', 'Marimas', 2000, 'Marimas.jpg', 'Minuman', 'tersedia'),
(34, 'MN34', 'Tea Jus', 2000, 'Teh jus.jpeg', 'Minuman', 'tersedia'),
(35, 'MN35', 'Top Ice', 2000, 'topice.jpg', 'Minuman', ''),
(36, 'MN36', 'Es Susu', 4000, 'susus.png', 'Minuman', ''),
(37, 'MN37', 'Kopi', 4000, 'kopi.jpeg', 'Minuman', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `kode_pesanan` varchar(12) NOT NULL,
  `kode_menu` varchar(12) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `kode_pesanan`, `kode_menu`, `qty`) VALUES
(58, '679048dfc804', 'MN31', 1),
(59, '679048dfc804', 'MN08', 1),
(60, '679054d74e74', 'MN51', 3),
(61, '679054d74e74', 'MN37', 1),
(62, '679054d74e74', 'MN36', 2),
(63, '67905510eb0b', 'MN51', 2),
(64, '67905510eb0b', 'MN37', 1),
(65, '67905510eb0b', 'MN36', 4),
(66, '67905fc06359', 'MN51', 2),
(67, '679060821f34', 'MN29', 80);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_pesanan` varchar(12) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_pesanan`, `nama_pelanggan`, `waktu`) VALUES
(27, '679048dfc804', 'wachid', '2025-01-22 08:24:47'),
(28, '679054d74e74', 'Wahyu', '2025-01-22 09:15:51'),
(29, '67905510eb0b', 'Wahyu', '2025-01-22 09:16:48'),
(30, '67905fc06359', 'neysa', '2025-01-22 10:02:24'),
(31, '679060821f34', 'oke', '2025-01-22 10:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'rendi12', '69c796f5bbd1339f3ba3e18ce54fcc63'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'bambang', 'a9711cbb2e3c2d5fc97a63e45bbe5076'),
(5, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f'),
(6, 'user2', '7e58d63b60197ceb55a1c487989a3720');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
