-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2018 at 01:59 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Goblins`
--

-- --------------------------------------------------------

--
-- Table structure for table `Adventurers`
--

CREATE TABLE `Adventurers` (
  `AdventurerID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Class` text NOT NULL,
  `Killedby` text NOT NULL,
  `Gold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Adventurers`
--

INSERT INTO `Adventurers` (`AdventurerID`, `Name`, `Class`, `Killedby`, `Gold`) VALUES
(1, 'Bromdour the Bold', 'Barbarian', 'Sorka', 365),
(2, 'Gamgi the Great', 'Wizard', 'Sorka', 275),
(3, 'Aschi the Fanciful', 'Wizard', 'Morgul', 115),
(4, 'Vuzu the Brute', 'Fighter', 'Bragtag', 267),
(5, 'Zain the Terrible', 'Barbarian', 'Fogmush', 389),
(6, 'Diadom the Foolish', 'Cleric', 'Grumpin', 1),
(7, 'Kias the Sullied', 'Sorcerer', 'Murkrow', 5),
(8, 'Mortred the Swift', 'Gunslinger', 'Sorka', 114),
(9, 'Borkan the Bloodied', 'Barbarian', 'Sorka', 256),
(10, 'Silas the Sick', 'AntiPaladin', 'Sorkin', 159),
(11, 'Saladin the Honorable', 'Fighter', 'Aska', 357),
(12, 'Midas the Opulant', 'Wizard', 'Morgul', 1456),
(13, 'Bayard the Shadow', 'Rouge', 'Fogmush', 147);

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
  `UniqueID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Role` text NOT NULL,
  `Color` text NOT NULL,
  `KillCount` int(11) NOT NULL,
  `Gold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`UniqueID`, `Name`, `Role`, `Color`, `KillCount`, `Gold`) VALUES
(1, 'Morgul', 'Chieftain', 'Green', 14, 3567),
(3, 'CromDrom', 'Cleric', 'Brown', 1, 35),
(4, 'Corkin', 'Hunter', 'Green', 89, 2357),
(5, 'Sorka', 'Guard', 'Orange', 14, 3457),
(6, 'Sorkin', 'Guard', 'Orange', 13, 875),
(7, 'Bragtag', 'Runt', 'Yellow', 9, 653),
(8, 'Sprag', 'Elder', 'Brown', 104, 86),
(9, 'Grumpin', 'Elder', 'Orange', 9, 146),
(10, 'Murkrow', 'Grunt', 'Green', 18, 354),
(11, 'Aska', 'Hunter', 'Green', 36, 653),
(12, 'Mopie', 'Runt', 'Brown', -1, 15),
(13, 'Fogmush', 'Grunt', 'Orange', 2, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Adventurers`
--
ALTER TABLE `Adventurers`
  ADD PRIMARY KEY (`AdventurerID`);

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`UniqueID`),
  ADD UNIQUE KEY `UniqueID` (`UniqueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Adventurers`
--
ALTER TABLE `Adventurers`
  MODIFY `AdventurerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Members`
--
ALTER TABLE `Members`
  MODIFY `UniqueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
