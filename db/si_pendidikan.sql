-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 04:29 PM
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
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Bungku Tengah'),
(2, 'Bungku Selatan'),
(3, 'Menui Kepulauan'),
(4, 'Bungku Barat'),
(5, 'Bumi Raya'),
(6, 'Bahodopi'),
(7, 'Wita Ponda'),
(8, 'Bungku Pesisir'),
(9, 'Bungku Timur');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `judul_konsultasi` varchar(200) NOT NULL,
  `isi_konsultasi` text NOT NULL,
  `isi_balasan` text NOT NULL,
  `status` varchar(12) NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `tgl_balas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `kecamatan`, `judul_konsultasi`, `isi_konsultasi`, `isi_balasan`, `status`, `tgl_kirim`, `tgl_balas`) VALUES
(1, 'Bungku Tengah', 'Konsultasi Contoh', 'Konsultasi masalah pendidikan di morowali khususnya di kecamatan bungku tengah', 'Ok ok', 'sudah dibaca', '2019-08-13 00:00:00', '2019-08-14 20:35:20'),
(2, 'Bungku Selatan', 'Contoh Konsultasi', 'Contoh Konsultasi', 'Ok ok', 'sudah dibaca', '2019-08-13 00:00:00', '2019-08-13 21:26:28'),
(3, 'Bungku Barat', 'Pendidikan', 'qwe', 'iye', 'sudah dibaca', '2019-08-14 00:00:00', '2019-08-14 21:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `paud`
--

CREATE TABLE `paud` (
  `id_paud` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `berdasarkan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paud`
--

INSERT INTO `paud` (`id_paud`, `nama_kecamatan`, `berdasarkan`, `jumlah`, `tahun`) VALUES
(1, 'Bungku Tengah', 'peserta', 499, 2019),
(2, 'Bungku Selatan', 'peserta', 277, 2019),
(3, 'Menuai Kepulauan', 'peserta', 458, 2019),
(4, 'Bungku Barat', 'peserta', 346, 2019),
(5, 'Bumi Raya', 'peserta', 230, 2019),
(6, 'Bahodopi', 'peserta', 256, 2019),
(7, 'Wita Ponda', 'peserta', 223, 2019),
(8, 'Bungku Pesisir', 'peserta', 83, 2019),
(9, 'Bungku Timur', 'peserta', 158, 2019),
(10, 'Bungku Tengah', 'bangunan', 18, 2019),
(11, 'Bungku Selatan', 'bangunan', 9, 2019),
(12, 'Menuai Kepulauan', 'bangunan', 19, 2019),
(13, 'Bungku Barat', 'bangunan', 14, 2019),
(14, 'Bumi Raya', 'bangunan', 13, 2019),
(15, 'Bahodopi', 'bangunan', 8, 2019),
(16, 'Wita Ponda', 'bangunan', 12, 2019),
(17, 'Bungku Pesisir', 'bangunan', 4, 2019),
(18, 'Bungku Timur', 'bangunan', 7, 2019),
(19, 'Bungku Tengah', 'pengajar', 73, 2019),
(20, 'Bungku Selatan', 'pengajar', 69, 2019),
(21, 'Menuai Kepulauan', 'pengajar', 62, 2019),
(22, 'Bungku Barat', 'pengajar', 54, 2019),
(23, 'Bumi Raya', 'pengajar', 49, 2019),
(24, 'Bahodopi', 'pengajar', 34, 2019),
(25, 'Wita Ponda', 'pengajar', 55, 2019),
(26, 'Bungku Pesisir', 'pengajar', 27, 2019),
(27, 'Bungku Timur', 'pengajar', 36, 2019),
(28, 'Bungku Tengah', 'peserta', 499, 2018);

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
-- Table structure for table `pendidikan_usia`
--

CREATE TABLE `pendidikan_usia` (
  `id_pendidikan_usia` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `usia` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan_usia`
--

INSERT INTO `pendidikan_usia` (`id_pendidikan_usia`, `nama_kecamatan`, `usia`, `jumlah`, `tahun`) VALUES
(1, 'Bungku Tengah', '0-6', 1858, 2019),
(2, 'Bungku Selatan', '0-6', 1529, 2019),
(3, 'Menuai Kepulauan', '0-6', 13306, 2019),
(4, 'Bungku Barat', '0-6', 0, 2019),
(5, 'Bumi Raya', '0-6', 1788, 2019),
(6, 'Bahodopi', '0-6', 1147, 2019),
(7, 'Wita Ponda', '0-6', 2681, 2019),
(8, 'Bungku Pesisir', '0-6', 687, 2019),
(9, 'Bungku Timur', '0-6', 762, 2019),
(10, 'Bungku Tengah', '7-12', 2536, 2019),
(11, 'Bungku Selatan', '7-12', 157, 2019),
(12, 'Menuai Kepulauan', '7-12', 418, 2019),
(13, 'Bungku Barat', '7-12', 14, 2019),
(14, 'Bumi Raya', '7-12', 1449, 2019),
(15, 'Bahodopi', '7-12', 879, 2019),
(16, 'Wita Ponda', '7-12', 2137, 2019),
(17, 'Bungku Pesisir', '7-12', 659, 2019),
(18, 'Bungku Timur', '7-12', 443, 2019),
(19, 'Bungku Tengah', '13-15', 1298, 2019),
(20, 'Bungku Selatan', '13-15', 918, 2019),
(21, 'Menuai Kepulauan', '13-15', 360, 2019),
(22, 'Bungku Barat', '13-15', 723, 2019),
(23, 'Bumi Raya', '13-15', 662, 2019),
(24, 'Bahodopi', '13-15', 434, 2019),
(25, 'Wita Ponda', '13-15', 1067, 2019),
(26, 'Bungku Pesisir', '13-15', 391, 2019),
(27, 'Bungku Timur', '13-15', 245, 2019),
(28, 'Bungku Tengah', '16-18', 1372, 2019),
(29, 'Bungku Selatan', '16-18', 844, 2019),
(30, 'Menuai Kepulauan', '16-18', 353, 2019),
(31, 'Bungku Barat', '16-18', 716, 2019),
(32, 'Bumi Raya', '16-18', 853, 2019),
(33, 'Bahodopi', '16-18', 411, 2019),
(34, 'Wita Ponda', '16-18', 1007, 2019),
(35, 'Bungku Pesisir', '16-18', 330, 2019),
(36, 'Bungku Timur', '16-18', 227, 2019),
(39, 'Bungku Tengah', '0-6', 1858, 2018),
(41, 'Bungku Selatan', '0-6', 2341, 2018);

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
-- Table structure for table `sekolah_kecamatan`
--

CREATE TABLE `sekolah_kecamatan` (
  `id_sekolah` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(200) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_kecamatan`
--

INSERT INTO `sekolah_kecamatan` (`id_sekolah`, `id_kecamatan`, `nama_kecamatan`, `nama_sekolah`) VALUES
(1, 6, 'Bahodopi', 'SDN Bete-bete'),
(2, 6, 'Bahodopi', 'SDN Dampala'),
(3, 7, 'Wita Ponda', 'SDN 1 Puntari Makmur'),
(4, 7, 'Wita Ponda', 'SDN 2 Puntari Makmur');

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
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `tahun`) VALUES
(1, 2018),
(2, 2019);

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
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'qwe123', 'f7cc65e0c9b1b0c0822222e970663691');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `paud`
--
ALTER TABLE `paud`
  ADD PRIMARY KEY (`id_paud`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pendidikan_usia`
--
ALTER TABLE `pendidikan_usia`
  ADD PRIMARY KEY (`id_pendidikan_usia`);

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
-- Indexes for table `sekolah_kecamatan`
--
ALTER TABLE `sekolah_kecamatan`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `stk`
--
ALTER TABLE `stk`
  ADD PRIMARY KEY (`id_stk`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paud`
--
ALTER TABLE `paud`
  MODIFY `id_paud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan_usia`
--
ALTER TABLE `pendidikan_usia`
  MODIFY `id_pendidikan_usia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- AUTO_INCREMENT for table `sekolah_kecamatan`
--
ALTER TABLE `sekolah_kecamatan`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stk`
--
ALTER TABLE `stk`
  MODIFY `id_stk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
