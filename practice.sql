-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 10:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date_posted` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `user_id`, `content`, `date_posted`) VALUES
(0, 2, 1, 'adsadads\r\n', '1437384369'),
(0, 4, 2, 'cristy po to', '1437384585'),
(0, 4, 2, 'lkjlklkqew', '1437385594'),
(0, 4, 2, 'qewlkqewlk', '1437385807'),
(0, 4, 2, 'hahahaha', '1437385812'),
(0, 3, 2, 'wee', '1437386186'),
(0, 3, 2, ';qlt;lqlwer', '1437386275'),
(0, 3, 2, 'qewqew;lqewl;qwktqew', '1437386294'),
(0, 6, 2, 'xcv,kcv', '1437386543'),
(0, 6, 2, 'qewqewlk', '1437386662'),
(0, 6, 1, 'hahhaahhahhaa', '1437386842'),
(0, 7, 1, 'Bwahahahhaha', '1437386876'),
(0, 7, 1, 'hahahahahahahhah', '1437387027'),
(0, 7, 1, 'weherer and whwene', '1437387035'),
(0, 9, 1, 'test', '1437389776'),
(0, 9, 2, 'Yeah! This is a test!', '1437389808'),
(0, 10, 2, 'test?', '1437389870'),
(0, 10, 1, 'Yeah! A TEST!', '1437389885'),
(0, 10, 5, 'OK. LE ME TEST', '1437389918'),
(0, 12, 2, 'Test?', '1437390434'),
(0, 12, 1, 'YEAH! A Test!', '1437390560'),
(0, 12, 5, 'HHHhhmmm?', '1437390794'),
(0, 12, 6, 'hello', '1672371839'),
(0, 16, 16, 'Hi there', '1672393424');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date_created` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `content`, `date_created`) VALUES
(16, 12, 'Hello Everyone', '1672393351'),
(17, 16, 'Got a medal', '1672393435'),
(18, 16, 'sssshhhhhh', '1672393829');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `role`, `contact`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '', ''),
(8, 'abc@gmail', 'abc', 'abc', 'xyz', 'Editor', '6598741230'),
(9, 'yasa@gmail.com', 'yasa', 'yasa', 'pathan', 'Editor', 'qwert'),
(10, 'isa@gmail.com', 'isa', 'isa', 'isa', 'zzz', '2345678901'),
(11, 'the', 'the', 'the', 'the', 'Editor', '9876543210'),
(12, 'z@gmail.com', 'z', 'z', 'z', 'writer', '68736'),
(13, 'john', 'john', 'john', 'doe', 'editor', '9865321470'),
(14, 'sam', 'sam', 'sam', 'tree', 'Editor', '9876543210'),
(15, 'asdf@gmail.com', 'asdf', 'asdf', 'bnm', 'Editor', '9876543210'),
(16, 'john@gmail.com', 'john', 'John', 'Lao', 'writer', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
