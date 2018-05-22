-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 01:29 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siahas`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `IDLAYANAN` varchar(10) NOT NULL,
  `IDPEG` varchar(20) NOT NULL,
  `TANGGALSERVICE` datetime DEFAULT NULL,
  `NOMESIN` text,
  `NOKERANGKA` text,
  `NOPOL` text,
  `TIPE` varchar(10) DEFAULT NULL,
  `TAHUN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `KM` varchar(20) DEFAULT NULL,
  `KONDISIAWAL` text,
  `KONDISIBENSIN` varchar(10) DEFAULT NULL,
  `CATATANLAIN` text,
  `KELUHANKONSUMEN` text,
  `ANALISASA` text,
  `WAKTUDATANG` datetime DEFAULT NULL,
  `WAKTUMULAISERVICE` datetime DEFAULT NULL,
  `WAKTUSELESAISERVICE` datetime DEFAULT NULL,
  `WAKTUPENGECEKAN` datetime DEFAULT NULL,
  `JENISPENGECEKAN` varchar(20) DEFAULT NULL,
  `BIAYAKERJA` varchar(30) DEFAULT NULL,
  `BIAYASUKUCADANG` varchar(30) DEFAULT NULL,
  `NOURUT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `melakukan`
--

CREATE TABLE `melakukan` (
  `IDLAYANAN` varchar(10) NOT NULL,
  `IDPENJUALAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menerima`
--

CREATE TABLE `menerima` (
  `IDPELANGGAN` int(11) NOT NULL,
  `IDLAYANAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `IDPEG` varchar(20) NOT NULL,
  `IDPENGGUNA` varchar(20) NOT NULL,
  `NAMAPEG` varchar(20) NOT NULL,
  `NOTLP` varchar(20) NOT NULL,
  `EMAIL` text NOT NULL,
  `JABATANPEG` varchar(20) NOT NULL,
  `SUBJABATANPEG` varchar(20) NOT NULL,
  `DOKUMENPEG` text NOT NULL,
  `ALAMATPEG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IDPELANGGAN` int(11) NOT NULL,
  `NAMAPELANGGAN` varchar(100) DEFAULT NULL,
  `ALAMATPELANGGAN` text,
  `DAERAHPELANGGAN` text,
  `NOTELPPELANGGAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_suku_cadang`
--

CREATE TABLE `pembelian_suku_cadang` (
  `IDPEMBELIAN` varchar(20) NOT NULL,
  `STOKBELI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IDPENGGUNA` varchar(20) NOT NULL,
  `IDPEG` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `SESITERAKHIR` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_suku_cadang`
--

CREATE TABLE `penjualan_suku_cadang` (
  `IDPENJUALAN` varchar(20) NOT NULL,
  `JENIS_TIPEKENDARAAN` varchar(20) DEFAULT NULL,
  `TGLPENJUALAN` date DEFAULT NULL,
  `STOKJUAL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scxpembelian`
--

CREATE TABLE `scxpembelian` (
  `IDPEMBELIAN` varchar(20) NOT NULL,
  `IDSC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scxpenjualan`
--

CREATE TABLE `scxpenjualan` (
  `IDSC` varchar(20) NOT NULL,
  `IDPENJUALAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suku_cadang`
--

CREATE TABLE `suku_cadang` (
  `IDSC` varchar(20) NOT NULL,
  `NAMASC` varchar(20) DEFAULT NULL,
  `HARGASC` varchar(20) DEFAULT NULL,
  `JENISSC` varchar(20) DEFAULT NULL,
  `TIPEKENDARAAN` varchar(20) DEFAULT NULL,
  `STOCKSC` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suku_cadang`
--

INSERT INTO `suku_cadang` (`IDSC`, `NAMASC`, `HARGASC`, `JENISSC`, `TIPEKENDARAAN`, `STOCKSC`) VALUES
('SC0', 'Suku Cadang', '100000', 'Jenis Suku Cadang', 'Ayam', NULL),
('SC1', 'Suku Cadang Baru', '50000', 'Jenis SC', 'Bebek', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `IDSUPPLIER` varchar(20) NOT NULL,
  `NAMASUPPLIER` varchar(20) DEFAULT NULL,
  `ALAMATSUPPLIER` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`IDSUPPLIER`, `NAMASUPPLIER`, `ALAMATSUPPLIER`) VALUES
('SP0', 'Sejahtera', 'Jalani Saja, Jangan Mengeluh'),
('SP1', 'Mentega Leleh', 'Jalan Sendiri Sendiri Saja');

-- --------------------------------------------------------

--
-- Table structure for table `supxpembelian`
--

CREATE TABLE `supxpembelian` (
  `IDSUPPLIER` varchar(20) NOT NULL,
  `IDPEMBELIAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`IDLAYANAN`),
  ADD KEY `IDPEG` (`IDPEG`);

--
-- Indexes for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD PRIMARY KEY (`IDLAYANAN`,`IDPENJUALAN`),
  ADD KEY `IDPENJUALAN` (`IDPENJUALAN`);

--
-- Indexes for table `menerima`
--
ALTER TABLE `menerima`
  ADD PRIMARY KEY (`IDPELANGGAN`,`IDLAYANAN`),
  ADD KEY `IDLAYANAN` (`IDLAYANAN`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`IDPEG`),
  ADD KEY `IDPENGGUNA` (`IDPENGGUNA`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IDPELANGGAN`);

--
-- Indexes for table `pembelian_suku_cadang`
--
ALTER TABLE `pembelian_suku_cadang`
  ADD PRIMARY KEY (`IDPEMBELIAN`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IDPENGGUNA`),
  ADD KEY `IDPEG` (`IDPEG`);

--
-- Indexes for table `penjualan_suku_cadang`
--
ALTER TABLE `penjualan_suku_cadang`
  ADD PRIMARY KEY (`IDPENJUALAN`);

--
-- Indexes for table `scxpembelian`
--
ALTER TABLE `scxpembelian`
  ADD PRIMARY KEY (`IDPEMBELIAN`,`IDSC`),
  ADD KEY `IDSC` (`IDSC`);

--
-- Indexes for table `scxpenjualan`
--
ALTER TABLE `scxpenjualan`
  ADD PRIMARY KEY (`IDSC`,`IDPENJUALAN`),
  ADD KEY `IDPENJUALAN` (`IDPENJUALAN`);

--
-- Indexes for table `suku_cadang`
--
ALTER TABLE `suku_cadang`
  ADD PRIMARY KEY (`IDSC`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`IDSUPPLIER`);

--
-- Indexes for table `supxpembelian`
--
ALTER TABLE `supxpembelian`
  ADD PRIMARY KEY (`IDSUPPLIER`,`IDPEMBELIAN`),
  ADD KEY `IDPEMBELIAN` (`IDPEMBELIAN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`IDPEG`) REFERENCES `pegawai` (`IDPEG`);

--
-- Constraints for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD CONSTRAINT `melakukan_ibfk_1` FOREIGN KEY (`IDLAYANAN`) REFERENCES `layanan` (`IDLAYANAN`),
  ADD CONSTRAINT `melakukan_ibfk_2` FOREIGN KEY (`IDPENJUALAN`) REFERENCES `penjualan_suku_cadang` (`IDPENJUALAN`);

--
-- Constraints for table `menerima`
--
ALTER TABLE `menerima`
  ADD CONSTRAINT `menerima_ibfk_1` FOREIGN KEY (`IDLAYANAN`) REFERENCES `layanan` (`IDLAYANAN`),
  ADD CONSTRAINT `menerima_ibfk_2` FOREIGN KEY (`IDPELANGGAN`) REFERENCES `pelanggan` (`IDPELANGGAN`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IDPEG`) REFERENCES `pegawai` (`IDPEG`);

--
-- Constraints for table `scxpembelian`
--
ALTER TABLE `scxpembelian`
  ADD CONSTRAINT `scxpembelian_ibfk_1` FOREIGN KEY (`IDPEMBELIAN`) REFERENCES `suku_cadang` (`IDSC`),
  ADD CONSTRAINT `scxpembelian_ibfk_2` FOREIGN KEY (`IDSC`) REFERENCES `pembelian_suku_cadang` (`IDPEMBELIAN`);

--
-- Constraints for table `scxpenjualan`
--
ALTER TABLE `scxpenjualan`
  ADD CONSTRAINT `scxpenjualan_ibfk_1` FOREIGN KEY (`IDPENJUALAN`) REFERENCES `penjualan_suku_cadang` (`IDPENJUALAN`),
  ADD CONSTRAINT `scxpenjualan_ibfk_2` FOREIGN KEY (`IDSC`) REFERENCES `suku_cadang` (`IDSC`);

--
-- Constraints for table `supxpembelian`
--
ALTER TABLE `supxpembelian`
  ADD CONSTRAINT `supxpembelian_ibfk_1` FOREIGN KEY (`IDPEMBELIAN`) REFERENCES `pembelian_suku_cadang` (`IDPEMBELIAN`),
  ADD CONSTRAINT `supxpembelian_ibfk_2` FOREIGN KEY (`IDSUPPLIER`) REFERENCES `supplier` (`IDSUPPLIER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
