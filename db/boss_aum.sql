-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2018 at 04:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boss_aum`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `jml_barang` int(15) NOT NULL,
  `status` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `kode_barang`, `nama_barang`, `foto_barang`, `jml_barang`, `status`, `harga`) VALUES
(1, 1, 'MTA', 'Miwa Rengginang Telor Asin ', '', 12, 1, '100000'),
(2, 2, 'MCO', 'Miwa Rengginang Coklat', '', 10, 1, '40000'),
(3, 3, 'MJB', 'Miwa Rengginang Jagung Bakar', '', 0, 0, '30000'),
(4, 4, 'MKU', 'Miwa Rengginang Keju', '', 0, 0, '25000'),
(5, 5, 'MCU', 'Miwa Rengginang Cumi', '', 9, 1, '20000'),
(6, 6, 'MTI', 'Miwa Rengginang Terasi', '', 0, 0, '15000'),
(7, 7, 'MPS', 'Miwa Rengginang Pedas', '', 0, 0, '10000'),
(39, 7, 'UI90', 'miwa macam macam', '20161002_213305.jpg', 10, 1, '7800');

-- --------------------------------------------------------

--
-- Table structure for table `cek_in`
--

CREATE TABLE `cek_in` (
  `id_cek` varchar(5) NOT NULL,
  `nama_cek` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `ktp` bigint(50) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `ktp`, `nama_karyawan`, `alamat`, `jenis_kelamin`) VALUES
(3, 123456777098, 'Jamilah Husni', 'Jakarta Utara', 'Perempuan'),
(7, 123019101001, 'kasmad oke', 'jakarta utara', 'Laki-laki'),
(32, 12345, 'usamah K', 'jakarta utara', 'Laki-laki'),
(33, 1325618991, 'M. Mansur S', 'Jakarta Selatan', 'Laki-laki'),
(39, 9748741, 'Hasan Mansur', 'Kalimukti', 'Laki-laki'),
(40, 9378678090, 'Makmun ', 'Jakarta Selatan', 'Laki-laki'),
(41, 123456, 'siti', 'jakarta barat', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Rasa Telor Asin'),
(2, 'Rasa Coklat'),
(3, 'Rasa Jagung Bakar'),
(4, 'Rasa Keju'),
(5, 'Rasa Cumi'),
(6, 'Rasa Terasi'),
(7, 'Rasa Pedas');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `order_barang` varchar(30) NOT NULL,
  `jml_qty` varchar(30) NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `harga` varchar(20) NOT NULL,
  `harga_total` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_barang`, `pelanggan`, `alamat`, `order_barang`, `jml_qty`, `tgl_terima`, `tgl_keluar`, `harga`, `harga_total`, `status`) VALUES
(1, 0, 'fadli', 'Jakarta Timur', 'Miwa Rengginang', '2', '2017-11-28', '2017-11-30', '50000', '100000', 1),
(2, 0, 'Datuk', 'Jakarta Utara', 'Miwa Rengginang Cumi', '3', '2017-11-28', '2017-11-30', '20000', '60000', 0),
(3, 0, 'Abdul Ghoni', 'Jakarta Timur', 'Miwa Rengginang Pedas', '10', '2017-11-27', '2017-11-29', '10000', '100000', 0),
(5, 0, 'boss majid', 'kalimukti', 'Miwa Rengginang Telor Asin ', '3', '2017-12-01', '2017-12-03', '100000', '300000', 0),
(6, 0, 'kusnan', 'jakarta barat', 'Miwa Rengginang Telor Asin ', '2', '2018-03-02', '2018-02-24', '100000', '200000', 0),
(7, 0, 'jaelani', 'kebumen', 'Miwa Rengginang Coklat', '3', '2018-04-02', '2018-04-06', '40000', '120000', 0),
(8, 0, 'hanan', 'jakarta', 'Miwa Rengginang Coklat', '4', '2018-02-22', '2018-02-24', '40000', '160000', 0),
(9, 0, 'asep', 'kalimukti', 'Miwa Rengginang Telor Asin ', '3', '2018-03-23', '2018-03-25', '100000', '300000', 0),
(10, 0, 'hamzah', 'losari', 'Miwa Rengginang Coklat', '3', '2018-03-16', '2018-03-18', '40000', '120000', 0),
(11, 0, 'hasan', 'jakarta utara', 'Miwa Rengginang Pedas', '3', '2018-04-23', '2018-04-25', '10000', '30000', 0),
(12, 0, 'galih', 'loasri', 'Miwa Rengginang Telor Asin ', '3', '2018-04-26', '2018-04-28', '100000', '300000', 0),
(13, 1, 'hanimah', 'Kebon Jeruk, Jakarta Pusat', 'Miwa Rengginang Jagung Bakar', '3', '2018-04-28', '2018-04-30', '30000', '90000', 0),
(14, 1, 'huihui', 'jakarta utara', 'Miwa Rengginang Jagung Bakar', '5', '2018-04-28', '2018-04-30', '30000', '150000', 0),
(15, 1, 'fadli', 'jakarta timur', 'Miwa Rengginang Telor Asin ', '2', '2018-05-03', '2018-05-05', '100000', '50000', 0),
(16, 1, 'bagas', 'jakarta timur', 'Miwa Rengginang Coklat', '3', '2018-05-03', '2018-05-05', '40000', '120000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `uid` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','member','karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`uid`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'aum', 'aum@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'dadang', 'dadang@gmailcom', 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member'),
(3, 'gugun', 'gugun@gmail.com', 'member', 'c7764cfed23c5ca3bb393308a0da2306', 'member'),
(4, 'sule', 'sule@gmail.com', 'sule', '8537342323a943d3554aa5e2f2be0d8d', 'member'),
(5, 'M. Makmun', 'makmun@gmail.com', 'moh. makmun', '14e1b600b1fd579f47433b88e8d85291', 'member'),
(6, 'ajiz', 'ajiz@gmail.com', 'abdul azis', '202cb962ac59075b964b07152d234b70', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `cek_in`
--
ALTER TABLE `cek_in`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
