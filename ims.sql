-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 12:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `availabe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand id`, `brand_name`, `availabe`) VALUES
(1, 'Samsung', 'acive'),
(13, 'HP', 'active'),
(14, 'Huawei', 'active'),
(15, 'Microsoft Corporation', 'active'),
(16, 'Adobe', 'active'),
(17, 'Apple', 'active\r\n'),
(18, 'Avira', 'active'),
(19, 'mosell', 'active'),
(20, 'moses', 'active'),
(21, 'Motorolla', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(255) NOT NULL,
  `catname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'laptop'),
(2, 'mobile'),
(3, 'tv'),
(4, 'earphone'),
(5, 'Router'),
(6, 'Gaming consoles'),
(7, 'Monitors'),
(8, 'Ethernet Cables');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `id` int(50) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_phone_number` int(30) NOT NULL,
  `client_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`id`, `client_email`, `client_phone_number`, `client_address`) VALUES
(1, 'bassmoses@jaja.com', 0, 'j  j'),
(3, 'bassmoses@jaja.com', 7878, 'j  j'),
(4, 'bassmoses@jaja.com', 7878, 'j  j'),
(5, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `sub_total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL,
  `payment_type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laptop_product`
--

CREATE TABLE `laptop_product` (
  `Lid` int(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `amount_paid` int(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `item_name`, `quantity`, `amount_paid`, `payment_type`, `date_time`) VALUES
(1, 'Tijan', 'Samsung Galaxy S20 / S20 Plus', '5', 500000, 'Cheque', '2021-01-16 00:00:00'),
(3, 'Phoenix', 'OnePlus 8', '20', 3000, 'Cash', '2021-01-23 00:00:00'),
(4, 'Frenando', 'Samsung Galaxy S21 Ultra', '3', 30000, 'Cash', '2021-01-23 04:41:19'),
(5, 'Patrick', 'iPhone 11 MAX', '1', 3900, 'Cheque', '2021-01-23 04:58:10'),
(6, 'Kumba', 'iPhone XR', '3', 56000, 'Draft', '2021-01-23 05:02:37'),
(7, 'mplez', 'iPhone 12 / iPhone 12 mini', '7', 8488, 'Cash', '2021-01-23 05:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `product_name`) VALUES
(1, '    None\r\n'),
(2, 'Samsung Galaxy S21 Ultra\r\n'),
(3, '    iPhone 12 / iPhone 12 mini\r\n'),
(4, '    Samsung Galaxy S21\r\n'),
(5, '    iPhone 12 Pro / iPhone 12 Pro Max\r\n'),
(6, '    Samsung Galaxy Note 20 Ultra\r\n'),
(7, '    OnePlus 8 Pro\r\n'),
(8, '    iPhone SE 2020\r\n'),
(9, '    Samsung Galaxy S20 Fan Edition\r\n'),
(10, '    OnePlus 8\r\n'),
(11, '    Samsung Galaxy S20 / S20 Plus\r\n '),
(12, '   Google Pixel 5\r\n'),
(13, '    iPhone 11  MAX'),
(14, 'Google Pixel 4a   plus'),
(15, ' iPhone XR\r\n  '),
(16, '  Motorola One 5G');

-- --------------------------------------------------------

--
-- Table structure for table `router_product`
--

CREATE TABLE `router_product` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `user_password`, `create_datetime`) VALUES
(1, 'bassmoses', 'bassmoses@yahoo.com', '8dd4d91dfb232ad2ae722aa1c21cdb13', '2020-12-18 11:45:03'),
(2, 'bassphoenix', 'bassmoses377@gmail.com', 'b3d97746dbb45e92dc083db205e1fd14', '2020-12-18 11:50:04'),
(3, 'grop', 'bass@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-27 23:56:24'),
(4, 'rose', 'mendyrose@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-01-03 22:31:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD KEY `clientrelation` (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop_product`
--
ALTER TABLE `laptop_product`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `router_product`
--
ALTER TABLE `router_product`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop_product`
--
ALTER TABLE `laptop_product`
  MODIFY `Lid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `router_product`
--
ALTER TABLE `router_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_details`
--
ALTER TABLE `client_details`
  ADD CONSTRAINT `hello` FOREIGN KEY (`id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
