-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 172.17.2.48
-- Generation Time: Sep 08, 2020 at 12:51 PM
-- Server version: 5.1.55-log
-- PHP Version: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uniszadb_web_uji`
--

-- --------------------------------------------------------

--
-- Table structure for table `ps_massa_event`
--

CREATE TABLE IF NOT EXISTS `ps_massa_event` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tajuk` varchar(250) NOT NULL,
  `mstkh` datetime NOT NULL,
  `tkhtutup` date NOT NULL,
  `sasaran` int(1) NOT NULL,
  `rekodpada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `oleh` varchar(15) NOT NULL,
  `tempat` varchar(150) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='table rekod daftar massa' AUTO_INCREMENT=46 ;

--
-- Dumping data for table `ps_massa_event`
--

INSERT INTO `ps_massa_event` (`id`, `tajuk`, `mstkh`, `tkhtutup`, `sasaran`, `rekodpada`, `oleh`, `tempat`, `keterangan`) VALUES
(31, 'test2', '2020-09-01 04:00:00', '2020-08-31', 2, '2020-02-10 07:43:25', '800627145015', 'unisza', 'Cubaan \r\n1\r\n2\r\n\r\n3'),
(44, 'test1', '2020-02-29 01:00:00', '2020-02-25', 2, '2020-02-25 00:41:45', '800627145015', 'unisza', '123'),
(45, 'Berenang di De Rhu', '2020-08-20 08:00:00', '2020-08-19', 0, '2020-08-13 00:33:31', '830127115239', 'De RHu', 'Bas di sediakan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
