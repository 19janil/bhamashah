-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 01:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhamashah`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cid` int(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `solution` text NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `uid`, `district`, `uname`, `contact`, `description`, `solution`, `date`, `status`) VALUES
(17, 'udid1', 'udaipur', 'ishan kumar malhara', '989898989', 'having trouble in card', '', '2017-12-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sid` int(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `bank` varchar(30) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `card_status` text NOT NULL,
  `updation_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sid`, `uid`, `contact`, `uname`, `gender`, `district`, `dob`, `bank`, `aadhar`, `address`, `card_status`, `updation_status`) VALUES
(1, 'udid1', '11111111111', 'ishan', 'male', 'udaipur', '2017-12-02', 'pnb', '1234567890', 'Udaipur ashok nagar', 'Dispatched', 'Processed'),
(2, 'udid2', '8989898989', 'janil', 'male', 'udaipur', '2017-12-03', '1234567890', '1234567890', 'asdfghjkl;zxcvbnm,', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_member`
--

CREATE TABLE `user_member` (
  `uid` varchar(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `relation` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user_member`
--
ALTER TABLE `user_member`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
