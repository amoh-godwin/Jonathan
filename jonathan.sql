-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2017 at 06:28 AM
-- Server version: 5.6.29
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jonathan`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(7) NOT NULL,
  `full name` varchar(225) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `picture` varchar(225) NOT NULL,
  `friend_list` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `full name`, `username`, `email`, `password`, `picture`, `friend_list`, `date`) VALUES
(1, 'amoh gyebi', 'amoh-Gyebi', 'amoh@gmail.com', 'ampofo1', 'amoh-gyebi_prof.jpg', 'amoh-gyebi_friends_list.txt', '2017-02-05 23:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `ama_john_240217_db`
--

CREATE TABLE `ama_john_240217_db` (
  `id` int(12) NOT NULL,
  `sender` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `receiver` varchar(225) NOT NULL,
  `arrived_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `amoh_chat`
--

CREATE TABLE `amoh_chat` (
  `id` int(7) NOT NULL,
  `snd` varchar(225) NOT NULL,
  `msg` text NOT NULL,
  `recpt` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amoh_chat`
--

INSERT INTO `amoh_chat` (`id`, `snd`, `msg`, `recpt`, `date`) VALUES
(1, 'amoh', 'Hi God', 'nana', '2017-03-01 20:56:09'),
(2, 'amoh', 'Thank God', 'nana', '2017-03-01 21:32:54'),
(3, 'nana', 'Thank you Father', 'amoh', '2017-03-01 21:32:54'),
(4, 'amoh', 'Thank you Father', 'nana', '2017-03-01 21:46:24'),
(5, 'nana', 'Thank God', 'amoh', '2017-03-01 21:47:16'),
(6, 'amoh', 'dfkglksdf', 'nana', '2017-03-01 21:47:24'),
(7, 'amoh', 'Thank you', 'nana', '2017-03-02 03:13:54'),
(8, 'amoh', 'love God', 'nana', '2017-03-02 03:27:57'),
(9, 'amoh', 'love God', 'nana', '2017-03-02 03:28:52'),
(10, 'amoh', 'Father Thank ', 'nana', '2017-03-02 03:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `nana_chat`
--

CREATE TABLE `nana_chat` (
  `id` int(7) NOT NULL,
  `snd` varchar(225) NOT NULL,
  `msg` text NOT NULL,
  `recpt` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nana_chat`
--

INSERT INTO `nana_chat` (`id`, `snd`, `msg`, `recpt`, `date`) VALUES
(1, 'amoh', 'Hi God', 'nana', '2017-03-01 20:56:09'),
(2, 'amoh', 'Thank God', 'nana', '2017-03-01 21:33:41'),
(3, 'nana', 'Thank you Father', 'amoh', '2017-03-01 21:34:14'),
(4, 'amoh', 'Thank you Father', 'nana', '2017-03-01 21:46:24'),
(5, 'nana', 'Thank God', 'amoh', '2017-03-01 21:47:16'),
(6, 'amoh', 'dfkglksdf', 'nana', '2017-03-01 21:47:24'),
(7, 'amoh', 'Thank you', 'nana', '2017-03-02 03:13:54'),
(8, 'amoh', 'love God', 'nana', '2017-03-02 03:27:58'),
(9, 'amoh', 'love God', 'nana', '2017-03-02 03:28:52'),
(10, 'amoh', 'Father Thank ', 'nana', '2017-03-02 03:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `rick_warren_240217_db`
--

CREATE TABLE `rick_warren_240217_db` (
  `id` int(12) NOT NULL,
  `sender` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `receiver` varchar(225) NOT NULL,
  `arrived_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ama_john_240217_db`
--
ALTER TABLE `ama_john_240217_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amoh_chat`
--
ALTER TABLE `amoh_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nana_chat`
--
ALTER TABLE `nana_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rick_warren_240217_db`
--
ALTER TABLE `rick_warren_240217_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ama_john_240217_db`
--
ALTER TABLE `ama_john_240217_db`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `amoh_chat`
--
ALTER TABLE `amoh_chat`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nana_chat`
--
ALTER TABLE `nana_chat`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `rick_warren_240217_db`
--
ALTER TABLE `rick_warren_240217_db`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
