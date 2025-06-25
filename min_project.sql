-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `min_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publication` varchar(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `prize` varchar(20) NOT NULL,
  `description` varchar(600) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `author`, `publication`, `version`, `prize`, `description`, `id`) VALUES
('C++', 'Tufail kagzi', 'Prakash', '2.0', '160', 'description short now.', 8),
('dbms', 'me', 'technical', '2', '150', 'tufail is author of this book thank you so much....', 9),
('AJP', 'why', 'Technical', '2', '280', 'its AJP book ', 12);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fname` varchar(50) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `fmobile` varchar(50) NOT NULL,
  `fmsg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `femail`, `fmobile`, `fmsg`) VALUES
('Admin121', 'user@gmail.com', '4411141418', 'hiiiiiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upwd` varchar(20) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `umobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `upwd`, `uemail`, `umobile`) VALUES
(22, 'admin', 'admin', 'admin@gmail.com', '1234567'),
(23, 'Tufail Kagzi', 'admin', 'adminn@gmail.com', '123456789'),
(28, 'user1', '123', 'user@gmail.com', '789456612');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
