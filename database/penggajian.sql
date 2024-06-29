-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 02:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tj_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`) VALUES
(1, 'HRD', '4000000', '600000', '400000'),
(5, 'Perawat', '4600000', '800000', '800000'),
(6, 'IT', '4600000', '800000', '800000');

-- --------------------------------------------------------

--
-- Table structure for table `data_kehadiran`
--

CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  `bpjs4` int(11) NOT NULL,
  `jht424` int(11) NOT NULL,
  `jp2` int(11) NOT NULL,
  `bpjs1` int(11) NOT NULL,
  `jht2` int(11) NOT NULL,
  `jp1` int(11) NOT NULL,
  `cdt` int(11) NOT NULL,
  `keterlambatan` int(11) NOT NULL,
  `koperasi` int(11) NOT NULL,
  `pengobatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kehadiran`
--

INSERT INTO `data_kehadiran` (`id_kehadiran`, `bulan`, `nik`, `nama_pegawai`, `jenis_kelamin`, `nama_jabatan`, `hadir`, `sakit`, `alpha`, `bpjs4`, `jht424`, `jp2`, `bpjs1`, `jht2`, `jp1`, `cdt`, `keterlambatan`, `koperasi`, `pengobatan`) VALUES
(1, '012021', '0987654321', 'Dodi', 'Laki-Laki', 'Staff Marketing', 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '012021', '123456789', 'Fauzi', 'Laki-Laki', 'Admin', 22, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '012024', '0987654321', 'Dodi', 'Laki-Laki', 'Staff Marketing', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '012024', '123456789', 'Fauzi', 'Laki-Laki', 'Admin', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '012024', '78678768768', 'kasep', 'Laki-Laki', 'Staff Marketing', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '062024', '0000000', 'Myrtha Sasanto', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '062024', '0000000', 'Rotesa', 'Perempuan', 'HRD', 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '042024', '0000000', 'Myrtha Sasanto', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '042024', '0000000', 'Rotesa', 'Perempuan', 'HRD', 22, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '062024', '11234', 'Myrtha Sasanto', 'Perempuan', 'HRD', 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '062024', '11345', 'Rotesa', 'Perempuan', 'HRD', 19, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, '062024', '11111', 'Hesti', 'Perempuan', 'HRD', 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, '012020', '11111', 'Hesti', 'Perempuan', 'HRD', 15, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 1),
(14, '012020', '11234', 'Myrtha Sasanto', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, '012020', '112233', 'Rifqi Arya Yoedhoko', 'Laki-Laki', 'IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, '012020', '11345', 'Rotesa', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, '012020', '11111', 'Hesti', 'Perempuan', 'HRD', 15, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1),
(18, '012020', '11234', 'Myrtha Sasanto', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, '012020', '112233', 'Rifqi Arya Yoedhoko', 'Laki-Laki', 'IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, '012020', '11345', 'Rotesa', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '022020', '11111', 'Hesti', 'Perempuan', 'HRD', 20, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1),
(22, '022020', '11234', 'Myrtha Sasanto', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, '022020', '112233', 'Rifqi Arya Yoedhoko', 'Laki-Laki', 'IT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, '022020', '11345', 'Rotesa', 'Perempuan', 'HRD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `statkes` varchar(50) DEFAULT NULL,
  `no_sip` varchar(50) DEFAULT NULL,
  `last_edu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `username`, `password`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `photo`, `hak_akses`, `statkes`, `no_sip`, `last_edu`) VALUES
(4, '11234', 'Myrtha Sasanto', 'myrtha', '7231da022280dbb7f6723595a090a228', 'Perempuan', 'HRD', '2012-01-01', 'Karyawan Tetap', 'pegawai-240621-6a943286ae.png', 1, 'Non Tenaga Kesehatan', '0', 'Strata 1'),
(5, '11345', 'Rotesa', 'rotesa', '7231da022280dbb7f6723595a090a228', 'Perempuan', 'HRD', '2012-01-01', 'Karyawan Tetap', 'pegawai-240625-1b3ee999c8.jpg', 2, 'Non Tenaga Kesehatan', '0', 'Strata 1'),
(6, '11111', 'Hesti', 'hesti', '7231da022280dbb7f6723595a090a228', 'Perempuan', 'HRD', '2024-06-01', 'Karyawan Tidak Tetap', 'pegawai-240625-3e589e961e.jpg', 2, 'Non Tenaga Kesehatan', '0', 'Strata 1'),
(8, '112233', 'Rifqi Arya Yoedhoko', 'rifqi', '682cc7d993d4b56d7c8b728923b99062', 'Laki-Laki', 'IT', '2019-11-01', 'Karyawan Tetap', 'pegawai-240625-5ae2250ffc.png', 1, 'Non Tenaga Kesehatan', '0', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'pegawai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL,
  `potongan` varchar(120) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id`, `potongan`, `jml_potongan`) VALUES
(1, 'Alpha', 100000),
(2, 'Sakit', 0),
(3, 'BPJS Kes 4', 202696),
(5, 'JHT 4,24', 214857),
(6, 'JP 2', 101348),
(7, 'BPJS Kes 1', 50674),
(8, 'JHT 2', 101348),
(9, 'JP 1', 50674),
(10, 'CDT', 1000),
(11, 'Keterlambatan', 1000),
(12, 'Koperasi', 1000),
(13, 'Pengobatan Pegawai', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
