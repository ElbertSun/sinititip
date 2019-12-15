-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 06:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinititip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `contact`) VALUES
(1, 'teamsinititip.com', 'teamsinititip', 'Sinititip', ''),
(2, 'tomy.yap01@gmail.com', 'tomyyap', 'Tomy', 's082285399535'),
(3, '', '', '', 's'),
(4, 'richiemarlon12@gmail.com', 'dwiputra01', 'richie marlon', 'sdwiputra01'),
(5, 'semvakgoogle@gmail.com', 'mynameiskendy', 'kendy', 's081278807001'),
(6, 'taktau@gmail.com', 'taktau', 'tak tau', 's0987654321'),
(7, 'testing@gmail.com', 'asd123', 'testing', 's0812627288127'),
(8, 'test@gmail.com', '123', 'kisus', 's0811123456'),
(9, 'tomy@bacot.com', 'asdasd', 'asdasd', 'saasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `email_customer` varchar(100) NOT NULL,
  `password_customer` varchar(50) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `contact` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `email_customer`, `password_customer`, `nama_customer`, `contact`) VALUES
(1, 'tomy.yap01@gmail.com', 'tomy', 'Tomy Yap', '082285399535'),
(2, 'riska@gmail.com', 'riska', 'Riska', '082285399535'),
(8, 'tom@gmail.com', 'tom', 'Tom', 's082285399535'),
(10, '', '', '', 's'),
(11, 'juliantio@gmail.com', 'asdasd', 'juliantio', 's081282828282');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'kundur', 24000),
(2, 'karimun', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_customer`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`) VALUES
(14, 1, 1, '2019-12-03', 220000, '', 0, ''),
(15, 1, 0, '2019-12-03', 220000, '', 0, ''),
(16, 1, 0, '2019-12-03', 100000, '', 0, ''),
(17, 1, 1, '2019-12-03', 44000, '', 0, ''),
(18, 1, 0, '2019-12-03', 20000, '', 0, ''),
(19, 1, 1, '2019-12-03', 44000, '', 0, ''),
(20, 1, 0, '2019-12-03', 20000, '', 0, ''),
(21, 1, 1, '2019-12-03', 44000, '', 0, ''),
(22, 1, 1, '2019-12-04', 44000, '', 0, ''),
(23, 1, 1, '2019-12-04', 44000, '', 0, ''),
(24, 1, 2, '2019-12-04', 38000, '', 0, ''),
(25, 1, 1, '2019-12-04', 44000, '', 0, ''),
(26, 1, 1, '2019-12-04', 44000, '', 0, ''),
(27, 1, 1, '2019-12-05', 144000, '', 0, ''),
(28, 1, 0, '2019-12-05', 120000, '', 0, ''),
(29, 1, 1, '2019-12-05', 144000, '', 0, ''),
(30, 1, 1, '2019-12-05', 34000, 'kundur', 24000, ''),
(31, 1, 1, '2019-12-05', 34000, 'kundur', 24000, 'Permata baloi Blok G1 No 17'),
(32, 1, 1, '2019-12-05', 34000, 'kundur', 24000, 'jl sawang'),
(33, 1, 0, '2019-12-09', 40000, '', 0, ''),
(34, 1, 0, '2019-12-10', 10000, '', 0, ''),
(35, 11, 1, '2019-12-11', 129000, 'kundur', 24000, 'asdasdadsasdads'),
(36, 1, 1, '2019-12-11', 54000, 'kundur', 24000, 'BATAM'),
(37, 1, 0, '2019-12-11', 25000, '', 0, ''),
(38, 1, 1, '2019-12-11', 44000, 'kundur', 24000, 'csd'),
(39, 1, 2, '2019-12-11', 28000, 'karimun', 18000, 'jalann'),
(40, 1, 1, '2019-12-11', 44000, 'kundur', 24000, 'asdasda'),
(41, 1, 1, '2019-12-11', 123480789, 'kundur', 24000, ''),
(42, 1, 0, '2019-12-11', 15000, '', 0, 'dasd'),
(43, 1, 1, '2019-12-11', 44000, 'kundur', 24000, 'knjb'),
(44, 1, 1, '2019-12-11', 36000, 'kundur', 24000, 'qkefakjf'),
(45, 1, 2, '2019-12-11', 18001, 'karimun', 18000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 1, 1, '', 0, 0, 0, 0),
(2, 1, 2, 1, '', 0, 0, 0, 0),
(3, 16, 1, 1, '', 0, 0, 0, 0),
(4, 17, 5, 1, '', 0, 0, 0, 0),
(5, 18, 6, 1, '', 0, 0, 0, 0),
(6, 19, 5, 1, '', 0, 0, 0, 0),
(7, 20, 6, 1, '', 0, 0, 0, 0),
(8, 21, 5, 1, '', 0, 0, 0, 0),
(26, 31, 1, 1, 'Keripik Ubi Pedas', 10000, 1000, 1000, 10000),
(27, 32, 1, 1, 'Keripik Ubi Pedas', 10000, 1000, 1000, 10000),
(28, 33, 5, 2, 'keripik kaca', 20000, 300, 600, 40000),
(29, 34, 1, 1, 'Keripik Ubi Pedas', 10000, 1000, 1000, 10000),
(30, 35, 5, 3, 'Keripik kaca', 20000, 300, 900, 60000),
(31, 35, 12, 1, 'Granola Banana', 15000, 300, 300, 15000),
(32, 35, 9, 1, 'Kerupuk Ikan', 20000, 300, 300, 20000),
(33, 35, 11, 1, 'Basreng', 10000, 100, 100, 10000),
(34, 36, 5, 2, '', 0, 0, 0, 0),
(35, 36, 10, 2, 'Keripik Pangsit', 15000, 200, 400, 30000),
(36, 37, 11, 1, 'Basreng', 10000, 100, 100, 10000),
(37, 37, 10, 1, 'Keripik Pangsit', 15000, 200, 200, 15000),
(38, 38, 9, 1, 'Kerupuk Ikan', 20000, 300, 300, 20000),
(39, 39, 11, 1, 'Basreng', 10000, 100, 100, 10000),
(40, 40, 9, 1, 'Kerupuk Ikan', 20000, 300, 300, 20000),
(41, 41, 21, 1, 'ass', 123456789, 345678, 345678, 123456789),
(42, 42, 10, 1, 'Keripik Pangsit', 15000, 200, 200, 15000),
(43, 43, 9, 1, 'Kerupuk Ikan', 20000, 300, 300, 20000),
(44, 44, 22, 1, 'kosong', 12000, 100, 100, 12000),
(45, 45, 24, 1, 'nobita', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `expired` date NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `expired`, `deskripsi_produk`) VALUES
(9, 'Kerupuk Ikan', 30000, 300, 'label-kemasan-snack-sederhana-720x629.jpg', '2019-12-31', ''),
(10, 'Keripik Pangsit', 15000, 200, '5resepterbaruku-pangsit-balado-foto-resep-utama.jpg', '2019-12-27', 'pangsit enak'),
(11, 'Basreng', 10000, 100, 'Basreng.jpg', '2019-12-27', 'Terbuat dari Ikan yang berkualitas'),
(12, 'Granola Banana', 15000, 300, 'Granola-750x423.jpg', '2019-12-25', ''),
(21, 'ass', 123456789, 345678, 'Basreng.jpg', '0000-00-00', ''),
(22, 'kosong', 12000, 100, '65717879-flat-design-colored-illustration-of-a-grilled-fish-on-plate-isolated.jpg', '2019-12-12', 'tidak ada'),
(24, 'nobita', 1, 0, '', '2019-12-05', 'lagi mahal');

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
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
