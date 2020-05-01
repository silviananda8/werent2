-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 04:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `werent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `thumbnail`, `artikel`) VALUES
(1, 'Gunung Bromo', '220cd-280px-mount_bromo_at_sunrise-_showing_its_volcanoes_and_mount_semeru_-background-.jpg', '<p>\n	<span style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 13px;\">Gunung Bromo atau dalam bahasa Tengger dieja &quot;Brama&quot;, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah &plusmn; 800 meter dan &plusmn; 600 meter. Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.<img alt=\"\" src=\"https://drive.google.com/open?id=14XwxmyRkeN7x_9-3PF1Uc8BQE0MkrckO\" /></span></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_pariwisata`
--

CREATE TABLE `artikel_pariwisata` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `KONTEN_ARTIKEL` varchar(20) DEFAULT NULL,
  `JUDUL_ARTIKEL` varchar(50) DEFAULT NULL,
  `TEXT_ARTIKEL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `ID_KENDARAAN` int(11) NOT NULL,
  `MERK_KENDARAAN` varchar(20) DEFAULT NULL,
  `NAMA_KENDARAAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI_KENDARAAN` text,
  `JENIS_KENDARAAN` varchar(12) DEFAULT NULL,
  `TRANSISI` varchar(9) DEFAULT NULL,
  `HARGA_SEWA_KENDARAAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keuntungan`
--

CREATE TABLE `keuntungan` (
  `id_keuangan` int(11) NOT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuntungan`
--

INSERT INTO `keuntungan` (`id_keuangan`, `bulan`, `jumlah`) VALUES
(0, 'January', 1000000),
(2, 'february', 1500000),
(3, 'maret', 1300000),
(4, 'april', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `ID_MOBIL` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL,
  `KAPASITAS` int(11) DEFAULT NULL,
  `PINTU` int(11) DEFAULT NULL,
  `AIRBAG` varchar(5) DEFAULT NULL,
  `PENDINGIN_UDARA` varchar(5) DEFAULT NULL,
  `POWER_WINDOWS` varchar(5) DEFAULT NULL,
  `POWER_DOOR_LOCK` varchar(5) DEFAULT NULL,
  `REM_ANTI_LOCK` varchar(5) DEFAULT NULL,
  `POWER_STEERING` varchar(5) DEFAULT NULL,
  `RADIO` varchar(20) DEFAULT NULL,
  `BAGASI` int(11) DEFAULT NULL,
  `SUPIR` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `ID_MOTOR` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `ID_PEMILIK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `FOTO_PEMILIK` longblob,
  `REKENING_PEMILIK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `ID_PENYEWA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `FOTO_PENYEWA` int(11) DEFAULT NULL,
  `REKENING_PENYEWA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_PESAN` int(11) NOT NULL,
  `ID_PENYEWA` int(11) DEFAULT NULL,
  `ID_RENTAL` int(11) NOT NULL,
  `NAMA_PESAN` varchar(50) DEFAULT NULL,
  `DETAIL` text,
  `LOKASI_PENJEMPUTAN` varchar(50) DEFAULT NULL,
  `LOKASI_PENGANTARAN` varchar(50) DEFAULT NULL,
  `TANGGAL_PENGAMBILAN` datetime DEFAULT NULL,
  `TANGGAL_PENGEMBALIAN` datetime DEFAULT NULL,
  `TARIF_JARAK_TEMPUH` int(11) DEFAULT NULL,
  `TARIF_PER_MIL_TAMBAHAN` int(11) DEFAULT NULL,
  `TARIF_JUMLAH_HARI` int(11) DEFAULT NULL,
  `TARIF_JAM_TAMBAHAN` int(11) DEFAULT NULL,
  `TARIF_KENDARAAN` int(11) DEFAULT NULL,
  `TARIF_KENDARAAN_TAMBAHAN` int(11) DEFAULT NULL,
  `TARIF_SEWA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `ID_RENTAL` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) DEFAULT NULL,
  `ID_PEMILIK` int(11) DEFAULT NULL,
  `NAMA_RENTAL` varchar(20) DEFAULT NULL,
  `DESKRIPSI_RENTAL` text,
  `ALAMAT_RENTAL` varchar(50) DEFAULT NULL,
  `FOTO_RENTAL` longblob,
  `LAMA_PEMESANAN_MINIMM` int(11) DEFAULT NULL,
  `JAM_BUKA` time DEFAULT NULL,
  `JAM_TUTUP` time DEFAULT NULL,
  `PERSYARATAN_JARAK_WAKTU_OEMESANAN` int(11) DEFAULT NULL,
  `ATURAN_PEMESANAN` text,
  `KEBIJAKAN_PEMBATALAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `ID_PESAN` int(11) DEFAULT NULL,
  `KETERANGAN_TRANSAKSI` text,
  `KOMENTAR_TRANSAKSI` text,
  `RATING` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `DAERAH` varchar(25) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `NEGARA_TETMPAT_TINGGAL` varchar(20) DEFAULT NULL,
  `TELEPON_SELULER` int(11) DEFAULT NULL,
  `KETERANGAN_USER` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD KEY `FK_TERBAGI` (`ID_USER`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel_pariwisata`
--
ALTER TABLE `artikel_pariwisata`
  ADD PRIMARY KEY (`ID_ARTIKEL`),
  ADD KEY `FK_MEMBUAT` (`ID_ADMIN`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`ID_KENDARAAN`);

--
-- Indexes for table `keuntungan`
--
ALTER TABLE `keuntungan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`ID_MOBIL`),
  ADD KEY `FK_TERBAGI4` (`ID_KENDARAAN`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`ID_MOTOR`),
  ADD KEY `FK_TERBAGI5` (`ID_KENDARAAN`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`ID_PEMILIK`),
  ADD KEY `FK_TERBAGI2` (`ID_USER`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`ID_PENYEWA`),
  ADD KEY `FK_TERBAGI3` (`ID_USER`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_PESAN`),
  ADD KEY `FK_MEMESAN` (`ID_PENYEWA`),
  ADD KEY `FK_MENYEWAKAN` (`ID_RENTAL`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`ID_RENTAL`),
  ADD KEY `FK_MEMPUNYAI` (`ID_PEMILIK`),
  ADD KEY `FK_TERDAPAT` (`ID_KENDARAAN`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_MEMILIKI` (`ID_PESAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_TERBAGI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `artikel_pariwisata`
--
ALTER TABLE `artikel_pariwisata`
  ADD CONSTRAINT `FK_MEMBUAT` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `FK_TERBAGI4` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `FK_TERBAGI5` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Constraints for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD CONSTRAINT `FK_TERBAGI2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD CONSTRAINT `FK_TERBAGI3` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `FK_MEMESAN` FOREIGN KEY (`ID_PENYEWA`) REFERENCES `penyewa` (`ID_PENYEWA`),
  ADD CONSTRAINT `FK_MENYEWAKAN` FOREIGN KEY (`ID_RENTAL`) REFERENCES `rental` (`ID_RENTAL`);

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_PEMILIK`) REFERENCES `pemilik` (`ID_PEMILIK`),
  ADD CONSTRAINT `FK_TERDAPAT` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_PESAN`) REFERENCES `pesanan` (`ID_PESAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
