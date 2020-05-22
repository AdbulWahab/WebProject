-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 07:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `dId` varchar(10) NOT NULL,
  `dFirstName` text NOT NULL,
  `dLastName` text NOT NULL,
  `dAddress` varchar(20) NOT NULL,
  `dContact` varchar(20) NOT NULL,
  `dExp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dId`, `dFirstName`, `dLastName`, `dAddress`, `dContact`, `dExp`) VALUES
('01', 'Muhammad', 'Nouman', 'Lahore', '0334-7278104', 2),
('02', 'Abdul', 'Wahab', 'Fsd', '0300-5302788', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `fid` varchar(10) NOT NULL,
  `rId` varchar(10) NOT NULL,
  `price` int(20) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`fid`, `rId`, `price`, `class`) VALUES
('01', '01', 500, 'B'),
('02', '01', 2500, 'D'),
('03', '02', 500, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image` varchar(500) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image`, `text`) VALUES
('3.jpg', 'hi'),
('3.jpg', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confrom_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `name`, `password`, `confrom_password`) VALUES
('a', 'a@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(1, 'wahab', 'wahab@gmail.com', 'a0af1bfeb7f18f2746347000d2224365'),
(12, 'nomi', 'nouman@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Nouman', 'nomi', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `rId` varchar(10) NOT NULL,
  `rTo` varchar(20) NOT NULL,
  `rFrom` varchar(20) NOT NULL,
  `dTime` time(6) NOT NULL,
  `aTime` time(6) NOT NULL,
  `trainId` varchar(10) NOT NULL,
  `dId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rId`, `rTo`, `rFrom`, `dTime`, `aTime`, `trainId`, `dId`) VALUES
('01', 'Fsd Station', 'Karachi Station', '12:00:00.000000', '16:00:00.000000', '03', '02'),
('02', 'Fsd Station', 'Karachi Station', '16:55:00.000000', '16:05:00.000000', '03', '01'),
('03', 'Fsd Station', 'Karachi Station', '12:00:00.000000', '00:00:03.000000', '01', '01');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `sId` varchar(10) NOT NULL,
  `sName` varchar(20) NOT NULL,
  `sCity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`sId`, `sName`, `sCity`) VALUES
('01', 'Lahore Station', 'Lahore'),
('02', 'Fsd Station', 'Fsd'),
('03', 'Karachi Station', 'Karachi'),
('04', 'Bahawalpur Station', 'Bahawalpur');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `contactnumber` varchar(20) NOT NULL,
  `fid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`FirstName`, `LastName`, `address`, `cnic`, `contactnumber`, `fid`) VALUES
('Muhammad', 'Nouman', 'Lahore', '34102-3302985-3', '0334-7278104', '01');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `trainId` varchar(10) NOT NULL,
  `trainName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`trainId`, `trainName`) VALUES
('01', 'Lahore Express'),
('03', 'Karachi Times'),
('04', 'Iqbal Express');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `password`, `username`, `id`) VALUES
('Muhammad', 'Nouman', '202cb962ac59075b964b07152d234b70', 'nomi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`dId`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`rId`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`trainId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
