-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 10:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_ebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_invoice`
--

CREATE TABLE `all_invoice` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_number` varchar(20) NOT NULL,
  `reserving_time` datetime NOT NULL,
  `date_journey` date NOT NULL,
  `ticket_id` varchar(50) NOT NULL,
  `invoice_numb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_invoice`
--

INSERT INTO `all_invoice` (`id`, `bus_id`, `user_id`, `seat_number`, `reserving_time`, `date_journey`, `ticket_id`, `invoice_numb`) VALUES
(12, 1, 1, 'A1', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(13, 1, 1, 'A2', '2020-01-04 17:20:26', '0000-00-00', '', 10),
(14, 1, 1, 'B2', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(15, 1, 1, 'C2', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(16, 1, 1, 'C3', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(17, 1, 1, 'C4', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(18, 1, 1, 'H5', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(19, 1, 1, 'H4', '2020-01-04 17:20:26', '0000-00-00', '', 0),
(20, 1, 3, 'C4', '2020-01-04 17:25:50', '0000-00-00', '', 0),
(21, 1, 3, 'B4', '2020-01-04 17:25:50', '0000-00-00', '', 0),
(22, 1, 3, 'C2', '2020-01-04 17:34:01', '0000-00-00', '', 0),
(23, 1, 3, 'B2', '2020-01-04 17:34:01', '0000-00-00', '', 0),
(24, 1, 1, 'C3', '2020-01-04 18:53:33', '0000-00-00', '', 0),
(25, 1, 1, 'E4', '2020-01-04 18:53:33', '0000-00-00', '', 0),
(26, 1, 1, 'E3', '2020-01-04 18:53:33', '0000-00-00', '', 0),
(27, 1, 1, 'C4', '2020-01-04 19:45:08', '0000-00-00', '', 0),
(28, 1, 1, 'C3', '2020-01-04 19:45:08', '0000-00-00', '', 0),
(29, 1, 1, 'C3', '2020-01-04 19:56:31', '2020-01-15', '', 0),
(30, 1, 1, 'C4', '2020-01-04 19:56:31', '2020-01-15', '', 0),
(31, 1, 1, 'E3', '2020-01-04 20:44:51', '2020-01-15', '5e10eb3706d9e', 1),
(32, 1, 1, 'E4', '2020-01-04 20:44:51', '2020-01-15', '5e10eb3706d9e', 1),
(33, 1, 1, 'D4', '2020-01-04 20:44:51', '2020-01-15', '5e10eb3706d9e', 1),
(34, 1, 1, 'F2', '2020-01-04 20:45:12', '2020-01-15', '5e10eb4b889e3', 1),
(35, 1, 1, 'E2', '2020-01-04 20:45:12', '2020-01-15', '5e10eb4b889e3', 1),
(36, 1, 1, 'C2', '2020-01-04 20:45:12', '2020-01-15', '5e10eb4b889e3', 1),
(37, 1, 1, 'B1', '2020-01-04 20:45:54', '2020-01-15', '5e10eb751c25c', 0),
(38, 1, 1, 'F4', '2020-01-04 20:47:04', '2020-01-16', '5e10ebbd04cab', 0),
(39, 1, 1, 'E4', '2020-01-04 20:47:04', '2020-01-16', '5e10ebbd04cab', 0),
(40, 1, 1, 'B2', '2020-01-04 20:47:35', '2020-01-16', '5e10ebdb457f9', 0),
(41, 1, 1, 'A2', '2020-01-04 20:47:35', '2020-01-16', '5e10ebdb457f9', 0),
(42, 1, 1, 'B3', '2020-01-04 20:47:35', '2020-01-16', '5e10ebdb457f9', 0),
(43, 1, 1, 'A4', '2020-01-04 20:47:35', '2020-01-16', '5e10ebdb457f9', 0),
(44, 1, 1, 'E4', '2020-01-04 20:47:35', '2020-01-16', '5e10ebdb457f9', 0),
(45, 1, 1, 'C1', '2020-01-04 20:48:22', '2020-01-16', '5e10ec09c8269', 12),
(46, 1, 1, 'B2', '2020-01-04 20:48:22', '2020-01-16', '5e10ec09c8269', 12),
(47, 1, 1, 'F1', '2020-01-04 20:49:59', '2020-01-16', '5e10ec6a1627d', 1),
(48, 1, 1, 'E2', '2020-01-04 20:49:59', '2020-01-16', '5e10ec6a1627d', 1),
(49, 1, 1, 'B1', '2020-01-04 21:01:53', '2020-01-16', '5e10ef33d34b8', 1),
(50, 1, 1, 'B2', '2020-01-04 21:01:53', '2020-01-16', '5e10ef33d34b8', 1),
(51, 1, 1, 'D2', '2020-01-04 21:01:53', '2020-01-16', '5e10ef33d34b8', 1),
(52, 1, 1, 'E1', '2020-01-04 21:04:20', '2020-01-16', '5e10efc7d8dcd', 0),
(53, 1, 1, 'D2', '2020-01-04 21:04:20', '2020-01-16', '5e10efc7d8dcd', 0),
(54, 1, 1, 'F2', '2020-01-04 21:04:54', '2020-01-16', '5e10efe9c3098', 0),
(55, 1, 1, 'D2', '2020-01-04 21:04:54', '2020-01-16', '5e10efe9c3098', 0),
(56, 1, 1, 'F3', '2020-01-04 21:06:39', '2020-01-16', '5e10f051741ad', 0),
(57, 1, 1, 'F1', '2020-01-04 21:07:19', '2020-01-16', '5e10f07a0373f', 0),
(58, 1, 1, 'D3', '2020-01-04 21:13:37', '2020-01-16', '5e10f226413d4', 12),
(59, 1, 1, 'A1', '2020-01-04 21:14:31', '2020-01-16', '5e10f2293ebdf', 12),
(60, 1, 1, 'E2', '2020-01-04 21:15:12', '2020-01-16', '5e10f25374058', 13),
(61, 1, 1, 'D1', '2020-01-04 21:15:12', '2020-01-16', '5e10f25374058', 13),
(62, 1, 1, 'A1', '2020-01-04 21:15:33', '2020-01-16', '5e10f2684cc8d', 14),
(63, 1, 1, 'C2', '2020-01-04 21:17:35', '2020-01-16', '5e10f2e28b68f', 15),
(64, 1, 1, 'A2', '2020-01-04 21:17:35', '2020-01-16', '5e10f2e28b68f', 15),
(65, 1, 1, 'D4', '2020-01-04 21:56:27', '2020-01-23', '5e10fbfe7bdc6', 16),
(66, 1, 1, 'C2', '2020-01-04 21:58:12', '2020-01-23', '5e10fc663eb97', 17),
(67, 1, 1, 'A3', '2020-01-05 04:51:29', '2020-01-23', '5e115d4d33ddd', 18),
(68, 1, 1, 'B4', '2020-01-05 04:51:29', '2020-01-23', '5e115d4d33ddd', 18),
(69, 1, 1, 'D3', '2020-01-05 04:51:29', '2020-01-23', '5e115d4d33ddd', 18),
(70, 1, 1, 'E4', '2020-01-05 04:51:29', '2020-01-23', '5e115d4d33ddd', 18),
(71, 1, 1, 'C4', '2020-01-05 04:51:29', '2020-01-23', '5e115d4d33ddd', 18),
(72, 1, 1, 'A3', '2020-01-05 14:27:03', '2020-01-04', '5e11e42a3a19d', 19),
(73, 1, 1, 'A4', '2020-01-05 14:27:03', '2020-01-04', '5e11e42a3a19d', 19),
(74, 1, 1, 'B3', '2020-01-05 14:28:02', '2020-01-04', '5e11e47c0344d', 20),
(75, 1, 1, 'E3', '2020-01-05 14:28:02', '2020-01-04', '5e11e47c0344d', 20),
(76, 1, 1, 'C4', '2020-01-05 14:28:02', '2020-01-04', '5e11e47c0344d', 20),
(77, 1, 1, 'D3', '2020-01-05 14:29:37', '2020-01-04', '5e11e4c491a16', 21),
(78, 1, 1, 'F3', '2020-01-05 14:29:37', '2020-01-04', '5e11e4c491a16', 21),
(79, 1, 1, 'G4', '2020-01-05 14:29:37', '2020-01-04', '5e11e4c491a16', 21),
(80, 1, 1, 'A3', '2020-01-05 14:29:52', '2020-01-06', '5e11e4d28685b', 22),
(81, 1, 1, 'C4', '2020-01-05 14:29:52', '2020-01-06', '5e11e4d28685b', 22),
(82, 1, 1, 'E3', '2020-01-05 20:42:52', '2020-01-10', '5e123c4b67b05', 23),
(83, 1, 1, 'G4', '2020-01-05 20:42:52', '2020-01-10', '5e123c4b67b05', 23);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_temp`
--

CREATE TABLE `invoice_temp` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_number` varchar(20) NOT NULL,
  `reserving_time` datetime NOT NULL,
  `date_journey` date NOT NULL,
  `ticket_id` varchar(50) NOT NULL,
  `invoice_numb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_temp`
--

INSERT INTO `invoice_temp` (`id`, `bus_id`, `user_id`, `seat_number`, `reserving_time`, `date_journey`, `ticket_id`, `invoice_numb`) VALUES
(80, 1, 1, 'A3', '2020-01-05 14:29:52', '2020-01-06', '5e11e4d28685b', 22),
(81, 1, 1, 'C4', '2020-01-05 14:29:52', '2020-01-06', '5e11e4d28685b', 22),
(82, 1, 1, 'E3', '2020-01-05 20:42:52', '2020-01-10', '5e123c4b67b05', 23),
(83, 1, 1, 'G4', '2020-01-05 20:42:52', '2020-01-10', '5e123c4b67b05', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_n` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `phone_n`, `b_date`, `admin`) VALUES
(1, 'jhjj', 'ggg', 'gggg@gmail.com', '202cb962ac59075b964b07152d234b70', 124798, '0000-00-00', 1),
(2, 'fgf', 'hfgh', '3tuet@jgflg.com', '202cb962ac59075b964b07152d234b70', 1259236, '1234-01-12', 0),
(3, 'iyti', 'gj', 'fgjdgj@hg.com', '202cb962ac59075b964b07152d234b70', 87972569, '2020-01-17', 0),
(4, 'rg', 'dfg', 'root@gmail.com', '202cb962ac59075b964b07152d234b70', 158973268, '2020-01-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `_all_bus`
--

CREATE TABLE `_all_bus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `d_time` time NOT NULL,
  `d_place` varchar(20) NOT NULL,
  `a_time` time NOT NULL,
  `a_place` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `Sat` tinyint(1) NOT NULL,
  `Sun` tinyint(1) NOT NULL,
  `Mon` tinyint(1) NOT NULL,
  `Tue` tinyint(1) NOT NULL,
  `Wed` tinyint(1) NOT NULL,
  `Thu` tinyint(1) NOT NULL,
  `Fri` tinyint(1) NOT NULL,
  `number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_all_bus`
--

INSERT INTO `_all_bus` (`id`, `name`, `type`, `d_time`, `d_place`, `a_time`, `a_place`, `price`, `Sat`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `number`) VALUES
(1, 'Desh', 'no-ac', '08:00:00', 'Dhaka', '12:00:00', 'Rajshahi', 450, 1, 0, 1, 1, 1, 1, 1, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_invoice`
--
ALTER TABLE `all_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_temp`
--
ALTER TABLE `invoice_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_all_bus`
--
ALTER TABLE `_all_bus`
  ADD PRIMARY KEY (`id`,`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_invoice`
--
ALTER TABLE `all_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `invoice_temp`
--
ALTER TABLE `invoice_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
