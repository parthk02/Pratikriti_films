-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 05:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backk`
--

-- --------------------------------------------------------

--
-- Table structure for table `addgallery`
--

CREATE TABLE `addgallery` (
  `id` int(11) NOT NULL,
  `category` varchar(111) NOT NULL,
  `pname` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addgallery`
--

INSERT INTO `addgallery` (`id`, `category`, `pname`, `image`) VALUES
(1, 'Potraits', 'person1', '3.jpg'),
(2, 'Potraits', 'person2', '2.jpg'),
(4, 'Potraits', 'p4', '33.jpg'),
(5, 'Potraits', 'p5', '12.jpg'),
(7, 'Event', 'food', 'f2.JPG'),
(8, 'Event', 'f2', 'f1.JPG'),
(12, 'Event', 'event', '20220512154732_IMG_3573.JPG'),
(18, 'Landscape', 'l1', '44.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(50) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `category`) VALUES
(1, 'Potraits'),
(3, 'Event'),
(5, 'Landscape');

-- --------------------------------------------------------

--
-- Table structure for table `photog`
--

CREATE TABLE `photog` (
  `id` int(123) NOT NULL,
  `Name` varchar(123) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Expertise` varchar(123) NOT NULL,
  `photo` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photog`
--

INSERT INTO `photog` (`id`, `Name`, `Description`, `Expertise`, `photo`) VALUES
(2, 'Parth', 'asdkhasdjha dlkahdljkahd lkasd ladl', 'cinematographer', '3.jpg'),
(3, 'shreya', 'weddjdsijng', 'wedding', 'IMG_20230420_110816.jpg'),
(4, 'shaban', 'sdvlhslvknsdklvnslkvnlsdkvn', 'photographer', 'IMG_20230401_160609.jpg'),
(5, 'mayur', 'sghbskjdkj', 'videographer', 'IMG_20230401_160609.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addgallery`
--
ALTER TABLE `addgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photog`
--
ALTER TABLE `photog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addgallery`
--
ALTER TABLE `addgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photog`
--
ALTER TABLE `photog`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
