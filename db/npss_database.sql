-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 03:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npss_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE `account_info` (
  `account_no` bigint(59) NOT NULL,
  `employee_id` bigint(16) NOT NULL,
  `reg_email` varchar(59) NOT NULL,
  `reg_password` varchar(59) NOT NULL,
  `acc_priv` enum('Super Admin','Admin','Administration','Finance','Purchasing') NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_no`, `employee_id`, `reg_email`, `reg_password`, `acc_priv`, `date_registered`) VALUES
(1, 2023198600, 'sikobieaypros@gmail.com', '8317', 'Admin', '2023-03-21 01:18:12'),
(2, 2023198601, 'sijirehmaybuko@gmail.com', '6467', 'Admin', '2023-03-21 01:42:50'),
(4, 2023198602, 'sineilaypogs@gmail.com', '3006', '', '2023-03-21 02:26:00'),
(5, 2023198603, 'sirichardaynapakabait@gmail.com', '5992', '', '2023-03-21 02:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `account_id` bigint(16) NOT NULL,
  `employee_id` bigint(16) NOT NULL,
  `first_name` varchar(59) NOT NULL,
  `middle_name` varchar(59) DEFAULT NULL,
  `last_name` varchar(59) NOT NULL,
  `given_suffix` varchar(59) DEFAULT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `given_address` varchar(249) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `email_add` varchar(59) DEFAULT NULL,
  `position` varchar(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL,
  `branch_site` varchar(59) NOT NULL,
  `job_desc` text NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `uploaded_cv` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`account_id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `given_suffix`, `contact_no`, `given_address`, `birth_date`, `email_add`, `position`, `emp_stat`, `branch_site`, `job_desc`, `profile_pic`, `uploaded_cv`, `date_created`) VALUES
(1, 2023198600, 'Kobie', 'Naghuhubad', 'Oracion', 'Jr.', '09123456789', 'Luisiana, Laguna', '2023-03-21', 'sikobieaypros@gmail.com', 'President', 'Director', 'Antipolo', 'Corporate Master', NULL, NULL, '2023-03-21 02:28:05'),
(2, 2023198601, 'Jireh', 'Dinamankupal', 'Ramos', '', '09987654321', 'Santa Cruz, Laguna', '2023-03-21', 'sijirehmaybuko@gmail.com', 'Vice President', 'Director', 'Antipolo', 'Corporate Slave', 'panda.jpg', NULL, '2023-03-21 02:28:08'),
(4, 2023198602, 'Neil', 'Wholesome', 'Pornela', 'Ay', '09123456789', 'Santa Cruz, Laguna', '2023-03-21', 'sineilaypogs@gmail.com', 'Messenger', 'Regular', 'Antipolo', 'Corporate Pet', 'girl.jpg', 'Application-Form-2.pdf', '2023-03-21 02:28:11'),
(5, 2023198603, 'Richard', 'Kupallang', 'Ramos', 'Sr', '09987654321', 'Santa Cruz, Laguna', '2023-03-22', 'sirichardaynapakabait@gmail.com', 'Treasurer', 'Regular', 'Antipolo', 'Corporate Flea', 'koenokatachi_sister.jpeg', 'CLAIM-RAMOS, RICHARD DE LEON_2021-1.pdf', '2023-03-21 02:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `emp_status`
--

CREATE TABLE `emp_status` (
  `stat_no` int(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_status`
--

INSERT INTO `emp_status` (`stat_no`, `emp_stat`) VALUES
(1, 'Director'),
(2, 'End of Contract'),
(3, 'Household'),
(4, 'Probationary'),
(5, 'Regular'),
(6, 'Retired'),
(7, 'Terminated'),
(8, 'Intern');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_no` int(11) NOT NULL,
  `position_name` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_no`, `position_name`) VALUES
(1, 'Accounting Assistant'),
(2, 'Admin Head Assistant'),
(3, 'Administration Head'),
(4, 'Assistant Finance'),
(5, 'Auditor'),
(6, 'Autocad Operator'),
(7, 'Company Driver'),
(8, 'Corporate Secretary'),
(9, 'Data Analyst'),
(10, 'Electrical Engineer'),
(11, 'Encoder'),
(12, 'Family Driver'),
(13, 'Foreman'),
(14, 'Household'),
(15, 'Office Staff'),
(16, 'President'),
(17, 'Project Manager'),
(18, 'Purchasing Head'),
(19, 'Sales Executive'),
(20, 'Technician'),
(21, 'Thermographer'),
(22, 'Treasurer'),
(23, 'Utility'),
(24, 'Messenger'),
(25, 'Vice President'),
(26, 'Warehouseman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `emp_status`
--
ALTER TABLE `emp_status`
  ADD PRIMARY KEY (`stat_no`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `account_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `account_id` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_status`
--
ALTER TABLE `emp_status`
  MODIFY `stat_no` int(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_info`
--
ALTER TABLE `account_info`
  ADD CONSTRAINT `account_info_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
