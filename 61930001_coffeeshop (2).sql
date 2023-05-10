-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 10:43 PM
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
-- Database: `61930001_coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `pid`, `qty`) VALUES
(1, 9, 1),
(1, 9, 1),
(1, 1, 1),
(1, 2, 1),
(29, 6, 1),
(29, 8, 1),
(29, 9, 1),
(29, 5, 1),
(30, 2, 1),
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idp` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idp`, `type`, `name`, `price`, `image`) VALUES
(1, 'menu', 'Latte', 5, '\"images/menu-1.png\"'),
(2, 'menu', 'Cappuccino', 6, '\"images/menu-2.png\"'),
(3, 'menu', 'Cappuccino Caramel', 7, '\"images/menu-3.png\"'),
(4, 'menu', 'Flat White', 4, '\"images/menu-4.png\"'),
(5, 'menu', 'Hot Chocolate', 5, '\"images/menu-5.png\"'),
(6, 'menu', 'Macchiato', 5, '\"images/menu-6.png\"'),
(7, 'product', 'Nicaragua Beans', 15, '\"images/product-1.png\"'),
(8, 'product', 'Columbia Beans', 15, '\"images/product-2.png\"'),
(9, 'product', 'Peru Beans', 15, '\"images/product-3.png\"'),
(21, 'menu', 'espresso', 4, '\"images/about-img.jpeg\"');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `img` varchar(300) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `pass`, `img`, `review`) VALUES
(1, 'Danielle', 'Murr', 'Dan', '202cb962ac59075b964b07152d234b70', '\"images/pic-2.png\"', 'yay it worked'),
(24, 'Amin', 'Hajj Ali', 'amin', '30ae43ad1aa0a416699051b73a3dfcf6', '\"images/amin.jpeg\"', 'Best Coffee'),
(25, 'Anthony', 'Njeim', 'ant', 'caf1a3dfb505ffed0d024130f58c5cfa', '\"images/Anthony.jpeg\"', 'My teeth are brown because of the coffee'),
(26, 'Toni', 'Ghandour', 'ton', '250cf8b51c773f3f8dc8b4be867a9a02', '\"images/Toni.jpeg\"', 'delicious'),
(29, 'John', 'Doe', 'jj', '68053af2923e00204c3ca7c6a3150cf7', '\"images/pic-3.png\"', 'sup gang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
