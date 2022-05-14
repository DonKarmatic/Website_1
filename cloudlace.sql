-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 03:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudlace`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `payMethod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `member` (`id`,  `email`, `password`, `address`, `age`, `payMethod`) VALUES
(1, 'guest', 'guestpassword', 'server', 1, 'none'),
(3, 'test1@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1 Montclair Ave', 21, 'Paypal'),
(4, 'test4@gmail.com', '8fe4c11451281c094a6578e6ddbf5eed', '1 Montclair Ave', 21, 'Visa');


-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `prodid` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe`(`prodid`,`model`,`size`,`quantity`,`price`,`group`)VALUES
(1, 'Jordan 3 A Ma Maniere', 8, 10, 200.00,'female'),
(2, 'Jordan 1 High OG Mocha', 8, 10, 160.00,'female'),
(3, 'Jordan 1 High OG Seafoam',8,10,170.00,'female'),
(4, 'Jordan 11 High Concord',8,10,220.00,'female'),
(5, 'Jordan 4 White Oreo',8,10,200.00,'female'),
(6, 'Nike Dunk Low Panda',8,10,100.00,'female'),
(7, 'Nike Dunk Low Light Bone',8,10,100.00,'female'),
(8, 'Nike Air Force 1 Low White',8,10,100.00,'female'),
(9, 'Nike Offwhite Dunk Lot 1',8,10,150.00,'female'),
(10, 'Nike Travis Scott Dunk',8,10,150.00,'female'),
(11, 'Adidas Yeezy Foamrunner Ochre',8,10,80.00,'female'),
(12, 'Adidas Yeezy Slide Pure',8,10,60.00,'female'),
(13, 'Adidas Yeezy 350 Bred',8,10,220.00,'female'),
(14, 'Adidas Yeezy 500 Blush',8,10,200.00,'female'),
(15, 'Adidas Ultraboost White',8,10,180.00,'female'),
(16, 'Adidas Yeezy Slide Onyx',8,10,60.00,'male'),
(17, 'Adidas Yeezy Foamrunner Vermillion',8,10,80,'male'),
(18, 'Adidas Yeezy 700 Static',8,10,300,'male'),
(19, 'Adidas Yeezy 350 Black Static',8,10,220.00,'male'),
(20, 'Adidas Yeezy 500 Black Utility',8,10,200.00,'male'),
(21, 'Nike Air Force 1 Low Travis Scott',8,10,150.00,'male'),
(22, 'Nike Offwhite Blazer The Ten',8,10,170.00,'male'),
(23, 'Nike Dunk Low Syracuse',8,10,100.00,'male'),
(24, 'Nike Foamposite Shooting Star',8,10,250.00,'male'),
(25, 'Nike Dunk Low Kentucky',8,10,100.00,'male'),
(26, 'Jordan 4 Bred ',8,10,220.00,'male'),
(27, 'Jordan 11 High Gamma',8,10,220.00,'male'),
(28, 'Jordan 7 Raptor',8,10,170.00,'male'),
(29, 'Jordan 3 White Cement',8,10,190.00,'male'),
(30, 'Jordan 1 High OG Chicago',8,10,160.00,'male');

-- ---------------------------------------------------------- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `prodid` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `customerType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------
--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe`
ALTER TABLE `shoe`
  ADD PRIMARY KEY(`prodid`);

--
-- Indexes for table `cart`
ALTER TABLE `cart`
  ADD PRIMARY KEY(`prodid`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shoe`
ALTER TABLE `shoe`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
