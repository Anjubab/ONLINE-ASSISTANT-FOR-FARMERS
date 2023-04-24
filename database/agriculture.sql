-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 at 01:35 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text,
  `email` varchar(200) DEFAULT NULL,
  `phno` varchar(100) DEFAULT NULL,
  `dsg` varchar(100) DEFAULT NULL,
  `wrk` varchar(200) DEFAULT NULL,
  `skls` varchar(200) DEFAULT NULL,
  `quli` varchar(200) DEFAULT NULL,
  `expr` text,
  `photo` text,
  `date` date NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adid`, `Log_id`, `name`, `sex`, `age`, `dob`, `location`, `addr`, `email`, `phno`, `dsg`, `wrk`, `skls`, `quli`, `expr`, `photo`, `date`) VALUES
(1, 'ADMN023654785', 'ADMIN', 'Male', 25, '2021-12-23', 'Palakkad', 'palakkad,kerala', 'admin@gmail.com', '9847169014', 'Clerk', 'one', 'nice', 'plus two', 'one year', 'Desert.jpg', '2021-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `agntid` int(11) NOT NULL AUTO_INCREMENT,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addrs` text,
  `email` text,
  `phno1` varchar(100) DEFAULT NULL,
  `phno2` varchar(100) DEFAULT NULL,
  `wrk` varchar(200) DEFAULT NULL,
  `expr` text,
  `photo` varchar(200) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`agntid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agntid`, `Log_id`, `name`, `edate`, `location`, `addrs`, `email`, `phno1`, `phno2`, `wrk`, `expr`, `photo`, `date`) VALUES
(1, 'FRMID774320261', 'AGRI', '2021-12-08', 'Palakkad', 'PALAKAD KERALA', 'agri@gmail.com', '9874563322', '7464646463', 'NICE', 'ONE YEAR', 'Tulips.jpg', '2021-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `FLog_Id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `faddr` text NOT NULL,
  `fphno` varchar(200) NOT NULL,
  `CLog_Id` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `caddr` text NOT NULL,
  `cphno` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `buy` double NOT NULL,
  `prce` double NOT NULL,
  `tot` double NOT NULL,
  `date` date NOT NULL,
  `desp` text NOT NULL,
  `stats` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `FLog_Id`, `fname`, `faddr`, `fphno`, `CLog_Id`, `cname`, `caddr`, `cphno`, `pname`, `buy`, `prce`, `tot`, `date`, `desp`, `stats`, `photo`) VALUES
(5, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'wtet', 'Accept', 'a.jpg'),
(6, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'asfasf', 'Cancel', 'a.jpg'),
(7, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'fdh', 'Accept', 'a.jpg'),
(8, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'sss', 'Pending', 'a.jpg'),
(9, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'sss', 'Pending', 'a.jpg'),
(10, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'sss', 'Pending', 'a.jpg'),
(11, 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', 'Ulli', 10, 120, 1200, '2022-03-15', 'sss', 'Pending', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cusrid` int(11) NOT NULL AUTO_INCREMENT,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text,
  `email` varchar(200) DEFAULT NULL,
  `phno` varchar(100) DEFAULT NULL,
  `photo` text,
  `date` date NOT NULL,
  PRIMARY KEY (`cusrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusrid`, `Log_id`, `name`, `sex`, `age`, `dob`, `location`, `addr`, `email`, `phno`, `photo`, `date`) VALUES
(1, 'FRMID611102528', 'RAS', 'Male', 25, '2022-12-31', 'PALAKKAD', 'PALAKKAD', 'rasr@gmail.com', '9847169014', 'Tulips.jpg', '2022-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `frmid` int(11) NOT NULL AUTO_INCREMENT,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text,
  `email` varchar(200) DEFAULT NULL,
  `phno` varchar(100) DEFAULT NULL,
  `ftype` varchar(100) DEFAULT NULL,
  `wrk` varchar(200) DEFAULT NULL,
  `skls` varchar(200) DEFAULT NULL,
  `quli` varchar(200) DEFAULT NULL,
  `expr` text,
  `photo` text,
  `date` date NOT NULL,
  PRIMARY KEY (`frmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`frmid`, `Log_id`, `name`, `sex`, `age`, `dob`, `location`, `addr`, `email`, `phno`, `ftype`, `wrk`, `skls`, `quli`, `expr`, `photo`, `date`) VALUES
(2, 'FRMID712051373', 'SIJO', 'Male', 25, '2021-12-31', 'Palakkad', 'Palakkad,Kerala,123', 'sijo@gmail.com', '9856421075', 'NICE', '1 YEAR', 'ANY', '+2', 'ONE YEAR', 'avatar.jpg', '2021-12-13'),
(5, 'FRMID271368176', 'SHAM', NULL, NULL, NULL, NULL, NULL, 'sh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE IF NOT EXISTS `labor` (
  `lbrid` int(11) NOT NULL AUTO_INCREMENT,
  `Log_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `addr` text,
  `email` varchar(200) DEFAULT NULL,
  `phno` varchar(100) DEFAULT NULL,
  `ftype` varchar(100) DEFAULT NULL,
  `wrk` text,
  `skls` varchar(200) DEFAULT NULL,
  `quli` varchar(200) DEFAULT NULL,
  `expr` text,
  `photo` text,
  `date` date NOT NULL,
  PRIMARY KEY (`lbrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`lbrid`, `Log_id`, `name`, `sex`, `age`, `dob`, `location`, `addr`, `email`, `phno`, `ftype`, `wrk`, `skls`, `quli`, `expr`, `photo`, `date`) VALUES
(1, 'FRMID610769904', 'GOUTHAM', 'Male', 25, '2021-12-23', 'Palakkad', 'PALAKKAD,KERALA', 'goutham@gmail.com', '9847169014', 'ssss', 'Climb Thir', 'KEY SSHHS', '+2', 'ONE YEAR', 'a.jpg', '2021-12-13'),
(2, 'FRMID610769900', 'GOUTHAM', 'Male', 25, '2021-12-23', 'Palakkad', 'PALAKKAD,KERALA', 'goutham@gmail.com', '9847169014', 'AGRO', 'Nar Thiya', 'KEY SSHHS', '+2', 'ONE YEAR', 'a.jpg', '2021-12-13'),
(3, 'FRMID610769902', 'GOUTHAM', 'Male', 25, '2021-12-23', 'Palakkad', 'PALAKKAD,KERALA', 'goutham@gmail.com', '9847169014', 'AGRO', 'Climb Thir', 'KEY SSHHS', '+2', 'ONE YEAR', 'a.jpg', '2021-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `lbrequest`
--

CREATE TABLE IF NOT EXISTS `lbrequest` (
  `lbrrid` int(11) NOT NULL AUTO_INCREMENT,
  `LLog_id` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `laddr` text NOT NULL,
  `lphno` varchar(200) NOT NULL,
  `FLog_id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `faddr` text NOT NULL,
  `fphno` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `stats` varchar(200) NOT NULL,
  `desp` text,
  PRIMARY KEY (`lbrrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lbrequest`
--

INSERT INTO `lbrequest` (`lbrrid`, `LLog_id`, `lname`, `laddr`, `lphno`, `FLog_id`, `fname`, `faddr`, `fphno`, `date`, `stats`, `desp`) VALUES
(1, 'FRMID610769904', 'GOUTHAM', 'PALAKKAD,KERALA', '9847169014', 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', '2021-12-13', 'Accept', 'sss'),
(2, 'FRMID610769904', 'GOUTHAM', 'PALAKKAD,KERALA', '9847169014', 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', '2021-12-13', 'Pending', NULL),
(3, 'FRMID610769904', 'GOUTHAM', 'PALAKKAD,KERALA', '9847169014', 'FRMID712051373', 'SIJO', 'Palakkad,Kerala,123', '9856421075', '2022-03-08', 'Pending', NULL),
(4, 'FRMID610769904', 'GOUTHAM', 'PALAKKAD,KERALA', '9847169014', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', '2022-03-08', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE IF NOT EXISTS `machine` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `vmodel` varchar(200) NOT NULL,
  `vrate` varchar(200) NOT NULL,
  `cntno1` varchar(200) NOT NULL,
  `vcno` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `desp` text NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `cmpny` varchar(200) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`m_id`, `Log_Id`, `name`, `vmodel`, `vrate`, `cntno1`, `vcno`, `photo`, `desp`, `vtype`, `cmpny`) VALUES
(1, 'FRMID712051373', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(2, 'FRMID712051373', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(3, 'FRMID712051373', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(5, 'FRMID712051370', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(6, 'FRMID712051370', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(7, 'FRMID774320261', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'Lighthouse.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(8, 'FRMID774320261', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'Tulips.jpg', 'welcome\r\n', 'sx', 'NINDIA'),
(9, 'FRMID774320261', 'Shameer', '2015', '2500', '9847169014', 'CBNH1236', 'Tulips.jpg', 'welcome\r\n', 'sx', 'NINDIA');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL,
  `subj` text NOT NULL,
  `date` date NOT NULL,
  `reply` text,
  `rdate` date DEFAULT NULL,
  `stats` varchar(200) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `Log_Id`, `name`, `phno`, `subj`, `date`, `reply`, `rdate`, `stats`) VALUES
(1, 'FRMID712051373', 'SIJO', '9856421075', 'yyy', '2021-12-16', 'ssss', '2021-12-16', 'Accept'),
(2, 'FRMID712051373', 'SIJO', '9856421075', 'rteururu', '2021-12-21', 'rteururu', '2021-12-21', 'Accept'),
(3, 'FRMID712051373', 'SIJO', '9856421075', 'yyy', '2021-12-16', 'rtrtue', '2021-12-24', 'Accept'),
(4, 'FRMID610769904', 'GOUTHAM', '9847169014', 'yyy', '2021-12-16', NULL, NULL, 'Pending'),
(5, 'FRMID774320261', 'AGRI', '9874563322', 'yyy', '2021-12-16', NULL, NULL, 'Pending'),
(6, 'FRMID611102528', 'RAS', '9847169014', 'rt', '2022-03-18', NULL, NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phno` varchar(200) NOT NULL,
  `subj` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`notid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notid`, `name`, `phno`, `subj`, `date`) VALUES
(1, 'Shameer', '9847169025', 'Hi', '2021-12-31'),
(2, 'Shameer', '9847169025', 'Hi', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `qty` double NOT NULL,
  `prce` double NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL,
  `desp` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `Log_Id`, `name`, `qty`, `prce`, `date`, `photo`, `desp`) VALUES
(1, 'FRMID712051373', 'Ulli', 115, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(2, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(3, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(4, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(5, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(6, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(7, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(8, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh'),
(9, 'FRMID271368176', 'Ulli', 12, 120, '2022-12-31', 'a.jpg', 'fdfhdhdfh');

-- --------------------------------------------------------

--
-- Table structure for table `requestvehicle`
--

CREATE TABLE IF NOT EXISTS `requestvehicle` (
  `vreq_id` int(11) NOT NULL AUTO_INCREMENT,
  `VFLog_Id` varchar(200) NOT NULL,
  `vname` varchar(200) NOT NULL,
  `vcno` varchar(200) NOT NULL,
  `vmodel` varchar(200) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `cmpny` varchar(200) NOT NULL,
  `vrate` varchar(200) NOT NULL,
  `cntno1` varchar(200) NOT NULL,
  `desp` text NOT NULL,
  `FLog_Id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `faddr` text NOT NULL,
  `fphno` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `ndate` date NOT NULL,
  `stats` varchar(200) NOT NULL,
  PRIMARY KEY (`vreq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `requestvehicle`
--

INSERT INTO `requestvehicle` (`vreq_id`, `VFLog_Id`, `vname`, `vcno`, `vmodel`, `vtype`, `cmpny`, `vrate`, `cntno1`, `desp`, `FLog_Id`, `fname`, `faddr`, `fphno`, `date`, `ndate`, `stats`) VALUES
(11, 'FRMID712051373', 'RVR', 'CBNH1236', '2015', 'sx', 'NINDIA', '2500', '9847169014', 'cccsd', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', '2022-03-08', '2022-03-15', 'Cancel'),
(12, 'FRMID712051373', 'RVR', 'CBNH1236', '2015', 'sx', 'NINDIA', '2500', '9847169014', 'wery', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', '2022-03-08', '2022-03-16', 'Cancel'),
(13, 'FRMID712051373', 'Shameer', 'CBNH1236', '2015', 'sx', 'NINDIA', '2500', '9847169014', 'ewery', 'FRMID611102528', 'RAS', 'PALAKKAD', '9847169014', '2022-03-08', '2022-03-09', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usrid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `Log_Id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `utype` varchar(200) NOT NULL,
  PRIMARY KEY (`usrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usrid`, `name`, `Log_Id`, `email`, `password`, `utype`) VALUES
(1, 'ADMIN', 'ADMN023654785', 'admin@gmail.com', 'admin', 'Admin'),
(2, 'SIJO', 'FRMID712051373', 'sijo@gmail.com', '1234', 'Farmer'),
(4, 'AGRI', 'FRMID774320261', 'agri@gmail.com', 'agri', 'Agent'),
(5, 'GOUTHAM', 'FRMID610769904', 'goutham@gmail.com', '1234', 'Labor'),
(8, 'SHAM', 'FRMID271368176', 'sh@gmail.com', '123', 'Farmer'),
(9, 'RAS', 'FRMID611102528', 'rasr@gmail.com', '123', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `vmodel` varchar(200) NOT NULL,
  `vrate` varchar(200) NOT NULL,
  `cntno1` varchar(200) NOT NULL,
  `vcno` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `desp` text NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `cmpny` varchar(200) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `Log_Id`, `name`, `vmodel`, `vrate`, `cntno1`, `vcno`, `photo`, `desp`, `vtype`, `cmpny`) VALUES
(4, 'FRMID712051373', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome', 'sx', 'NINDIA'),
(6, 'FRMID712051373', 'MNH', '2016', '2500', '984716901', 'ssss', 'avatar.jpg', 'sss', '', ''),
(7, 'FRMID712051373', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome', 'sx', 'NINDIA'),
(10, 'FRMID712051370', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome', 'sx', 'NINDIA'),
(11, 'FRMID712051370', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'banner2.jpg', 'welcome', 'sx', 'NINDIA'),
(12, 'FRMID774320261', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'Penguins.jpg', 'welcome', 'sx', 'NINDIA'),
(13, 'FRMID774320261', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'Penguins.jpg', 'welcome', 'sx', 'NINDIA'),
(14, 'FRMID774320261', 'RVR', '2015', '2500', '9847169014', 'CBNH1236', 'Penguins.jpg', 'welcome', 'sx', 'NINDIA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
