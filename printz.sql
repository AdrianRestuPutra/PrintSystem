-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2015 at 07:26 AM
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
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `typecolor` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(30) NOT NULL,
  PRIMARY KEY (`typecolor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`typecolor`, `color`) VALUES
(1, 'Color'),
(2, 'Black and White');

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
-- Table structure for table `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `shift` int(11) NOT NULL AUTO_INCREMENT,
  `shiftname` varchar(50) NOT NULL,
  PRIMARY KEY (`shift`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`shift`, `shiftname`) VALUES
(1, '07.00 - 07.30'),
(2, '08.50 - 09.30'),
(3, '10.50 - 11.30'),
(4, '12.50 - 13.30'),
(5, '14.50 - 15.30'),
(6, '16.50 - 17.30');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status`) VALUES
('Done'),
('On Recieved'),
('Order'),
('Processing');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `idFile` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `filecopy` int(11) NOT NULL,
  `typecolor` int(11) NOT NULL,
  `shift` int(11) NOT NULL,
  `datestart` varchar(255) NOT NULL,
  `dateend` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`idFile`),
  KEY `typecolor` (`typecolor`,`shift`,`status`),
  KEY `shift` (`shift`,`status`),
  KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `nohp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'daniel', 'nbGiHEAhl5t2WmpVRHqdhaGglIbJX4d1', '$2y$13$0v.wgV2piwBUZJuIS5mPi.9/unlvYbx7lR0kfmqsEQhVOieDCGk0G', NULL, 'aldanielyosep@gmail.com', '', 10, 1432969969, 1432969969),
(2, 'qq', 'qiG3Z5GtX44QuZS-nLS7Yio8WcANJM21', '$2y$13$gXVam9GWO19NIDV8LDDjeOkoP50Hv5aoHrapqItj0ZNA/yFFrvgMS', NULL, 'al@gmail.com', '08568094008', 10, 1433056394, 1433056394),
(3, 'asd', 'qH47tmSXDE0-U3Aztkb_xkYzrr9tuCEN', '$2y$13$z5THz8nhVLgQpPYHBkjKO.dt3Jdmomn/IzaL3v3Z/PPSa2XeZH80i', NULL, 'asd@asd.com', '1234555', 10, 1433923033, 1433923033),
(4, 'adrian', 'bE0e523bwKAuEY_DJr-dSdh0BdyRMjsM', '$2y$13$QIWZP0EOGuxPGkING0wOH.T1rbXM5Dk2lxfwXDVz2amAc/FnfaH9a', NULL, 'adrian@y.com', '3232323', 10, 1434957005, 1434957005),
(5, 'tes123', 'woGZlQd8S0EHP8V3DeI6W33539ZmcuSh', '$2y$13$Y9rWKYMxrvok3iEnCFkMseXLaDU7t/XQVpULyrAS9edKZoqSfW9EK', NULL, 'tes@tes.com', '32323232', 10, 1434957034, 1434957034);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_4` FOREIGN KEY (`status`) REFERENCES `status` (`status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`typecolor`) REFERENCES `color` (`typecolor`),
  ADD CONSTRAINT `upload_ibfk_3` FOREIGN KEY (`shift`) REFERENCES `shift` (`shift`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
