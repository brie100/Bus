-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 11:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
(84, 17, 1, 'D3', '2020-01-09 06:39:37', '2020-01-11', '5e16bc9e31f91', 24),
(85, 17, 1, 'C3', '2020-01-09 06:39:37', '2020-01-11', '5e16bc9e31f91', 24),
(86, 17, 1, 'B4', '2020-01-09 06:39:37', '2020-01-11', '5e16bc9e31f91', 24),
(93, 9, 1, 'C4', '2020-01-10 18:04:13', '2020-01-11', '5e18ae9238080', 30),
(94, 9, 1, 'B3', '2020-01-10 18:04:13', '2020-01-11', '5e18ae9238080', 30),
(95, 9, 1, 'A4', '2020-01-10 18:04:13', '2020-01-11', '5e18ae9238080', 30),
(96, 25, 4, 'C4', '2020-01-10 21:06:42', '2020-01-11', '5e18d96f4808a', 31),
(97, 25, 4, 'A4', '2020-01-10 21:06:42', '2020-01-11', '5e18d96f4808a', 31),
(98, 3, 1, 'B3', '2020-01-10 21:41:49', '2020-01-10', '5e18e19276564', 32),
(99, 3, 1, 'A4', '2020-01-10 21:41:49', '2020-01-10', '5e18e19276564', 32),
(100, 3, 1, 'D4', '2020-01-10 21:41:49', '2020-01-10', '5e18e19276564', 32);

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
(91, 1, 1, 'E4', '2020-01-09 09:16:59', '2020-01-18', '5e16e180caf69', 28);

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
(1, 'Khan', 'Arafat', 'gggg@gmail.com', '202cb962ac59075b964b07152d234b70', 124798, '0000-00-00', 1),
(2, 'fgf', 'hfgh', '3tuet@jgflg.com', '202cb962ac59075b964b07152d234b70', 1259236, '1234-01-12', 0),
(3, 'iyti', 'gj', 'fgjdgj@hg.com', '202cb962ac59075b964b07152d234b70', 87972569, '2020-01-17', 0),
(4, 'Asif', 'Akbara', 'root@gmail.com', '202cb962ac59075b964b07152d234b70', 158973268, '2020-01-14', 0),
(5, 'Noman', 'Abdullah', 'nomanabdullah591@gmail.com', '202cb962ac59075b964b07152d234b70', 1318848516, '1997-01-15', 0),
(6, 'khan', 'Abdullah', 'nomanabdullah590@gmail.com', '202cb962ac59075b964b07152d234b70', 1318848510, '1998-12-05', 0),
(7, 'khan', 'Saheb', 'nomanabdullah90@gmail.com', '202cb962ac59075b964b07152d234b70', 1318848501, '2000-12-29', 0),
(8, 'Noman', 'Saheb', 'nomanabdullahjj0@gmail.com', '202cb962ac59075b964b07152d234b70', 1318848519, '2001-01-15', 0),
(9, 'De ', 'Caprio', 'aaanomanabdullahjj0@gmail.com', '202cb962ac59075b964b07152d234b70', 1318848556, '1990-01-30', 0),
(10, 'jacky ', 'chen', 'aaanomanabd5452ahjj0@gmail.com', '202cb962ac59075b964b07152d234b70', 1318841478, '2000-10-29', 0),
(11, 'NUPUR', 'jannat', 'abdhhh455@gmail.com', '202cb962ac59075b964b07152d234b70', 1318858745, '2000-10-29', 0),
(12, 'Virat', 'Kohli', 'abfghghdh455@gmail.com', '202cb962ac59075b964b07152d234b70', 1318845785, '2020-01-03', 0),
(13, 'Rog', 'Strix', 'abf2145hdh455@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, '2020-07-09', 0),
(14, 'Dhoni', 'Miya', 'abdullah2145hdh455@gmail.com', '202cb962ac59075b964b07152d234b70', 1318848569, '2020-02-01', 0),
(15, 'Sheikh', 'Hasina', 'abdullah2141455@gmail.com', '202cb962ac59075b964b07152d234b70', 1818848501, '1975-10-29', 0),
(16, 'Villain', 'Sing', 'abdullahmmm1455@gmail.com', '202cb962ac59075b964b07152d234b70', 1839219116, '2020-04-09', 0),
(17, 'Abdullah', 'Noman', 'nomanabdullah348@gmail.com', '202cb962ac59075b964b07152d234b70', 1839219115, '1997-01-15', 0),
(18, 'hack', 'pack', 'nomanabdullah341@gmail.com', '202cb962ac59075b964b07152d234b70', 1831884147, '2020-01-02', 0),
(19, 'Mashrafee', 'Murtaza', 'nomanabdullah342@gmail.com', '202cb962ac59075b964b07152d234b70', 2147483647, '1980-10-29', 0),
(20, 'Admin', 'Man', 'admin@ebus.com', '202cb962ac59075b964b07152d234b70', 1318848564, '1995-01-15', 1);

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
(2, 'SULLEY ', 'NON AC', '10:00:00', 'Sylhet', '15:00:00', 'Dhaka', 1000, 1, 1, 1, 0, 1, 1, 0, 123457),
(3, 'KING LEONIDAS ', 'AC', '19:00:00', 'Dhaka', '23:00:00', 'Comilla', 300, 0, 1, 1, 1, 1, 0, 1, 124578),
(4, 'BRTC', 'AC', '12:00:00', 'Dhaka', '15:00:00', 'Comilla', 400, 1, 0, 0, 1, 1, 1, 1, 124587),
(6, 'JESSE JAMES', 'NON AC', '06:00:00', 'Dhaka', '09:00:00', 'Comilla', 400, 1, 1, 0, 1, 0, 0, 1, 127845),
(7, 'EDWARD CULLEN', 'AC', '08:00:00', 'Barisal', '16:00:00', 'rajshahi', 800, 1, 0, 1, 1, 1, 0, 1, 321654),
(8, 'THEO ', 'AC', '08:00:00', 'Dhaka', '12:00:00', 'Chittagong', 600, 1, 1, 0, 1, 1, 0, 0, 367390),
(9, 'JAMES T. KIRK', 'AC', '14:00:00', 'Chittagong', '16:00:00', 'Dhaka', 600, 1, 1, 0, 1, 1, 0, 0, 367391),
(10, 'QUEEN ELIZABETH', 'AC', '10:00:00', 'Dhaka', '15:00:00', 'Chittagong', 600, 1, 0, 1, 1, 0, 1, 1, 367395),
(11, 'BEN STONE', 'NON AC', '08:00:00', 'Barisal', '15:00:00', 'Dhaka', 780, 1, 1, 1, 0, 1, 0, 1, 2546798),
(12, 'LARRY GOPNIK', 'NON AC', '07:00:00', 'Barisal', '12:00:00', 'Sylhet', 500, 1, 0, 0, 1, 1, 0, 0, 2587413),
(13, 'KIM JONG IL', 'NON AC', '09:00:00', 'Barisal', '15:00:00', 'Khulna', 700, 1, 0, 1, 1, 0, 1, 1, 3254127),
(14, 'RICHARD NIXON', 'AC', '15:00:00', 'Sylhet', '23:00:00', 'Chittagong', 600, 1, 1, 0, 1, 1, 1, 0, 5214789),
(15, 'WALT KOWALSKI ', 'AC', '12:00:00', 'Rangpur', '15:00:00', 'Chittagong', 600, 1, 1, 0, 1, 1, 0, 1, 5487123),
(16, 'WILSON', 'NON AC', '09:00:00', 'Rangpur', '15:00:00', 'rajshahi', 780, 1, 0, 0, 1, 1, 0, 1, 5821475),
(17, 'SHAUN ', 'NON AC', '08:00:00', 'Sylhet', '12:00:00', 'rajshahi', 400, 1, 1, 0, 1, 0, 0, 1, 5896321),
(18, 'KYM ', 'NON AC', '14:00:00', 'Rangpur', '22:00:00', 'Comilla', 890, 1, 0, 1, 0, 1, 0, 1, 6541237),
(19, 'PENNY LANE', 'NON AC', '04:10:00', 'Dhaka', '11:00:00', 'Rangpur', 580, 1, 0, 0, 1, 1, 1, 1, 21456321),
(20, 'NICK NAYLOR', 'AC', '12:00:00', 'Khulna', '19:00:00', 'Rangpur', 290, 1, 0, 1, 1, 0, 0, 1, 25874623),
(21, 'HELLBOY ', 'AC', '06:00:00', 'Rangpur', '15:00:00', 'Comilla', 600, 1, 0, 1, 0, 1, 1, 1, 36987525),
(22, 'VINCENT ', 'AC', '08:00:00', 'Dhaka', '12:00:00', 'Khulna', 600, 1, 0, 0, 1, 0, 1, 1, 41256385),
(23, 'GISELLE ', 'AC', '08:00:00', 'Rangpur', '15:00:00', 'Sylhet', 990, 1, 1, 1, 1, 1, 0, 0, 45871236),
(24, 'RORSCHACH ', 'AC', '08:00:00', 'Sylhet', '12:00:00', 'Barisal', 600, 1, 1, 0, 1, 1, 1, 1, 78789878),
(25, 'WILLIE ', 'AC', '06:00:00', 'Dhaka', '12:00:00', 'Rajshahi', 890, 1, 0, 1, 1, 0, 0, 1, 85864758),
(26, 'ERIN BROCKOVICH', 'AC', '12:00:00', 'Sylhet', '21:00:00', 'Comilla', 300, 1, 0, 1, 0, 1, 0, 1, 101001001),
(27, 'SHE ', 'NON AC', '11:00:00', 'Sylhet', '15:00:00', 'Rangpur', 300, 1, 0, 1, 0, 1, 1, 1, 231475682),
(39, 'MR. INCREDIBLE', 'AC', '03:06:00', 'Dhaka', '18:53:00', 'Chittagong', 770, 1, 1, 1, 1, 1, 1, 0, 125477),
(40, 'BORAT ', 'AC', '18:22:00', 'Dhaka', '21:07:00', 'Rangpur', 710, 1, 1, 0, 0, 1, 1, 1, 2587565),
(41, 'JOKER ', 'AC', '02:09:00', 'Dhaka', '08:06:00', 'Barisal', 650, 0, 1, 1, 1, 1, 0, 1, 5874963),
(42, 'DANIEL PLAINVIEW', 'NON-AC', '15:32:00', 'Dhaka', '10:08:00', 'Sylhet', 150, 1, 0, 0, 1, 1, 0, 1, 4578963),
(43, 'WALL-E', 'AC', '17:33:00', 'Dhaka', '21:33:00', 'Khulna', 250, 1, 1, 0, 1, 1, 0, 1, 457863755),
(44, 'AMÉLIE POULAIN', 'NON-AC', '18:22:00', 'Dhaka', '23:34:00', 'Rajshahi', 800, 0, 1, 1, 1, 0, 1, 0, 785456525),
(45, 'GOLLUM', 'NON-AC', '01:35:00', 'Dhaka', '08:06:00', 'Chittagong', 70, 0, 0, 1, 1, 1, 0, 1, 4587547),
(46, 'RON BURGUNDY', 'AC', '15:36:00', 'Chittagong', '21:07:00', 'Dhaka', 588, 0, 1, 1, 0, 1, 1, 0, 14785585),
(47, 'THE BRIDE ', 'AC', '05:08:00', 'Chittagong', '21:07:00', 'Rajshahi', 850, 1, 0, 1, 1, 0, 0, 1, 4763),
(48, 'JUNO MACGUFF', 'NON-AC', '14:37:00', 'Chittagong', '21:33:00', 'Rajshahi', 770, 1, 1, 0, 1, 0, 1, 1, 2157),
(49, 'CAPTAIN JACK SPARROW', 'AC', '12:53:00', 'Chittagong', '02:07:00', 'Khulna', 6000, 0, 1, 0, 1, 1, 0, 1, 25872),
(50, ' DONNIE DARKO', 'NON-AC', '05:08:00', 'Chittagong', '18:53:00', 'Sylhet', 900, 1, 1, 0, 1, 1, 0, 1, 54789),
(51, 'RANDY “THE RAM” ROBINSON', 'AC', '17:06:00', 'Chittagong', '21:33:00', 'Barisal', 1700, 1, 0, 1, 0, 1, 1, 0, 171821),
(52, 'BOB DYLAN ', 'AC', '05:00:00', 'Chittagong', '10:08:00', 'Rangpur', 999, 1, 1, 0, 1, 0, 1, 0, 215215),
(53, ' PAN', 'NON-AC', '12:53:00', 'Chittagong', '02:07:00', 'Rangpur', 220, 1, 0, 1, 1, 0, 1, 0, 125412),
(54, 'BOB HARRIS ', 'NON-AC', '12:00:00', 'Chittagong', '16:43:00', 'Comilla', 500, 1, 0, 1, 0, 1, 0, 1, 123521),
(55, ' WOLVERINE', 'AC', '12:15:00', 'Rajshahi', '08:06:00', 'Dhaka', 1000, 1, 0, 1, 0, 1, 0, 1, 123963),
(56, 'GANDALF', 'AC', '17:44:00', 'Rajshahi', '12:00:00', 'Chittagong', 800, 1, 1, 1, 0, 0, 1, 1, 789458),
(57, 'HARRY POTTER', 'NON-AC', '03:06:00', 'Rajshahi', '21:07:00', 'Khulna', 870, 1, 1, 0, 1, 1, 0, 1, 45782),
(58, ' CARL FRIEDRICKSEN ', 'AC', '05:50:00', 'Rajshahi', '10:08:00', 'Sylhet', 700, 0, 1, 1, 1, 1, 1, 0, 54678),
(59, ' CARL DORY', 'AC', '15:47:00', 'Rajshahi', '21:00:00', 'Barisal', 587, 1, 1, 0, 1, 1, 0, 0, 58749634),
(60, 'LEONARD', 'AC', '12:00:00', 'Rajshahi', '18:00:00', 'Rangpur', 750, 0, 1, 1, 0, 1, 0, 1, 1254796),
(61, 'SWEENEY TODD ', 'NON-AC', '14:50:00', 'Rajshahi', '21:07:00', 'Rangpur', 220, 1, 0, 1, 1, 0, 1, 0, 741258562),
(62, ' BRUCE WAYNE', 'AC', '10:00:00', 'Rajshahi', '21:33:00', 'Comilla', 800, 1, 1, 1, 0, 1, 0, 1, 528964);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `invoice_temp`
--
ALTER TABLE `invoice_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `_all_bus`
--
ALTER TABLE `_all_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
