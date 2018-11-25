-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit_store`
--

CREATE TABLE `fruit_store` (
  `seller_email` varchar(40) NOT NULL,
  `fruit_name` varchar(40) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_store`
--

INSERT INTO `fruit_store` (`seller_email`, `fruit_name`, `quantity`, `price`) VALUES
('ram@gmail.coma', 'sapota', 1000, 10),
('ram@gmail.com', 'fruit2', 400, 30),
('ram@gmail.com', 'fruit3', 500, 156),
('ram@gmail.com', 'fruit4', 100, 12),
('ram@gmail.com', 'fruit5', 500, 200),
('ram@gmail.com', 'fruit6', 10, 1200),
('ram@gmail.com', 'fruit8', 100, 20),
('ram@gmail.com', 'fruit9', 1000, 11),
('sundar@gmail.com', 'banana', 13, 131),
('sundar@gmail.com', 'orange', 13, 12),
('sundar@gmail.com', 'apple', 14, 13),
('aravind@gmail.com', 'orange', 25, 10),
('aravind@gmail.com', 'pine apple', 12, 7),
('aravind@gmail.com', 'grapes', 35, 15),
('sundar@gmail.com', 'grapes', 25, 16),
('nikitha@gmail.com', 'apple', 10, 100),
('nikitha@gmail.com', 'banana', 5, 15),
('nikitha@gmail.com', 'grapes', 25, 14),
('nikitha@gmail.com', 'pine apple', 22, 11);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pancardnumber` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `storename` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `storelocation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`firstname`, `lastname`, `email`, `phonenumber`, `address`, `pancardnumber`, `password`, `storename`, `wallet`, `storelocation`, `description`) VALUES
('allu', 'aravind', 'aravind@gmail.com', 7032023820, 'guntur', 'ABCD2345E', 'aravind', 'moper', '3500', '', ''),
('Nikitha', 'Chaluvadi', 'nikitha@gmail.com', 7894561237, 'kaikaluru', 'GHFR5432J', 'nikitha', 'Krishna stores', '3500', 'vijayawada', 'fresh fruits '),
('pavan', 'pavs', 'pavan@gmail.com', 8142424242, 'pavan', 'ABHCD2312D', 'pavan', 'pavan fruit', '3500', 'kankipadu', 'sweet shop'),
('suma ', 'sundar', 'sundar@gmail.com', 8142525454, 'vijayawada', 'ABCD1234S', 'sundar', 'kopela', '3500', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shopper`
--

CREATE TABLE `shopper` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pancardnumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `wallet` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopper`
--

INSERT INTO `shopper` (`firstname`, `lastname`, `email`, `phonenumber`, `address`, `pancardnumber`, `password`, `wallet`) VALUES
('aravind', 'allu', 'alluaravind@gmail.com', 8142424424, 'vijayawada', 'abcde2311d', 'aravind', 0),
('Meghana', 'Chowdary', 'meghana@gmail.com', 8008337805, 'Kanuru', 'BCFG8769S', 'meghana', 3500),
('Renuka', 'Konda', 'renuka@gmail.com', 9614999999, 'Tiruvuru', 'ABCD5678A', 'renuka', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `shopper`
--
ALTER TABLE `shopper`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
