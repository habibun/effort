-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2012 at 09:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8
/* 
Create a database named "rating_db" and then select it.After that using import tab in PHPMyAdmin import this file (rating_db.sql) */

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rating_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `product_details` varchar(200) NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `product_details`, `date_posted`) VALUES
(1, 'Mark up language tutorials ', 'Lorem ipsum dolor sit amet, amet coram regis suam non coepit cenam veniebant est in lucem exitum vivit in. Maria cum unde tu bestias terras se ad te finis puellam ad suis alteri si. Manu in lucem exem', '2012-10-02 00:00:00'),
(2, 'jQuery Ajax  tutorials', 'Lorem ipsum dolor sit amet, amet coram regis suam non coepit cenam veniebant est in lucem exitum vivit in. Maria cum unde tu bestias terras se ad te finis puellam ad suis alteri si. Manu in lucem exem', '2012-10-03 00:00:00'),
(3, 'PHP MySQL tutorials on Webcoachbd', 'Lorem ipsum dolor sit amet, amet coram regis suam non coepit cenam veniebant est in lucem exitum vivit in. Maria cum unde tu bestias terras se ad te finis puellam ad suis alteri si. Manu in lucem exem', '2012-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `client_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
