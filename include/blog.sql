-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 02:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_very`
--

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE `pics` (
  `id` int(11) NOT NULL,
  `image` mediumtext NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `image`, `text`) VALUES
(4, 'coding-dojo.png', 'sdsadasdsadsd asdsadsadsadwdwbbdwubdw wkduwuidiwudniuwniudnwd wdiuwiudwiudwnbdbwdwdiuwddwdwd'),
(5, 'Capture.PNG', 'asdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd'),
(6, 'nigeriantech.PNG', 'sadsadsadasdsasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd'),
(7, 'nigeriantech.PNG', 'sadsadsadasdsasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd'),
(8, 'nigeriantech.PNG', 'sadsadsadasdsasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsdasdsadsdsadasdasd\r\nsadasdasdasdsadsad\r\nsdsadsadasdasdasdsd');

-- --------------------------------------------------------

--
-- Table structure for table `sitedetails`
--

CREATE TABLE `sitedetails` (
  `id` int(11) NOT NULL,
  `sitelogo` mediumtext DEFAULT NULL,
  `sitetitle` mediumtext DEFAULT NULL,
  `sitetagline` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitedetails`
--

INSERT INTO `sitedetails` (`id`, `sitelogo`, `sitetitle`, `sitetagline`) VALUES
(1, 'p.png', 'BiggiDroid Simple PHP CMS', 'Anybody can CODE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first` varchar(10000) DEFAULT NULL,
  `last` varchar(10000) DEFAULT NULL,
  `username` varchar(10000) DEFAULT NULL,
  `password` varchar(10000) DEFAULT NULL,
  `apitoken` varchar(100) DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT 0,
  `email` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `username`, `password`, `apitoken`, `verify`, `email`) VALUES
(1, 'Admin', 'Page', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'c5c19e98afe0827d801f158abcde8d63', 0, 'adeleyeayodeji12345@gmail.com'),
(4, 'Tunde', 'Oluwabamidele', 'tunde', '1b0e5f02623d653f0f5ce09f6b1e0f54', '46bedeb833f03fc0194bad79a7e1c26b', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitedetails`
--
ALTER TABLE `sitedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sitedetails`
--
ALTER TABLE `sitedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
