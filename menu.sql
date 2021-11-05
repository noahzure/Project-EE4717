-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2021 at 11:36 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f32ee`
--

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
  `availability` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
