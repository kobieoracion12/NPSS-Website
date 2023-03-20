-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 06:56 AM
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
  `acc_priv` varchar(59) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_no`, `employee_id`, `reg_email`, `reg_password`, `acc_priv`, `date_registered`) VALUES
(202300001, 202319863, 'nestorrondilla@gmail.com', '7672', '', '2023-03-20 02:45:19'),
(202300003, 202319864, 'nessbrondilla@gmail.com', '5781', 'President', '2023-03-20 05:55:42');

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
  `contact_no` bigint(11) DEFAULT NULL,
  `given_address` varchar(249) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `email_add` varchar(59) DEFAULT NULL,
  `position` varchar(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL,
  `branch_site` varchar(59) NOT NULL,
  `job_desc` text NOT NULL,
  `profile_pic` longblob DEFAULT NULL,
  `uploaded_cv` longblob DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`account_id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `given_suffix`, `contact_no`, `given_address`, `birth_date`, `email_add`, `position`, `emp_stat`, `branch_site`, `job_desc`, `profile_pic`, `uploaded_cv`, `date_created`) VALUES
(3, 202319861, 'Kobie', '', 'Oracion', '', 9760435424, 'Luisiana, Laguna', '2000-07-12', 'kobie.oracion12@gmail.com', 'Intern', '', 'Antipolo', '', NULL, NULL, '2023-03-20 02:16:36'),
(5, 20231987, 'Neil Arthur', 'Almadin', 'Pornela', 'Jr.', 9158493256, 'Sta.Cruz, Laguna', '2023-03-20', 'akosineilmabait@yahoo.com', 'Intern', '', 'Antipolo', 'kahit ano', NULL, NULL, '2023-03-20 02:18:12'),
(7, 202319862, 'Richard', 'Almadin', 'Ramos', 'Sr.', 9158762834, 'kahit san', '2023-03-20', 'akosirichardmabait@yahoo.com', 'Intern', '', 'Antipolo', 'taga gawa ng bold', NULL, NULL, '2023-03-20 02:28:53'),
(8, 20231988, 'Jireh Geleo', 'Almadin', 'Ramos', '', 9760435424, 'kahit san din', '2023-03-20', 'akosijirehmabait@yahoocom', 'Intern', '', 'Antipolo', 'taga bold', NULL, NULL, '2023-03-20 02:29:29'),
(13, 202319863, 'Nestor', 'Alcala', 'Rondilla', '', 9760435424, 'Antipolo City', '2023-03-20', 'nestorrondilla@gmail.com', 'Hermano Mayor', '', 'Antipolo', 'sample', NULL, NULL, '2023-03-20 02:45:19'),
(15, 202319864, 'Ness', 'Bitong', 'Rondilla', '', 9760435424, 'Antipolo City', '2023-03-20', 'nessbrondilla@gmail.com', 'President', 'Director', 'Antipolo', 'Basta', NULL, NULL, '2023-03-20 05:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `emp_status`
--

CREATE TABLE `emp_status` (
  `stat_no` int(59) NOT NULL,
  `emp_stat` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `account_no` bigint(59) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202300004;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `account_id` bigint(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
