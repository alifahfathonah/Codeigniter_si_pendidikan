-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 08:21 AM
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
  `tgl_balas` datetime NOT NULL,
  `hapus_admin` varchar(3) NOT NULL,
  `hapus_uptd` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `kecamatan`, `judul_konsultasi`, `isi_konsultasi`, `isi_balasan`, `status`, `tgl_kirim`, `tgl_balas`, `hapus_admin`, `hapus_uptd`) VALUES
(1, 'Bungku Tengah', 'Konsultasi Contoh', 'Konsultasi masalah pendidikan di morowali khususnya di kecamatan bungku tengah', 'Ok ok', 'sudah dibaca', '2019-08-13 00:00:00', '2019-08-18 03:31:12', 'no', 'no'),
(2, 'Bungku Tengah', 'Contoh Konsultasi', 'Contoh Konsultasi', 'Ok ok', 'sudah dibaca', '2019-08-13 00:00:00', '2019-08-13 21:26:28', 'yes', 'yes'),
(3, 'Bungku Barat', 'Pendidikan', 'qwe', 'iye', 'sudah dibaca', '2019-08-14 00:00:00', '2019-08-14 21:00:42', 'no', 'no'),
(4, 'Bungku Tengah', 'Coba', 'Coba', '', 'belum dibaca', '2019-08-18 03:57:46', '0000-00-00 00:00:00', 'no', 'no'),
(6, 'Bungku Tengah', 'asd', 'asd', '', 'belum dibaca', '2019-08-18 21:58:35', '0000-00-00 00:00:00', '', 'no');

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
(1, 'Bungku Tengah', 'peserta', 500, 2019),
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
  `kel_des` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `pangkat`, `golongan`, `jabatan`, `tmpt_ajar`, `kec`, `kel_des`, `status`) VALUES
(1, 'Isman Hidayat Ishak, S.Pd.,MM.', '198006062005021003', 'Penata Tingkat I', 'III/d', 'Kepala UPTD', 'UPTD Dikda Kecamatan Bungku Tengah', 'Bungku Tengah', '', 'ASN'),
(2, 'Dayan, A.Ma.Pd.', '196404251985121001', 'Pembina', 'IV/a', 'Staf TU', 'UPTD Dikda Kecamatan Bungku Tengah', 'Bungku Tengah', '', 'ASN'),
(3, 'Bakir Sondeng, S.Pd.', '', 'Pembina', 'IV/a', 'Penilik PAUDNI', 'UPTD Dikda Kecamatan Bungku Tengah', 'Bungku Tengah', '', 'ASN'),
(4, 'Saharaa, S.Pd.', '196512232007012010', 'Penata Tingkat I', 'III/d', 'Staf TU', 'UPTD Dikda Kecamatan Bungku Tengah', 'Bungku Tengah', '', 'ASN'),
(5, 'Hikmah Nahrun, S.Kom.', '198207072007012009', 'Penata Muda Tingkat I', 'III/b', 'Staf TU', 'UPTD Dikda Kecamatan Bungku Tengah', 'Bungku Tengah', '', 'ASN'),
(6, 'Husna Tengga, S.Pd.I.', '197203011996062002', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 01 Bungku', 'Bungku Tengah', '', 'ASN'),
(7, 'Hj. Masdiana L., S.Pd.', '195907151984122001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 01 Bungku', 'Bungku Tengah', '', 'ASN'),
(8, 'Rasnawati Nahrun, S.Pd.I.', '197905272009042002', 'Penata Tingkat I', 'III/d', 'Guru PAI', 'SDN 01 Bungku', 'Bungku Tengah', '', 'ASN'),
(9, 'Satriani, S.Pd.I.', '198404152009042006', 'Penata Tingkat I', 'III/d', 'Guru PAI', 'SDN 01 Bungku', 'Bungku Tengah', '', 'ASN'),
(10, 'Narce A. Djuru, S.Pd.', '198006112005022006', 'Penata', 'III/c', 'Guru Kelas', 'SDN 01 Bungku', 'Bungku Tengah', '', 'ASN'),
(11, 'Sukwati Mohamad, S.Pd.I.', '196506281988032009', 'Pembina Tingkat I', 'IV/b', 'Kepala Sekolah', 'SDN 02 Bungku', 'Bungku Tengah', '', 'ASN'),
(12, 'Sulaeman Moh. Said, SS.', '196401061985121002', 'Pembina Tingkat I', 'IV/b', 'Guru Kelas', 'SDN 02 Bungku', 'Bungku Tengah', '', 'ASN'),
(13, 'Roni U. Madilau', '196601171986082002', 'Pembina Tingkat I', 'IV/b', 'Guru Kelas', 'SDN 02 Bungku', 'Bungku Tengah', '', 'ASN'),
(14, 'Masnah Mahmudin, S.Pd.', '197405131996062001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 02 Bungku', 'Bungku Tengah', '', 'ASN'),
(15, 'Sunardin Hadadi, S.Pd.I.', '196702022003121002', 'Penata Tingkat I', 'III/d', 'Guru Kelas', 'SDN 02 Bungku', 'Bungku Tengah', '', 'ASN'),
(16, 'Hasna Karim, S.Pd.', '196905011993102001', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 03 Bungku', 'Bungku Tengah', '', 'ASN'),
(17, 'Saefudin Abd. Syukur, A.Ma.Pd.', '196003031982071001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 03 Bungku', 'Bungku Tengah', '', 'ASN'),
(18, 'Zubair, A.Ma.', '195908091983071001', 'Pembina', 'IV/a', 'Guru PAI', 'SDN 03 Bungku', 'Bungku Tengah', '', 'ASN'),
(19, 'Sunarni Bani, S.Pd.', '197502251997072001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 03 Bungku', 'Bungku Tengah', '', 'ASN'),
(20, 'Rahmawati, S.Pd.', '197203101996062003', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 03 Bungku', 'Bungku Tengah', '', 'ASN'),
(21, 'Faisal, S.Pd.', '197503151998081001', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 04 Bungku', 'Bungku Tengah', '', 'ASN'),
(22, 'Muhiyar', '196510061986061002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 04 Bungku', 'Bungku Tengah', '', 'ASN'),
(23, 'Marwati Nunu, S.Pd.I.', '196711051989092001', 'Pembina', 'IV/a', 'Guru PAI', 'SDN 04 Bungku', 'Bungku Tengah', '', 'ASN'),
(24, 'Nurlaela, S.Pd.', '196810181994082002', 'Penata Tingkat I', 'III/d', 'Guru Kelas', 'SDN 04 Bungku', 'Bungku Tengah', '', 'ASN'),
(25, 'Yusni Duasa, S.Pd.', '197407061999072001', 'Penata Tingkat I', 'III/d', 'Guru Kelas', 'SDN 04 Bungku', 'Bungku Tengah', '', 'ASN'),
(26, 'Seri Suhesti Lapangi, S.Pd.', '197203021994082001', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 05 Bungku', 'Bungku Tengah', '', 'ASN'),
(27, 'Sau, S.Pd.', '197403141996062001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 05 Bungku', 'Bungku Tengah', '', 'ASN'),
(28, 'Nuralia, S.Pd.', '197403141996062001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 05 Bungku', 'Bungku Tengah', '', 'ASN'),
(29, 'Hafiah, S.Pd.', '197103271995122002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 05 Bungku', 'Bungku Tengah', '', 'ASN'),
(30, 'Hajar, S.Pd.', '197808022005022005', 'Penata Tingkat I', 'III/d', 'Guru Kelas', 'SDN 05 Bungku', 'Bungku Tengah', '', 'ASN'),
(31, 'Abd. Asis, S.Pd.', '197802242007011017', 'Penata', 'III/c', 'Kepala Sekolah', 'SDN 06 Bungku', 'Bungku Tengah', '', 'ASN'),
(32, 'Surianti Kahar, S.Pd.', '197908112000122002', 'Penata Tingkat I', 'III/d', 'Guru Kelas', 'SDN 06 Bungku', 'Bungku Tengah', '', 'ASN'),
(33, 'Jam\'an Hasan, S.Pd.I.', '196904102007012027', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 06 Bungku', 'Bungku Tengah', '', 'ASN'),
(34, 'Hasna Bandu, S.Pd.I.', '197910162005022002', 'Penata', 'III/c', 'Guru Kelas', 'SDN 06 Bungku', 'Bungku Tengah', '', 'ASN'),
(35, 'Patmawati, A.Ma.Pd.', '197809222003122007', 'Penata', 'III/c', 'Guru Kelas', 'SDN 06 Bungku', 'Bungku Tengah', '', 'ASN'),
(36, 'Suaeb Marzuki, S.Pd.', '196902081994081001', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 07 Bungku', 'Bungku Tengah', '', 'ASN'),
(37, 'Abd. Gafur Nabran, A.Ma.Pd.', '196206041983071001', 'Pembina', 'IV/a', 'Guru Penjaskes', 'SDN 07 Bungku', 'Bungku Tengah', '', 'ASN'),
(38, 'Hj. Salwia, S.Pd.', '197001301991032006', 'Pembina Tingkat I', 'IV/b', 'Guru Kelas', 'SDN 07 Bungku', 'Bungku Tengah', '', 'ASN'),
(39, 'Saleha, S.Pd.', '196810041989092001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 07 Bungku', 'Bungku Tengah', '', 'ASN'),
(40, 'Kartini, S.Pd.', '196901011984082001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 07 Bungku', 'Bungku Tengah', '', 'ASN'),
(41, 'Djidwan Uno, S.Pd.', '196708191993041001', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 08 Bungku', 'Bungku Tengah', '', 'ASN'),
(42, 'Hanasia Aburaera', '196203171984122001', 'Pembina Tingkat I', 'IV/b', 'Guru Kelas', 'SDN 08 Bungku', 'Bungku Tengah', '', 'ASN'),
(43, 'Runiah Mbawi', '196504241989092001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 08 Bungku', 'Bungku Tengah', '', 'ASN'),
(44, 'Supriah Masinona', '196408021989092002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 08 Bungku', 'Bungku Tengah', '', 'ASN'),
(45, 'Narmin Masirete', '196305251989092001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 08 Bungku', 'Bungku Tengah', '', 'ASN'),
(46, 'Sri Anjarni Lapangi, S.Pd.', '197406041996062002', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 09 Bungku', 'Bungku Tengah', '', 'ASN'),
(47, 'Hartina, S.Pd.', '197903272000122002', 'Penata Tingkat I', 'III/d', 'Guru Kelas', 'SDN 09 Bungku', 'Bungku Tengah', '', 'ASN'),
(48, 'Nur Amri, S.Pd.', '198208282003122002', 'Penata', 'III/c', 'Guru Kelas', 'SDN 09 Bungku', 'Bungku Tengah', '', 'ASN'),
(49, 'Rufia, S.Pd.', '198412012010012022', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 09 Bungku', 'Bungku Tengah', '', 'ASN'),
(50, 'Samsul Hadi, S.Pd.', '198505042011011006', 'Penata', 'III/c', 'Guru Kelas', 'SDN 09 Bungku', 'Bungku Tengah', '', 'ASN'),
(51, 'Burhanudin Ahmad', '195911141984121002', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 10 Bungku', 'Bungku Tengah', '', 'ASN'),
(52, 'Halid Jondu, S.Pd.', '196211131983071001', 'Pembina', 'IV/a', 'Guru Penjas', 'SDN 10 Bungku', 'Bungku Tengah', '', 'ASN'),
(53, 'Hj. Arna Moh. Yasin, S.Pd.I.', '196310131983102001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 10 Bungku', 'Bungku Tengah', '', 'ASN'),
(54, 'Hajarah Boli, A.Ma.', '196212311983071002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 10 Bungku', 'Bungku Tengah', '', 'ASN'),
(55, 'Syafrudin Saudin', '196202281986081002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 10 Bungku', 'Bungku Tengah', '', 'ASN'),
(56, 'Arrung Lolopayung, S.Pd.', '196205161985121003', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 11 Bungku', 'Bungku Tengah', '', 'ASN'),
(57, 'Niswan Abd. Djamal', '196002111983072007', 'Pembina', 'IV/a', 'Guru Penjaskes', 'SDN 11 Bungku', 'Bungku Tengah', '', 'ASN'),
(58, 'Syaidiman Sanuke, S.Pd.', '196907011993101002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 11 Bungku', 'Bungku Tengah', '', 'ASN'),
(59, 'Alimas, S.Pd.', '196504121994081001', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 11 Bungku', 'Bungku Tengah', '', 'ASN'),
(60, 'Hajar Garusu, A.Ma.Pd.', '196907142003122004', 'Penata', 'III/c', 'Guru Kelas', 'SDN 11 Bungku', 'Bungku Tengah', '', 'ASN'),
(61, 'Iwan Hi. Gafar, S.Pd.', '196806101996061001', 'Pembina Tingkat I', 'IV/b', 'Kepala Sekolah', 'SDN 12 Bungku', 'Bungku Tengah', '', 'ASN'),
(62, 'Murnia Hamadan', '196407041984122003', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 12 Bungku', 'Bungku Tengah', '', 'ASN'),
(63, 'Anwar, S.Pd.I.', '196106171988031005', 'Pembina', 'IV/a', 'Guru PAI', 'SDN 12 Bungku', 'Bungku Tengah', '', 'ASN'),
(64, 'Sahrina, A.Ma.Pd.', '196602161986082002', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 12 Bungku', 'Bungku Tengah', '', 'ASN'),
(65, 'Naira, S.Pd.', '196404151986082008', 'Penata Tingkat I', 'IV/b', 'Guru Kelas', 'SDN 12 Bungku', 'Bungku Tengah', '', 'ASN'),
(66, 'Frision Lambuangi, A.Ma.Pd.', '196302221982071002', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 13 Bungku', 'Bungku Tengah', '', 'ASN'),
(67, 'Mardin, S.Pd.', '196507221986071002', 'Pembina', 'IV/a', 'Guru Penjaskes', 'SDN 13 Bungku', 'Bungku Tengah', '', 'ASN'),
(68, 'Hamisi Nunu, S.Pd.', '196512051991031014', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 13 Bungku', 'Bungku Tengah', '', 'ASN'),
(69, 'Tahir, S.Pd.I.', '198506072006041009', 'Penata', 'III/c', 'Guru Kelas', 'SDN 13 Bungku', 'Bungku Tengah', '', 'ASN'),
(70, 'Nursafaa M. Amdad, S.Pd.I.', '197601232006042005', 'Penata', 'III/c', 'Guru Kelas', 'SDN 13 Bungku', 'Bungku Tengah', '', 'ASN'),
(71, 'Hamran Sonaru, S.Pd.', '196708081999021002', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 14 Bungku', 'Bungku Tengah', '', 'ASN'),
(72, 'Asfa Muin, S.Pd.I.', '197205202006042005', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 14 Bungku', 'Bungku Tengah', '', 'ASN'),
(73, 'Amria Nabran, S.Pd.', '198310112006042016', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 14 Bungku', 'Bungku Tengah', '', 'ASN'),
(74, 'Zamrud, S.Pd.', '198204052008012012', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 14 Bungku', 'Bungku Tengah', '', 'ASN'),
(75, 'Nurlian, S.Pd.', '198303152008012006', 'Penata Muda', 'III/a', 'Guru Kelas', 'SDN 14 Bungku', 'Bungku Tengah', '', 'ASN'),
(76, 'Muthalib, S.Pd.', '198008062005021006', 'Penata', 'III/c', 'Kepala Sekolah', 'SDN 15 Bungku', 'Bungku Tengah', '', 'ASN'),
(77, 'Baharudin Bangkuni, S.Pd.', '196812122000121006', 'Penata', 'III/c', 'Guru Penjaskes', 'SDN 15 Bungku', 'Bungku Tengah', '', 'ASN'),
(78, 'Fatmawati, S.Pd.', '198206062008012013', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 15 Bungku', 'Bungku Tengah', '', 'ASN'),
(79, 'Rusdin, S.Pd.', '198105282008011009', 'Penata Muda', 'III/a', 'Guru Kelas', 'SDN 15 Bungku', 'Bungku Tengah', '', 'ASN'),
(80, 'Dian Rosmery Pombalawo, S.Pd.', '197312152014102001', 'Penata Muda', 'III/a', 'Guru Kelas', 'SDN 15 Bungku', 'Bungku Tengah', '', 'ASN'),
(81, 'Nurmuliati Abd. Rauf, S.Pd.', '197307281996062001', 'Pembina', 'IV/a', 'Kepala Sekolah', 'SDN 16 Bungku', 'Bungku Tengah', '', 'ASN'),
(82, 'Jam\'an Taha', '196109201984122003', 'Pembina', 'IV/a', 'Guru Kelas', 'SDN 16 Bungku', 'Bungku Tengah', '', 'ASN'),
(83, 'Abd. Rifai, S.Pd.I.', '198306042006041012', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 16 Bungku', 'Bungku Tengah', '', 'ASN'),
(84, 'Rudin Laia, S.Pd.', '198210112009031003', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 16 Bungku', 'Bungku Tengah', '', 'ASN'),
(85, 'Nurfathan Abd. Rauf, S.Pd.', '197110152010012003', 'Penata Muda Tingkat I', 'III/b', 'Guru Kelas', 'SDN 16 Bungku', 'Bungku Tengah', '', 'ASN'),
(86, 'Drs. Sabrudin Ismail', '196311071990031013', 'Pembina', 'IV/a', 'Kepala UPTD', 'UPTD Pendidikan Kecamatan Bahodopi', 'Bahodopi', '', 'ASN');

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
(39, 'Bungku Tengah', '0-6', 1859, 2018),
(41, 'Bungku Selatan', '0-6', 2341, 2018);

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
-- Table structure for table `tb_bangunan_baik`
--

CREATE TABLE `tb_bangunan_baik` (
  `id_tb_bangunan_baik` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bangunan_baik`
--

INSERT INTO `tb_bangunan_baik` (`id_tb_bangunan_baik`, `kecamatan`, `tingkatan`, `jumlah`, `tahun`) VALUES
(4, 'Bungku Tengah', 'tk', 13, 2019),
(5, 'Bungku Selatan', 'tk', 21, 2019),
(6, 'Bungku Tengah', 'sd', 237, 2019),
(7, 'Bungku Tengah', 'smp', 32, 2019),
(8, 'Bungku Tengah', 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bangunan_tdk_baik`
--

CREATE TABLE `tb_bangunan_tdk_baik` (
  `id_tb_bangunan_tdk_baik` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bangunan_tdk_baik`
--

INSERT INTO `tb_bangunan_tdk_baik` (`id_tb_bangunan_tdk_baik`, `kecamatan`, `tingkatan`, `jumlah`, `tahun`) VALUES
(4, 'Bungku Tengah', 'tk', 0, 2019),
(5, 'Bungku Selatan', 'tk', 0, 2019),
(6, 'Bungku Tengah', 'sd', 20, 2019),
(7, 'Bungku Tengah', 'smp', 115, 2019),
(8, 'Bungku Tengah', 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jml_siswa`
--

CREATE TABLE `tb_jml_siswa` (
  `id_tb_jml_siswa` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jml_siswa`
--

INSERT INTO `tb_jml_siswa` (`id_tb_jml_siswa`, `kecamatan`, `tingkatan`, `jumlah`, `tahun`) VALUES
(5, 'Bungku Tengah', 'tk', 846, 2019),
(7, 'Bungku Selatan', 'tk', 672, 2019),
(8, 'Bungku Tengah', 'sd', 0, 2019),
(9, 'Bungku Tengah', 'smp', 1420, 2019),
(10, 'Bungku Tengah', 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidik_bersertifikat`
--

CREATE TABLE `tb_pendidik_bersertifikat` (
  `id_tb_pendidik_bersertifikat` int(11) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidik_bersertifikat`
--

INSERT INTO `tb_pendidik_bersertifikat` (`id_tb_pendidik_bersertifikat`, `tingkatan`, `jumlah`, `tahun`) VALUES
(3, 'tk', 24, 2019),
(4, 'sd', 595, 2019),
(5, 'smp', 201, 2019),
(6, 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidik_tdk_bersertifikat`
--

CREATE TABLE `tb_pendidik_tdk_bersertifikat` (
  `id_tb_pendidik_tdk_bersertifikat` int(11) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidik_tdk_bersertifikat`
--

INSERT INTO `tb_pendidik_tdk_bersertifikat` (`id_tb_pendidik_tdk_bersertifikat`, `tingkatan`, `jumlah`, `tahun`) VALUES
(3, 'tk', 324, 2019),
(4, 'sd', 752, 2019),
(5, 'smp', 416, 2019),
(6, 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola_negeri`
--

CREATE TABLE `tb_pengelola_negeri` (
  `id_tb_pengelola_negeri` int(11) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengelola_negeri`
--

INSERT INTO `tb_pengelola_negeri` (`id_tb_pengelola_negeri`, `tingkatan`, `jumlah`, `tahun`) VALUES
(4, 'tk', 1, 2019),
(5, 'sd', 132, 2019),
(6, 'smp', 34, 2019),
(7, 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola_swasta`
--

CREATE TABLE `tb_pengelola_swasta` (
  `id_tb_pengelola_swasta` int(11) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengelola_swasta`
--

INSERT INTO `tb_pengelola_swasta` (`id_tb_pengelola_swasta`, `tingkatan`, `jumlah`, `tahun`) VALUES
(3, 'tk', 120, 2019),
(4, 'sd', 16, 2019),
(5, 'smp', 14, 2019),
(6, 'sma', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rasio`
--

CREATE TABLE `tb_rasio` (
  `id_tb_rasio` int(11) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rasio`
--

INSERT INTO `tb_rasio` (`id_tb_rasio`, `tingkatan`, `nilai`, `tahun`) VALUES
(2, 'tk', '11', 2019),
(3, 'sd', '12.51', 2019),
(4, 'smp', '11.85', 2019),
(5, 'sma', '0', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang_kelas`
--

CREATE TABLE `tb_ruang_kelas` (
  `id_tb_ruang_kelas` int(11) NOT NULL,
  `tingkatan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang_kelas`
--

INSERT INTO `tb_ruang_kelas` (`id_tb_ruang_kelas`, `tingkatan`, `jumlah`, `tahun`) VALUES
(3, 'tk', 268, 2019),
(4, 'sd', 1426, 2019),
(5, 'smp', 291, 2019),
(6, 'sma', 0, 2019);

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
(2, 2019),
(3, 2020),
(4, 2021),
(5, 2022),
(6, 2023),
(7, 2024),
(8, 2025),
(9, 2026),
(10, 2027),
(11, 2028),
(12, 2029),
(13, 2030);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(3, 'kepaladinas', 'e10adc3949ba59abbe56e057f20f883e', 'kadis'),
(4, 'Bungku Tengah', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(5, 'Bungku Selatan', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(6, 'Menui Kepulauan', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(7, 'Bungku Barat', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(8, 'Bumi Raya', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(9, 'Bahodopi', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(10, 'Wita Ponda', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(11, 'Bungku Pesisir', 'e10adc3949ba59abbe56e057f20f883e', 'uptd'),
(12, 'Bungku Timur', 'e10adc3949ba59abbe56e057f20f883e', 'uptd');

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
-- Indexes for table `sekolah_kecamatan`
--
ALTER TABLE `sekolah_kecamatan`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_bangunan_baik`
--
ALTER TABLE `tb_bangunan_baik`
  ADD PRIMARY KEY (`id_tb_bangunan_baik`);

--
-- Indexes for table `tb_bangunan_tdk_baik`
--
ALTER TABLE `tb_bangunan_tdk_baik`
  ADD PRIMARY KEY (`id_tb_bangunan_tdk_baik`);

--
-- Indexes for table `tb_jml_siswa`
--
ALTER TABLE `tb_jml_siswa`
  ADD PRIMARY KEY (`id_tb_jml_siswa`);

--
-- Indexes for table `tb_pendidik_bersertifikat`
--
ALTER TABLE `tb_pendidik_bersertifikat`
  ADD PRIMARY KEY (`id_tb_pendidik_bersertifikat`);

--
-- Indexes for table `tb_pendidik_tdk_bersertifikat`
--
ALTER TABLE `tb_pendidik_tdk_bersertifikat`
  ADD PRIMARY KEY (`id_tb_pendidik_tdk_bersertifikat`);

--
-- Indexes for table `tb_pengelola_negeri`
--
ALTER TABLE `tb_pengelola_negeri`
  ADD PRIMARY KEY (`id_tb_pengelola_negeri`);

--
-- Indexes for table `tb_pengelola_swasta`
--
ALTER TABLE `tb_pengelola_swasta`
  ADD PRIMARY KEY (`id_tb_pengelola_swasta`);

--
-- Indexes for table `tb_rasio`
--
ALTER TABLE `tb_rasio`
  ADD PRIMARY KEY (`id_tb_rasio`);

--
-- Indexes for table `tb_ruang_kelas`
--
ALTER TABLE `tb_ruang_kelas`
  ADD PRIMARY KEY (`id_tb_ruang_kelas`);

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
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paud`
--
ALTER TABLE `paud`
  MODIFY `id_paud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `pendidikan_usia`
--
ALTER TABLE `pendidikan_usia`
  MODIFY `id_pendidikan_usia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sekolah_kecamatan`
--
ALTER TABLE `sekolah_kecamatan`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_bangunan_baik`
--
ALTER TABLE `tb_bangunan_baik`
  MODIFY `id_tb_bangunan_baik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_bangunan_tdk_baik`
--
ALTER TABLE `tb_bangunan_tdk_baik`
  MODIFY `id_tb_bangunan_tdk_baik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_jml_siswa`
--
ALTER TABLE `tb_jml_siswa`
  MODIFY `id_tb_jml_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pendidik_bersertifikat`
--
ALTER TABLE `tb_pendidik_bersertifikat`
  MODIFY `id_tb_pendidik_bersertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pendidik_tdk_bersertifikat`
--
ALTER TABLE `tb_pendidik_tdk_bersertifikat`
  MODIFY `id_tb_pendidik_tdk_bersertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pengelola_negeri`
--
ALTER TABLE `tb_pengelola_negeri`
  MODIFY `id_tb_pengelola_negeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengelola_swasta`
--
ALTER TABLE `tb_pengelola_swasta`
  MODIFY `id_tb_pengelola_swasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rasio`
--
ALTER TABLE `tb_rasio`
  MODIFY `id_tb_rasio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ruang_kelas`
--
ALTER TABLE `tb_ruang_kelas`
  MODIFY `id_tb_ruang_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
