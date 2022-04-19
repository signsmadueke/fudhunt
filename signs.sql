-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2022 at 09:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

DROP TABLE IF EXISTS `cuisine`;
CREATE TABLE IF NOT EXISTS `cuisine` (
  `cuisine_id` int(11) NOT NULL AUTO_INCREMENT,
  `cuisine_name` varchar(250) NOT NULL,
  `cuisine_pix` text NOT NULL,
  PRIMARY KEY (`cuisine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine_name`, `cuisine_pix`) VALUES
(8, 'igbo', 'uploads/6104fc4280989e23201250e11e482d33168f63e9db32c6c31d54c705f9fad5ee.jpeg'),
(9, 'Nigerian', 'uploads/7ecb778dee273b58e216f1c859de1a0fcd923334119a18aaaac040bc08e93ddb.png'),
(10, 'Ghana', 'uploads/155742cc064f9392f682b06ebc0eaff5538baa816d1bfdc70b71a8ca1ab6fc7d.png'),
(11, 'Calabar', 'uploads/e7b64639334635d76b60e4056f2a56f0659c27b9c4d068ea4fd8742bbeef8f21.png');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `cuisine_id` varchar(250) NOT NULL,
  `restaurant_id` varchar(250) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `food_prize` varchar(250) NOT NULL,
  `food_pix` text NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `cuisine_id`, `restaurant_id`, `food_name`, `food_prize`, `food_pix`) VALUES
(2, '9', '2', 'Rice', '400', 'uploads/697012704f08c3257fc630eda7e87aca9406e4f5a00f656bd67b0bdd3336c30a.jpeg'),
(3, '9', '1', 'Beans', '500', 'uploads/d04637ac03c058759180a23bbd26593bd54f8430e7e6ef2b2f4cccc0036de7e4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `delivery_note` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `location_status` varchar(250) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `user_id`, `address`, `city`, `zip`, `state`, `country`, `delivery_note`, `phone`, `location_status`) VALUES
(1, '6', '13 james streeet, oneday', 'Enugu', '23233', 'Enugu', 'Mexico', 'deliver at door step', '17055305528', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE IF NOT EXISTS `order_list` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(250) NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `products` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_note` text NOT NULL,
  `delivery_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delivery_status` varchar(250) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `user_id`, `total_price`, `products`, `delivery_address`, `delivery_note`, `delivery_time`, `delivery_status`) VALUES
(1, '3', '', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-17 09:06:38', 'pending'),
(2, '3', '1400', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-17 09:08:05', 'pending'),
(3, '3', '1400', 'Array', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-17 09:09:43', 'pending'),
(4, '3', '1000', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:14:51', 'pending'),
(5, '3', '1000', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:15:41', 'pending'),
(6, '3', '1000', '', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:17:38', 'pending'),
(7, '3', '1000', 'Beans,Beans', '13 james streeet, oneday, Enugu, Enugu', 'at the gate', '2022-04-18 11:20:42', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_name` varchar(250) NOT NULL,
  `restaurant_pix` text NOT NULL,
  `restaurant_address` text NOT NULL,
  PRIMARY KEY (`restaurant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_pix`, `restaurant_address`) VALUES
(1, 'mama eko xx', '', ''),
(2, 'mama chidi', '', ''),
(4, 'calabar', '', ''),
(5, 'Mama Aku', '', ''),
(6, 'Mama Aku', '', ''),
(7, 'Mama Aku', '', ''),
(8, 'Mama Aku', '', '14 adekunle street'),
(9, 'Genesis', 'uploads/c6019c12df5cbba6f4aaa0282d3dda8cda0640c9373e9d1e763635221cfa195b.jpeg', '18 Ebony paint road');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`) VALUES
(6, 'james Rohl', 'stanfugy@gmail.com', '$2y$10$m6q8.0BEFcCM5Ha6ndA7WOsrpEtwXA2bjmtWWjIXOJEdqQRNyanPi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
