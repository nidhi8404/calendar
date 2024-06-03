-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 05:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_master`
--

CREATE TABLE `calendar_event_master` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `calendar_event_master`
--

INSERT INTO `calendar_event_master` (`event_id`, `event_name`, `event_start_date`, `event_end_date`, `user_id`) VALUES
(1, 'Nidhi\'s Birthday', '2024-06-06', '2024-06-07', 0),
(3, 'Assignment Deadline', '2024-06-03', '2024-06-03', 0),
(14, 'Test3', '2024-06-18', '2024-06-19', 0),
(40, 'Event1', '2024-06-12', '2024-06-13', 2),
(46, 'Test2', '2024-06-14', '2024-06-15', 2),
(48, 'Event6', '2024-06-06', '2024-06-07', 2),
(49, 'Wedding', '2024-06-12', '2024-06-12', 3),
(50, 'Test2', '2024-06-05', '2024-06-06', 3),
(51, 'Friend Meet Up', '2024-06-15', '2024-06-15', 5),
(53, 'harsh birthday', '2024-06-24', '2024-06-25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_at`) VALUES
(1, 'nidhi8404', '$2y$10$uOa7e2rBc1L5APfYhrVyCeAkML24i16wEU8uOXqUkIvzZSDev12Uq', '2024-06-02 16:28:13'),
(2, 'riya', '$2y$10$HQA4LUDRPPNzUHU6SBW7M.INjSfuyeVUSjUDdVxphoR3MBpprQDuu', '2024-06-02 16:29:16'),
(3, 'harsh', '$2y$10$nciZnjvl.13i0.OGdBgvWekqGdIasc4NOUI/Rllo9j2RJYjmmmffC', '2024-06-02 18:13:48'),
(5, 'asha', '$2y$10$nRRUiGx1o9DGAB4chJzUNuMZ.HHbfNi6A9Iv3BWm0OpNncRVeI15K', '2024-06-02 18:27:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
