-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 03:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer`
--
CREATE DATABASE IF NOT EXISTS `computer` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `computer`;

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `id` int(2) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `myname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `old` varchar(11) NOT NULL,
  `birth` varchar(10) NOT NULL,
  `mont` varchar(13) NOT NULL,
  `Budd` varchar(10) NOT NULL,
  `nality` varchar(5) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `denti` varchar(15) NOT NULL,
  `hound` varchar(10) NOT NULL,
  `village` varchar(5) NOT NULL,
  `alley` varchar(13) NOT NULL,
  `road` varchar(10) NOT NULL,
  `district` varchar(15) NOT NULL,
  `canton` varchar(15) NOT NULL,
  `cuy` varchar(15) NOT NULL,
  `ipostal` varchar(8) NOT NULL,
  `spab` varchar(25) NOT NULL,
  `edc` varchar(25) NOT NULL,
  `current` varchar(25) NOT NULL,
  `cause` varchar(25) NOT NULL,
  `coni` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dw_bd`
--

CREATE TABLE `dw_bd` (
  `id` int(3) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `myname` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin2`
--
ALTER TABLE `admin2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dw_bd`
--
ALTER TABLE `dw_bd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin2`
--
ALTER TABLE `admin2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `dw_bd`
--
ALTER TABLE `dw_bd`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
