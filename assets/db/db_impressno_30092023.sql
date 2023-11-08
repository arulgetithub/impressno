-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 09:07 AM
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
-- Database: `db_impressno`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_log`
--

CREATE TABLE `tbl_user_log` (
  `user_log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_login_datetime` datetime NOT NULL,
  `user_logout_datetime` datetime NOT NULL,
  `log_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_log`
--

INSERT INTO `tbl_user_log` (`user_log_id`, `user_id`, `user_login_datetime`, `user_logout_datetime`, `log_status`) VALUES
(1, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Inactive'),
(2, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Inactive'),
(3, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Inactive'),
(4, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Inactive'),
(5, 13, '2023-09-30 06:16:06', '0000-00-00 00:00:00', 'Inactive'),
(6, 13, '2023-09-30 06:21:41', '0000-00-00 00:00:00', 'Inactive'),
(7, 12, '2023-09-30 06:23:01', '0000-00-00 00:00:00', 'Inactive'),
(8, 14, '2023-09-30 07:59:07', '2023-09-30 08:15:10', 'Inactive'),
(9, 12, '2023-09-30 08:20:36', '2023-09-30 08:20:51', 'Inactive'),
(10, 13, '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'Inactive'),
(11, 12, '2023-09-30 12:25:09', '2023-09-30 12:25:26', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reg`
--

CREATE TABLE `tbl_user_reg` (
  `user_fname` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_pwd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `user_cust_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_reg`
--

INSERT INTO `tbl_user_reg` (`user_fname`, `user_email`, `user_pwd`, `user_type`, `user_cust_id`) VALUES
('LOKESH KUMAR', 'm.lokesh@btech.christuniversity.in', 'c556b731232cd2ad82aad9db982e7392b48a6a51', 'User', 12),
('Arul', 'aruliter@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Admin', 13),
('Harshit', 'kotisai.harshith@btech.christuniversity.in', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', 'User', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  ADD PRIMARY KEY (`user_log_id`),
  ADD KEY `user_log` (`user_id`);

--
-- Indexes for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  ADD PRIMARY KEY (`user_cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  MODIFY `user_cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  ADD CONSTRAINT `user_log` FOREIGN KEY (`user_id`) REFERENCES `tbl_user_reg` (`user_cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
