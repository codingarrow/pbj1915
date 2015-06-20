-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2015 at 11:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_panasonicbeauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `pb_menus`
--

CREATE TABLE IF NOT EXISTS `pb_menus` (
`id` int(11) NOT NULL,
  `description` varchar(180) NOT NULL,
  `pagelink` varchar(180) NOT NULL,
  `menuorder` int(8) NOT NULL DEFAULT '0',
  `menu_parent_id` int(11) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pb_menus`
--

INSERT INTO `pb_menus` (`id`, `description`, `pagelink`, `menuorder`, `menu_parent_id`, `date_created`) VALUES
(2, 'Executive Articles', 'exexarticles.php', 1, 1, '2015-06-18 08:13:48'),
(3, 'Executive Events', 'execevents.asp', 2, 1, '2015-06-18 08:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `pb_siteconstants`
--

CREATE TABLE IF NOT EXISTS `pb_siteconstants` (
`id` int(11) NOT NULL,
  `code` varchar(5) NOT NULL,
  `description` varchar(180) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pb_users`
--

CREATE TABLE IF NOT EXISTS `pb_users` (
`id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL DEFAULT '',
  `gender` varchar(5) NOT NULL DEFAULT '',
  `activated` int(1) NOT NULL DEFAULT '0',
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `minit` varchar(5) NOT NULL DEFAULT '',
  `ipsignup` varchar(100) NOT NULL DEFAULT '',
  `dob` date NOT NULL DEFAULT '0000-00-00',
  `address1` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pb_menus`
--
ALTER TABLE `pb_menus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pb_siteconstants`
--
ALTER TABLE `pb_siteconstants`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pb_users`
--
ALTER TABLE `pb_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pb_menus`
--
ALTER TABLE `pb_menus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pb_siteconstants`
--
ALTER TABLE `pb_siteconstants`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pb_users`
--
ALTER TABLE `pb_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
