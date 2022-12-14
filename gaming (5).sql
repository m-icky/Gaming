-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `complaint` text NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name`, `complaint`, `loginid`) VALUES
(3, 'mack', 'AAAAA', 0),
(5, 'mick', 'hnchjmncgjhmfjgm', 0),
(6, 'nick', 'xxfnbxhyfn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_reply`
--

CREATE TABLE `complaint_reply` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `reply` text NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_reply`
--

INSERT INTO `complaint_reply` (`id`, `username`, `reply`, `loginid`) VALUES
(3, 'mack', 'eeeeeeeeeeeeee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_service_manager`
--

CREATE TABLE `customer_service_manager` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_service_manager`
--

INSERT INTO `customer_service_manager` (`id`, `name`, `phonenumber`, `email`, `loginid`) VALUES
(1, 'NAVEEN T M', 2147483647, 'naveentmadhu@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `loginid`) VALUES
(7, 'Hike', 'hike@gmail.com', 'ssssssssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `game_book`
--

CREATE TABLE `game_book` (
  `id` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_book`
--

INSERT INTO `game_book` (`id`, `cname`, `phone`, `email`, `name`, `price`, `description`, `status`, `loginid`, `payment`) VALUES
(8, 'nick', '07902 765146', 'nick@gmail.com', 'A Dark Room', '$400', 'A Dark Room is an open-source text-based role-play', 'Returned', 4, 'Not Paid'),
(9, 'nick', '7902765146', 'nick@gmail.com', 'A Dark Room', '$400', 'A Dark Room is an open-source text-based role-play', 'Wait For Confirmation', 4, 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `game_details`
--

CREATE TABLE `game_details` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_details`
--

INSERT INTO `game_details` (`id`, `name`, `description`, `price`) VALUES
(5, '2048', '2048 is a single-player sliding tile puzzle video game written by Italian web developer Gabriele Cirulli and published on GitHub', '$500'),
(8, 'A Dark Room', 'A Dark Room is an open-source text-based role-playing game.', '$400'),
(9, 'Cookie Clicker', 'Cookie Clicker is an incremental game created by French programmer Julien \"Orteil\" Thiennot in 2013.', '$200'),
(10, 'Chess', 'Chess is a board game played between two players.', '$100'),
(12, 'fgstdxzhgbt', 'wgthgth', '$100');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(2, 'aaa', 'aaa', 'customer_service_manager', '1'),
(3, 'zzz', 'zzz', 'user', '1'),
(4, 'ooo', 'ooo', 'website_manager', '1'),
(34, 'nick', 'nick', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `number`, `date`, `cvv`) VALUES
(1, 'mick', '1234123412341234', '11/12', '123'),
(2, 'gomad', '1234123412341234', '112', '123'),
(5, 'mick', '1234123412341234', '323', '123'),
(6, 'mick', '7894789478947894', '456', '456');

-- --------------------------------------------------------

--
-- Table structure for table `product_book`
--

CREATE TABLE `product_book` (
  `id` int(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_book`
--

INSERT INTO `product_book` (`id`, `cname`, `phone`, `email`, `name`, `price`, `description`, `status`, `loginid`, `payment`) VALUES
(27, 'nick', '78958458956', 'nick@gmail.com', 'TP-Link AC4000', '$200', 'Fast file-transfer speeds,Beamforming Wi-Fi range,Alexa voice support', 'Delivered', 34, 'Not Paid'),
(31, 'nick', '5847895869', 'nick@gmail.com', 'Elgato Wave 3', '$200', 'Switch and blend audio sources,96KHz sample rate', 'Delivered', 3, 'Not Paid'),
(32, 'mick', '7895848596', 'nick@gmail.com', 'Razer Seirēn X Mic', '$300', 'Affordable,Professional look,Well-built and sturdy', 'Returned', 4, 'Not Paid'),
(33, 'NAVEEN T M', '7902765146', 'naveentmadhu@gmail.com', 'Elgato Wave 3', '$200', 'Switch and blend audio sources,96KHz sample rate', 'Returned', 4, 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name`, `description`, `price`) VALUES
(4, 'Razer Seirēn X Mic', 'Affordable,Professional look,Well-built and sturdy', '$300'),
(5, 'Elgato Wave 3', 'Switch and blend audio sources,96KHz sample rate', '$200'),
(6, 'Secretlab Titan Evo', 'Upgraded durability,Cold-cure memory foam,agnetic arm and headrests', '$300'),
(7, 'Fanatec GT DD Pro', 'Degrees of rotation: 2520,Pedals: Two,Force feedback: Direct drive', '$100'),
(8, 'TP-Link AC4000', 'Fast file-transfer speeds,Beamforming Wi-Fi range,Alexa voice support', '$200');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `address`, `phonenumber`, `email`, `loginid`) VALUES
(1, 'mack', 'sthbryhxgbfxyhsrybshb', 2147483647, 'mack@gmail.com', 3),
(6, 'nick', 'iklogym ctnm u yu tjkcgkmvl ,hklh', 2147483647, 'nick@gmail.com', 34);

-- --------------------------------------------------------

--
-- Table structure for table `website_manager`
--

CREATE TABLE `website_manager` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_manager`
--

INSERT INTO `website_manager` (`id`, `name`, `phonenumber`, `email`, `loginid`) VALUES
(1, 'Nicky', 2147483647, 'nicky@gmail.com', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_reply`
--
ALTER TABLE `complaint_reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_service_manager`
--
ALTER TABLE `customer_service_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_book`
--
ALTER TABLE `game_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_details`
--
ALTER TABLE `game_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_book`
--
ALTER TABLE `product_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_manager`
--
ALTER TABLE `website_manager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complaint_reply`
--
ALTER TABLE `complaint_reply`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_service_manager`
--
ALTER TABLE `customer_service_manager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `game_book`
--
ALTER TABLE `game_book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `game_details`
--
ALTER TABLE `game_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_book`
--
ALTER TABLE `product_book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `website_manager`
--
ALTER TABLE `website_manager`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
