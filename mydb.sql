-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 11:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nisn` char(15) NOT NULL,
  `nik` char(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_regis` char(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `kebutuhan_khusus` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` char(5) NOT NULL,
  `rw` char(5) NOT NULL,
  `nama_dusun` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` char(10) NOT NULL,
  `lintang` varchar(20) DEFAULT NULL,
  `bujur` varchar(20) DEFAULT NULL,
  `tempat_tinggal` varchar(25) NOT NULL,
  `transport` varchar(25) NOT NULL,
  `nomor_kks` char(10) DEFAULT NULL,
  `anak_ke` char(5) NOT NULL,
  `penerima_kps` varchar(10) NOT NULL,
  `nomor_kps` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `nomor_regis`, `agama`, `kewarganegaraan`, `kebutuhan_khusus`, `alamat`, `rt`, `rw`, `nama_dusun`, `kelurahan`, `kecamatan`, `kode_pos`, `lintang`, `bujur`, `tempat_tinggal`, `transport`, `nomor_kks`, `anak_ke`, `penerima_kps`, `nomor_kps`) VALUES
(1, 'Khusnia Nur Rachmah', 'Perempuan', '0007510010', '3578204206000003', 'Denpasar', '0000-00-00', '1', 'Islam', 'WNI', 'Tidak', 'Wiyung Surabaya', '2', '3', 'Gemol', '', '', '60229', '-90 41.20338', '-180 41.20338', 'Rumah bersama Orang Tua', 'Kendaraan Pribadi', '001', '1', 'Ya', '0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
