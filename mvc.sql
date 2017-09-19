-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2017 at 06:30 AM
-- Server version: 10.1.25-MariaDB-
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_clients`
--

CREATE TABLE `tab_clients` (
  `id_client` int(11) NOT NULL,
  `client_name` varchar(80) NOT NULL,
  `client_genre` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_clients`
--

INSERT INTO `tab_clients` (`id_client`, `client_name`, `client_genre`) VALUES
(1, 'Gerson Arbigaus', 'M'),
(2, 'Adriele Arbigaus', 'F'),
(3, 'Bella Arbigaus', 'F'),
(4, 'Maria José', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tab_users`
--

CREATE TABLE `tab_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_users`
--

INSERT INTO `tab_users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Gerson Arbigaus', 'gerson87@gmail.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_clients`
--
ALTER TABLE `tab_clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tab_users`
--
ALTER TABLE `tab_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_clients`
--
ALTER TABLE `tab_clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tab_users`
--
ALTER TABLE `tab_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
