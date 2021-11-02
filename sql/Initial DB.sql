-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 03:36 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--



-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `postalCode`, `email`, `phone`) VALUES
(1, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(2, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(3, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(4, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(5, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(6, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(7, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(8, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(9, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(10, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(11, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(12, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(13, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(14, 'sam ', '1234a4t adfjadf asdfda', '0', 'spatrick001@e.ntu.edu.sg', '+6592383423'),
(15, 'sam asdf', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(16, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(17, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(18, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(19, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(20, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(21, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(22, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(23, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelpatrick97@gmail.com', '+6592383423'),
(24, 'sam ', '1234a4t adfjadf asdfda', '0', 'spatrick001@e.ntu.edu.sg', '+6592383423'),
(25, 'robert', '1234a4t adfjadf asdfda', '000000', 'samuelparick@gmail.com', '+6592383423'),
(26, 'sam ', '1234a4t adfjadf asdfda', '000000', 'samuelpatrick@gmail.com', '+6592383423'),
(27, 'sam ', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(28, 'sam ', '1234a4t adfjadf asdfda', '000000', 'samuelpatrick@gmail.com', '+6592383423'),
(29, 'sam ', '1234a4t adfjadf asdfda', '000000', 'test123@gmail.com', '+6592383423'),
(30, 'kimberly ', '1234a4t adfjadf asdfda', '000000', 'klie001@e.ntu.edu.sg', '+6592383423'),
(31, 'kiki', '1234a4t adfjadf asdfda', '000000', 'mrkiki@gmail.sg', '+6590000000'),
(32, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(33, 'delvin', '1234a4t adfjadf asdfda', '000000', 'delvin@gmail.com', '+6590001234'),
(34, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(35, 'sam', '1234a4t adfjadf asdfda', '000000', 'samuelparick97@gmail.com', '+6592383423'),
(36, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'kimberly', 'klie@gmail.com', 'feedback', 'good'),
(2, 'delvin', 'delvin@gmail.com', 'catering', '20 salmon nigiri for 24 november'),
(3, 'rico', 'rico@gmail.com', 'others', 'when tuna nigiri will be available');

-- --------------------------------------------------------

-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `customer_ID`, `email`, `password`) VALUES
(11, 27, 'samuelparick97@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(12, 28, 'samuelpatrick@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(13, 29, 'test123@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(14, 30, 'klie001@e.ntu.edu.sg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(15, 31, 'mrkiki@gmail.sg', '95752f86c99f1055feba64e03924cb71f0c08315'),
(16, 33, 'delvin@gmail.com', '4aa1e7253d6c56353cd2a058ac4318f2ce7e5d6a');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `imgURL` varchar(80) NOT NULL,
  `type` varchar(10) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `imgURL`, `availability`) VALUES
(1, 'Romana ', 'Tomato Sauce, Mozzarella, Anchovies', 13, '../asset/menu-pic/menu1.png', 1),
(2, 'Quattro Formaggi ', 'Mozzarella, Gorgonzola, Pecorino, Fontina', 15, '../asset/menu-pic/menu2.png', 1),
(3, 'Pizza Bresaola', 'Air-Dried Beef, Tomato, Mozzarella, Arugula, Shaved Parmigiano Reggiano', 12, '../asset/menu-pic/menu3.png', 1),
(4, 'Homemade Tagliatelle', 'with Wagyu Beef Bolognese', 10, '../asset/menu-pic/menu4.png', 1),
(5, 'Jumbo Crab Ritagoni', 'Basil and Calabrian Chill Paste', 12, '../asset/menu-pic/menu5.png', 1),
(6, 'Wagyu Meatball Ritagoni', 'in Traditional Napoletana Sauce', 12, '../asset/menu-pic/menu6.png', 1),
(7, 'Oven-Baked Focaccia', 'with Tomatoes, Mozzarella and Anchovies', 4.5, '../asset/menu-pic/menu7.png', 1),
(8, 'Truffle Roast Beef', 'Roast Beef with Cheddar Truffle Fondue, Beef Jus, Ricotta in a Ciabatta Loaf', 9.5, '../asset/menu-pic/menu8.png', 1),
(9, 'Fried Calamari', 'with Spicy Tomato Basil Dip', 7, '../asset/menu-pic/menu9.png', 1),
(10, 'Tiramisu', ' ', 5, '../asset/menu-pic/menu10.png', 1),
(11, 'Ferrero Rocher', 'Hazelnut, Ferrero Rocher Crumble ', 4, '../asset/menu-pic/menu11.png', 1),
(12, 'Salted Caramel Chocolate Cake', '', 4.5, '../asset/menu-pic/menu12.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `transaction_ID` int(10) NOT NULL,
  `menu_ID` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_ID`, `menu_ID`, `quantity`) VALUES
(9, 3, 6, 3),
(10, 3, 10, 4),
(11, 4, 6, 5),
(12, 4, 7, 5),
(13, 5, 6, 4),
(14, 5, 14, 5),
(15, 6, 6, 2),
(16, 6, 10, 3),
(17, 6, 2, 2),
(18, 7, 6, 5),
(19, 7, 10, 7),
(20, 8, 6, 3),
(21, 8, 10, 4),
(22, 9, 6, 4),
(23, 9, 7, 5),
(24, 10, 7, 5),
(25, 10, 9, 1),
(26, 11, 23, 4),
(27, 12, 6, 1),
(28, 13, 16, 4),
(29, 13, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `customer_ID` int(10) NOT NULL,
  `date` date NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `ship_postalCode` int(6) NOT NULL,
  `note` varchar(140) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_ID`, `date`, `ship_address`, `ship_postalCode`, `note`, `price`) VALUES
(1, 10, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 0),
(2, 11, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 0),
(3, 12, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 0),
(4, 13, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 15),
(5, 14, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 18.445),
(6, 15, '2018-11-01', '1234a4t adfjadf asdfda', 0, '', 16.305),
(7, 31, '2018-11-01', '1234a4t adfjadf', 0, '', 23.26),
(8, 32, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 15.235),
(9, 31, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 18.445),
(10, 31, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 13.63),
(11, 33, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 16.84),
(12, 34, '2018-11-02', '1234a4t adfjadf asdfda', 0, 'afdsf', 5.605),
(13, 35, '2018-11-02', '1234a4t adfjadf asdfda', 0, '', 16.84);

--
-- Indexes for dumped tables
--


--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_ID` (`transaction_ID`),
  ADD KEY `menu_ID` (`menu_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_ID` (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--




--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`transaction_ID`) REFERENCES `transaction` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`menu_ID`) REFERENCES `menu` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
