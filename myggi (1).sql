-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2025 at 10:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myggi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `rid` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `pid`, `rid`, `price`, `quantity`) VALUES
(3, '3', '8', '30.00', '6'),
(4, '4', '8', '10.00', '3');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `cimage` varchar(500) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`, `cimage`, `pid`) VALUES
(1, 'Vegetables', '1756236469vegetables.jpg', 0),
(2, 'Fruits', '1756236858fruits.jpg', 0),
(5, 'Tomato', '1756237456tomatoes.jpg', 1),
(6, 'Lemon', '1756237470lemons.jpg', 2),
(7, 'Chili', '1756238309chilis.jpg', 1),
(8, 'Mango', '1756238330mangoes.jpg', 2),
(9, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_order`
--

CREATE TABLE `m_order` (
  `order_id` int(11) NOT NULL,
  `cid` int(50) NOT NULL,
  `b_name` varchar(500) NOT NULL,
  `b_phone` varchar(500) NOT NULL,
  `b_address` varchar(500) NOT NULL,
  `s_name` varchar(500) NOT NULL,
  `s_phone` varchar(500) NOT NULL,
  `s_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_order`
--

INSERT INTO `m_order` (`order_id`, `cid`, `b_name`, `b_phone`, `b_address`, `s_name`, `s_phone`, `s_address`) VALUES
(1, 7, 'Ankan Das', '9547422173', 'ranaghat', 'Ankan Das', '9547422173', 'ranaghat');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` bigint(20) UNSIGNED NOT NULL,
  `cid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `cid`, `pname`, `price`, `pimage`, `details`) VALUES
(1, 3, 'Green Tomato', 50.00, '1756232781green-tomato.jpg', 'available'),
(2, 3, 'Red Tomato', 100.00, '1756232844red-tomato.jpg', 'available'),
(3, 5, 'Orange Lemon', 30.00, '1756232906orange-lemon.jpg', 'rare'),
(4, 5, 'Yellow Lemon', 10.00, '1756232947yellow-lemon.jpg', 'available'),
(5, 7, 'red chili', 20.00, '1756559414chili.webp', 'kol');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `name`, `email`, `password`) VALUES
(1, 'dipjay', 'd@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(2, 'spidy', 's@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(3, 'apu2', 'a2@gmail.com', 'a336d24d556aadf82ce346a8329b1038'),
(4, 'apu3', 'a3@gmail.com', '803fb1225b881bd8aec8a4856ed839b2'),
(5, 'Ankan Das', 'dasankan2005m@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Ankan Das', 'dasankan2005m@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Ankan 8 das', 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Ankan Das', 'dasankan2005m@gmail.com', 'd93591bdf7860e1e4ee2fca799911215');

-- --------------------------------------------------------

--
-- Table structure for table `sub_order`
--

CREATE TABLE `sub_order` (
  `pid` int(11) NOT NULL,
  `rid` int(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `order_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_order`
--

INSERT INTO `sub_order` (`pid`, `rid`, `price`, `quantity`, `order_id`) VALUES
(1, 7, '50.00', '6', 1),
(2, 7, '100.00', '5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `m_order`
--
ALTER TABLE `m_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `sub_order`
--
ALTER TABLE `sub_order`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_order`
--
ALTER TABLE `m_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_order`
--
ALTER TABLE `sub_order`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
