-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 05:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiarch`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_seller` varchar(250) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `item_title` varchar(250) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_desc` text NOT NULL,
  `item_img` text NOT NULL,
  `item_uploaded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_seller`, `seller_id`, `item_title`, `item_price`, `item_desc`, `item_img`, `item_uploaded`) VALUES
(37, 'Azmifauzy', 17, 'January Moments Art', 50000, '"January Moments Art" made by Photoshop.', 'b.jpg', 1581095163),
(38, 'Azmifauzy', 17, 'Rocket Launcher Digital Art', 130000, 'Get Now!', '4.jpg', 1581095218),
(39, 'Keisya Puspitasari', 18, 'Joji "Run" Graph Design', 300000, 'Joji "Run" Graph Design.', 'jojirun.jpg', 1581095305),
(40, 'Keisya Puspitasari', 18, 'Zero Byte 2D Design', 80000, 'BUY NOW, GET NOW!', '11.jpg', 1581095359);

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(250) NOT NULL,
  `balance` int(11) NOT NULL,
  `process` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`id`, `buyer_id`, `buyer_name`, `balance`, `process`) VALUES
(6, 18, 'Keisya Puspitasari', 500000, 'DONE'),
(7, 18, 'Keisya Puspitasari', 500000, 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(250) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_seller` varchar(250) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `item_title` text NOT NULL,
  `item_price` int(11) NOT NULL,
  `process` varchar(10) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `buyer_id`, `buyer_name`, `item_id`, `item_seller`, `seller_id`, `item_title`, `item_price`, `process`, `date`) VALUES
(4, 18, 'Keisya Puspitasari', 38, 'Azmifauzy', 17, 'Rocket Launcher Digital Art', 130000, 'Not Yet', 1581095798),
(5, 17, 'Azmifauzy', 39, 'Keisya Puspitasari', 18, 'Joji "Run" Graph Design', 300000, 'DONE', 1581098107);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `role` varchar(6) NOT NULL,
  `img` text NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `role`, `img`, `balance`) VALUES
(17, 'Azmifauzy', 'Azmifauzy@digiarch.com', '12345', 1581094937, 'admin', 'default.png', 700000),
(18, 'Keisya Puspitasari', 'keisya@digiarch.com', 'password', 1581095068, 'member', 'default.png', 740000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
