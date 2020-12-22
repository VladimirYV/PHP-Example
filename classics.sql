-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2020 at 10:59 AM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publications`
--

-- --------------------------------------------------------

--
-- Table structure for table `classics`
--

CREATE TABLE `classics` (
  `author` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `category` varchar(16) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `isbn` char(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classics`
--

INSERT INTO `classics` (`author`, `title`, `category`, `year`, `isbn`) VALUES
('William Shakespeare', 'Romeo and Juliet', 'Play', 1594, '9780192814968'),
('Charles Dickens', 'The Old Curiosity Shop', 'Fiction', 1841, '9780099533474'),
('Charles Darwin', 'The Origin of Species', 'Non-Fiction', 1856, '9780517123201'),
('Mark Twain', 'The Adventures of Tom Sawyer', 'Fiction', 1876, '9781598184891'),
('Jane Austen', 'Pride and Prejudice', 'Fiction', 1811, '9780582506206');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classics`
--
ALTER TABLE `classics`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `author` (`author`(20)),
  ADD KEY `title` (`title`(20)),
  ADD KEY `category` (`category`(4)),
  ADD KEY `year` (`year`),
  ADD KEY `isbn` (`isbn`);
ALTER TABLE `classics` ADD FULLTEXT KEY `author_2` (`author`,`title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
