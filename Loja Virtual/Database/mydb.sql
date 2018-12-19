-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2018 at 11:03 PM
-- Server version: 5.7.23
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mssg` text NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `name`, `mobile`, `email`, `mssg`, `cdate`) VALUES
(3, 'Judas', '+5592991408932', 'judas@gmail.com', 'tem gente que ganha respeito de judas no quesito de traiÃ§Ã£o.', '2018-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `ordrs`
--

DROP TABLE IF EXISTS `ordrs`;
CREATE TABLE IF NOT EXISTS `ordrs` (
  `myid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `ordr` varchar(200) NOT NULL,
  `pr` varchar(20) NOT NULL,
  `sts` varchar(20) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`myid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordrs`
--

INSERT INTO `ordrs` (`myid`, `uid`, `img`, `name`, `mobile`, `email`, `addr`, `ordr`, `pr`, `sts`, `cdate`) VALUES
(28, 3, 'images/99.jpg', 'dddd', '+4354354', 'dd@gmail.com', 'sdsdefd', 'Photoshop', '$100', 'Pendente', '2017-10-16'),
(27, 3, 'images/11.jpg', 'dd done', '+64143434', 'dd@gmail.com', 'dd new order Taxes America', 'CSS ', '$200', 'Despachado', '2017-10-16'),
(26, 2, 'images/11.jpg', 'David ', '+374341', 'david@gmail.com', 'My new NY Address David America', 'CSS ', '$200', 'Despachado', '2017-10-16'),
(42, 4, 'images/23.jpg', 'thelsandro', '', 'thelsandro.antunes@gmail.com', '', 'Advanced', 'R$500', 'Pending', '2018-12-19'),
(31, 2, 'images/11.jpg', 'rr', 'rr', 'rr', 'rrr', 'CSS ', '$200', 'Pendente', '2017-10-19'),
(34, 2, 'images/16.jpg', 'jj', '+54135441', 'jj@example.com', 'fdfdsffs', 'Blogger', '$200', 'Pendente', '2017-10-19'),
(35, 1, 'images/15.jpg', 'admin', '+55555555', 'admin@example.com', 'customerbehalf link access ', 'PHP ', '$400', 'Dispatched', '2017-10-19'),
(36, 4, 'images/01.jpg', 'thelsandro', '+559839483989', 'thelsandro.antunes@gmail.com', '', '1808', 'R$45', 'Dispatched', '2018-12-18'),
(37, 4, 'images/01.jpg', 'thelsandro', '', 'thelsandro.antunes@gmail.com', '', '1808', 'R$45', 'Pendente', '2018-12-18'),
(38, 4, 'images/25.jpg', 'thelsandro', '', 'thelsandro.antunes@gmail.com', '', 'Ad HTML ', 'R$300', 'Pendente', '2018-12-18'),
(39, 4, 'images/23.jpg', 'thelsandro', '', 'thelsandro.antunes@gmail.com', '', 'Advanced', 'R$500', 'Despachado', '2018-12-18'),
(40, 4, 'images/07.jpg', 'thelsandro', '+559839483989', 'thelsandro.antunes@gmail.com', '', 'O Rei do Inverno', 'R$43', 'Cancelled', '2018-12-19'),
(41, 4, 'images/04.jpg', 'thelsandro', '+551187871212', 'thelsandro.antunes@gmail.com', 'TARUMÃƒ', 'O Jardim das AfliÃ§Ãµes', 'R$89', 'Pending', '2018-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `des` varchar(150) NOT NULL,
  `pr` varchar(20) NOT NULL,
  `cdate` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `img`, `name`, `des`, `pr`, `cdate`) VALUES
(23, 'images/18.jpg', 'novo produto', 'teste', 'R$ 400', '2017-10-16'),
(15, 'images/14.jpg', 'JavaScript', 'best JS courses', 'R$200', '2017-19-12'),
(16, 'images/15.jpg', 'PHP ', 'PHP training courses', 'R$210', '2018-12-19'),
(13, 'images/12.jpg', 'HTML Course', 'best courses in urdu Hindi', 'R$200', '2017-10-16'),
(18, 'images/16.jpg', 'Blogger', 'Blogger course', 'R$250', '2017-10-16'),
(12, 'images/11.jpg', 'CSS ', 'Learn Cascading Style with project in Urdu Hidni', 'R$170', '2018-12-19'),
(25, 'images/23.jpg', 'Advanced', 'JavaScrip Advanced Curses', 'R$500', '2017-10-19'),
(26, 'images/25.jpg', 'Ad HTML ', 'Learn new HTML course', 'R$300', '2017-10-19'),
(28, 'images/01.jpg', '1808', 'Autor: Laurentino Gomes', 'R$45', '2018-12-19'),
(30, 'images/02.jpg', '1822', 'Laurentino Gomes', 'R$43', ''),
(32, 'images/03.jpg', '1889', 'Laurentino Gomes', 'R$47', ''),
(34, 'images/04.jpg', 'O Jardim das AfliÃ§Ãµes', 'Olavo de Carvalho', 'R$89', '2018-19-12'),
(36, 'images/05.jpg', 'O Imbecil Coletivo', 'Olavo de Carvalho', 'R$85', ''),
(37, 'images/06.jpg', 'O Mínimo que você precisa saber para não ser um Idiota', 'Olavo de Carvalho', 'R$115', ''),
(39, 'images/06.jpg', 'Excalibur', 'Bernard Cornwell', 'R$42', ''),
(41, 'images/07.jpg', 'O Rei do Inverno', 'Bernard Cornwell', 'R$43', ''),
(43, 'images/08.jpg', 'O Inimigo de Deus', 'Bernard Cornwell', 'R$49', ''),
(45, 'images/43.jpg', 'DragÃ£os de Ã‰ter', 'Rafael Draccon', 'R$ 37', '2018-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`) VALUES
(1, 'admin', 'admin@example.com', '$2y$10$ujej4UpRJsbf3ETJRrqg8uQ7pBv4HX5w77dho8cD9t8zVK/zt75Na', '2017-10-15 11:33:28'),
(4, 'thelsandro', 'thelsandro.antunes@gmail.com', '$2y$10$oRC4FqM9vNHQliWZuRQGBuMpSh8bzvmMysncSPK8Gqo5cfY2rem9W', '2018-12-17 19:23:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
