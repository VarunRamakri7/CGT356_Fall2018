-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2018 at 01:16 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `PaymentInformation`
--

CREATE TABLE `PaymentInformation` (
  `uniqueid` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `cardnumber` int(16) NOT NULL,
  `cardtype` varchar(10) NOT NULL,
  `expiration` date NOT NULL,
  `ccv` int(4) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` int(9) NOT NULL,
  `country` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectlogin`
--

CREATE TABLE `projectlogin` (
  `uniqueid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `signedforemail` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ShippingAddress`
--

CREATE TABLE `ShippingAddress` (
  `uniqueid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` int(9) NOT NULL,
  `country` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PaymentInformation`
--
ALTER TABLE `PaymentInformation`
  ADD PRIMARY KEY (`uniqueid`);

--
-- Indexes for table `projectlogin`
--
ALTER TABLE `projectlogin`
  ADD PRIMARY KEY (`uniqueid`);

--
-- Indexes for table `ShippingAddress`
--
ALTER TABLE `ShippingAddress`
  ADD PRIMARY KEY (`uniqueid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PaymentInformation`
--
ALTER TABLE `PaymentInformation`
  MODIFY `uniqueid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projectlogin`
--
ALTER TABLE `projectlogin`
  MODIFY `uniqueid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ShippingAddress`
--
ALTER TABLE `ShippingAddress`
  MODIFY `uniqueid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
