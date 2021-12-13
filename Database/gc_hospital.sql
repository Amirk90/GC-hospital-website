-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2021 at 08:22 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `gc_hospital`
-- All passwords are 12345

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'Amir', 'Khezri', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(210) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Saif', 'Saif@gmail.com', 'Insurance ', 'Does the hospital accept medlife insurance?');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE IF NOT EXISTS `patient_record` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(20) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `adate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`id`, `email`, `first_name`, `last_name`, `gender`, `age`, `contact`, `adate`) VALUES
(1, 'regal@gmail.com', 'Anas', 'Al regal', 'Male', 19, '971562423529', '2021-12-13'),
(2, 'saif@gmail.com', 'Saif', 'Al mehiri', 'Male', 21, '971508016220', '2021-12-14'),
(4, 'mo@gmail.com', 'Mohammed', 'Al lootah', 'Male', 20, '97150111121', '2021-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'Anas', 'AL regal', 'regal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Saif', 'Al mehiri', 'saif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Mohammad', 'Al lootah', 'mo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');
