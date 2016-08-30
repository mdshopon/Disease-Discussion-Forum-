-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2015 at 07:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tech_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `replied` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `like` int(20) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `answer`
--

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chatdetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  PRIMARY KEY (`chatdetail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `chat`
--


--
-- Table structure for table `chatmaster`
--

CREATE TABLE IF NOT EXISTS `chatmaster` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `chatmaster`
--


--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `question_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `question`
--


--
-- Table structure for table `subtopic`
--

CREATE TABLE IF NOT EXISTS `subtopic` (
  `subtopic_id` int(11) NOT NULL AUTO_INCREMENT,
  `subtopic_name` varchar(50) NOT NULL,
  `subtopic_description` varchar(500) NOT NULL,
  `s_status` varchar(20) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`subtopic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subtopic`
--



--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(50) NOT NULL,
  `topic_type` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `topic`
--



--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_acc_active` tinyint(1) DEFAULT NULL,
  `dob` date NOT NULL,
  `e_mail` varchar(100) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `uimg` varchar(255) NOT NULL,
  `isuser` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;
INSERT INTO `user` (`user_id`, `country`, `state`, `address`, `user_type`, `username`, `fullname`, `password`, `user_acc_active`, `dob`, `e_mail`, `gender`, `uimg`, `isuser`) VALUES
(5, 'U.S.A', 'ahmedabad', '-', 'admin', 'admin', 'administrator', 'admin', NULL, '2012-04-17', 'admin@gmail.com', '1', 'ups/admin.jpg', 1);
--
-- Dumping data for table `user`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
