-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 01:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `post` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `post`, `email`, `password`) VALUES
(19, 'Vikash Viraj', 'Admin', 'vikash@gmail.com', 'vikash'),
(17, 'Vishal Thakur', 'Admin', 'vishal@gmail.com', 'shashi'),
(16, 'Shashi Ranjan', 'Admin', 'shashi@gmail.com', 'shashi');

-- --------------------------------------------------------

--
-- Table structure for table `billview`
--

CREATE TABLE `billview` (
  `id` int(11) NOT NULL,
  `invoiceId` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `dates` date NOT NULL,
  `purchaseType` varchar(20) NOT NULL,
  `total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billview`
--

INSERT INTO `billview` (`id`, `invoiceId`, `name`, `phone`, `dates`, `purchaseType`, `total`, `paid`, `due`) VALUES
(15, '10001', 'NA', '', '2020-11-03', 'Retail', 75, 75, 0),
(16, '10002', 'NA', '', '2020-11-03', 'Retail', 124, 124, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) NOT NULL,
  `prod` varchar(200) NOT NULL,
  `gst` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `qty` double NOT NULL,
  `rate` int(20) NOT NULL,
  `invoice` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `prod`, `gst`, `unit`, `qty`, `rate`, `invoice`, `total`) VALUES
(125, 'rice', 0, 'kg', 1, 40, 10010, 40),
(126, 'rice', 0, 'gm', 0.5, 40, 10010, 20),
(127, 'rice', 0, 'gm', 0.1, 40, 10010, 4),
(128, 'rice', 0, 'gm', 0.5, 40, 10010, 20),
(129, 'rice', 0, 'gm', 0.5, 40, 10010, 20),
(130, 'rice', 0, 'gm', 0.4, 40, 10010, 16),
(162, 'dairy milk', 0, '', 0, 12, 10011, 0),
(163, 'dairy milk', 0, '', 0, 12, 10011, 0),
(164, 'dairy milk', 0, '', 0, 12, 10011, 0),
(165, 'dairy milk', 0, 'kg', 0, 12, 10011, 0),
(166, 'dairy milk', 0, '', 0, 12, 10011, 0),
(167, 'dairy milk', 0, '', 0, 12, 10011, 0),
(168, 'dairy milk', 0, 'kg', 0, 12, 10011, 0),
(169, 'dairy milk', 0, '', 0, 12, 10011, 0),
(170, 'dairy milk', 0, 'kg', 0, 12, 10011, 0),
(171, 'dairy milk', 0, '', 0, 12, 10011, 0),
(172, 'dairy milk', 0, '', 0, 12, 10011, 0),
(173, 'dairy milk', 0, '', 0, 12, 10011, 0),
(174, 'dairy milk', 0, '', 0, 12, 10011, 0),
(175, 'dairy milk', 0, '', 0, 12, 10011, 0),
(176, 'dairy milk', 0, '', 10, 12, 10011, 120),
(177, 'dairy milk', 0, '', 10, 12, 10011, 120),
(178, 'dairy milk', 0, '', 10, 12, 10011, 120),
(179, 'dairy milk', 0, '', 10, 12, 10011, 120),
(180, 'dairy milk', 0, 'kg', 10, 12, 10011, 120),
(181, 'dairy milk', 0, 'kg', 10, 12, 10011, 120),
(183, 'AMUL COOL', 0, 'PC', 50, 25, 10011, 1250),
(184, 'AMUL COOL', 0, 'PC', 3, 25, 10001, 75),
(185, 'RICE', 0, 'KG', 2, 42, 10002, 84),
(189, 'GOOD DAY', 0, 'PC', 4, 10, 10002, 40);

-- --------------------------------------------------------

--
-- Table structure for table `itemsgroupname`
--

CREATE TABLE `itemsgroupname` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemsgroupname`
--

INSERT INTO `itemsgroupname` (`id`, `name`) VALUES
(16, 'HARDWARE'),
(15, 'COSMETIC'),
(14, 'GROCERY'),
(13, 'FOOD'),
(17, 'ELECTRIC'),
(18, 'SPORTS'),
(19, 'STATIONERY'),
(20, 'DAIRY');

-- --------------------------------------------------------

--
-- Table structure for table `itemunit`
--

CREATE TABLE `itemunit` (
  `id` int(11) NOT NULL,
  `unitName` varchar(30) NOT NULL,
  `unitSymbol` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemunit`
--

INSERT INTO `itemunit` (`id`, `unitName`, `unitSymbol`) VALUES
(19, 'PICES', 'PC'),
(20, 'KILO GRAM', 'KG'),
(21, 'GRAM', 'G'),
(22, 'METER', 'M'),
(23, 'CENTI METER', 'CM'),
(24, 'LITER', 'L'),
(25, 'MILI LITER', 'ML');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `productCode` int(11) NOT NULL,
  `groups` varchar(20) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `purchaseRate` float NOT NULL,
  `retailRate` float NOT NULL,
  `wholesaleRate` float NOT NULL,
  `quantity` double NOT NULL,
  `alertQuantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `productCode`, `groups`, `unit`, `purchaseRate`, `retailRate`, `wholesaleRate`, `quantity`, `alertQuantity`) VALUES
(53, 'FREE', 0, 'HARDWARE', 'a:2:{i:0;s:2:\"CM\";i:1;s:1:\"L\";', 1, 3, 2, 0, 5),
(54, 'SESION', 0, 'HARDWARE', 'a:2:{i:0;s:2:\"KG\";i:1;s:1:\"G\";', 1, 3, 2, 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `billview`
--
ALTER TABLE `billview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemsgroupname`
--
ALTER TABLE `itemsgroupname`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `itemunit`
--
ALTER TABLE `itemunit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unitName` (`unitName`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `billview`
--
ALTER TABLE `billview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
--
-- AUTO_INCREMENT for table `itemsgroupname`
--
ALTER TABLE `itemsgroupname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `itemunit`
--
ALTER TABLE `itemunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
