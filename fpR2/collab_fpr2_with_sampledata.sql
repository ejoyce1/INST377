-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 05:59 AM
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
(3, 'greenbean', '$2y$10$TudkFD7gkFgEkWM2G6if6.RCVp/Z2rdU7w7BkJnnS59jsnaOiLk46', 'green@test.com', 'greenbeens'),
(4, 'testgroup', '$2y$10$xLUnuWg18V2km6s.GO00IuUnDsvwdeBz3LZI9ZRXK.WGvWR8iCw.q', 'group@group.com', 'group11');

-- --------------------------------------------------------

--
-- Table structure for table `when2meet`
--

CREATE TABLE `when2meet` (
  `schedule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `group_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `bestDay` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `timeOfDay` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `actualTime` int(11) DEFAULT NULL,
  `workStatus` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `worstDay` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `comments` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `when2meet`
--

INSERT INTO `when2meet` (`schedule_id`, `user_id`, `username`, `group_name`, `bestDay`, `timeOfDay`, `actualTime`, `workStatus`, `worstDay`, `comments`) VALUES
(3, 0, 'testeduser', 'testrer_group', 'Monday', 'Morning', 12, 'FT', 'T', 'None'),
(4, 0, 'myname', 'test_group2', 'Sunday', 'MORNING', 12, 'Full-Time', NULL, '		enter any comments you want the group leader to know\r\n		'),
(5, 0, 'heyitsme', 'test_group2', 'Sunday', 'MORNING', 12, 'Full-Time', NULL, '		enter any comments you want the group leader to know\r\n		'),
(6, 0, 'notauser', 'greenbeens', 'Sunday', 'MORNING', 12, 'Full-Time', NULL, '		enter any comments you want the group leader to know\r\n		'),
(7, 0, 'heyitsyaboy', 'greenbeens', 'Sunday', 'MORNING', 12, 'Full-Time', NULL, 'I have to walk my dog at 3PM everyday'),
(8, 0, 'heyitsyaboy2', 'greenbeens', 'Sunday', 'MORNING', 12, 'Full-Time', NULL, 'My dog has to be walked at 5PM too'),
(9, 0, 'itsnotme', 'greenbeens', 'Wednesday', 'MORNING', 11, 'Part-Time', NULL, 'I have to walk my dog at 3PM everyday'),
(10, 0, 'eman', 'test_group2', 'Monday', 'AFTERNOON', 4, 'Part-Time', NULL, 'I work part time in the mornings'),
(11, 0, 'newguys', 'test_group2', 'Saturday', 'MORNING', 12, 'Full-Time', NULL, '		enter any comments you want the group leader to know\r\n		'),
(12, 0, 'imnobody', 'greenbeens', 'Wednesday', 'AFTERNOON', 9, 'Don\'t Work', NULL, 'nothing from me champ'),
(13, 0, 'sayhellotothebadguy', 'test_group2', 'Monday', 'AFTERNOON', 5, 'Don\'t Work', NULL, 'new guy\r\n		');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- Indexes for table `when2meet`
--
ALTER TABLE `when2meet`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `when2meet`
--
ALTER TABLE `when2meet`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
