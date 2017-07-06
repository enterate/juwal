-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 06:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `juwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `migrations`:
--

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `browser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `session`:
--

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `ip_address`, `timestamp`, `data`, `id_user`, `browser`) VALUES
('433BpcXiMVjOgCqGyGomoaho5yrM', '', 0, '', 'd94973c2d0826f0', 'Mozilla Firefox'),
('Lj88hNZpZwcPG6naqsO3fbj2OgsJ', '', 0, '', 'd94973c2d0826f0', 'Mozilla Firefox');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `profile` text,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_join` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `token_reg` varchar(200) DEFAULT NULL,
  `token_forgot_pass` varchar(200) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `address` text,
  `facebook_url` varchar(200) DEFAULT NULL,
  `pict_name` varchar(200) DEFAULT NULL,
  `is_subscribe` int(1) NOT NULL DEFAULT '1',
  `is_valid` int(1) NOT NULL DEFAULT '0',
  `is_read` int(1) NOT NULL DEFAULT '0',
  `meta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `role`, `nama`, `phone`, `dob`, `password`, `gender`, `profile`, `last_login`, `date_join`, `token_reg`, `token_forgot_pass`, `level`, `address`, `facebook_url`, `pict_name`, `is_subscribe`, `is_valid`, `is_read`, `meta`) VALUES
('', 'a', '10', NULL, NULL, NULL, '$2y$12$.0/CBrd3uSMOiSFQTAdtL.okHY5EcvMoXVbV6DhN1vkNQbK17hl6q', NULL, NULL, '2017-07-03 13:59:22', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL),
('d94973c2d0826f0', 'fatchul.amin1@gmail.com', '0', NULL, '099388', NULL, '$2y$12$iN.5QXlzs88eY1ax.puArOpCPfavthHx4AgQFiKp69fIXaNDJhciS', NULL, NULL, '2017-07-06 11:14:58', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_tracking`
--

CREATE TABLE IF NOT EXISTS `_tracking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `expire` varchar(100) NOT NULL,
  `date_modified` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `_tracking`:
--

--
-- Dumping data for table `_tracking`
--

INSERT INTO `_tracking` (`id`, `name`, `value`, `expire`, `date_modified`, `browser`, `note`) VALUES
(1, 'front/login', '::1', '1499270086', '2017-07-05 15:54:46', 'Mozilla Firefox', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `_tracking`
--
ALTER TABLE `_tracking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_tracking`
--
ALTER TABLE `_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
