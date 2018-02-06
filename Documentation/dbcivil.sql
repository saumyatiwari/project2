-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 08:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcivil`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cname` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(30) NOT NULL,
  `fname` char(30) NOT NULL,
  `nick` char(10) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `contact` char(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `squs` varchar(50) NOT NULL,
  `sans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mastertable`
--

CREATE TABLE `mastertable` (
  `cname` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `day` char(15) NOT NULL,
  `stime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `scode` varchar(20) NOT NULL,
  `stype` char(15) NOT NULL,
  `gname` varchar(20) DEFAULT NULL,
  `vname` varchar(63) NOT NULL,
  `fid1` varchar(30) NOT NULL,
  `fid2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `scode` varchar(20) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `vname` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `yname` varchar(15) NOT NULL,
  `stype` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cname`,`bname`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastertable`
--
ALTER TABLE `mastertable`
  ADD PRIMARY KEY (`day`,`fid1`,`stime`,`etime`),
  ADD KEY `frgnk_course` (`cname`,`bname`),
  ADD KEY `frgnk_scode` (`scode`),
  ADD KEY `frgnk_vname` (`vname`),
  ADD KEY `frgnk_fid1` (`fid1`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`scode`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`vname`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`yname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mastertable`
--
ALTER TABLE `mastertable`
  ADD CONSTRAINT `frgnk_course` FOREIGN KEY (`cname`,`bname`) REFERENCES `course` (`cname`, `bname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frgnk_fid1` FOREIGN KEY (`fid1`) REFERENCES `faculty` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frgnk_scode` FOREIGN KEY (`scode`) REFERENCES `subject` (`scode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frgnk_vname` FOREIGN KEY (`vname`) REFERENCES `venue` (`vname`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
