-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2021 at 11:24 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f37ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `postalCode`, `email`, `phone`) VALUES
(1, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(2, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(3, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(4, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423'),
(5, 'sam ', '1234a4t adfjadf asdfda', '0', 'samuelparick97@gmail.com', '+6592383423');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'kimberly', 'klie@gmail.com', 'feedback', 'good'),
(2, 'delvin', 'delvin@gmail.com', 'catering', '20 salmon nigiri for 24 november'),
(3, 'rico', 'rico@gmail.com', 'others', 'when tuna nigiri will be available');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `imgURL` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `imgURL`) VALUES
(1, 'Romana ', 'Tomato Sauce, Mozzarella, Anchovies', 13, '../asset/menu-pic/menu1.png'),
(2, 'Quattro Formaggi ', 'Mozzarella, Gorgonzola, Pecorino, Fontina', 15, '../asset/menu-pic/menu2.png'),
(3, 'Pizza Bresaola', 'Air-Dried Beef, Tomato, Mozzarella, Arugula, Shaved Parmigiano Reggiano', 12, '../asset/menu-pic/menu3.png'),
(4, 'Homemade Tagliatelle', 'with Wagyu Beef Bolognese', 10, '../asset/menu-pic/menu4.png'),
(5, 'Jumbo Crab Ritagoni', 'Basil and Calabrian Chill Paste', 12, '../asset/menu-pic/menu5.png'),
(6, 'Wagyu Meatball Ritagoni', 'in Traditional Napoletana Sauce', 12, '../asset/menu-pic/menu6.png'),
(7, 'Oven-Baked Focaccia', 'with Tomatoes, Mozzarella and Anchovies', 4.5, '../asset/menu-pic/menu7.png'),
(8, 'Truffle Roast Beef', 'Roast Beef with Cheddar Truffle Fondue, Beef Jus, Ricotta in a Ciabatta Loaf', 9.5, '../asset/menu-pic/menu8.png'),
(9, 'Fried Calamari', 'with Spicy Tomato Basil Dip', 7, '../asset/menu-pic/menu9.png'),
(10, 'Tiramisu', ' ', 5, '../asset/menu-pic/menu10.png'),
(11, 'Ferrero Rocher', 'Hazelnut, Ferrero Rocher Crumble ', 4, '../asset/menu-pic/menu11.png'),
(12, 'Salted Caramel Chocolate Cake', '', 4.5, '../asset/menu-pic/menu12.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `transaction_ID` int(10) NOT NULL,
  `menu_ID` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_ID` (`transaction_ID`),
  KEY `menu_ID` (`menu_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_ID`, `menu_ID`, `quantity`) VALUES
(9, 3, 6, 3),
(10, 3, 10, 4),
(11, 4, 6, 5),
(12, 4, 7, 5),
(13, 5, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_ID` int(10) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_ID` (`customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_id`, `fullName`, `email`, `phoneNumber`, `address`) VALUES
(1, 1, 'Eugene', 'eugene@gmail.com', 12345678, 'krusty krab'),
(2, 1, 'Eugene', 'eugene@gmail.com', 12345678, 'krusty krab'),
(3, 1, 'Eugene', 'eugene@gmail.com', 12345678, 'krusty krab'),
(4, 1, 'Eugene', 'eugene@gmail.com', 12345678, 'krusty krab'),
(5, 1, 'Eugene', 'eugene@gmail.com', 12345678, 'krusty krab');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`menu_ID`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`transaction_ID`) REFERENCES `transaction` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
