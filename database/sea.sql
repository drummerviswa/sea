-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 01:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sea`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `bid` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`bid`, `brand_name`, `status`) VALUES
(1, 'Udhaiyam', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `parent_cat` varchar(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `parent_cat`, `category_name`, `status`) VALUES
(1, '0', 'Dhals', '1'),
(3, '0', 'Flours', '1'),
(4, '0', 'Rice', '1'),
(5, '0', 'Others', '1'),
(6, '0', 'Spices', '1'),
(11, '1', 'Hello ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_id` int(11) NOT NULL,
  `Customer_name` varchar(255) NOT NULL,
  `Customer_no` varchar(12) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_id`, `Customer_name`, `Customer_no`, `Address`) VALUES
(1, 'Boy Stores', '9884664452', 'No 1, Apk street,Alan Toor,Dubai - 04');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `sub_total` double NOT NULL,
  `gst` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL,
  `payment_type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `customer_name`, `order_date`, `sub_total`, `gst`, `discount`, `net_total`, `paid`, `due`, `payment_type`) VALUES
(1, 'SREE stores', '0000-00-00', 28, 5.04, 0, 33.04, 10, 33.04, 'Cash'),
(2, 'Sree stores', '0000-00-00', 235, 42.3, 0, 277.3, 100, 177.3, 'Cash'),
(3, 'Shree', '0000-00-00', 14, 2.52, 0, 16.52, 0, 16.52, 'Cash'),
(4, 'Kishore Kumar', '0000-00-00', 28, 5.04, 0, 33.04, 0, 33.04, 'Cash'),
(5, 'Shree', '0000-00-00', 14, 2.52, 0, 16.52, 0, 16.52, 'Cash'),
(6, 'Shree', '0000-00-00', 700, 126, 0, 826, 0, 826, 'Cash'),
(7, 'Shree', '0000-00-00', 14, 2.52, 0, 16.52, 0, 16.52, 'Cash'),
(8, 'Nshanth', '0000-00-00', 700, 126, 0, 826, 0, 826, 'Cash'),
(9, 'Nishanth Sores', '0000-00-00', 1120, 201.6, 0, 1321.6, 0, 1321.6, 'Cash'),
(10, 'fgjhfhgjfj', '0000-00-00', 15, 2.6999999999999997, 0, 17.7, 0, 17.7, 'Cash'),
(11, 'ASDASDSA', '0000-00-00', 6840, 1231.2, 0, 8071.2, 0, 8071.2, 'Cash'),
(12, 'Shree', '0000-00-00', 14, 2.52, 0, 16.52, 0, 16.52, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_no`, `product_name`, `price`, `qty`) VALUES
(1, 1, 'Udhaiyam Salt (1kg)', 14, 1),
(2, 1, 'Udhaiyam Salt (1kg)', 14, 1),
(3, 2, 'Udhaiyam Salt (1kg)', 14, 5),
(4, 2, 'Udhaiyam Sugar (1kg)', 15, 11),
(5, 3, 'Udhaiyam Salt (1kg)', 14, 1),
(6, 4, 'Udhaiyam Salt (1kg)', 14, 2),
(7, 5, 'Udhaiyam Salt (1kg)', 14, 1),
(8, 6, 'Udhaiyam Salt (1kg)', 14, 50),
(9, 7, 'Udhaiyam Salt (1kg)', 14, 1),
(10, 8, 'Udhaiyam Salt (1kg)', 14, 50),
(11, 9, 'Udhaiyam Salt (1kg)', 14, 80),
(12, 10, 'Udhaiyam Sugar (1kg)', 15, 1),
(13, 11, 'Udhaiyam Sugar (1kg)', 15, 456),
(14, 12, 'Udhaiyam Salt (1kg)', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_stock` int(11) NOT NULL,
  `add_date` date NOT NULL,
  `p_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `cid`, `bid`, `product_name`, `product_price`, `product_stock`, `add_date`, `p_status`) VALUES
(1, 5, 1, 'Udhaiyam Salt (1kg)', 14, 499, '2022-01-20', '1'),
(2, 6, 1, 'Udhaiyam Sugar (1kg)', 15, 532, '2022-01-19', '1'),
(3, 5, 1, 'Udhaiyam Sugar (1/2Kg)', 16.2, 450, '2022-01-20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `register_date` date NOT NULL,
  `last_login` datetime NOT NULL,
  `notes` varchar(255) NOT NULL,
  `usertype` enum('Admin','Other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `register_date`, `last_login`, `notes`, `usertype`) VALUES
(1, 'Viswanathan', 'drummerviswa@gmail.com', 'viswa123', '2022-01-18', '2022-01-18 00:00:00', '', 'Admin'),
(2, 'viswa', 'admin@sea.com', 'viswa123', '2022-01-18', '2022-01-18 00:00:00', '', 'Admin'),
(3, 'viswa', 'admin@gmail.com', '$2y$08$zgtpQW.Sz1vHMhZMSa.VUuqvCKn0/.A3lVxXkAggRdAYDzKEq.AgO', '2022-01-18', '2022-01-18 11:01:48', '', 'Admin'),
(4, 'Viswanathan', 'viswa@sea.com', '$2y$08$lJPBG6bvFbcrqbC6G2Zo1.Xz3A5n6vAPZ.4TzGvfnM46bX30T1TBy', '2022-01-18', '2022-01-19 04:01:47', '', 'Admin'),
(5, 'Viswanathan', 'admin@admin.com', '$2y$08$K1dgRspxxbfg1aeV9nhrROz5uU3Bm4j.dFce8UnXqT1y3.hMvhXuC', '2022-01-19', '2022-01-20 01:01:08', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `catagory_name` (`category_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_no` (`invoice_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `cid` (`cid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `categories` (`cid`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `brands` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
