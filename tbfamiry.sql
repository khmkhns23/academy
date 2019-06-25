-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 11:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigfamiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbfamiry`
--

CREATE TABLE `tbfamiry` (
  `id` int(11) NOT NULL,
  `tags` varchar(25) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbfamiry`
--

INSERT INTO `tbfamiry` (`id`, `tags`, `pid`, `name`, `title`, `img`) VALUES
(1, '', 0, 'NameTest', 'Title', 'img/ken.jpg'),
(2, 'f2', 1, 'NameTest', 'Title', 'img/ken.jpg'),
(3, 'f3', 1, 'NameTest', 'Title', 'img/ken.jpg'),
(4, 'f4', 1, 'NameTest', 'Title', 'img/ken.jpg'),
(5, 'f5', 1, 'NameTest', 'Title', 'img/ken.jpg'),
(6, 'f1', 2, 'NameTest', 'Title', 'img/ken.jpg'),
(7, 'f2', 2, 'NameTest', 'Title', 'img/ken.jpg'),
(8, '', 2, 'NOOOOO', 'Title', 'img/ken.jpg'),
(9, '', 2, 'NOOO', 'Title', 'img/ken.jpg'),
(10, '', 2, 'NOOO', 'Title', 'img/ken.jpg'),
(11, 'f1', 3, 'NameTest', 'Title', 'img/ken.jpg'),
(12, 'f2', 3, 'NameTest', 'Title', 'img/ken.jpg'),
(13, 'f3', 3, 'NameTest', 'Title', 'img/ken.jpg'),
(14, 'f4', 3, 'NameTest', 'Title', 'img/ken.jpg'),
(15, 'f5', 3, 'NameTest', 'Title', 'img/ken.jpg'),
(16, 'f1', 4, 'NameTest', 'Title', 'img/ken.jpg'),
(17, 'f2', 4, 'NameTest', 'Title', 'img/ken.jpg'),
(18, 'f3', 4, 'NameTest', 'Title', 'img/ken.jpg'),
(19, 'f4', 4, 'NameTest', 'Title', 'img/ken.jpg'),
(20, 'f5', 4, 'NameTest', 'Title', 'img/ken.jpg'),
(21, 'f1', 5, 'NameTest', 'Title', 'img/ken.jpg'),
(22, 'f2', 5, 'NameTest', 'Title', 'img/ken.jpg'),
(23, 'f3', 5, 'NameTest', 'Title', 'img/ken.jpg'),
(24, 'f4', 5, 'NameTest', 'Title', 'img/ken.jpg'),
(25, 'f5', 5, 'NameTest', 'Title', 'img/ken.jpg'),
(26, 'f1', 6, 'NameTest', 'Title', 'img/ken.jpg'),
(27, 'f2', 6, 'NameTest', 'Title', 'img/ken.jpg'),
(28, 'f3', 6, 'NameTest', 'Title', 'img/ken.jpg'),
(29, 'f4', 6, 'NameTest', 'Title', 'img/ken.jpg'),
(30, 'f5', 6, 'NameTest', 'Title', 'img/ken.jpg'),
(31, 'f1', 7, 'NameTest', 'Title', 'img/ken.jpg'),
(32, 'f2', 7, 'NameTest', 'Title', 'img/ken.jpg'),
(33, 'f3', 7, 'NameTest', 'Title', 'img/ken.jpg'),
(34, 'f4', 7, 'NameTest', 'Title', 'img/ken.jpg'),
(35, 'f5', 7, 'NameTest', 'Title', 'img/ken.jpg'),
(36, 'f1', 8, 'NameTest', 'Title', 'img/ken.jpg'),
(37, 'f2', 8, 'NameTest', 'Title', 'img/ken.jpg'),
(38, 'f3', 8, 'NameTest', 'Title', 'img/ken.jpg'),
(39, 'f4', 8, 'NameTest', 'Title', 'img/ken.jpg'),
(40, 'f5', 8, 'NameTest', 'Title', 'img/ken.jpg'),
(41, 'f1', 9, 'NameTest', 'Title', 'img/ken.jpg'),
(42, 'f2', 9, 'NameTest', 'Title', 'img/ken.jpg'),
(43, 'f3', 9, 'NameTest', 'Title', 'img/ken.jpg'),
(44, 'f4', 9, 'NameTest', 'Title', 'img/ken.jpg'),
(45, 'f5', 9, 'NameTest', 'Title', 'img/ken.jpg'),
(46, 'f1', 10, 'NameTest', 'Title', 'img/ken.jpg'),
(47, 'f2', 10, 'NameTest', 'Title', 'img/ken.jpg'),
(48, 'f3', 10, 'NameTest', 'Title', 'img/ken.jpg'),
(49, 'f4', 10, 'NameTest', 'Title', 'img/ken.jpg'),
(50, 'f5', 10, 'NameTest', 'Title', 'img/ken.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfamiry`
--
ALTER TABLE `tbfamiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbfamiry`
--
ALTER TABLE `tbfamiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
