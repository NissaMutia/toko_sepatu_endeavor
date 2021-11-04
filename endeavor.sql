-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 08:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endeavor`
--
CREATE DATABASE IF NOT EXISTS `endeavor` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `endeavor`;

-- --------------------------------------------------------

--
-- Table structure for table `data_pesan`
--

CREATE TABLE `data_pesan` (
  `id_pesanan` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(62) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kelurahan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kotkab` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kodepos` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `id_barang` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `ukuran` int(11) NOT NULL,
  `byk_beli` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_pesan`
--

INSERT INTO `data_pesan` (`id_pesanan`, `username`, `tanggal`, `nama`, `alamat`, `kelurahan`, `kecamatan`, `kotkab`, `provinsi`, `kodepos`, `id_barang`, `ukuran`, `byk_beli`, `total`) VALUES
(1, 'Nissa', '2018-12-16', 'Annissa', 'Panorama Serpong', 'Bakti Jaya', 'Setu', 'Tangerang Selatan', 'Banten', '15315', 'ASC00001', 39, 1, 350000),
(4, 'si_fulan', '2018-12-16', 'Fulan', 'jalan raya depsos', 'bintaro', 'pesanggrahan', 'jakarta selatan', 'jakarta', '12335', 'ASC00001', 41, 1, 350000);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_barang` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `merk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tipe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_barang`, `merk`, `tipe`, `harga`, `gambar`) VALUES
('ADLK0001', 'ADIDAS', 'ADIDAS SPEEDLIGHT', 250000, 'ADLK0001.jpg'),
('ADLK0002', 'ADIBAS', 'ADIBAS KROKODINO', 300000, 'ADLK0002.jpg'),
('AGKRS001', 'ASCIO', 'ASCIO MOONAZER', 400000, 'AGKRS001.jpg'),
('ASC00001', 'ASCIO', 'ASCIO LINERWOOD', 350000, 'ASC00001.png'),
('KM04ABUM', 'KILOMATRY', 'KILOMATRY LIGHT GREY', 100000, 'KM04ABUM.jpg'),
('MGW00001', 'MAGNITUDE', 'MAGNITUDE WEDGES', 320000, 'MGW00001.jpg'),
('NCLO0001', 'NICKY', '<br><br>NICKY SITILOOP', 500000, 'NCLO0001.jpg'),
('NKLV0001', 'NICKY', 'NICKY LUBITONE BROWN', 250000, 'NKLV0001.png'),
('NKRN0001', 'NICKY', 'NICKY EASYWALK', 350000, 'NKRN0001.jpeg'),
('NKSN0002', 'NICKY', 'NICKY WONDERLAND', 450000, 'NKSN0002.jpg'),
('SDJS0001', 'ZOHAR', 'ZOHAR DESSERT STYLE', 600000, 'SJD00001.jpg'),
('SPRJ0001', 'ESTOPHIO', 'ESTOPHIO SPRING GREY', 350000, 'SPRJ0001.jpg'),
('VANS0001', 'FANS', 'FANS RETRORICO', 400000, 'VANS0001.png');

-- --------------------------------------------------------

--
-- Table structure for table `stok_desc`
--

CREATE TABLE `stok_desc` (
  `id_barang` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `desc_pjg` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `desc_pdk` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stok_desc`
--

INSERT INTO `stok_desc` (`id_barang`, `desc_pjg`, `desc_pdk`) VALUES
('ADLK0001', 'Dengan sirkulasi udara yang baik mampu membuat larimu semakin cepat.', 'Sepatu keren super<br>cepat dan praktis'),
('ADLK0002', 'desainnya yang unik dan simpel membuat jalan-jalanmu terasa lebih menyenangkan.', 'Sepatu jalan terbaik<br>dari ADIBAS'),
('NKRN0001', 'sepatu ini membantu anda berjalan dengan sangat ringan', 'sepatu yang ringan'),
('NKSN0002', 'sepatu ini bikin jalan-jalan kamu jadi wonderful~', 'septu buat jalan-jalan'),
('AGKRS001', 'ini keren banget, suwer, gaboong. gua aja pingin. ', 'sepatu keren untuk segala situasi'),
('ASC00001', 'sepatu keren dengan warna netral yang bisa bikin hari kamu makin seru', 'sepatu fashion wanita'),
('NCLO0001', 'lelah gua mikirin deskripsi', 'sepatu jalan keren untuk wanita.'),
('KM04ABUM', 'gak usah pikir panjang, langsung beli aja, ok?', 'sepatu abu-abu santai'),
('MGW00001', 'sepatu ini bisa bikin tinggi sejak pemakaian pertama. Langsung pakai dua-duanya ya, kalau nggak nanti duniamu terasa miring sebelah.', 'Sepatu simple keren mantab<br>ajib banget lah'),
('NKLV0001', 'sepatu murah dengan desain mahal ini bisa kamu dapatkan dengan harga yang sangat terjangkau tanpa nego.', 'sepatu murah dengan desain mahal'),
('SPRJ0001', 'cocok buat perempuan dan wanita', 'sepatu santai dan fleksibel'),
('VANS0001', 'desain kekinian yang bikin hari mu jadi menyenangkan', 'desain terbaru dari FANS'),
('SDJS0001', 'cocok untuk dimana saja dan kapan saja suka suka yang pakai sepatu', 'sepatu tropis bergaya gurun paris');

-- --------------------------------------------------------

--
-- Table structure for table `stok_ukuran`
--

CREATE TABLE `stok_ukuran` (
  `id_barang` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `ukuran` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stok_ukuran`
--

INSERT INTO `stok_ukuran` (`id_barang`, `ukuran`, `total`) VALUES
('ADLK0001', 36, 5),
('ADLK0001', 37, 5),
('ADLK0001', 38, 5),
('ADLK0001', 39, 5),
('ADLK0001', 40, 5),
('ADLK0001', 41, 5),
('ADLK0001', 42, 5),
('ADLK0002', 36, 4),
('ADLK0002', 37, 5),
('ADLK0002', 38, 5),
('ADLK0002', 39, 5),
('ADLK0002', 40, 5),
('ADLK0002', 41, 5),
('ADLK0002', 42, 5),
('NKRN0001', 36, 5),
('NKRN0001', 37, 5),
('NKRN0001', 38, 5),
('NKRN0001', 39, 5),
('NKRN0001', 40, 5),
('NKRN0001', 41, 5),
('NKRN0001', 42, 5),
('NKSN0002', 36, 5),
('NKSN0002', 37, 5),
('NKSN0002', 38, 5),
('NKSN0002', 39, 5),
('NKSN0002', 40, 5),
('NKSN0002', 41, 4),
('NKSN0002', 42, 5),
('AGKRS001', 36, 5),
('AGKRS001', 37, 5),
('AGKRS001', 38, 5),
('AGKRS001', 39, 5),
('AGKRS001', 40, 4),
('AGKRS001', 41, 5),
('AGKRS001', 42, 5),
('ASC00001', 36, 5),
('ASC00001', 37, 5),
('ASC00001', 38, 5),
('ASC00001', 39, 4),
('ASC00001', 40, 5),
('ASC00001', 41, 3),
('ASC00001', 42, 5),
('NCLO0001', 36, 5),
('NCLO0001', 37, 5),
('NCLO0001', 38, 5),
('NCLO0001', 39, 5),
('NCLO0001', 40, 5),
('NCLO0001', 41, 5),
('NCLO0001', 42, 5),
('KM04ABUM', 36, 5),
('KM04ABUM', 37, 5),
('KM04ABUM', 38, 5),
('KM04ABUM', 39, 5),
('KM04ABUM', 40, 5),
('KM04ABUM', 41, 5),
('KM04ABUM', 42, 5),
('MGW00001', 36, 5),
('MGW00001', 37, 5),
('MGW00001', 38, 5),
('MGW00001', 39, 5),
('MGW00001', 40, 4),
('MGW00001', 41, 5),
('MGW00001', 42, 5),
('NKLV0001', 36, 5),
('NKLV0001', 37, 5),
('NKLV0001', 38, 5),
('NKLV0001', 39, 5),
('NKLV0001', 40, 5),
('NKLV0001', 41, 5),
('NKLV0001', 42, 5),
('SPRJ0001', 36, 5),
('SPRJ0001', 37, 5),
('SPRJ0001', 38, 5),
('SPRJ0001', 39, 5),
('SPRJ0001', 40, 5),
('SPRJ0001', 41, 5),
('SPRJ0001', 42, 5),
('VANS0001', 36, 5),
('VANS0001', 37, 5),
('VANS0001', 38, 5),
('VANS0001', 39, 5),
('VANS0001', 40, 5),
('VANS0001', 41, 5),
('VANS0001', 42, 5),
('SDJS0001', 36, 5),
('SDJS0001', 37, 5),
('SDJS0001', 38, 5),
('SDJS0001', 39, 5),
('SDJS0001', 40, 5),
('SDJS0001', 41, 5),
('SDJS0001', 42, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `kode`, `password`) VALUES
('admin', 0, '21232f297a57a5a743894a0e4a801fc3'),
('customer', 1, '25d55ad283aa400af464c76d713c07ad'),
('Nissa', 1, 'e10adc3949ba59abbe56e057f20f883e'),
('si_fulan', 1, '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `user_bio`
--

CREATE TABLE `user_bio` (
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(62) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kelurahan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kotkab` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kodepos` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `telpon` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_bio`
--

INSERT INTO `user_bio` (`username`, `nama`, `email`, `alamat`, `kelurahan`, `kecamatan`, `kotkab`, `provinsi`, `kodepos`, `telpon`) VALUES
('admin', 'admin', '.', '.', '.', '.', '.', '.', '.', '.'),
('Nissa', 'Annissa', 'annissa.mp@gmail.com', 'Panorama Serpong', 'Bakti Jaya', 'Setu', 'Tangerang Selatan', 'Banten', '15315', '01234567891'),
('customer', 'Pembeli yang Budiman', 'customer@endeavor.com', '-', '-', '-', '-', '-', '12345', '-'),
('si_fulan', 'Fulan', 'fulan@gmail.com', 'jalan raya depsos', 'bintaro', 'pesanggrahan', 'jakarta selatan', 'jakarta', '12335', '08662819726');

-- --------------------------------------------------------

--
-- Table structure for table `user_kode`
--

CREATE TABLE `user_kode` (
  `kode` int(11) NOT NULL,
  `nama` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_kode`
--

INSERT INTO `user_kode` (`kode`, `nama`) VALUES
(0, 'admin'),
(1, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pesan`
--
ALTER TABLE `data_pesan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `username` (`username`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `stok_desc`
--
ALTER TABLE `stok_desc`
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `stok_ukuran`
--
ALTER TABLE `stok_ukuran`
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `user_bio`
--
ALTER TABLE `user_bio`
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_kode`
--
ALTER TABLE `user_kode`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pesan`
--
ALTER TABLE `data_pesan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pesan`
--
ALTER TABLE `data_pesan`
  ADD CONSTRAINT `data_pesan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `data_pesan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `stok` (`id_barang`);

--
-- Constraints for table `stok_desc`
--
ALTER TABLE `stok_desc`
  ADD CONSTRAINT `stok_desc_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stok` (`id_barang`);

--
-- Constraints for table `stok_ukuran`
--
ALTER TABLE `stok_ukuran`
  ADD CONSTRAINT `stok_ukuran_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stok` (`id_barang`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `user_kode` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
