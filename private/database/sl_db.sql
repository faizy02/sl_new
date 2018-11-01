-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 04:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `name`, `email`, `password`) VALUES
(1, 'Hassan', 'hassan@gmail.com', 'asdf1234'),
(2, 'azam', 'azam@gmail.com', 'asdf1234'),
(3, 'shahrukh', 'shahrukh@gmail.com', 'asdf1234'),
(4, 'daniyal', 'daniyal@gmail.com', 'asdf1234');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hallid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `images_count` int(11) DEFAULT NULL,
  `availability` date DEFAULT NULL,
  `ownerid` int(11) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hallid`, `name`, `price`, `address`, `images_count`, `availability`, `ownerid`, `city`) VALUES
(1, 'Haveli', 25000, 'Opposite some scheme 3, Highway, Islamabad', 5, NULL, 1, 'Islamabad'),
(2, 'Fortress', 29000, 'Plot no 93, Expressway , Rawalpindi', 7, NULL, 2, 'Rawalpindi'),
(3, 'Orchid Marqee', 15000, 'Plot no 34, Orchid scheme , Islamabad', 7, NULL, 3, 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `imgresource`
--

CREATE TABLE `imgresource` (
  `imgid` int(11) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `hallid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerid`, `name`, `email`, `password`) VALUES
(1, 'Owner1', 'owner1@yahoo.com', 'asdf1234'),
(2, 'Owner2', 'owner2@gmail.com', 'asdf1234'),
(3, 'Owner3', 'owner3@live.com', 'asdf1234'),
(4, 'Owner4', 'owner4@outlook.com', 'asdf1234');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int(11) NOT NULL,
  `review` varchar(1000) DEFAULT NULL,
  `stars` float NOT NULL,
  `custid` int(11) NOT NULL,
  `hallid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'faizy02', '1234', 'admin'),
(2, 'faisal', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hallid`),
  ADD KEY `ownerId` (`ownerid`);

--
-- Indexes for table `imgresource`
--
ALTER TABLE `imgresource`
  ADD PRIMARY KEY (`imgid`),
  ADD KEY `hallId` (`hallid`) USING BTREE;

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `cust_Id` (`custid`),
  ADD KEY `hallId` (`hallid`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hallid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `hall_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `owner` (`ownerId`);

--
-- Constraints for table `imgresource`
--
ALTER TABLE `imgresource`
  ADD CONSTRAINT `imgresource_ibfk_1` FOREIGN KEY (`hallid`) REFERENCES `owner` (`ownerId`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
