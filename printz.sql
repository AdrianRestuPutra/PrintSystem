-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2015 at 05:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `printz`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1432969872),
('m130524_201442_init', 1432969877);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `idFile` int(11) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`idFile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`idFile`, `fileName`) VALUES
(1, 'zpTCr-wFf2pZVLesg2AI1_dYkvCvCd2e.pdf'),
(4, 'hgOcQhkk6H5HjNKGR7lMHzPckEiRPFWT.pdf'),
(5, 'rWgbieggpiPHjV-Rz-cU-maCpS7k5A3v.pdf'),
(6, 'C3odDjQpKU1y2xCeQRadVI6cJrzr0zhs.pdf'),
(7, 'qwjIpZTuSA5Bk7FRJyCsCmPFnSu-hZyh.pdf'),
(8, 'fzDBJTXnCScmkS728_u4kPOI0yjORzaH.pdf'),
(9, 'JHirGtSGA9QZYl3cIXtilN-YaiOT01g9.pdf'),
(10, '_jxi77zK8PfY9FBxspolnuo_wkKP6dGG.pdf'),
(11, 'cv.pdf.pdf'),
(12, 'FzW-JFwNTVtyyxIgNW2mpwLotu_Enkno.pdf'),
(13, 'uHVwGlwhHTX0LnlO1ptk-d1R-4GGbW-w.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `nohp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'daniel', 'nbGiHEAhl5t2WmpVRHqdhaGglIbJX4d1', '$2y$13$0v.wgV2piwBUZJuIS5mPi.9/unlvYbx7lR0kfmqsEQhVOieDCGk0G', NULL, 'aldanielyosep@gmail.com', '', 10, 1432969969, 1432969969),
(2, 'qq', 'qiG3Z5GtX44QuZS-nLS7Yio8WcANJM21', '$2y$13$gXVam9GWO19NIDV8LDDjeOkoP50Hv5aoHrapqItj0ZNA/yFFrvgMS', NULL, 'al@gmail.com', '08568094008', 10, 1433056394, 1433056394);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
