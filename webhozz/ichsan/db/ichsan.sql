-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ichsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(7) NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8 NOT NULL,
  `isi` text CHARACTER SET utf8 NOT NULL,
  `penulis` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tanggal` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `isi`, `penulis`, `tanggal`) VALUES
(1, 'Rossi Terjatuh', 'Otomotif', 'Rosi Terjatuh dan tak bisa bangkit lagi', '', ''),
(2, 'Kurt Cobain Dead', 'Music', 'Kurt Cobain Bunuh diri', 'Mr.X', ''),
(3, 'LAMB OF GOD', 'Music', 'DEATH METAL mulai bangkit', 'Mr.X', ''),
(4, 'LORENZO', 'OTOMOTIF', 'Lorenzo telah kalah dalam turnament', 'Mr.X', ''),
(5, 'DUCATI', 'OTOMOTIF', 'Lorenzo telah memenangkan turnament', 'lupa', ''),
(6, 'SID', 'MUSIK', 'Superman Is Dead rilis album baru', 'lupa', ''),
(7, 'SID', 'MUSIK', 'Superman Is Dead rilis album baru', 'lupa', 'Sunday, 05/11/17'),
(8, 'BURGERKILL', 'MUSIK', 'BURGERKILL rilis album baru', 'lupa', 'Sunday, 05/11/17'),
(9, 'EST', 'MUSIK', 'EST rilis album baru', 'lupa', 'Sunday, 17/11/05'),
(10, 'PETERPAN', 'MUSIK', 'PETERPAN Bubar', 'lupa', 'Sunday, 17/11/05'),
(11, 'Laptop Gratis free 1 dapat 1', 'teknologi', 'Tepat dihari minggu laptop untuk Lenovo dikenakan gratis....', 'Lupa', 'Sunday, 17/11/05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
