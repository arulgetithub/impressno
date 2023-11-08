-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 12:58 PM
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
-- Table structure for table `tbl_contactus_mst`
--

CREATE TABLE `tbl_contactus_mst` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(100) NOT NULL,
  `contact_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cust_product`
--

CREATE TABLE `tbl_cust_product` (
  `cust_product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cust_product`
--

INSERT INTO `tbl_cust_product` (`cust_product_id`, `user_id`, `product_id`) VALUES
(1, 13, 1),
(2, 13, 3),
(3, 12, 6),
(4, 13, 5),
(5, 13, 7),
(6, 12, 2),
(7, 12, 4),
(8, 14, 8),
(9, 14, 3),
(10, 14, 6),
(11, 15, 1),
(12, 15, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_mst`
--

CREATE TABLE `tbl_product_mst` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product_mst`
--

INSERT INTO `tbl_product_mst` (`product_id`, `product_name`, `product_type`, `product_desc`, `product_link`) VALUES
(1, 'VRNC', 'ERP', '-', '../new_survey/index.html'),
(2, 'Product 2', 'CLOUD', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', ''),
(3, 'Product 3', 'CS', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', ''),
(4, 'Product 4', 'NETWORK', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', ''),
(5, 'Product 5', 'ERP', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', ''),
(6, 'Product 6', 'HRMS', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', ''),
(7, 'Product 7', 'CLOUD', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', ''),
(8, 'Product 8', 'CS', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', '');

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
(11, 12, '2023-09-30 12:25:09', '2023-09-30 12:25:26', 'Inactive'),
(12, 13, '2023-10-03 02:17:04', '2023-10-03 03:43:02', 'Inactive'),
(13, 12, '2023-10-03 03:43:20', '0000-00-00 00:00:00', 'Active'),
(14, 13, '2023-10-04 02:36:38', '2023-10-04 02:41:10', 'Inactive'),
(15, 14, '2023-10-16 03:12:09', '2023-10-16 03:12:15', 'Inactive'),
(16, 14, '2023-10-16 03:12:39', '2023-10-16 03:49:24', 'Inactive'),
(17, 13, '2023-11-07 05:02:06', '0000-00-00 00:00:00', 'Active'),
(18, 13, '2023-11-07 05:16:54', '2023-11-07 05:18:53', 'Inactive'),
(19, 15, '2023-11-07 05:26:08', '2023-11-07 05:26:17', 'Inactive'),
(20, 15, '2023-11-07 05:27:49', '0000-00-00 00:00:00', 'Active');

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
('Arul Venkat', 'aruliter@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Admin', 13),
('Harshit', 'kotisai.harshith@btech.christuniversity.in', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', 'User', 14),
('RAM VRNC', 'ram@vrnc.in', 'e444be6f76737d520cf322b3dcc34f8d3f1dc442', 'User', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contactus_mst`
--
ALTER TABLE `tbl_contactus_mst`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_cust_product`
--
ALTER TABLE `tbl_cust_product`
  ADD PRIMARY KEY (`cust_product_id`),
  ADD KEY `product_map` (`product_id`),
  ADD KEY `user_map` (`user_id`);

--
-- Indexes for table `tbl_product_mst`
--
ALTER TABLE `tbl_product_mst`
  ADD PRIMARY KEY (`product_id`);

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
-- AUTO_INCREMENT for table `tbl_contactus_mst`
--
ALTER TABLE `tbl_contactus_mst`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cust_product`
--
ALTER TABLE `tbl_cust_product`
  MODIFY `cust_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_product_mst`
--
ALTER TABLE `tbl_product_mst`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  MODIFY `user_cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cust_product`
--
ALTER TABLE `tbl_cust_product`
  ADD CONSTRAINT `product_map` FOREIGN KEY (`product_id`) REFERENCES `tbl_product_mst` (`product_id`),
  ADD CONSTRAINT `user_map` FOREIGN KEY (`user_id`) REFERENCES `tbl_user_reg` (`user_cust_id`);

--
-- Constraints for table `tbl_user_log`
--
ALTER TABLE `tbl_user_log`
  ADD CONSTRAINT `user_log` FOREIGN KEY (`user_id`) REFERENCES `tbl_user_reg` (`user_cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
