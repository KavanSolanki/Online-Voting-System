-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2021 at 10:15 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_vote`
--
CREATE DATABASE IF NOT EXISTS `db_vote` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vote`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_party_rag`
--

CREATE TABLE IF NOT EXISTS `party_rag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `party_name` varchar(50) NOT NULL,
  `party_logo` varchar(100) NOT NULL,
  `addarcard` int(12) NOT NULL,
  `can_photo` varchar(100) NOT NULL,
  `voter_id` varchar(10) NOT NULL,
  `pan_card` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(100) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voter_rag`
--

CREATE TABLE IF NOT EXISTS `tbl_voter_rag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `can_photo` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `addarcard` int(12) NOT NULL,
  `pan_card` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;