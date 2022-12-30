-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 09:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(100) NOT NULL,
  `event_title` text NOT NULL,
  `event_price` int(20) NOT NULL,
  `participents` int(100) NOT NULL,
  `img_link` text NOT NULL,
  `type_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_price`, `participents`, `img_link`, `type_id`) VALUES
(1, 'pubg', 100, 4, 'game1.jpeg', 2),
(2, 'programmers date', 50, 2, 'cs02.jpg', 3),
(3, 'counter strike', 50, 1, 'game2.jpg', 2),
(4, 'utsava', 50, 2, 'cs01.jpg', 4),
(5, 'seminar', 0, 1, 'seminar1.jpeg', 3),
(6, 'aero club', 50, 1, 'aero.png', 4),
(7, 'hackathon', 20, 1, 'technical1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `type_id` int(10) NOT NULL,
  `type_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`type_id`, `type_title`) VALUES
(1, 'Technical Events'),
(2, 'Gaming Events'),
(3, 'On Stage Events'),
(4, 'Off Stage Events'),
(5, 'new event Events');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `p_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `college` varchar(300) NOT NULL,
  `branch` varchar(11) NOT NULL,
  `reference` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`p_id`, `event_id`, `fullname`, `email`, `mobile`, `college`, `branch`, `reference`) VALUES
(2, 1, 'RAGHAV', 'e55@bmsit.in', '7667472706', 'bmsit', 'ise', '0'),
(3, 6, 'raghav', 'jraghavkumar029@gmail.com', '7667472706', 'bmsit', 'ise', '0'),
(4, 1, 'raghav', 'jraghavkumar029@gmail.com', '7667472706', 'bmsit', 'ise', '0'),
(5, 2, 'krishna', 'krishna234@nedoeo.com', '7870956895', 'bmsit', 'ise', '0'),
(6, 1, 'raghav', 'raghav@gmail.com', '7667472706', 'bmsit', 'cse', '0'),
(7, 1, 'raghav kumar', 'jrahav@gmail.com', '1223456789', 'bmsit', 'ise', '0'),
(8, 1, 'raghav', 'jraghavkumar029@gmail.com', '7667472706', 'bmsit', 'ise', '0'),
(9, 7, 'aman', 'amanrajjput7@gmail.com', '8102267416', 'bmsit', 'ise', '0'),
(10, 7, 'aman', 'amanrajjput7@gmail.com', '8102267416', 'bmsit', 'ise', ''),
(11, 7, 'aman', 'amanrajjput7@gmail.com', '8763459089', 'bmsit', 'ise', ''),
(12, 1, 'raghav', 'jragav@gmail.com', '7665678900', 'bmsit', 'ise', '000000000000'),
(13, 1, 'raghav', 'jragav@gmail.com', '7665678900', 'bmsit', 'ise', ''),
(14, 1, 'raaj', 'jjj@gmail.com', '7788779033', 'bmsit', 'ise', ''),
(15, 1, 'raaj', 'jjj@gmail.com', '7788779033', 'bmsit', 'ise', ''),
(16, 1, 'raahj', 'gg@gmail.com', '7788996655', 'bmsit', 'ise', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
