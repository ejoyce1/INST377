-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 07:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collab_fpr2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `pwdUsers` varchar(255) COLLATE utf8_bin NOT NULL,
  `emailUser` varchar(55) COLLATE utf8_bin NOT NULL,
  `group_name` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `username`, `pwdUsers`, `emailUser`, `group_name`) VALUES
(1, 'test', '$2y$10$v4WFfH22qqCQcAfW26LAB.qICMwPTPSE3liF1VHET2E0rxdlHCfDa', 'test@test.com', 'test_group'),
(2, 'test2', '$2y$10$XRdCH9N7Vd7gBEDudSdSt.O4O8wVxEsU3JgJP6iwItEuIfd7lWoY6', 'test2@test.com', 'test_group2'),
(3, 'greenbean', '$2y$10$TudkFD7gkFgEkWM2G6if6.RCVp/Z2rdU7w7BkJnnS59jsnaOiLk46', 'green@test.com', 'greenbeens');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
