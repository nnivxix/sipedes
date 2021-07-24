-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2021 at 01:03 AM
-- Server version: 8.0.25-0ubuntu0.20.10.1
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int NOT NULL,
  `id_kk` int NOT NULL,
  `id_pend` int NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `id_kk`, `id_pend`, `hubungan`) VALUES
(2, 1, 2, 'Istri'),
(3, 2, 3, 'Kepala Keluarga'),
(4, 2, 4, 'Istri'),
(5, 3, 6, 'Kepala Keluarga'),
(6, 3, 7, 'Istri'),
(9, 3, 8, 'Anak'),
(10, 4, 9, 'Anak'),
(12, 1, 5, 'Anak'),
(13, 1, 9, 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datang`
--

CREATE TABLE `tb_datang` (
  `id_datang` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_datang` varchar(20) NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `tgl_datang` date NOT NULL,
  `pelapor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datang`
--

INSERT INTO `tb_datang` (`id_datang`, `nik`, `nama_datang`, `jekel`, `tgl_datang`, `pelapor`) VALUES
(1, '90123489', 'Khoirul Iman', 'LK', '2020-09-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepindah`
--

CREATE TABLE `tb_kepindah` (
  `alasan_pindah` varchar(1) NOT NULL,
  `alamat_tujuan` varchar(16) NOT NULL,
  `pind_desa` varchar(16) NOT NULL,
  `pind_tel` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pind_kab` varchar(16) NOT NULL,
  `pind_prop` varchar(16) NOT NULL,
  `pind_rt` varchar(2) NOT NULL,
  `pind_rw` varchar(2) NOT NULL,
  `klas_pind` varchar(1) NOT NULL,
  `jen_pind` varchar(1) NOT NULL,
  `stt_kk_tdk_pind` varchar(1) NOT NULL,
  `stt_kk` varchar(1) NOT NULL,
  `pind_renc` date NOT NULL,
  `kode_pos` int DEFAULT NULL,
  `pind_kec` varchar(12) DEFAULT NULL,
  `id_kk` int NOT NULL,
  `pemohon` varchar(15) NOT NULL,
  `id_surat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kepindah`
--

INSERT INTO `tb_kepindah` (`alasan_pindah`, `alamat_tujuan`, `pind_desa`, `pind_tel`, `pind_kab`, `pind_prop`, `pind_rt`, `pind_rw`, `klas_pind`, `jen_pind`, `stt_kk_tdk_pind`, `stt_kk`, `pind_renc`, `kode_pos`, `pind_kec`, `id_kk`, `pemohon`, `id_surat`) VALUES
('1', 'Dusun Maju', 'Desa Mundur', '', 'Ciamis', 'Jawa Utara', '01', '27', '1', '1', '1', '1', '2021-07-01', 45678, 'Majdes', 1, 'Siswanto', 5),
('1', 'Dusun Maju', 'Desa Mundur', '1222', 'Ciamis', 'Jawa Utara', '11', '14', '1', '1', '1', '1', '2021-07-02', 45678, 'Majdes', 3, 'Siswanto', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` int NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL,
  `alamat_kk` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodepos__kk` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`, `alamat_kk`, `kodepos__kk`) VALUES
(1, '1010202030304040', 'Juprianto', 'Majujaya', '01', '02', 'Semarang', 'Semarang', 'Jawa Tengahh', 'Dusun Mundur', '46574'),
(2, '1010202030304012', 'Hardi', 'Majujaya', '02', '02', 'Semarang', 'Semarang', 'Jawa Tengahh', 'Dusun Mundur', '46574'),
(3, '1010202030301111', 'Supardi', 'Majujaya', '02', '02', 'Semarang', 'Semarang', 'Jawa Tengahh', 'Dusun Mundur', '46574'),
(4, '12300000000000321', 'Ahmad', 'Majujaya', '02', '02', 'Semarang', 'Semarang', 'Jawa Tengahh', 'Dusun Mundur', '46574');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahir`
--

CREATE TABLE `tb_lahir` (
  `id_lahir` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `id_kk` int NOT NULL,
  `tempat_lh` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lahir`
--

INSERT INTO `tb_lahir` (`id_lahir`, `nama`, `tgl_lh`, `jekel`, `id_kk`, `tempat_lh`) VALUES
(1, 'Ahmad Yusuf', '2020-09-21', 'LK', 4, 'Ciamis'),
(2, 'Bayu', '2021-07-01', 'LK', 3, 'Jakarta'),
(3, 'Rina', '2021-07-02', 'PR', 2, 'Ciamis'),
(4, 'SUmarno', '2021-07-02', 'LK', 2, 'Ciamis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mendu`
--

CREATE TABLE `tb_mendu` (
  `id_mendu` int NOT NULL,
  `id_pdd` int NOT NULL,
  `tgl_mendu` date NOT NULL,
  `sebab` varchar(20) NOT NULL,
  `tempat_mendu` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mendu`
--

INSERT INTO `tb_mendu` (`id_mendu`, `id_pdd`, `tgl_mendu`, `sebab`, `tempat_mendu`) VALUES
(1, 6, '2020-09-21', 'Usia Tua', 'Jakarta'),
(2, 2, '2021-07-01', 'Sakit', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdd`
--

CREATE TABLE `tb_pdd` (
  `id_pend` int NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL,
  `kec` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kab` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdd`
--

INSERT INTO `tb_pdd` (`id_pend`, `nik`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`, `kec`, `kab`, `prov`) VALUES
(1, '3318090603080002', 'Juprianto', 'Semarang', '2020-09-01', 'LK', 'Majujaya', '01', '02', 'Islam', 'Sudah', 'Nelayan', 'Pindah', 'Cisaga', 'Ciamis', 'Jawa Barat'),
(2, '3318090603080012', 'Anita', 'Kudus', '2020-09-02', 'PR', 'Majujaya', '01', '02', 'Islam', 'Sudah', 'Ibu Rumah Tangga', 'Meninggal', '', '', '0'),
(3, '3318091907080001', 'Hardi', 'Kudus', '2020-09-10', 'LK', 'Majujaya', '02', '02', 'Islam', 'Sudah', 'Petani', 'Ada', '', '', '0'),
(4, '3318091907080022', 'Sawilah', 'Semarang', '2020-09-01', 'PR', 'Majujaya', '01', '04', 'Islam', 'Sudah', 'Ibu Rumah Tangga', 'Ada', '', '', '0'),
(5, '3318090603080123', 'Ali Ahmadi', 'Semarang', '2020-09-01', 'LK', 'Majujaya', '01', '03', 'Islam', 'Belum', 'Pelajar', 'Pindah', '', '', '0'),
(6, '3318091907080001', 'Supardi', 'kudus', '2020-09-01', 'LK', 'Majujaya', '01', '04', 'Islam', 'Sudah', 'Petani', 'Meninggal', 'keda', 'kudus', 'Jawa Tengah'),
(7, '3318091907080007', 'Suparmi', 'Semarang', '2020-09-03', 'PR', 'Majujaya', '01', '01', 'Kristen', 'Sudah', 'Ibu Rumah Tangga', 'Pindah', '', '', '0'),
(8, '3318090603080045', 'Rojali', 'Semarang', '2020-09-01', 'LK', 'Majujaya', '01', '02', 'Islam', 'Sudah', 'PNS', 'Ada', '', '', '0'),
(9, '1234567547890004', 'Bayu', 'Jakarta', '2021-07-01', 'LK', 'Pamas', '12', '34', 'Islam', 'Belum', 'Pelajar', 'Pindah', 'Bolang', 'Bolang', 'Kalimantan Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Kaur Pemerintah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Zainal A', 'admin', '1', 'Administrator'),
(2, 'Somat', 'kaur', '1', 'Kaur Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pindah`
--

CREATE TABLE `tb_pindah` (
  `id_pindah` int NOT NULL,
  `id_pdd` int NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `desa` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kab` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prov` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kec` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rt` int NOT NULL,
  `rw` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pindah`
--

INSERT INTO `tb_pindah` (`id_pindah`, `id_pdd`, `tgl_pindah`, `alasan`, `desa`, `kab`, `prov`, `kec`, `rt`, `rw`) VALUES
(1, 7, '2020-09-20', 'Kerja', 'Pamas', 'Ciamis', 'Jawa Barat', 'Cisaga', 12, 343),
(2, 1, '2021-07-03', 'Kerja', 'Pamas', 'Bolang', 'Kalimantan Tengah', 'Bolang', 12, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `pelapor` (`pelapor`);

--
-- Indexes for table `tb_kepindah`
--
ALTER TABLE `tb_kepindah`
  ADD UNIQUE KEY `id_surat` (`id_surat`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indexes for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_datang`
--
ALTER TABLE `tb_datang`
  MODIFY `id_datang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kepindah`
--
ALTER TABLE `tb_kepindah`
  MODIFY `id_surat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  MODIFY `id_lahir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  MODIFY `id_mendu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pdd`
--
ALTER TABLE `tb_pdd`
  MODIFY `id_pend` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  MODIFY `id_pindah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_pend`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD CONSTRAINT `tb_datang_ibfk_1` FOREIGN KEY (`pelapor`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD CONSTRAINT `tb_lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mendu`
--
ALTER TABLE `tb_mendu`
  ADD CONSTRAINT `tb_mendu_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
  ADD CONSTRAINT `tb_pindah_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `tb_pdd` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
