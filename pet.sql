-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2023 at 09:37 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `appdet`
--

CREATE TABLE IF NOT EXISTS `appdet` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `adate` text NOT NULL,
  `dname` text NOT NULL,
  `cname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `ptype` text NOT NULL,
  `breed` text NOT NULL,
  `gender` text NOT NULL,
  `age` text NOT NULL,
  `oname` text NOT NULL,
  `ocno` text NOT NULL,
  `oaddr` int(11) NOT NULL,
  `reason` longtext NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `appdet`
--

INSERT INTO `appdet` (`aid`, `adate`, `dname`, `cname`, `addr`, `cno`, `ptype`, `breed`, `gender`, `age`, `oname`, `ocno`, `oaddr`, `reason`, `status`) VALUES
(3, '2023-01-20', 'mmm', 'mmm clinic', 'jhgh', '9845098454', 'Dog', 'Pug', 'Male', '2', 'aaa', '9845198452', 0, 'For vaccination', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `pname` text NOT NULL,
  `pcat` text NOT NULL,
  `pdesc` longtext NOT NULL,
  `mname` text NOT NULL,
  `price` text NOT NULL,
  `qty` text NOT NULL,
  `amt` text NOT NULL,
  `photo` longtext NOT NULL,
  `status` text NOT NULL,
  `uby` text NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `username`, `addr`, `cno`, `pname`, `pcat`, `pdesc`, `mname`, `price`, `qty`, `amt`, `photo`, `status`, `uby`) VALUES
(1, 'aaa', 'bangalore', '9845198452', 'ppp', 'Bowl', 'khhj', 'bb', '200', '2', '400', 'products/Desert.jpg', 'Under Process', 'mmm');

-- --------------------------------------------------------

--
-- Table structure for table `pdet`
--

CREATE TABLE IF NOT EXISTS `pdet` (
  `ptype` text NOT NULL,
  `breed` text NOT NULL,
  `gender` text NOT NULL,
  `age` text NOT NULL,
  `oname` text NOT NULL,
  `cno` text NOT NULL,
  `addr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdet`
--

INSERT INTO `pdet` (`ptype`, `breed`, `gender`, `age`, `oname`, `cno`, `addr`) VALUES
('Dog', 'Pug', 'Male', '2', 'aaa', '9845198452', 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `pcat` text NOT NULL,
  `pdesc` longtext NOT NULL,
  `bname` text NOT NULL,
  `price` text NOT NULL,
  `photo` longtext NOT NULL,
  `uby` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pcat`, `pdesc`, `bname`, `price`, `photo`, `uby`) VALUES
(1, 'ppp', 'Bowl', 'khhj', 'bb', '200', 'products/Desert.jpg', 'mmm');

-- --------------------------------------------------------

--
-- Table structure for table `user_det`
--

CREATE TABLE IF NOT EXISTS `user_det` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_det`
--

INSERT INTO `user_det` (`username`, `password`, `fname`, `lname`, `addr`, `cno`, `email`) VALUES
('aaa', 'test', 'ajay', 'kumar', 'bangalore', '9845198452', 'ajay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vcdet`
--

CREATE TABLE IF NOT EXISTS `vcdet` (
  `aid` text NOT NULL,
  `adate` text NOT NULL,
  `ptype` text NOT NULL,
  `breed` text NOT NULL,
  `age` text NOT NULL,
  `oname` text NOT NULL,
  `ocno` text NOT NULL,
  `vdet` text NOT NULL,
  `ndate` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcdet`
--

INSERT INTO `vcdet` (`aid`, `adate`, `ptype`, `breed`, `age`, `oname`, `ocno`, `vdet`, `ndate`) VALUES
('3', '2023-01-20', 'Dog', 'Pug', '2', 'aaa', '9845198452', 'hkjhkj', '2023-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `vdet`
--

CREATE TABLE IF NOT EXISTS `vdet` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `addr` longtext NOT NULL,
  `cno` text NOT NULL,
  `email` text NOT NULL,
  `loc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vdet`
--

INSERT INTO `vdet` (`username`, `password`, `fname`, `lname`, `addr`, `cno`, `email`, `loc`) VALUES
('mmm', 'comp', 'mmm', 'mmm clinic', 'jhgh', '9845098454', 'mmm@gmail.com', 'Kumaraswamy-Layout');
