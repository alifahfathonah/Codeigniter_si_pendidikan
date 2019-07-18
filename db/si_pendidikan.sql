-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 12:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pbu`
--

CREATE TABLE `pbu` (
  `id_pbu` int(11) NOT NULL,
  `usia0_6` int(11) NOT NULL,
  `usia7_12` int(11) NOT NULL,
  `usia13_15` int(11) NOT NULL,
  `usia16_18` int(11) NOT NULL,
  `peserta_paud` int(11) NOT NULL,
  `bangunan_paud` int(11) NOT NULL,
  `tenaga_pendidik_paud` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbu`
--

INSERT INTO `pbu` (`id_pbu`, `usia0_6`, `usia7_12`, `usia13_15`, `usia16_18`, `peserta_paud`, `bangunan_paud`, `tenaga_pendidik_paud`, `kecamatan`, `tahun`) VALUES
(1, 1678, 2987, 1450, 1306, 451, 19, 55, 'Bungku Tengah', 2017),
(2, 953, 1828, 978, 880, 178, 7, 12, 'Bungku Selatan', 2017),
(3, 1084, 1778, 850, 761, 535, 19, 53, 'Menui Kepulauan', 2017),
(4, 1049, 1666, 418, 820, 301, 13, 21, 'Bungku Barat', 2017),
(5, 1430, 1771, 868, 857, 182, 11, 16, 'Bumi Raya', 2017),
(6, 1251, 1246, 604, 388, 318, 8, 30, 'Bahodopi', 2017),
(7, 1938, 2512, 1470, 1246, 241, 12, 20, 'Wita Ponda', 2017),
(8, 546, 711, 335, 355, 152, 4, 19, 'Bungku Pesisir', 2017),
(9, 1105, 1313, 691, 545, 223, 7, 25, 'Bungku Timur', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tmpt_ajar` varchar(200) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kel_des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pmak`
--

CREATE TABLE `pmak` (
  `id_pmak` int(11) NOT NULL,
  `jml_sd` int(11) NOT NULL,
  `jml_smp` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmak`
--

INSERT INTO `pmak` (`id_pmak`, `jml_sd`, `jml_smp`, `kecamatan`, `tahun`) VALUES
(1, 2, 1, 'Bungku Pesisir', 2017),
(2, 2, 2, 'Bungku Timur', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `pnf`
--

CREATE TABLE `pnf` (
  `id_pnf` int(11) NOT NULL,
  `jml_lkpk` int(11) NOT NULL,
  `jml_kls_lkpk` int(11) NOT NULL,
  `jml_sw_lkpk` int(11) NOT NULL,
  `jml_tp_lkpk` int(11) NOT NULL,
  `paket_a_s` int(11) NOT NULL,
  `paket_a_tp` int(11) NOT NULL,
  `paket_b_s` int(11) NOT NULL,
  `paket_b_tp` int(11) NOT NULL,
  `jml_ps_pkbm` int(11) NOT NULL,
  `jml_tp_pkbm` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnf`
--

INSERT INTO `pnf` (`id_pnf`, `jml_lkpk`, `jml_kls_lkpk`, `jml_sw_lkpk`, `jml_tp_lkpk`, `paket_a_s`, `paket_a_tp`, `paket_b_s`, `paket_b_tp`, `jml_ps_pkbm`, `jml_tp_pkbm`, `kecamatan`, `tahun`) VALUES
(1, 26, 0, 0, 0, 0, 0, 100, 30, 14, 7, 'Bungku Tengah', 2017),
(2, 26, 0, 0, 0, 0, 0, 100, 30, 20, 0, 'Bungku Selatan', 2017),
(3, 26, 0, 0, 0, 0, 0, 100, 30, 20, 6, 'Menui Kepulauan', 2017),
(4, 26, 0, 0, 0, 0, 0, 100, 30, 40, 13, 'Bungku Barat', 2017),
(5, 26, 0, 0, 0, 0, 0, 100, 30, 0, 0, 'Bumi Raya', 2017),
(6, 26, 0, 0, 0, 0, 0, 100, 30, 22, 5, 'Bahodopi', 2017),
(7, 26, 0, 0, 0, 0, 0, 100, 30, 39, 13, 'Bungku Timur', 2017),
(8, 26, 0, 0, 0, 0, 0, 100, 30, 0, 0, 'Wita Ponda', 2017),
(9, 26, 0, 0, 0, 0, 0, 100, 30, 0, 0, 'Bungku Pesisir', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `psd`
--

CREATE TABLE `psd` (
  `id_psd` int(11) NOT NULL,
  `jml_siswa_sd` int(11) NOT NULL,
  `jml_siswa_mi` int(11) NOT NULL,
  `jml_bg_baik` int(11) NOT NULL,
  `jml_bg_tdk_baik` int(11) NOT NULL,
  `jml_plsn` int(11) NOT NULL,
  `jml_plss` int(11) NOT NULL,
  `jml_ruang` int(11) NOT NULL,
  `jml_tp_brst` int(11) NOT NULL,
  `jml_tp_tdk_brst` int(11) NOT NULL,
  `rasio` varchar(6) NOT NULL,
  `p_murni` varchar(6) NOT NULL,
  `p_kasar` varchar(6) NOT NULL,
  `p_sekolah` varchar(6) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psd`
--

INSERT INTO `psd` (`id_psd`, `jml_siswa_sd`, `jml_siswa_mi`, `jml_bg_baik`, `jml_bg_tdk_baik`, `jml_plsn`, `jml_plss`, `jml_ruang`, `jml_tp_brst`, `jml_tp_tdk_brst`, `rasio`, `p_murni`, `p_kasar`, `p_sekolah`, `kecamatan`, `tahun`) VALUES
(1, 14432, 936, 105, 0, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bungku Tengah', 2017),
(2, 14432, 936, 109, 19, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bungku Selatan', 2017),
(3, 14432, 936, 111, 27, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Menui Kepulauan', 2017),
(4, 14432, 936, 65, 8, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bungku Barat', 2017),
(5, 14432, 936, 85, 6, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bumi Raya', 2017),
(6, 14432, 936, 60, 11, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bahodopi', 2017),
(7, 14432, 936, 88, 18, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Wita Ponda', 2017),
(8, 14432, 936, 41, 14, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bungku Pesisir', 2017),
(9, 14432, 936, 53, 8, 132, 16, 837, 304, 1051, '10.91', '98.5', '115.89', '99.35', 'Bungku Timur', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `psmp`
--

CREATE TABLE `psmp` (
  `id_psmp` int(11) NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `jml_bg_baik` int(11) NOT NULL,
  `jml_bg_tdk_baik` int(11) NOT NULL,
  `jml_plsn` int(11) NOT NULL,
  `jml_plss` int(11) NOT NULL,
  `jml_ruang` int(11) NOT NULL,
  `jml_tp_brst` int(11) NOT NULL,
  `jml_tp_tdk_brst` int(11) NOT NULL,
  `rasio` varchar(6) NOT NULL,
  `jml_labn` int(11) NOT NULL,
  `jml_labs` int(11) NOT NULL,
  `jml_komn` int(11) NOT NULL,
  `jml_koms` int(11) NOT NULL,
  `jml_intn` int(11) NOT NULL,
  `jml_ints` int(11) NOT NULL,
  `p_murni` varchar(6) NOT NULL,
  `p_kasar` varchar(6) NOT NULL,
  `p_sekolah` varchar(6) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psmp`
--

INSERT INTO `psmp` (`id_psmp`, `jml_siswa`, `jml_bg_baik`, `jml_bg_tdk_baik`, `jml_plsn`, `jml_plss`, `jml_ruang`, `jml_tp_brst`, `jml_tp_tdk_brst`, `rasio`, `jml_labn`, `jml_labs`, `jml_komn`, `jml_koms`, `jml_intn`, `jml_ints`, `p_murni`, `p_kasar`, `p_sekolah`, `kecamatan`, `tahun`) VALUES
(1, 1325, 54, 0, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bungku Tengah', 2017),
(2, 854, 24, 11, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bungku Selatan', 2017),
(3, 672, 23, 5, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Menui Kepulauan', 2017),
(4, 783, 22, 3, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bungku Barat', 2017),
(5, 779, 33, 6, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bumi Raya', 2017),
(6, 586, 32, 3, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bahodopi', 2017),
(7, 1157, 34, 2, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Wita Ponda', 2017),
(8, 323, 14, 3, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bungku Pesisir', 2017),
(9, 639, 25, 3, 32, 14, 0, 166, 303, '11.04', 17, 1, 8, 0, 0, 0, '86.73', '115.48', '97.85', 'Bungku Timur', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `stk`
--

CREATE TABLE `stk` (
  `id_stk` int(11) NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `jml_bg_baik` int(11) NOT NULL,
  `jml_bg_tdk_baik` int(11) NOT NULL,
  `jml_plsn` int(11) NOT NULL,
  `jml_plss` int(11) NOT NULL,
  `jml_ruang` int(11) NOT NULL,
  `jml_tp_brst` int(11) NOT NULL,
  `jml_tp_tdk_brst` int(11) NOT NULL,
  `rasio` varchar(5) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stk`
--

INSERT INTO `stk` (`id_stk`, `jml_siswa`, `jml_bg_baik`, `jml_bg_tdk_baik`, `jml_plsn`, `jml_plss`, `jml_ruang`, `jml_tp_brst`, `jml_tp_tdk_brst`, `rasio`, `kecamatan`, `tahun`) VALUES
(1, 495, 14, 0, 1, 114, 227, 20, 273, '10.96', 'Bungku Tengah', 2017),
(2, 243, 15, 0, 1, 114, 227, 20, 273, '10.96', 'Bungku Selatan', 2017),
(3, 325, 15, 0, 1, 114, 227, 20, 273, '10.96', 'Menui Kepulauan', 2017),
(4, 372, 11, 0, 1, 114, 227, 20, 273, '10.96', 'Bungku Barat', 2017),
(5, 538, 15, 0, 1, 114, 227, 20, 273, '10.96', 'Bumi Raya', 2017),
(6, 251, 10, 0, 1, 114, 227, 20, 273, '10.96', 'Bahodopi', 2017),
(7, 535, 16, 0, 1, 114, 227, 20, 273, '10.96', 'Wita Ponda', 2017),
(8, 197, 8, 0, 1, 114, 227, 20, 273, '10.96', 'Bungku Pesisir', 2017),
(9, 329, 10, 0, 1, 114, 227, 20, 273, '10.96', 'Bungku Timur', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pbu`
--
ALTER TABLE `pbu`
  ADD PRIMARY KEY (`id_pbu`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pmak`
--
ALTER TABLE `pmak`
  ADD PRIMARY KEY (`id_pmak`);

--
-- Indexes for table `pnf`
--
ALTER TABLE `pnf`
  ADD PRIMARY KEY (`id_pnf`);

--
-- Indexes for table `psd`
--
ALTER TABLE `psd`
  ADD PRIMARY KEY (`id_psd`);

--
-- Indexes for table `psmp`
--
ALTER TABLE `psmp`
  ADD PRIMARY KEY (`id_psmp`);

--
-- Indexes for table `stk`
--
ALTER TABLE `stk`
  ADD PRIMARY KEY (`id_stk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pbu`
--
ALTER TABLE `pbu`
  MODIFY `id_pbu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmak`
--
ALTER TABLE `pmak`
  MODIFY `id_pmak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pnf`
--
ALTER TABLE `pnf`
  MODIFY `id_pnf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `psd`
--
ALTER TABLE `psd`
  MODIFY `id_psd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `psmp`
--
ALTER TABLE `psmp`
  MODIFY `id_psmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stk`
--
ALTER TABLE `stk`
  MODIFY `id_stk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
