-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 10:23 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('uname', 'uemail', 'upass'),
('Haseeb5220', 'aptech.haseebsiddiqui@gmail.com', 'haseeb'),
('Haseeb5220', 'aptech.haseebsiddiqui@gmail.com', 'haseeb'),
('Haseeb5220', 'aptech.haseebsiddiqui@gmail.com', 'haseeb'),
('rameez', 'raz@gmail.com', 'password'),
('rameez', 'raz@gmail.com', 'password'),
('saqiv', 'saqib@gmail.com', 'saqib'),
('saqiv', 'saqib@gmail.com', 'saqib'),
('saqiv', 'saqib@gmail.com', 'saqib');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(100) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `pass`) VALUES
(1, '0', '0', '0'),
(7, 'a', 'aptech.hase', 'a'),
(8, 'aa', 'a@a', 'aaa'),
(10, 'aa', 'ads@a', 'a'),
(14, 'aa', 'aaaaaa@a', 'asd'),
(16, 'a', 'aaaaaaaaa@A', 'fsa');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  `b_pdf` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `b_cat_id` int(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `img`, `b_pdf`, `author`, `b_cat_id`) VALUES
(7, 'h', 'haseeb', '../../BookCover/812509418_9583770_1350_n.jpg', '../../Books_PDF/235004188_4229227_6222_n.pdf', 'haseeb', 3),
(8, 'zakar', 'Its All About Zakat .', '../BookCover/978546519_9914132_7366_n.jpg', '../Books_PDF/950913794_1845001_6154_n.pdf', 'Molana Sahab Haseeb', 8);

-- --------------------------------------------------------

--
-- Table structure for table `b_cat`
--

CREATE TABLE IF NOT EXISTS `b_cat` (
`cat_id` int(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_cat`
--

INSERT INTO `b_cat` (`cat_id`, `cat_name`) VALUES
(3, 'ggg'),
(8, 'Zakat');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
`id` int(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `speaker_name` varchar(200) NOT NULL,
  `v_cat_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `v_cat`
--

CREATE TABLE IF NOT EXISTS `v_cat` (
`cat_id` int(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v_cat`
--

INSERT INTO `v_cat` (`cat_id`, `cat_name`) VALUES
(1, 'sss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`), ADD KEY `b_cat_id` (`b_cat_id`), ADD KEY `b_cat_id_2` (`b_cat_id`), ADD KEY `b_cat_id_3` (`b_cat_id`), ADD KEY `b_cat_id_4` (`b_cat_id`), ADD KEY `b_cat_id_5` (`b_cat_id`), ADD KEY `b_cat_id_6` (`b_cat_id`), ADD KEY `b_cat_id_7` (`b_cat_id`), ADD KEY `b_cat_id_8` (`b_cat_id`), ADD KEY `b_cat_id_9` (`b_cat_id`), ADD KEY `b_cat_id_10` (`b_cat_id`), ADD KEY `b_cat_id_11` (`b_cat_id`), ADD KEY `b_cat_id_12` (`b_cat_id`), ADD KEY `b_cat_id_13` (`b_cat_id`);

--
-- Indexes for table `b_cat`
--
ALTER TABLE `b_cat`
 ADD PRIMARY KEY (`cat_id`), ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
 ADD PRIMARY KEY (`id`), ADD KEY `v_cat_id` (`v_cat_id`);

--
-- Indexes for table `v_cat`
--
ALTER TABLE `v_cat`
 ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `b_cat`
--
ALTER TABLE `b_cat`
MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `v_cat`
--
ALTER TABLE `v_cat`
MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
ADD CONSTRAINT `bcatid` FOREIGN KEY (`b_cat_id`) REFERENCES `b_cat` (`cat_id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
ADD CONSTRAINT `vcat` FOREIGN KEY (`v_cat_id`) REFERENCES `v_cat` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
