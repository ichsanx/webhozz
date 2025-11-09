-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:33 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyawan_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `desk_singkat` varchar(200) NOT NULL,
  `detail_desk` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `desk_singkat`, `detail_desk`, `kategori`, `foto`) VALUES
(4, 'dddddd', 'dddddd', 'dddd', '2', '4503276_20140420093956.jpg'),
(5, 'ghhhhhhhh', 'hhhhhh', 'hhhhh', '1', 'images_(1).jpg'),
(8, 'fsffsfs', 'fsfsfsfs', 'sfsfsfs', '2', 'desaingw.png'),
(9, 'qqqq', 'qqqq', 'qqqqq', '3', 'images_(2).jpg'),
(10, 'aaaa', 'aaaa', 'aaaa', '3', 'images_(2).png'),
(11, 'ggg', 'gggg', 'gggg', '4', 'images_(5).jpg'),
(12, 'pppp', 'pppp', 'ppppp', '2', 'images_(5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
`kode_divisi` int(11) NOT NULL,
  `desk_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`kode_divisi`, `desk_divisi`) VALUES
(1, 'HRD'),
(2, 'Administrasi dan Keuangan'),
(3, 'Marketing'),
(4, 'Produksi');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
`id_foto` int(11) NOT NULL,
  `nama_file` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`nomor_induk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `kode_divisi` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nomor_induk`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_tlp`, `kode_divisi`, `foto`) VALUES
(5, 'Tomy', 'Jakarta, 22 November 2000', '', 'Islam', 'Jl. albaidho raya 1\r\nRt/Rw: 010/006 no: 79\r\nKelurahan: Lubang Buaya\r\nKecamatan: Cipayung', '09808896344', 1, '12405_1114257674084_1756220945_210054_1852612_n.jpg'),
(6, 'Tomy', 'Jakarta, 22 November 2000', 'Laki-laki', 'Islam', 'Jl. albaidho raya 1\r\nRt/Rw: 010/006 no: 79\r\nKelurahan: Lubang Buaya\r\nKecamatan: Cipayung', '09809898', 1, '13141.jpg'),
(7, 'Komang', 'Jakarta, 06 Agustu1992', '', 'BUdha', 'distrik street', '09280788478', 3, '12405_1114257674084_1756220945_210054_1852612_n.jpg'),
(8, 'kjbkbkjb', 'kjbkjbk', 'Perempuan', 'ljbjblj', 'llnlnl', 'ljljl', 3, '2012_12_01_15_46_28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `desk_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `desk_kategori`) VALUES
(1, 'Teknologi'),
(2, 'Olahraga'),
(3, 'Otomotif'),
(4, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
`id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
 ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`nomor_induk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
MODIFY `kode_divisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `nomor_induk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
